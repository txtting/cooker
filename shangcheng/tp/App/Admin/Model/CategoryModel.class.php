<?php
namespace Admin\Model;
//引入类元素
use Think\Model;


class CategoryModel extends Model
{
     //入库验证 ，验证数据的合法性 静态方式验证 $_validate 
     protected $_validate = array(  
     		//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]), require 不能为空 必填
            array('cat_name','require','栏目不能为空'),
     	);
     protected $insertFields = array('cat_name','parent_id');
     public function getTree(){
     	 $arr = $this -> select();
     	 return $this -> _getTree($arr); 
     }
     public function _getTree($arr,$pid=0,$lev=0)
     {
     	static $list = array();
     	foreach ($arr as $k=> $v) {
     		if($v['parent_id'] == $pid){
     			$v['lev'] = $lev;
     			$list[]=$v;
     			$this -> _getTree($arr,$v['id'],$v['lev']+1);
     		}
     	}
     	return $list;
     }
     public function getChildId($id)
     {
     	$arr = $this ->select();
     	return $this -> _getChildId($arr,$id);
     }
     public function _getChildId($arr,$pid)
     {
     	static $ids = array();
     	foreach($arr as $v){
     		if($v['parent_id']==$pid){
     			$ids[] = $v['id'];
     			$this -> _getChildId($arr,$v['id']);
     		}
     	}
     	return $ids;
     }
}