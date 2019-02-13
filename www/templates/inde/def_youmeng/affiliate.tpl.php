<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>网站主-<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/common.css" rel="stylesheet">
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/style_2016.css" rel="stylesheet">
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/iconfont.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/slideshow.js"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/bigfoucs.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/image-switch.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/sliderlite.js" type="text/javascript"></script>
</head>
<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div class="banner_640 page_web">  
  </div>
  <!--page_banner end-->
  
  <div class="container">
    <div class="liucheng">
      <div class="w1200">
        <img src="<?php echo SRC_TPL_DIR?>/images/liucheng_web.png">
      </div>
    </div><!--流程 结束-->
    
    <div class="block web_desc">
      <div class="w1200 clearfix">
        <div class="col-2">
          <div class="ico i01"></div>
          <div class="desc_box">
            <p class="tit">丰富的广告资源</p>
            <p class="txt">行者移动与海量优质广告主合作，并严格把控广告质量，确保协调一致的用户体验。众多的广告主及高质量的广告形式，保证了广告的点击率，提升站长的收入。</p>
          </div>
        </div>
        <div class="col-2">
          <div class="ico i02"></div>
          <div class="desc_box">
            <p class="tit">详细的数据统计</p>
            <p class="txt">行者移动的智能统计分析系统，为站长提供透明、实时的流量数据和收入数据，站长可随时监测。诚信为本，做站长最值得信赖的移动广告联盟。</p>
          </div>
        </div>
        <div class="col-2">
          <div class="ico i03"></div>
          <div class="desc_box">
            <p class="tit">强大的技术力量</p>
            <p class="txt">行者移动拥有业内领先的技术团队，对广告平台系统拥有独特的技术优势。强大的技术力量保证了系统的正常运行，同时能给站长的日常技术问题提供专业的解决方案。</p>
          </div>
        </div>
        <div class="col-2">
          <div class="ico i04"></div>
          <div class="desc_box">
            <p class="tit">贴心周到的服务</p>
            <p class="txt">行者移动拥有专业的运营客服团队，对新提交的网站进行快速审核。对于站长广告费用提现审核及时响应快速到帐。同时，如果站长有什么建议或意见我们也会及时跟进反馈。</p>
          </div>
        </div>
      </div>
    </div><!--优势介绍 结束-->
    
    <div class="block web_block">
      <div class="w1200">
        <a href="/index.php?e=index.register" class="btn">我有媒介平台，立即注册赚钱</a>
      </div>
    </div>
    
    <?php TPL::display('footer');?>
</body></html>