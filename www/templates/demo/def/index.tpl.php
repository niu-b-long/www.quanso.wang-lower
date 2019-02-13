<!DOCTYPE html>
<html lang="zh-CN" class="fp-enabled" style="overflow: hidden; height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>首页-<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link rel="stylesheet" type="text/css" href="/images/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="/images/style.css">

</head>

<body class="fp-viewing-page1" style="overflow: hidden; height: 100%;">

<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="dowebok" class="fullpage-wrapper" style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px);">

	<div class="section section1 active fp-section" data-anchor="page1" style="height: 612px;">
		<div class="bg"><img src="/images/section1.jpg" alt=""></div>
        <div class="bg12"></div>
        <div class="bg13">
             
             <div class="banner">
                <!--<div class="banner-btn">
                    <a href="javascript:;" class="prevBtn"><i></i></a>
                    <a href="javascript:;" class="nextBtn"><i></i></a>
                </div>-->
                <ul class="banner-img" style="width: 1224px; left: -996.592px;">
                    <li><a href="javascript:void(0)"><img src="/images/1.jpg"></a></li>
                    <li><a href="javascript:void(0)"><img src="/images/2.jpg"></a></li>
                    <li><a href="javascript:void(0)"><img src="/images/3.jpg"></a></li>
                    <li><a href="javascript:void(0)"><img src="/images/4.jpg"></a></li>
                    <li><a href="javascript:void(0)"><img src="/images/5.jpg"></a></li>
                    <li><a href="javascript:void(0)"><img src="/images/6.jpg"></a></li>
                </ul>
                <ul class="banner-circle" style="margin-left: -39px;"><li class="" href="#"><a></a></li><li class=""><a href="javascript:void(0)"></a></li><li class=""><a href="javascript:void(0)"></a></li><li class=""><a href="javascript:void(0)"></a></li><li class=""><a href="javascript:void(0)"></a></li><li class="selected"><a href="javascript:void(0)"></a></li></ul>
            </div>
        
        </div>
        <div class="hgroup">
          <h1><a href="javascript:void(0)"></a></h1>
          <p class="p11"><a href="http://passport.adhudong.com/#/login" target="_blank"></a></p>
        </div>
	</div>

	<div class="section section2 fp-section" data-anchor="page2" style="height: 612px;">
        <div class="bg"><img src="/images/section2.jpg" alt=""></div>
        <div class="bg21"></div>
        <div class="bg22"></div>
        <div class="bg23"></div>
    </div>

	
    <div class="section section3 fp-section" data-anchor="page3" style="height: 612px;">
      <div class="bg" style=" background:#1278c7;"></div>
      <h3>合作客户</h3>
      <div class="bg31"></div>
      <div class="bg32"></div>
      <div class="bg33"></div>
      <div class="bg34"></div>
      <div class="bg35"></div>
      <div class="bg36"></div>
      <h4>合作媒体</h4>
      <div class="bg37"></div>
      <div class="bg38"></div>
      <div class="bg39"></div>
      <div class="bg3a"></div>
      <div class="bg3b"></div>
      <div class="bg3c"></div>
    </div>
    
    
    <div class="section section4 fp-section" data-anchor="page4" style="height: 612px;">
      <div class="bg"></div>
      <div class="bg41"></div>
      <div class="bg42"></div>
    </div>
	

<?php TPL::display('footer1');?>
</body></html>