<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $article["title"]?></title>
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
TPL::display('header');
?>
<div class="banner_460 page_news">   
  </div>
  <!--page_banner end-->
  
  <div class="container">
    <div class="bread_crumbs">
      <div class="w1200">
        <p><?php  foreach ($GLOBALS['article_type'] AS $key=>$val){ if($article['type'] == $key  ){echo $val;} }?></p>
      </div>
    </div><!--liucheng end-->
    
    <div class="block about_container clearfix">
      <div class="w1200 news_content">
        <div class="news_tit">
          <h2 class="tit"><?php echo $article["title"]?></h2>
          <p class="time">发布日期：<?php echo $article["addtime"]?></p>
        </div>
        <div class="news_content_bd">
        	<?php echo $article["content"]?>     </div>
        
      </div>
    </div>


</div>
<?php TPL::display('footer');?>
</body></html>