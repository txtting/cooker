<?php 
function oneFileupload($filename,$dir,$arr=array())
{
	    //dump($data);die;
        //完成文件的上传
        //取出配置文件里面定义的参数，
        $root_path = C('UPLOAD_ROOT_PATH');
        $maxfilesize = C('UOLOAD_MAX_FILESIZE');
        $allow_ext = C('UPLOAD_ALLOW_EXT');
        //dump($allow_ext);die;
        //取出php.ini文件里面的选项值
        $maxfile = (int)ini_get('upload_max_filesize');
        $allow_max_filesize = min($maxfilesize,$maxfile);
         //dump($maxfile);die;
        $upload = new \Think\Upload();// 实例化上传类   
        $upload->maxSize   =     $allow_max_filesize*1024*1024 ;// 设置附件上传大小    
        $upload->exts      =     $allow_ext;// 设置附件上传类型    
        $upload->rootPath  =      $root_path; // 文件上传保存的根路径
        $upload->savePath  =      $filename.'/'; // 设置附件上传目录,相对于根路径的。
        $info   =   $upload->upload();
        //dump($info);die;
        if($info) {
            // 上传成功   
            //制作缩略图
            $image = new \Think\Image(); 
            $goods_ori = $info['goods_img']['savepath'].$info['goods_img']['savename'];
            $img[] = $goods_ori;
            //判断是否要生成缩略图，
            if(!empty($arr)){
               //需要生成缩略图 
               //遍历$arr数组
               $image = new \Think\Image();
               foreach($arr as $k=>$v){         
                           $image->open($root_path.$goods_ori);
                           //定义缩略图文件的名称
                           $a = $info[$filename]['savepath'].'thumb'.$k.$info[$filename]['savename'];
                           $image->thumb($v[0],$v[1])->save($root_path.$a);
                           //把缩略图的名称放到$img里面。
                           $img[]=$a;
               }
	       }
		       return array(
		            'status'=>0,
		            'info'=>$img
	       		);
        }else{
            //上传失败
            return array(
                 'status'=>1,
                 'info'=>$upload->getError()
            );
        }
}
function p($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
?>