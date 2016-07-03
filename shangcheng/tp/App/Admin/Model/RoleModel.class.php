<?php 
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model{
	protected $_validate =array(
			array('role_name','require','角色名不能为空'),
		);
	protected $insertFields=array('role_name');
	protected function _after_insert($data,$options){
		$priv_ids = I('post.priv_id');
		$role_id =$data['id'];
		foreach($priv_ids as $k => $v){
			M('Role_privilege')->add(array(
				'role_id' => $role_id,
				'priv_id' => $v,
			));
		}
	}
	protected function _after_delete($data,$options){
		$role_id = $options['where']['id'];
		M('RolePrivilege') -> where("role_id = $role_id") -> delete();

	}
}

 ?>