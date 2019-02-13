<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--去掉 begin -->
<!--    	<link rel="stylesheet" href="--><!--/style/style.css">-->
    <!--去掉 end -->
<title>充值记录-广告商后台</title>
    <link rel="stylesheet" href="/templates/main/ximg/home.css">
</head>

<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="main" class="wrap" style="min-width: 1240px; height: 1277px;">
<?php TPL::display('left');?>

<script src="/templates/main/ximg/homead.js"></script><link rel="stylesheet" href="/templates/main/ximg/modal.css" media="all" type="text/css">
<script type="text/javascript" src="/templates/main/ximg/jquery-1.7.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/templates/main/ximg/leanmodal.min.js"></script>
<link rel="stylesheet" href="/templates/main/ximg/pay1.css">

<div style="margin-left:50px;" id="content">

  <h2>充值记录</h2>
  <div class="con-con">
	<p style="height: 40px;line-height: 40px;font-size:15px;text-indent: 18px;border:1px solid #e5e6e7;background-color: #fff;color:#EC4747;margin-bottom:21px" ;=""><span>可用余额 (<?php echo sprintf("%.2f",$GLOBALS['userinfo']['money']) ?>元)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <div class="main_container clearfix" id="news-table">
      
      <div class="box-title"><span>充值记录</span></div>
      <div class="box-content">
        <div class="box-content">
      <table class="table">
        <thead>
          <tr>
            <th>日期</th>
            <th>订单</th>
            <th>金额</th>
            <th>网关</th>
            <th width="100">状态</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach((array)$paylog as $p) {
		  		
		  ?>
          <tr sid="<?php echo $p['addtime']?>">
            <td><?php echo $p['addtime']?></td>
            <td><?php echo $p["orderid"]?></td>
            <td>￥<?php echo $p["imoney"]?></td>
            <td><?php   foreach ($GLOBALS['c_onlinepay'] as $b=>$v){ 
								if($p['paytype'] == $v[0]) echo $b;
							}
						  ?></td>
            <td><span class="status">
              <?php
						  if ($p["status"] == '0') echo '<font color=red>充值没有完成</font>'; 	  
						  else if ($p["status"] == '1') echo '<font color=blue>充值失败</font>';
						  else if ($p["status"] == '2') echo " <font color=#ff6600>充值完成</font>";
						  else if ($p["status"] == '3') echo " <font color=blue>增加</font>";
						  else if ($p["status"] == '4') echo " <font color=red>扣除</font>";
						  ?>
            </span></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
        <div><?php  echo $page->echoPage ();?></div>
    </div>
        <div></div>
    </div>
  </div>
</div>
          <!--表单主体-->
          
                      
        
      </div>
    </div>
    <div></div>
  


 <div id="add_pay_form" style="display:none">
  <form action="/index.php?e=adv/onlinepay.create_order" name="pays" id="pays" method="post" onSubmit="return doPay()" target="_blank">
    <div class="txt-fld" style="height:60px">
      <label for="" class="tit">网关</label>
	     		<div style="float: left; margin-right:10px"> 
      <input type="radio" name="paytype" value="alipay" checked="">
	  <img src="/templates/main/ximg/alipay.gif" width="120" height="45"></div>
       
	  
	         </div>
    <div class="txt-fld" id="to_username">
      <label for="" class="tit">充值金额</label>
      <input id="imoney" name="imoney" type="text"> 充值金额不能小于 <font style="color:#FF0000">100</font> 元
    </div>
    
    <div class="btn-fld">
      <button type="submit">提交 »</button>
    </div>
  </form>
</div>

<script language="JavaScript" type="text/javascript">
$("#do_onlinepay").click(function(){
	box.form("#add_pay_form","在线充值",'ot');
});	

function doPay(){
	var m = $('#imoney').val();
	if(!m){
       alert("请填写充值金额");
	   return false;
     }
	 if(m<1){
        	alert("充值金额不能小于1元");
			return false;
     }
}

</script><div><object id="ClCache" click="sendMsg" host="" width="0" height="0"></object></div></body></html>