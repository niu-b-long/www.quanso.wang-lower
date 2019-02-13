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

//限制每天在什么时间段不更新

    $n = 'y';

//在礼拜一的哪个时间段不更新  优先级高于每天限制
/*if($weektime==1 && $nowtime<'06:00:00'){
    $w = 'n';
}else{
    $w = 'y';
}*/
//叠加周余额
if('00:30:00'<=$nowtime&&$nowtime<='00:50:59'){
    $ec = 'y';
}else{
    $ec = 'n';
}

//oa数据库连接
func();

//查询token配置
$tokenlist = newSelect("*","zyads_token","where status=1 and torder=1","execute");
//p($tokenlist);die;

$content = "访问成功：";
if( $n=='y' || $ec=='y'){
    foreach($tokenlist as $k=>$v){
        func();
        $tid = $v['torder'];
        $cpm = $v['cpm'];
        $username = $v['username'];
        $password = $v['password'];
        $token    = $v['token'];

        //获取coef配置
        $coeflist = newSelect("*","zyads_coef","where tid=$tid and status=1","execute");
        //p($coeflist);die;
        

        $rquota = '';
        $week[$k] = '';
        $loginService = new LoginService(LOGIN_URL, UUID);

        // preLogin
        if (!$loginService->preLogin($username, $token)) {
            exit();
        }

        // doLogin
        $ret = $loginService->doLogin($username, $password, $token);
        if ($ret) {
            $ucid = $ret['ucid'];
            $st = $ret['st'];
        }
        else {
            exit();
        }

        $reportService = new ReportService(API_URL, $username, $token, $ucid, $st);

        // get site list
        $ret = $reportService->getSiteList();
        
        for($i=0;$i<count($ret['body']['data'][0]['list']);$i++){
            $baiidList[$i] = $ret['body']['data'][0]['list'][$i]['site_id'];
        }
        if('00:30:00'<=$nowtime&&$nowtime<='00:55:59'){
            $cday = date('Ymd',strtotime('-1 day')); //获取昨天日期用于叠加昨天周余额
        }elseif('00:30:00'>$nowtime){
            $cday = date('Ymd',strtotime('-1 day')); //获取昨天日期用于叠加昨天周余额
        }else{
            $cday = date('Ymd',time()); //获取日期
        }

        $content .= "\r\n所属账号:".$username.",导入时间:".$cday.",执行时间:".date("Y-m-d H:i:s")."\r\n";
        $bdId = $ret['body']['data'][0]['list'];

        //获取数据
       if(!empty($coeflist)){
            foreach($coeflist as $mk=>$mv){
                $id = $mv['id'];
                $baid   = $mv['bid'];
                $uid    = $mv['uid'];
                $zoneid = $mv['zoneid'];
              	$adtplid = $mv['zonetype'];
                $plantype = $mv['type'];
                $tmoney  = $mv["tmoney"];
                //if(in_array($baid,$baiidList)){//判断配置数组是否在该账号下
                    if (count($bdId) > 0) {
                        // get report data of the first site
                        $ret = $reportService->getData(array(
                            'site_id' => $baid,                              //站点ID
                            'method' => 'trend/time/a',                      //趋势分析报告
                            'start_date' => $cday,                            //所查询数据的起始日期
                            'end_date' => $cday,                              //所查询数据的结束日期
                            'metrics' => 'pv_count,visitor_count,ip_count',  //所查询指标为PV和UV
                            'max_results' => 0,                              //返回所有条数
                            'gran' => 'day',                                 //按天粒度
                            'clientDevice' => 'mobile',                 //过滤pc端ip 
                        ));
                        $statList['site_id']       = $baid;                                             //百度ID
                        $statList[$mk]['rquota']   = $rquota = $ret['header']['rquota'];                //剩余访问次数
                        $statList[$mk]['timeSpan'] = $ret['body']['data'][0]['result']['timeSpan'][0];  //统计时间
                        $statList[$mk]['sum']      = !empty($ret['body']['data'][0]['result']['sum'][0])?$ret['body']['data'][0]['result']['sum'][0]:0;     //采集的数据  0->pv 1->uv 2->ip

                        //对应字段赋值
                        $numcoef = $mv['numcoef'];
                        $moneycoef = $mv['moneycoef'];

                        //跟据广告位类型确认结算数计算公式
                        switch($plantype){
                            case 'cpc':
                                $num = $statList[$mk]['sum'][2]*$numcoef;
                                $nummoney = $statList[$mk]['sum'][2];
                                break;
                            case 'cpv':
                                $num = $statList[$mk]['sum'][0]*$numcoef;
                                $nummoney = $statList[$mk]['sum'][0];
                                break;
                            default:
                                $num = $statList[$mk]['sum'][1]*$numcoef;
                                $nummoney = $statList[$mk]['sum'][2];
                        }
                        
                        
                        $deduction = 0;
                        $sumpay = $nummoney/$cpm*$moneycoef;
                        $sumadvpay = $nummoney/$cpm*$moneycoef;
                        $sumprofit = $sumadvpay - $sumpay;

                        func();
                        //导入数据库
                        $data_updata = array('num' => $num, 'deduction' => $deduction, 'sumpay' => $sumpay, 'sumprofit' => $sumprofit, 'sumadvpay' => $sumadvpay);
                        foreach( $data_updata as $vk=>$va ){
                            //$au[] = $vk . '=' . $vk . '+' . $va;
                            $au[] = $vk . '=' . $va;
                        }
                        
                        if($sumpay>0){
                             $sqlStats = "insert into zyads_stats set num='$num',day='$cday',uid='$uid',zoneid='$zoneid',plantype='$plantype',adtplid='$adtplid',zuid='0',deduction='$deduction',sumprofit='$sumprofit',sumpay='$sumpay',sumadvpay='$sumadvpay' ON DUPLICATE KEY UPDATE ".implode(', ', $au)."";
                            $resStats = mysql_query($sqlStats);
                            if($resStats){
                              $content .= "\t更新成功:";
                            }else{
                              $content .= "\t更新失败:";
                            }
                            $content .= "{uid:".$uid.",num:".$num.",money:".$sumpay.",pv:".$statList[$mk]['sum'][0].",uv:".$statList[$mk]['sum'][1].",ip:".$statList[$mk]['sum'][2].",coef:".$moneycoef."}";
                        }else{
                            $content .= "\t暂停更新:{uid:".$uid.",num:".$num.",money:".$sumpay.",explain:金额小于或等于0时不更新数据，保留上次数据,pv:".$statList[$mk]['sum'][0].",uv:".$statList[$mk]['sum'][1].",ip:".$statList[$mk]['sum'][2].",coef:".$moneycoef."}";
                        }
                        
                        //mysql_query("update cdn_coef set tmoney=$sumpay where id=$id");
                        //$tmoney = newSelect("bid,tid,tmoney","cdn_coef","where id=$id");

                        //每天01:10:00-01:30:59之间叠加周余额
                        $w_sql = "select weekmoney from zyads_users where uid=$uid";
                      	//$w_sql = "select daymoney from zyads_users where uid=$uid";
                        
                        $w_res = mysql_query($w_sql);
                        // var_dump($w_res);exit;
                        $w_row = mysql_fetch_assoc($w_res);
                      
                        //if($type=='cpc'){
                            $money = $w_row['weekmoney'] - $tmoney + $sumpay;
                        /*}elseif($type=='cpv'){
                            $money = $w_row['weekmoney'] - $w_row['rmoney'] + $sumpay;
                        }*/
                        if('00:30:00'<=$nowtime&&$nowtime<='00:55:59'){
                            $week[$k] = "y";
                            if($plantype=='cpc'){
                              //echo 1;
                                $wu_sql = "update zyads_users set daymoney=$sumpay where uid=$uid and groupid=8";
                            }elseif($plantype=='cpv'){
                              echo 2;
                                $wu_sql = "update zyads_users set daymoney=$sumpay where uid=$uid and groupid=8";
                            }
                            $ttmoney = 0;
                        }
                      //else{
                            //$week[$k] = "n";
                            //if($plantype=='cpc'){
                               // $wu_sql = "update zyads_users set weekmoney=$money where uid=$uid";
                           // }elseif($plantype=='cpv'){
                               // $wu_sql = "update zyads_users set weekmoney=$money where uid=$uid";
                           // }
                           //$ttmoney = $sumpay;
                        }
                       
                        $wu_res = mysql_query($wu_sql);

                        func();
                        $uptmonty = "update zyads_coef set tmoney=$ttmoney where id=$id";
                        mysql_query($uptmonty);

                        if($week[$k]=='y'){
                            if($wu_res){
                                $content .= "\t周余额累加成功ID:{uid:".$uid.",weekmoney:".$money."}\r\n";
                            }else{
                                $content .= "\t周余额累加失败ID:{uid:".$uid.",weekmoney:".$money."}\r\n";
                            }

                        }else{
                            $content .= "\t周余额在每天00:35更新\r\n";
                        }

                        
                    
                /*}else{
                    $content .= "\t不在该账号下的ID:{uid:".$uid.",baid:".$baid."}\r\n";
                }*/

            }
        }
        $content .= "\t剩余访问次数:".$rquota."\r\n";
        
        // doLogout
        $loginService->doLogout($username, $token, $ucid, $st);
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
    $path .=  date("m-d").".txt";
    //打开文件
    $myfile = fopen($path, "a") or die("Unable to open file!");
    file_put_contents($path,"\r\n".$content,FILE_APPEND);
    //关闭文件流
    fclose($myfile);
    //执行成功调用开头做的p函数
    p("执行成功：日志请查看".dirname(__FILE__).'/'.$path);
}else{
    $content = "操作失败:不在规定时间内;时间限制:每周星期一00-06点&&每天两点以前都不执行;\r\n=========================================================================================================\r\n";
    $path = 'history/';
    if( !file_exists($path) ){
        mkdir($path,true);//创建文件
    }
    $path .=date("Y")."/";
    //判断有无文件
    if( !file_exists($path) ){
        mkdir($path,true);//创建文件
    }
    $path .=date("m")."/";
    if( !file_exists($path) ){
        mkdir($path,true);
    }
    $path .=  date("m-d").".txt";
    $myfile = fopen($path, "a") or die("Unable to open file!");
    file_put_contents($path,"\r\n".$content,FILE_APPEND);
    fclose($myfile);
    echo $content;
    
}

?>