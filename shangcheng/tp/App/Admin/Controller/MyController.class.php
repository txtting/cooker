<?php 
namespace Admin\Controller;
use Think\Controller;
class MyController extends Controller{
	public function _initialize(){
              //获取当前操作的模块名称控制器名称方法名称
         $url = MODULE_NAME.'-'.CONTROLLER_NAME.'-'.ACTION_NAME;
        //如何验证是否登陆，
        $admin_id = $_SESSION['admin_id'];
        if($admin_id>0){
               //管理员已经登录
               if($admin_id==1){
                    return true;
               }
               if(CONTROLLER_NAME=='Index'){
                    return true;
               }
               //普通的管理员了
               $sql="select  concat(module_name,'-',controller_name,'-',action_name) url from   it_admin_role  a left join it_role_privilege b on a.role_id = b.role_id left join it_privilege c on b.priv_id=c.id  where   a.admin_id=9 having url='$url'";
               $info = M()->query($sql);
               if($info){
                    return true;
               }else{
                    $this->success('你无权操作',U('Index/index'));exit;
               }
        }else{
                //没有登录
                $this->success('必须要登录',U('Login/login'));
                exit;
        }
    }
}

 ?>