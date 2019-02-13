<?php
//该文件名为 sendemailPHPMail.php
/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/Exception.php';
require 'php/PHPMailer.php';
require 'php/SMTP.php'; */
include_once "class.phpmailer.php"; 
include_once "class.smtp.php"; 
//include_once "Exception.php";
//获取一个外部文件的内容 
	ini_set("max_execution_time", "0");
	$header_info=get_headers('https://j3.dthznc.com/fd/1010/s1027.js');
	if($header_info[0] != 'HTTP/1.1 200 OK'){
		$mail=new PHPMailer(); 
        $send_name="青芒果";
        $send_phone="123456789";
        $send_theme="？？？？？";
        $send_kind="这是啥";
        $mailcontent = "j3.dthznc.com中转域名出现错误，请通知管理员及时更换";//邮件内容
        ///
        //设置smtp参数 
        $mail->IsSMTP(); 
        $mail->SMTPAuth=true; 
        $mail->SMTPKeepAlive=true; 
        $mail->Host="ssl://smtp.163.com"; 
        $mail->Port=465; 
        //填写你的email账号和密码 
        $mail->Username="17691161338@163.com"; 
        $mail->Password="s654321";#注意这里要填写授权码就是我在上面网易邮箱开启SMTP中提到的，不能填邮箱登录的密码哦。 
        //设置发送方，最好不要伪造地址 
        $mail->From="17691161338@163.com"; 
        $mail->FromName="17691161338@163.com";//发送者用户名 
        $mail->Subject="域名更换提示";//邮件标题 
        $mail->AltBody=$mailcontent; //邮件内容
        $mail->WordWrap=50; // set word wrap 
        $mail->MsgHTML($mailcontent); 
        //设置回复地址 
        $mail->AddReplyTo("17691161338@163.com","青芒果"); 
        //设置邮件接收方的邮箱和姓名 
        $mail->AddAddress("1351944733@qq.com","qq");//接收者邮箱和用户名 
        //使用HTML格式发送邮件 
        $mail->IsHTML(true); 
        //通过Send方法发送邮件 
        //根据发送结果做相应处理 
        if(!$mail->Send()){ 
            //echo "Mailer Error:".$mail->ErrorInfo;
            echo "<meta charset=\"UTF-8\">";
            echo "<script language=\"JavaScript\">\r\n";
            echo " alert(\"对不起，邮件发送失败！！请充实\");\r\n";
            echo " history.back();\r\n";
            echo "</script>";
            exit;
            exit(); 
            }else{ 
                echo "成功1";
        }
      //再发一份
      $mail->AddAddress("996951595@qq.com","qq");//接收者邮箱和用户名 
      //使用HTML格式发送邮件
      $mail->IsHTML(true);
      $mail->Send();
      echo "成功2";
	}else{
      $time = date('Y年m月d日 H时i分s秒');
     $content = '数据更新成功，更新时间'.$time.'返回状态'.$header_info[0].'\r\n';
	  //写入操作日志
     
      $path ='dthznc/'.date("Y")."/";
      //判断有无文件
      if( !file_exists($path) ){
          mkdir($path,0777);//创建文件
      }
      $path .=date("m")."/";
      if( !file_exists($path) ){
          mkdir($path,0777);
      }
      $path .=  date("m-d").".txt";
      //打开文件
      $myfile = fopen($path, "a") or die("Unable to open file!");
      file_put_contents($path,"\r\n".$content,FILE_APPEND);
      //关闭文件流
      fclose($myfile);
	}

?>