<?php 
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends MyController
{
	public function add(){
		if(IS_POST){
			$goodsmodel = D('Goods');
			if($goodsmodel -> create()){
				if($goodsmodel -> add()){
					$this -> success('添加成功',U('lst'));exit;
				}
			}
			//获取模板里的错误提示
			//模板中的getError()方法是输出模型中error的属性的内容
			$error = $goodsmodel ->getError();
			if(empty($error)){
				$error = "添加失败";
			}else{
				$this -> error($error);
			}
		}
		$catemodel = D('Category');
		$catedata = $catemodel -> getTree();
		//dump($catedata);die;
		$typemodel = D('Type');
		$typedata = $typemodel -> select();
		$this -> assign('catedata',$catedata);
		$this -> assign('typedata',$typedata);
		$this -> display();
	}
	public function showattr(){
		$type_id = $_GET['type_id'];
		$attrmodel = D('Attribute');
		$attrdata = $attrmodel -> where("type_id = $type_id") ->select();
		$this -> assign('attrdata',$attrdata);
		$this -> display();
	}
	public function lst(){
        $goodsmodel = D('Goods');
        $goodsdata =  $goodsmodel->field("id,goods_name,goods_sn,shop_price,is_best,is_sale,is_new,is_hot")->select();
        $this->assign('goodsdata',$goodsdata);
        $this->display();
    }
    //完成ajax切换的一个方法
    public function ajaxToggle(){
        //接收传递的参数
        $id = $_GET['id'];
        $value = $_GET['value'];
        $field=$_GET['field'];
        $goodsmodel = D('Goods');
        //返回受影响的行数。
        echo  $goodsmodel->where("id=$id")->setField('is_'.$field,$value);
    }
    public function product(){
    	$goods_id = $_GET['id']+0;//a it_goods_attr b it_attribute
    	//dump($goods_id);
    	if(IS_POST){
    		$goods_id = I('post.goods_id');
    		//dump($goods_id);die;
    		$attr = I('post.attr');
    		$goods_number = I('post.goods_number');
    		$kc = 0;
    		foreach ($goods_number as $k => $v) {
				$ids = array();
				foreach ($attr as $k1 => $v1) {
				  $ids[] = $v1[$k];
				}
				M('Product') -> add(array(
					'goods_id' => $goods_id,
					'goods_number' => $v,
					'goods_attr_id' => implode(',',$ids),
				));
				$kc=$kc+$v;
    		}
    		dump($kc);
    		//设置goods表里的商品总数
    		//设置it_goods表里面的总的库存，
           
            M('Goods') ->where("id= $goods_id") -> setField('goods_number',$kc);
    	}
    	$sql ="select a.*,b.attr_name from it_goods_attr a left join it_attribute b on a.goods_attr_id = b.id where a.goods_id =$goods_id and a.goods_attr_id in(select goods_attr_id from it_goods_attr where goods_id =$goods_id group by goods_attr_id having count(*)>1)";
    	$data = M() -> query($sql);
    	//dump($data);die;
    	$list = array();
    	foreach($data as $k => $v){
    		$list[$v['goods_attr_id']][] = $v;
    	}
    	//load('@/test');
    	//p($list);die;
    	$this -> assign('list',$list);
    	$this -> display();
    }
    
}
 ?>
