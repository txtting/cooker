<?php 
namespace Admin\Controller;
class RoleController extends MyController{
	public function add(){
		if(IS_POST){
			$rolemodel = D('Role');
			if($rolemodel -> create(I('post.'),1)){
				if($rolemodel -> add()){
					$this -> success('添加成功',U('lst'));exit;
				}else{
					$this -> error('添加失败');
				}
			}else{
				$this -> error($rolemodel -> getError());
			}
		}
		$privmodel = D('Privilege');
		$privdata =$privmodel -> getTree();
		//dump($privdata);die;
		$this -> assign('privdata',$privdata);
		$this -> display();
	}
	public function lst(){
		$rolemodel = D('Role');
		//$roledata =$rolemodel -> select();
		$roledata =$rolemodel ->field('a.*,group_concat(c.priv_name)as privnames')->join('a left join it_role_privilege as b on a.id=b.role_id left join it_privilege as c on b.priv_id=c.id')->group('a.id')-> select();
		//dump($roledata);die;
		$this -> assign('roledata',$roledata);
		$this -> display();
	}
	public function delete(){
		$role_id = (int)I('get.id');
		$info = M('AdminRole') -> where("role_id = $role_id") ->find();
		if($info){
			$this -> error('该角色有管理员不能被删除');
		}
		$rolemodel = D('Role');
		if($rolemodel -> delete($role_id)!==false){
			$this -> success('删除成功',U('lst'));exit;
		}else{
			$this -> error('删除失败',U('lst'));
		}
	}
}

 ?>