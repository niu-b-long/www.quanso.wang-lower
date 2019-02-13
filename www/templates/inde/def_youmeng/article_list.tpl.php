<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>公告中心-<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
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
<div class="banner_460 page_news">   
  </div>
  <!--page_banner end-->
  
  <div class="container">
    <div class="bread_crumbs">
      <div class="w1200">
        <p>公告中心</p>
      </div>
    </div><!--liucheng end-->
    
    <div class="block news_container clearfix">
      <div class="w1200 news_list">
        <ul>
        <?php 
		foreach((array)$article AS $a) {
		?>
                          <li class="news_row">
          	<div class="data_box">
          		<h2><?php echo date("d",strtotime($a['addtime']));?></h2>
                <p>20<?php echo date("y-m",strtotime($a['addtime']));?></p>
            </div>
            <a href="<?php echo url("index.article?id=".$a["articleid"])?>" target="_blank">
            <p class="tit"><i class="iconfont"></i><?php echo $a["title"];
			?></p>
            
            </a>
          </li>
               <?php }?>           
                 </ul>
        <div class="pages">
           <?php  echo $page->echoPage ();?>        </div>
      </div>
    </div>

</div>
<?php TPL::display('footer');?>
</body></html>