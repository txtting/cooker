<?php
namespace Admin\Model;
//引入类元素
use Think\Model;


class GoodsModel extends Model
{
    public function _before_insert(&$data,$options)
    {
        //定义一个入库之前的操作的方法
        $data['add_time'] = time();
        $goods_sn = I('post.goods_sn');
        //$info = $_FILES;
        //dump($info);die;
        if(empty($goods_sn)){
            $goods_sn = uniqid('sn_');
            //dump($goods_sn);die;
            $data['goods_sn'] = $goods_sn;
        }
        //判断是否有文件上传，
        if($_FILES['goods_img']['error']!=4){
                //调用上传的函数 
                load('@/test');
                $res = oneFileupload('goods_img','Goods',$arr=array(array(100,100),array(230,230)));
                //dump($res);die;
                if($res['status']==0){
                        //成功
                        $data['goods_ori']=$res['info'][0];
                        $data['goods_thumb']=$res['info'][1];
                        $data['goods_img']=$res['info'][2];
                }else{
                       $this->error=$res['info'];//把上传失败的错误提示赋给模型中的error变量。
                       return false;
                }
        }
    }
    public function _after_insert($data,$options)
    {
        load('@/test');
        $attrs = I('post.attr');
        //p($attrs);

        //p($data);
        //p($options);die;
        $attr = I('post.attr');
        $goods_id = $data['id'];
        foreach($attr as $k => $va){
            if(is_array($va)){
                foreach($va as $va1){
                    M('Goods_attr') ->add(array(
                            'goods_id' => $goods_id,
                            'goods_attr_id' => $k,
                            'attr_value'=>$va1,
                        ));
                }
            }else{
                M('Goods_attr') ->add(array(
                        'goods_id' => $goods_id,
                        'goods_attr_id' => $k,
                        'attr_value'=>$va,
                    ));
            }
        }
    }
    public function getGoods($type,$num){
        if($type=='best'||$type=='hot'||$type=='new'){
            return $this -> field('id,goods_name,goods_thumb,shop_price') ->where("is_".$type."=1 and is_sale=1 and is_delete=0")->order('id desc') ->select();
        }
        return ;
    }
}
