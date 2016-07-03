<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$goodsmodel = D('Admin/Goods');
    	$newdata = $goodsmodel -> getGoods('new',3);
    	$hotdata = $goodsmodel -> getGoods('hot',3);
    	$bestdata = $goodsmodel -> getGoods('best',3);
    	$this -> assign(array(
    			'newdata'=>$newdata,
    			'hotdata'=>$hotdata,
    			'bestdata'=>$bestdata,
    		));
    	$catemodel = M('Category');
    	$catedata = $catemodel -> select();
    	$this -> assign('catedata',$catedata);
        $this -> display();
    }
    public function category(){
    	$cat_id = $_GET['id']+0;
    	if($cat_id==0){
    		header("location:/index.php");
    	}
    	$catemodel = D('Admin/Category');
    	$ids = $catemodel -> getChildId($cat_id);
    	$ids[] = $cat_id;
    	$goodsmodel = M('Goods');
    	$ids = implode(',', $ids);
    	$goodsdata = $goodsmodel -> field('id,cat_id,goods_name,goods_thumb,shop_price') -> where("cat_id in ($ids)") ->select();
    	$this -> assign('goodsdata',$goodsdata);
    	$catedata = $catemodel -> select();
    	$this -> assign('catedata',$catedata);
        $this -> display();
    }
    public function detail(){
        $this -> display();
    }
}