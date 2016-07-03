<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
    	if(IS_POST){
    		$usermodel = D('User');
    		if($usermodel -> login()){
    			$this -> success('登录成功',U('Index/index'),3);exit;
    		}else{
    			$this -> error('登录失败');
    		}
    	}
        $this -> display();
    }
    public function register(){
    	if(IS_POST){
    		$usermodel = D('User');
    		if($usermodel -> create()){
    			$key = substr(uniqid(),-6);
    			$usermodel->validate = $key;
    			$usermodel -> password =md5(I('post.password'));
    			$usermodel -> reg_time = time();
    			if($usermodel -> add()){
    				//注册成功发送邮件
    				$address = I('post.email');
    				$fromuser = "中国京西商城用户服务部";       
                    $title = I('post.username')."恭喜你注册成功快去激活吧!";
                    $content = "欢迎来到京西商城,".I('post.username')."您好请<a href='http://www.ds.com/Home-User-active-email-$address-key-$key'>点击</a>激活您的账号";
                    load('@/api');
                    $send = sendMail($title,$content,$fromuser,$address);
                    //dump($send);die;
                    if($send){
                        return $this -> success('发送激活邮件成功@~@,根据提示进行激活',U('login'),3);
                    }else{
                        return $this -> error('发送激活邮激活失败,请重新发送:(',U('active'),3);
                    }  
                }else{
                    return $this -> error('注册失败:(',U('register'),3);
                }
    		}else{
    			$this -> error($usermodel -> getError());
    		}
    	}
        $this -> display();
    }
    public function active(){
    	//接收传递的内容
    	$email = I('get.email');
    	$key = I('get.key');
    	$usermodel = D('User');
    	//查出信息判断是否存在
    	$info = $usermodel -> where("email = $email") -> find();
    	if(!info){
    		$this -> error('链接有误');
    	}
    	//判断传过来的和数据库里的一致吗？
    	if($key!=$info['validate']){
    		$this -> error('链接有误');
    	}
    	//判断链接是否超时
    	if(time()-$info['reg_time'] > 24*3600){
    		$this -> error('激活链接超时');
    	}
    	//判断用户是否激活
    	if($info['active'] === 1){
    		$this -> error("用户已经激活");
    	}
    	$usermodel -> where("email = $email") -> setField('active',1);
    	$this-> success('激活成功',U('User/login'));
    }
    //点击找回密码后跳到此方法 输入要找的用户名 提交到下一个方法中 fingPasswordTwo；
    public function findPasswordOne(){
    	$this -> display();
    }
    public function findPasswordTwo(){
    	if(IS_POST){
    		$username = I('post.username');
	    	$usermodel = D('User');
	    	$info = $usermodel ->field("") -> where("username = $username") -> find();
    	}
    	
    	$this -> display();
    }
}