<?php 
namespace Admin\Controller;
use Think\Controller;
class TypeController extends MyController{
	public function add()
	{   
		if(IS_POST){
			$typemodel = D('Type');
			//dump($typemodel);die;
			//过滤非法字段
			if(isset($typemodel -> id)){
				unset($typemodel -> id);
			}
			//create() 在创建数据对象的同时完成自动验证 (失败返回false)、获取数据源、验证数据源的合法性、检查字段映射、判断数据状态
			if($typemodel -> create(I('post.'),1)){
				if($typemodel -> add()){
					$this -> success('添加成功',U('lst'));
				    exit;
				}else{
					$this -> error('添加失败');
			    }
			}else{
				$this -> error($typemodel ->getError());
			}
	    }
		//验证失败输出验证信息
		$this -> display();
	}
	public function lst()
	{
		$typemodel = D('Type');
		$typedata = $typemodel ->select();
		$this -> assign('typedata',$typedata);
		$this -> display();
	}
}

 ?>