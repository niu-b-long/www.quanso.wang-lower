<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>登入-广告后台</title>
<meta content="telephone=no,email=no" name="format-detection">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/login.css">
<script src="<?php echo SRC_TPL_DIR?>/images/jquery-1.7.min.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/layer.js" type="text/javascript"></script><link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/images/layer.css" id="layuicss-layer">
</head>
<body>
<!-- Notice e -->
<div class="j-admin">
    <div class="j-adminLogin j-login fzzzsy">
		<form id="form1" name="form1" method="post" action="/index.php?e=index.postlogin" onSubmit="return doLogin()">
            <h3 class="j-loginTitle">
								登入
							</h3>
            <div class="j-loginInput j-loginUser">
                <i></i>
                <input type="text" placeholder="請輸入用戶名" class="username notext login_mc" id="username" name="username" value="">
            </div>
            <div class="j-loginInput j-loginPswd">
                <i></i>
                <input type="password" placeholder="請輸入密碼" class="password login_mc" id="password" name="password" value="">
            </div>
			            <div class="j-loginBtn">
				<input type="submit" value="立即登入" class="j-loginSubmit" id="btn_username" onClick="_czc.push([&quot;_trackEvent&quot;, &quot;登录按钮&quot;,&quot;登录页&quot;]);">
            </div>
            <div class="j-loginOther txt_c">
                <a href="http://www.juxiaoht.com/" class="j-loginBackHome">返回首頁</a> &nbsp;
          </div>
        </form>
    </div>
    <div class="j-adminCopyRight">
        <!-- <a href="/"><img class="j-adminCopyRight-logo" src="/templates/index/def/images/logo.png"></a> -->
        <p class="j-adminCopyRight-txt">&nbsp; </p>
      <p style="text-align:center;" class="j-adminCopyRight-txt">Copyright @ 2018 . All Rights Reserved</p>
		


        <p class="j-adminCopyRight-txt"></p>

  </div>
</div>
<script>
 function doLogin () {
	 var username = $.trim($("#username").val());
     if (username == "") {
		layer.msg('用戶名不能為空', {icon: 2});
        return false;
     }
	 var password = $.trim($("#password").val());
     if (password == "") {
		layer.msg('密碼不能為空', {icon: 2});
        return false;
     }
	  
} 
</script> 

</body></html>