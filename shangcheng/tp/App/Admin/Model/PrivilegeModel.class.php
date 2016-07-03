<?php
namespace Admin\Model;
//引入类元素
use Think\Model;
class PrivilegeModel extends Model{
	protected  $_validate=array(
			array('priv_name','require','权限名不能为空'),
			array('parent_id','number','上级权限不合法'),
		);
	public function getTree(){
		$arr = $this -> select();
		return $this -> _getTree($arr);
	}
	protected function _getTree($arr,$pid=0,$lev=0){
		static $list = array();
		foreach ($arr as $k => $v) {
			if($v['parent_id']==$pid){
				$v['lev'] = $lev;
				$list[] = $v;
				$this -> _getTree($arr,$v['id'],$lev+1);
			}
		}
		return $list;
	}
}