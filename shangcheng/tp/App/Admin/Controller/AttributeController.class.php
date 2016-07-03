<?php 
namespace Admin\Controller;
use Think\Controller;
class AttributeController extends MyController
{
	//添加商品
	public function add()
	{
	    if(IS_POST){
            //完成属性的添加
            $attrmodel = D('Attribute');
            if($attrmodel->create(I('post.'),1)){
                if($attrmodel->add()){
                	$type_id = I('post.type_id');
                    $this->success('添加成功',U('lst',array('type_id'=>$type_id)));
                     exit;
                }else{
                    $this->error('添加失败');
                }
            }else{
                   $this->error($attrmodel->getError());
            }
	    }
	    $typemodel = D('Type');
	    $typedata = $typemodel->select();
	    $this->assign('typedata',$typedata);
	    $this->display();
	}
	public function lst()
	{
		$typemodel = D('Type');
		$typedata = $typemodel -> select();
		$this -> assign('typedata',$typedata);
		$attrmodel = D('Attribute');
		$type_id = (int)$_GET['type_id'];
		//var_dump($type_id);
		if($type_id == 0){
			$where = 1;
			$count = $attrmodel->count();// 查询满足要求的总记录数
		}else{
			$where = "type_id = $type_id";
			$count = $attrmodel-> where($where)->count();// 查询满足要求的总记录数
		}
		$this -> assign('type_id',$type_id);
		$Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$Page-> setConfig('prev','上一页');
		$Page-> setConfig('next','下一页');
		$Page-> setConfig('first','首页');
		$Page-> setConfig('last','尾页');
		$Page-> lastSuffix = false; // 最后一页是否显示总页数
		$show = $Page->show();// 分页显示输出
		$attrdata = $attrmodel -> field('a.*,b.type_name') -> join("a left join it_type as b on a.type_id=b.id") ->where($where) ->limit($Page->firstRow,$Page->listRows) -> select();
		$this -> assign('attrdata',$attrdata);
		$this -> assign('show',$show);
		$this -> display();
	}
}
 ?>
