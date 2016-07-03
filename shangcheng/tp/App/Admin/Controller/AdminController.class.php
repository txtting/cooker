<?php 
namespace Admin\Controller;
use Think\Controller;
class AdminController extends MyController{
	public function add(){
		if(IS_POST){
			//dump(I('post.'));
			$adminmodel = D('Admin');
			if($adminmodel->create()){
				if($adminmodel ->validate($adminmodel->_add_validate)->add()){
					$this -> success('添加成功',U('lst'));exit;
				}else{
					$this -> error('添加失败');
				}
			}else{
				$this->error($adminmodel->getError());
			}
		}
		$rolemodel = D('Role');
		$roledata = $rolemodel -> select();
		$this -> assign('roledata',$roledata);
		$this -> display();
	}
	public function lst(){
		$adminmodel = D('Admin');
		$admindata = $adminmodel -> field('a.*,group_concat(c.role_name) as rolenames') -> join('a left join it_admin_role as b on a.id=b.admin_id left join it_role as c on b.role_id = c.id') ->group('a.id') -> where('a.id!=1')-> select();
		//dump($admindata);die;
		$this -> assign('admindata',$admindata);
		$this -> display();
	}
	public function delete(){
		 $adminmodel = D('Admin');
		 $id = $_GET['id']+0;
		 if($id==1){
		 	$this->error('参数错误');
		 }
		 if($adminmodel->delete($id)){
		 	$this->success('删除成功',U('lst'));exit;
		 }else{
		 	 $this->error('删除失败');
		 }
	}
	public function update(){
             //取出管理员的基本信息
                $adminmodel = D('Admin');
                if(IS_POST){
                       if($adminmodel->create()){
                           //判断是否修改密码，
                           $pwd = I('post.password');
                           if(!empty($pwd)){
                                    //重设密码
                                   $salt = substr(uniqid(),-6);
                                   $pwd = I('post.password');//接收明文密码
                                   $adminmodel->password = md5(md5($pwd).$salt);
                                   $adminmodel->salt = $salt;
                           }else{
                                    //使用原来的密码,把数据对象里面的password去掉，表示不修改密码值。
                                    unset($adminmodel->password);
                           }
                            if($adminmodel->save()!==false){
                                    $this->success('修改成功',U('lst'));exit;
                            }else{
                                     $this->error('修改失败');
                            }
                       }else{
                            $this->error($adminmodel->getError());
                       }
                }
                $id = $_GET['id']+0;
                //判断提交的id合法性
                if($id==1){
                        $this->error('参数错误');
                }
               
                $info = $adminmodel->find($id);
                //查找不到管理员
                if(!$info){
                        $this->error('参数错误');
                }
                $this->assign('info',$info);
                //取出角色的数据
                $rolemodel = D('Role');
                $roledata = $rolemodel->select();
                $this->assign('roledata',$roledata);
                $this->display();
        }
}

 ?>