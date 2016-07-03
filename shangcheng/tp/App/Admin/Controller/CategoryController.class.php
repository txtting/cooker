<?php 
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends MyController
{
	public function add()
	{
		$catmodel = D('Category');
		if(IS_POST){
			if($catmodel -> create(I('post.'),1)){
				if($catmodel -> add()){
					$this -> success('添加成功',U('lst'));exit;
				}else{
					$this -> error('添加失败');
				}
			}else{
				$this -> error($catmodel -> getError());
			};
		}
		$catedata = $catmodel -> getTree();
		$this -> assign('catedata',$catedata);
		$this -> display();
	}
	public function lst()
	{
		$catmodel = D('Category');
		$catedata = $catmodel -> getTree();
		$this -> assign('catedata',$catedata);
		$this -> display();
	}
	public function del()
	{
		$id = I('get.id');
		$catmodel = D('Category');
		$info = $catmodel -> where("parent_id=$id") ->select();
		if($info){
			$this -> error('该栏目有子栏目不能删除');
		}
		if($catmodel -> delete($id)!==false){
			$this -> success('删除成功',U('lst'));exit;
		}else{
			$this -> error('删除失败');
		}
	}
	public function update()
	{
		$catmodel = D('Category');
		if(IS_POST){
			if($catmodel -> create()){
				$id =I('post.id');
				$parent_id =I('post.parent_id');
				$ids = $catmodel -> getChildId($id);
				$ids[]=$id;
				if(in_array($parent_id,$ids)){
					$this -> error('该栏目不能选择子栏目和自己当父栏目');
				}
				if($catmodel -> save()!==false){
					$this -> success('修改成功',U('lst'));exit;
				}else{
					$this -> error('修改失败');
				}
			}else{
				$this -> error($catmodel -> getError());
			}
		}
		$id = (int)I('get.id');
		$info = $catmodel -> find($id);
		//dump($info);die;
		$this -> assign('info',$info);
		//找到需要更新的 id 值和子id值
		$ids = $catmodel -> getChildId($id);
		$ids[]=$id;
		//dump($ids);die;
		$this -> assign('ids',$ids);
        $catedata = $catmodel -> getTree();
        //dump($catedata);die;
        $this -> assign('catedata',$catedata);
		$this -> display();
	}
}
 ?>
