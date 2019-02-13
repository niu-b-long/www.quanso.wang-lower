	<div class="header">
        <div class="head">
            <div class="menu-button"><i class="iconfont icon-msnui-menu"></i></div>
            <a href="./index.php" class="mb-logo"><img src="./templates/index/def/static/picture/logo.png" alt=""></a>
            <a href="index.php?e=index.login" class="online-ex"><i class="fa fa-desktop"></i>登录</a>
        </div>
        <ul class="header-menu">
          <li class="active"><a href="./index.php">首页</a></li>
          <li><a href="index.php?e=index.affiliate">产品优势</a></li>
          <li><a href="index.php?e=index.article_list">公告中心</a></li>
          <li><a href="index.php?e=index.help">帮助中心</a></li>
          <li><a href="index.php?e=index.advertiser">关于我们</a></li>       
      	</ul>
    </div>
    <div class="top-area">
        <a href="" class="logo"><img src="./templates/index/def/static/picture/logo.png" alt="" width="172" height="43"></a>
        <ul class="menu">
           <li class="<?php echo $active==1?'active':'';?>"><a href="./index.php">首页</a></li>
           <li class="<?php echo $active==2?'active':'';?>"><a href="index.php?e=index.affiliate">产品优势</a></li>
           <li class="<?php echo $active==3?'active':'';?>"><a href="index.php?e=index.article_list">公告中心</a></li>
           <li class="<?php echo $active==4?'active':'';?>"><a href="index.php?e=index.help">帮助中心</a></li>
           <li class="<?php echo $active==5?'active':'';?>"><a href="index.php?e=index.advertiser">关于我们</a></li>
        </ul>
        <ul class="login-area">
            <li><a href="index.php?e=index.login" class="login">登录</a></li>
            <li><a href="index.php?e=index.register" class="register">注册</a></li>
        </ul>
    </div>