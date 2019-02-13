<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <title>平台概况-广告商后台</title>

    <link rel="stylesheet" href="/templates/main/ximg/home.css">
  
</head>

<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="main" class="wrap" style="min-width: 1240px; height: 1210px;">
<?php TPL::display('left');?>

<script src="/templates/main/ximg/homead.js"></script><link rel="stylesheet" href="/templates/main/ximg/modal.css" media="all" type="text/css">
<script type="text/javascript" src="/templates/main/ximg/jquery-1.7.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/templates/main/ximg/leanmodal.min.js"></script>
<script src="/templates/main/ximg/jquery.min.js"></script>
<script src="/templates/main/ximg/wwwhighcharts.js"></script>
<link rel="stylesheet" href="/templates/main/ximg/indexTotalggs.css">
<script type="text/javascript" src="/templates/main/ximg/calendar.js"></script>
<link rel="stylesheet" href="/templates/main/ximg/calendar.css" media="all" type="text/css">
<div style="margin-left:50px;" id="content">
  <h2>平台概况</h2>
  <div class="con-con">
    <ul class="gain">
      <li>
        <div>¥</div>
        <div>
          <p>账户余额</p>
          <b><?php echo sprintf("%.2f",$GLOBALS['userinfo']['money']) ?></b><span>元</span>
        </div>
      </li>
      <li>
        <div>¥</div>
        <div>
          <p>今日支付</p>
          <b><?php echo sprintf("%.2f",$get_day_sunpay["sumadvpay"]) ?>
</b><span>元</span>
        </div>
      </li>
      <li>
        <div>¥</div>
        <div>
          <p>昨日支付</p>
          <b><?php echo sprintf("%.2f",$get_yesterday_sunpay["sumadvpay"]) ?></b><span>元</span>
        </div>
      </li>
      <li>
        <div>¥</div>
        <div>
          <p>本月支付</p>
          <b><?php echo sprintf("%.2f",$get_month_sunpay["sumadvpay"]) ?></b><span>元</span>
        </div>
      </li>
    </ul>
	  <div class="box">
    <div class="box-title">
    </div>
    <div class="box-content">
      <table class="table table-hover table-nomargin">

        <tbody>
                  </tbody>
      </table>
    </div>
    <div class="condition">
      <div class="title">
        <span>整体情况</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
      </div>
      <script type="text/javascript">
function setIframeHeight(iframe) {
if (iframe) {
var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
if (iframeWin.document.body) {
iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
}
}
};

window.onload = function () {
setIframeHeight(document.getElementById('external-frame'));
};
</script>
<iframe src="/index.php?e=adv/report.get_list&type" frameborder="0" scrolling="no" width="100%" id="external-frame" onload="setIframeHeight(this)"></iframe>
      
</div></div></div></div></div>

</body></html>