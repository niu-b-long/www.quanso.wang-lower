<?php
/**
 * Demo of Tongji API
 * set your information such as USERNAME, PASSWORD ... before use
 */

//*
//preLogin,doLogin URL
define('LOGIN_URL', 'https://api.baidu.com/sem/common/HolmesLoginService');

//Tongji API URL
define('API_URL', 'https://api.baidu.com/json/tongji/v1/ReportService');

//USERNAME
// define('USERNAME', 'xiaoshan725');

// //PASSWORD
// define('PASSWORD', 'Ai996951595');

// //TOKEN
// define('TOKEN', 'db4f3216b67f697859efe368c3c86c3d');

//UUID, used to identify your device, for instance: MAC address
define('UUID', '114.114.115.115');

//ACCOUNT_TYPE
define('ACCOUNT_TYPE', 1); //ZhanZhang:1,FengChao:2,Union:3,Columbus:4
//*/

//设置时区
ini_set('date.timezone','Asia/Chongqing');


//数据库链接
function func(){
	//require_once '../../config/my.php';
  	$qmg_db = array (
		'host' => '127.0.0.1',
		'port' => '3306',
		'user' => 'www_quanso_wang',
		'password' => 'L6SihndTix3nXCsz',
		'name' => 'www_quanso_wang',
		'charset' => 'utf8',
		'sql_mode' => '1',
		'slaves' => false 
	);
	$dbhost = $qmg_db['host'];
	$dbport = $qmg_db['port'];
	$dbuser = $qmg_db['user'];
	$dbpwd  = $qmg_db['password'];
	$dbname = $qmg_db['name'];
	$oalink = mysql_connect($dbhost,$dbuser,$dbpwd) or die('no host'.mysql_error());
	mysql_select_db($dbname) or die('no database');
	mysql_query('set names utf8');
}
//查询
function newSelect($find,$from,$where='',$while='not',$cut='not'){
	$sql = "select $find from $from $where";
	//echo $sql;die;
	$res = mysql_query($sql);
	if($while=='not'){
		$row = mysql_fetch_assoc($res);
		if($cut=='cut'){
			$row['sumpay'] = substr($row['sumpay'],0,-2);
			$row['sumadvpay'] = substr($row['sumadvpay'],0,-2);
			$row['sumprofit'] = substr($row['sumprofit'],0,-2);
		}
		$arr = $row;
		
	}else if($while=='execute'){
		$arr = array();
		while($row = mysql_fetch_assoc($res)){
			if(!in_array($row,$arr)){
				if($cut=='cut'){
					$row['sumpay'] = substr($row['sumpay'],0,-2);
					$row['sumadvpay'] = substr($row['sumadvpay'],0,-2);
					$row['sumprofit'] = substr($row['sumprofit'],0,-2);
				}
				$arr[] = $row;
			}
		}
		
	}
	
	//return array('arr'=>$arr,'sql'=>$sql);
	return $arr;
	//return $sql;
}
