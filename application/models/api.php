<?php
 
$data ='{"text":"哈哈"}';
$callback = $_GET['callback'];
echo $callback.'('.$data.')';
exit;
 
?>