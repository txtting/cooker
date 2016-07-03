<?php
namespace Admin\Model;
//引入类元素
use Think\Model;
class AdminModel extends Model
{     
	//动态验证
	protected  $_login_validate=array(  
			array('admin_name','require','管理员姓名不能为空'), 
			array('password','require','密码不能为空'),
			array('captchaOk','require','验证码不能为空'),
			array('captchaOk','check_verify','验证码不正确',1,'callback'),
		);
    protected $_add_validate=array(
            array('admin_name','require','管理员名称不能为空'),
            array('admin_name','','管理员已经存在',1,'unique'),
            array('password','6,12','密码长度要在6到12位之间',1,'length',1),
            array('password','6,12','密码长度要在6到12位之间',2,'length',2),
            array('rpassword','password','两次输入的密码不一致',2,'confirm'),
            array('role_id[]','number','要选择角色')
        );
	protected  function check_verify($code, $id = '')
	{    
		$verify = new \Think\Verify();    
		return $verify->check($code, $id);
	}
	public function login()
    {
        $admin_name = I('post.admin_name');
        $password = I('post.password');
        //dump($admin_name); 
        $adminmodel = D('Admin');
        $info = $adminmodel -> where("admin_name = '$admin_name'") ->find();
    //dump($info);
        
        if(!empty($info)){
             //dump(md5(md5('admin').$info['salt']));die;
            if($info['password'] == md5(md5($password).$info['salt'])){
                $_SESSION['admin_name'] = $admin_name;
                $_SESSION['admin_id'] = $info['id'];
                //dump($_SESSION['admin_name']);die;
                return true;
            }
        }
        $this -> error= '用户名或密码错误';
        return false;
    }
    
    protected function _before_insert(&$data,$options)
    {
       $salt = substr(uniqid(),-6);
       $password = md5(md5($data['password']).$salt);
       $data['password'] = $password;
       $data['salt'] = $salt;
    }
    protected function _after_insert($data,$options)
    {
        $admin_id = $data['id'];
        $role_ids = I('post.role_id');
        foreach($role_ids as $ro){
            M('Admin_role') -> add(array(
                'admin_id' => $admin_id,
                'role_id'  => $ro,
            ));
        }
    }
    protected function _after_update($data,$options){
        $admin_id = $options['where']['id'];
        //删除旧的数据
        M('AdminRole') -> where("admin_id = $admin_id") -> delete();
        //重新插入数据
        $role_id = I('post.role_id');
        M('AdminRole') -> add(array(
            'admin_id' => $admin_id,
            'role_id' => $role_id,
        ));
    }
    protected function _after_delete($data,$options){
        $admin_id = $options['where']['id'];
        //删除旧的数据
        M('AdminRole') -> where("admin_id = $admin_id") -> delete();
    }
    public function getButton(){
        $admin_id = $_SESSION['admin_id'];
        if($admin_id == 1){
            $sql = "select * from it_privilege where parent_id=0";
            $data = M("Privilege") -> query($sql);
           //dump($data);echo"<hr>";
            $list = array();
            foreach($data as $v){
                $v['child'] = M("Privilege") -> query("select * from it_privilege where parent_id=".$v['id']);
                $list[] = $v;
            }
        }else{

             $sql="select c.* from it_admin_role a left join it_role_privilege b on a.role_id=b.role_id left join it_privilege c on b.priv_id=c.id  where c.parent_id=0 and a.admin_id=$admin_id";
            $data = M() -> query($sql);
            $list = array();
            foreach($data as $v){
                $sql="select c.* from it_admin_role a left join it_role_privilege b on a.role_id=b.role_id left join it_privilege c on b.priv_id=c.id  where c.parent_id=".$v['id']." and a.admin_id=$admin_id";
                $v['child'] = M() -> query($sql);
                $list[] = $v;
            }
        }
        //dump($list);die;
       return $list;
    }
}