<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>首页-<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/common.css" rel="stylesheet">
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/style_2016.css" rel="stylesheet">
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/iconfont.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/slideshow.js"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/bigfoucs.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/image-switch.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/sliderlite.js" type="text/javascript"></script>
 <script language="JavaScript" type="text/javascript">
function $i(obj){
   return document.all ? document.all[obj] : document.getElementById(obj);
}
function doLogin(){
   var username = $i("username").value;
   var password = $i("password").value;
   if(username.length=='0'){
         alert('请输入你用户名');
         $i("username").focus()
         return false;
    }
    if(password.length=='0'){
         alert('请输入你的密码!');
         $i("password").focus()
         return false;
    }
   try{
      var checkcode = $i("checkcode").value;
      if(checkcode ==''){
          alert('验证码不能为空');
          $i("checkcode").focus()
          return false;
      }
   }catch(e){}  
}
</script> 

</head>
<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div class="slideshow">
    <div class="login_box">
      <div class="login_bd">
        <form id="form1" name="form1" method="post" action="/index.php?e=index.postlogin" onSubmit="return doLogin()">

          <div class="tit">用户登录</div>
          
          <div class="form_row">
            <input class="ipt" type="text" name="username" placeholder="账号" id="username">
          </div>
          <div class="form_row">
            <input class="ipt" type="password" name="password" placeholder="密码" id="password">
          </div>
          <div class="form_row">
            <input class="ipt w150" type="text" name="checkcode" placeholder="验证码" id="checkcode">
            <span class="yzm"><img src="<?php echo url("index.codeimage")?>" align="absmiddle"  title= "看不清?请点击刷新验证码"  onclick="this.src='<?php echo url("index.codeimage?rand=")?>'+Math.random();"></span>
          </div><!--
         
          --><div class="form_btn">
		  <input class="btn_login jbtn_login" type="submit" value="登 录"  id="btn_username" />
          </div>
          <div class="form_reg_row">
            <p><a href="/index.php?e=index.register" class="right">立即注册 &gt;</a>还没有账号？</p>
          </div>
        </form>
      </div>
      <div class="logined_bd" style="display:none;">
        <div class="tit">
          您好，欢迎选择最值得信赖的移动广告平台--行者移动！
        </div>
        <div class="logined_txt">
          <p>您当前使用的账号：</p>
          <p class="id">yourname@domain.com</p>
        </div>
        <div class="btn_box">
          <a href="http://www.xinzhe.cc/" class="Btn Btnpurple">进入管理后台</a>
        </div>
      </div>
      <div class="login_bg"></div>
    </div><!--login_box end-->
    
    <div id="focusBar">
      <a href="javascript:void(0)" class="arrL" onClick="prePage()"></a>
      <a href="javascript:void(0)" class="arrR" onClick="nextPage()"></a>
      <ul class="mypng">
        <li id="focusIndex1" style="background: url(<?php echo SRC_TPL_DIR?>/images/bg1.jpg) center center no-repeat; display: block; width: 1349px;"><!--此处需判断li的display:block-->
          <div class="focusL"><img src="<?php echo SRC_TPL_DIR?>/images/bg1-1.png" width="1920" height="640"></div>
          <div class="zhezhao"></div>
          <div class="focusR"></div>
        </li>
        <li id="focusIndex2" style="background: url(<?php echo SRC_TPL_DIR?>/images/bg2.jpg) center center no-repeat; display: none; width: 1349px;">
          <div class="focusL"><img src="<?php echo SRC_TPL_DIR?>/images/bg2-1.png" width="1920" height="640"></div>
          <div class="zhezhao"></div>
          <div class="focusR"></div>
        </li>
        <li id="focusIndex3" style="background: url(<?php echo SRC_TPL_DIR?>/images/bg3.jpg) center center no-repeat; display: none; width: 1349px;">
          <div class="focusL"><img src="<?php echo SRC_TPL_DIR?>/images/bg3-1.png" width="1920" height="640"></div>
          <div class="zhezhao"></div>
          <div class="focusR"></div>
        </li>
        <li id="focusIndex4" style="background: url(<?php echo SRC_TPL_DIR?>/images/bg4.jpg) center center no-repeat; display: none; width: 1349px;">
          <div class="focusL"><img src="<?php echo SRC_TPL_DIR?>/images/bg4-1.png" width="1920" height="640"></div>
          <div class="zhezhao"></div>
          <div class="focusR"></div>
        </li>
      </ul>
    </div>
  </div>
  <!--slideshow end-->
  
  <div class="container">
    <div class="block ymys w1200">
      <h1><span class="txtGreen">行者</span>的优势，我们能做什么？<p class="sm_txt">Platform advantage</p></h1>
      <div class="advantage_flip_box clearfix">
        <div class="flip_col4">
          <img src="<?php echo SRC_TPL_DIR?>/images/flip01.jpg">
          <p class="tit">覆盖全国海量用户</p>
          <p class="txt">行者移动依靠对海量媒体的聚合与梳理，为广告主提供有效的移动广告受众高度覆盖，最少投入带来最好的投放效果。</p>
        </div>
        <div class="flip_col4">
          <img src="<?php echo SRC_TPL_DIR?>/images/flip02.jpg">
          <p class="tit">多重广告解决方案</p>
          <p class="txt">行者移动拥有丰富的广告展现，极大地提高广告投放推广成效。为广告制定最合适的广告展现形式，以吸引目标受众进行交互，从而达到最佳的推广效果。</p>
        </div>
        <div class="flip_col4">
          <img src="<?php echo SRC_TPL_DIR?>/images/flip03.jpg">
          <p class="tit">广告资源丰富</p>
          <p class="txt">行者移动与众多知名广告商进行合作，拥有丰富的高质量广告资源，保证广告填充率，提高网站主收益。</p>
        </div>
        <div class="flip_col4">
          <img src="<?php echo SRC_TPL_DIR?>/images/flip04.jpg">
          <p class="tit">精准定位到用户行为投放</p>
          <p class="txt">行者移动拥有独特的先进数据挖掘技术，精准挖掘用户群，实现传播效果最大化，满足广告主的精确投放需求。</p>
        </div>
      </div>
    </div>
    <div class="block gg_style">
      <div class="w1200">
        <h1>丰富的<span class="txtGreen">广告样式</span><p class="sm_txt">Advertising Type</p></h1>
        <div class="mobile_gg_style">
          <div class="gg_style_l">
            <p class="color_1 current jgg_style" data-content="gg01">固定位</p>
            <p class="color_2 jgg_style" data-content="gg02">横幅</p>
            <p class="color_1 jgg_style" style="display:none;" data-content="gg03">网摘</p>
          </div>
          <div class="gg_style_r">
            <p class="color_2 jgg_style" style="display:none;" data-content="gg04">全屏</p>
            <p class="color_1 jgg_style" data-content="gg05">插屏</p>
            <p class="color_2 jgg_style" data-content="gg06">信息流</p>
          </div>
          <div class="mobile_gg_style_bg"></div>
          <div class="style_show gg01">
            <img src="<?php echo SRC_TPL_DIR?>/images/gg_style_01.jpg" title="固定位广告">
          </div>
          <div class="style_show_txt gg01_txt">
            <div class="arrow-down"></div>
            <p class="tit">固定位广告</p>
            <p>固定位广告以固定形式显示在网页相应的广告位，使用图片、图文等形式来表现广告创意，吸引用户眼球，是一种主流的广告形式。极大的提高了用户在浏览网页时对广告的关注度，大大提升广告效果。</p>
          </div>
          <!--固定位广告 结束-->
          <div class="style_show gg02" style="display:none;">
            <img src="<?php echo SRC_TPL_DIR?>/images/gg_style_02.jpg" title="漂浮广告">
          </div>
          <div class="style_show_txt gg02_txt" style="display:none;">
            <div class="arrow-down"></div>
            <p class="tit">横幅广告</p>
            <p>横幅广告也称Banner广告，将精彩的广告创意以图片的形式展现在手机页面底部，广告尺寸与网页高度融合，创意展现效果好，大大提高用户关注度。</p>
          </div>
          <!--漂浮广告 结束--><!--
          <div class="style_show gg03" style="display:none;">
            <img src="../../images/v2016/gg_style_03.jpg" title="网摘广告" />
          </div>
          <div class="style_show_txt gg03_txt" style="display:none;">
            <div class="arrow-down"></div>
            <p class="tit">网摘广告</p>
            <p>网摘广告是固定位广告的另一种展现形式，通常是以多个图片加文字的形式综合展现于网页的固定位置，形式新颖，创意丰富，内容精彩，极大提升了用户的点击率。</p>
          </div>-->
          <!--网摘广告 结束-->
          <!--<div class="style_show gg04" style="display:none;">
            <img src="../../images/v2016/gg_style_04.jpg" title="全屏广告" />
          </div>
          <div class="style_show_txt gg04_txt" style="display:none;">
            <div class="arrow-up"></div>
            <p class="tit">全屏广告</p>
            <p>全屏广告是以图片的形式在应用操作暂停或结束时全屏弹出广告创意，动态酷炫的全屏展现广告，达到视觉震撼效果，吸引用户眼球，提高用户点击效果。</p>
          </div>-->
          <!--全屏广告 结束-->
          <div class="style_show gg05" style="display:none;">
            <img src="<?php echo SRC_TPL_DIR?>/images/gg_style_05.jpg" title="插屏广告">
          </div>
          <div class="style_show_txt gg05_txt" style="display:none;">
            <div class="arrow-down"></div>
            <p class="tit">插屏广告</p>
            <p>插屏广告是以图片的形式在应用操作暂停或结束时半屏弹出广告创意，能充分利用用户等待的时间，提升广告效果。</p>
          </div>
          <!--插屏广告 结束-->
          <div class="style_show gg06" style="display:none;">
            <img src="<?php echo SRC_TPL_DIR?>/images/gg_style_06.jpg" title="信息流广告">
          </div>
          <div class="style_show_txt gg06_txt" style="display:none;">
            <div class="arrow-up"></div>
            <p class="tit">信息流广告</p>
            <p>信息流广告是指一种依据社交群体属性对用户喜好和特点进行智能推广的广告形式。其主要展现形式是穿插在信息之中。</p>
          </div>
          <!--信息流广告 结束-->
        </div>
      </div>
    </div><!--adstyle end-->
    <div class="block w1200 ggxw">
      <div class="new_about_box clearfix">
        <div class="news">
          <h1><a href="/index.php?e=index.article_list" class="right more">更多公告&gt;&gt;</a><span class="txtGreen">行者</span>公告<p class="sm_txt">announcement</p></h1>
          <div class="news_bd">
            <ul class="news_list">
             <?php 
		//如只要公告"1",多个用“,”分开 效果"1,2,3",后面为要显示条数
		$article = dr ( 'index/article.get_type_article' ,"1",3);
		foreach((array)$article AS $a) {
		?>
                          <li>
               <div class="data_box">
                  <h2><?php echo date("d",strtotime($a['addtime']));?></h2>
                  <p>20<?php echo date("y-m",strtotime($a['addtime']));?></p>
                </div>
                <a href="<?php echo url("index.article?id=".$a["articleid"])?>">
                  <p class="tit"><?php echo $a["title"];
			?></p>
                  
                </a>
              </li>
                   <?php }?>         
                          </ul>
          </div>
        </div>
        <div class="about">
          <h1>关于<span class="txtGreen">行者</span><p class="sm_txt">About xingzhe</p></h1>
          <div class="desc_txt">
            <img src="<?php echo SRC_TPL_DIR?>/images/img_about.jpg">
            <p class="desc">行者移动属国内广告联盟出色领航先锋者--宣传易传媒旗下的移动端广告投放平台。以致力于帮助广告主在移动端平台下，实现广告产品的精准营销和品牌的有效推广为其服务宗旨，并以宣传易传媒所具有的平台整合技术及强大... <a href="/index.php?e=index.contact">[详情]</a></p>
          </div>
        </div>
      </div>
    </div><!--about end-->
    <div class="block w1200">
      <h1><span class="txtGreen">行者</span>合作伙伴<p class="sm_txt">Our Partners</p></h1>
      <div class="client_box">
        <ul class="client_list">
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-01.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-02.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-03.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-04.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-05.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-06.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-07.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-08.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-09.jpg" class="trans_effect"></li>
          <li><img src="<?php echo SRC_TPL_DIR?>/images/client-10.jpg" class="trans_effect"></li>
        </ul>
      </div>
    </div>
    <script type="text/Javascript" src="<?php echo SRC_TPL_DIR?>/images/mobile_user.js"></script>
	<script type="text/Javascript">
	MobileUser.event_login();
	</script>
<?php TPL::display('footer');?>
</body></html>