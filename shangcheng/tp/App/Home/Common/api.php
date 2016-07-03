<?php
//封装请求方法
function request($url,$https=true,$method='get',$data=null){
  //1.初始化url
  $ch = curl_init($url);
  //2.设置相关的参数
  //字符串不直接输出,进行一个变量的存储
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //判断是否为https请求
  if($https === true){
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  }
  //判断是否为post请求
  if($method == 'post'){
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  }
  //3.发送请求
  $str = curl_exec($ch);
  //4.关闭连接
  curl_close($ch);
  //返回请求到的结果
  return $str;
}
//邮件发送测试方法
function sendMail($title,$content,$fromuser,$address){
  //引入发送类phpmailer.php
  require './PHPMailer/class.phpmailer.php';
  //实列化对象
  $mail             = new PHPMailer();
  /*服务器相关信息*/
  $mail->IsSMTP();                        //设置使用SMTP服务器发送
  $mail->SMTPAuth   = true;               //开启SMTP认证
  $mail->Host       = 'smtp.163.com';         //设置 SMTP 服务器,自己注册邮箱服务器地址
  $mail->Username   = '18710024462';      //发信人的邮箱用户名
  $mail->Password   = 'txt0502txt';          //发信人的邮箱密码 登录第三方登录密码 不是邮箱密码txt0502
  /*内容信息*/
  $mail->IsHTML(true);               //指定邮件内容格式为：html
  $mail->CharSet    ="UTF-8";          //编码
  $mail->From       = '18710024462@163.com';       //发件人完整的邮箱名称
  $mail->FromName   =$fromuser;      //发信人署名
  $mail->Subject    = $title;         //信的标题
  $mail->MsgHTML($content);           //发信主体内容
  // $mail->AddAttachment("fish.jpg");      //附件
  /*发送邮件*/
  $mail->AddAddress($address);        //收件人地址
  //使用send函数进行发送
  if($mail->Send()) {
      //发送成功返回真
     return ture;
  } else {
     echo  $mail->ErrorInfo;//如果发送失败，则返回错误提示
  }
}