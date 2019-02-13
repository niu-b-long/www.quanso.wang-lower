<?php

header('Content-type:text/json');
require_once('Config.inc.php');
require_once('LoginService.inc.php');
require_once('ReportService.inc.php');
//成功后输出日志文件函数
function p($var){
    echo "<xmp class='a-left'>";
    print_r($var);
    echo "</xmp>";
}

$nowtime = date('H:i:s',time());
$weektime = date('w'); //获取当前礼拜


//查询token配置
//p($tokenlist);die;
$n='y';
$content = "访问成功：";
if( $n=='y' || $ec=='y'){
        func();

        //获取coef配置
        $coeflist = newSelect("*","zyads_coef","","execute");

       
        $cday = date('Ymd', strtotime('last week')); //获取上周周一日期用于叠加上周余额
        $cdays = date('Ymd', strtotime('last week') + 518400); //获取上周周日日期用于叠加上周余额

        $content .= "\r\n所属账号:".$username.",导入时间:".$cday.",执行时间:".date("Y-m-d H:i:s")."\r\n";
        //$bdId = $ret['body']['data'][0]['list'];

        //获取数据
       if(!empty($coeflist)){
            foreach($coeflist as $mk=>$mv){
               $id = $mv['id'];
               $uid    = $mv['uid'];
                      //上周消耗
                              $pay_time = date('Ymd', strtotime('last week') + 86400);
                              $pay_times = date('Ymd', strtotime('last week') + 604800);
                              $pay_sql = "SELECT sum(money) money,uid,paytime FROM `zyads_paylog` where paytime >= $pay_time and paytime <=$pay_times and uid=$uid and(clearingtype='日结' or clearingtype='daymoney')";
                              $pay_res = mysql_query($pay_sql);
              				  $day_res = mysql_fetch_assoc($pay_res)['money'];
              
                      		  $stats_sql = "SELECT sum(sumpay) as money FROM `zyads_stats` WHERE day>=$cday and day <=$cdays and uid = $uid";
               				  $stats_res = mysql_query($stats_sql);
              				  $sumpay = mysql_fetch_assoc($stats_res)['money'];
              
                      		  $user_sql = "SELECT weekmoney FROM `zyads_users` WHERE uid=$uid";
               	 			  $user_res = mysql_query($user_sql);
             				  $weekmoney = mysql_fetch_assoc($user_res)['weekmoney'];
    
                              
                              $pay_week =$sumpay - $day_res + $weekmoney;
                              $wu_res = mysql_query("update zyads_users set weekmoney=$pay_week where uid=$uid and groupid=9"); 
              				   $content .= "账号：".$mv['tid']."ID:".$uid."上周钱数：".$pay_week."\r\n";   
                    }

            }

        
    }
    $content .= "=========================================================================================================\r\n";
    $path = 'history/';
    if( !file_exists($path) ){
        mkdir($path,0777);//创建文件
    }
    $path .=date("Y")."/";
    //判断有无文件
    if( !file_exists($path) ){
        mkdir($path,0777);//创建文件
    }
    $path .=date("m")."/";
    if( !file_exists($path) ){
        mkdir($path,0777);
    }
    $path .= date("m-d").".txt";
    //打开文件
    $myfile = fopen($path, "a") or die("Unable to open file!");
    file_put_contents($path,"\r\n".$content,FILE_APPEND);
    //关闭文件流
    fclose($myfile);
    //执行成功调用开头做的p函数
    p("执行成功：日志请查看".dirname(__FILE__).'/'.$path);

?>