<?php 
namespace Home\Model;

use Tink\Model;

class UserModel extends Model
{
	protected $_validate=array(
		array('username','require','用户名不能为空'),
		array('username','','用户名已存在',1,'unique'),
		array('username','/^[\w]{3-20}$/','用户名不合法',1,'regex'),
		array('password','require','密码不能为空'),
		array('password','6','密码长度必须位6位',1,'length'),
		array('rpassword','password','两次密码不一致',1,'confirm'),
		array('email','email','邮箱地址不合法'),
		array('email','','邮箱地址已存在',1,'unique'),
		array('question','require','问题不能为空'),
		array('answer','require','答案不能为空'),
	);
	public function login(){
		//接收传过来的用户名和密码
		$password = I('post.password');
		$username = I('post.username');
		$info = $this -> where("username = '$username'") -> find();
		if($info){
			if($info['active']==0){
				$this -> error = "用户未激活不能登录";
			}
			if($info['password'] !== md5($password)){
				$this -> error = "密码有误";
			    return false;
		    }else{
		    	$_SESSION['username'] = $info['username'];
		    	$_SESSION['user_id'] = $info['id'];
		    	return true;
		    }

		}else{
			$this -> error = "用户名有误";
			return false;
		}
		
	}
}

 ?> 