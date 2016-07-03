<?php
namespace Admin\Model;
//引入类元素
use Think\Model;


class TypeModel extends Model
{
     //入库验证 ，验证数据的合法性 静态方式验证 $_validate 
     protected $_validate = array(  
     		//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]), require 不能为空 必填
            array('type_name','require','商品类型不能为空'),
            array('type_name','require','商品类型不能为空'),
     	);
      protected $insertFields = array('type_name');
}