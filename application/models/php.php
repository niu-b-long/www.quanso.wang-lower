<?php 
	$dbms='mysql';     //数据库类型
	$host='localhost'; //数据库主机名
	$dbName='www_quanso_wang';    //使用的数据库
	$user='www_quanso_wang';      //数据库连接用户名
	$pass='L6SihndTix3nXCsz';          //对应的密码
	$dsn="$dbms:host=$host;dbname=$dbName";


	try {
	    $pdo = new PDO($dsn, $user, $pass); //初始化一个PDO对象
	   // echo "连接成功<br/>";
	    /*你还可以进行一次搜索操作
	    foreach ($dbh->query('SELECT * from FOO') as $row) {
	        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
	    }
	    */
	    $dbh = null;
	} catch (PDOException $e) {
	    die ("Error!: " . $e->getMessage() . "<br/>");
	}
	$ip = $_SERVER['REMOTE_ADDR'];

	$sql = "insert into ip(ip) values(?)";
	//准备sql模板
	$stmt = $pdo->prepare($sql);
	// $name = 'smith';
	// $age = 52;
	//绑定参数
	$stmt->bindValue(1,$ip);
	// $stmt->bindValue(2,$age);
	//执行预处理语句
	$stmt->execute();
	$insert_id = $pdo->lastInsertId();
	if($insert_id)
	{
	    $data = "新增成功";
	}
	else
	{
	    $data = "新增失败";
	}
	//释放查询结果
	$stmt = null;
	//关闭连接
	$pdo = null;
	$sta = json_encode(array('name' => $insert_id));
	echo "callback({$sta})";
	//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
	// $db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

	// header("location:http://www.baidu.com");
//echo date('w');
	//echo(strtotime("2015-05-22"));
	// $a=4;
	// if(1==1) $a=5;

 ?>