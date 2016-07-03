<?php
namespace Admin\Model;
//引入类元素
use Think\Model;


class AttributeModel extends Model
{
     //入库验证 ，验证数据的合法性 静态方式验证 $_validate 
     protected $_validate = array(  
     		//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]), require 不能为空 必填
            array('attr_name','require','属性类型不能为空'),
            array('attr_type',array(0,1),'属性类型不合法',1,'in'),
            array('attr_input_type',array(0,1),'属性值输入方式不合法',1,'in'),
            array('type_id','isGt0','商品类型不合法',1,'callback'),
     	);
     protected function isGt0(){
     	$type_id = (int)I('post.type_id');
     	 if($type_id > 0){
     	 	return true;
     	 }
     	 	return false;
     	 
     	    
     }
     protected $insertFields = array('attr_name','attr_type','attr_input_type','type_id','attr_value');
}