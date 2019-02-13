<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UU传媒-更好的移动广告联盟平台-CPA|CPC|CPM</title>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./templates/index/def/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="./templates/index/def/static/css/iconfont.css">
    <link rel="shortcut icon" href="/html/v2016/7cx_v2018/bitbug_favicon.ico" />
    <link rel="stylesheet" href="./templates/index/def/static/css/mobliemenu.css">
    <link rel="stylesheet" href="./templates/index/def/static/css/all.css">
	<script src="./templates/index/def/static/js/jquery-1.12.4.min.js"></script>
	<script src="./templates/index/def/static/js/tether.min.js"></script>
	<script src="./templates/index/def/static/js/bootstrap.min.js"></script>
	<script src="./templates/index/def/static/js/jqthumb.min.js"></script>
	<script src="./templates/index/def/static/js/mobliemenu.js"></script>
	<script src="./templates/index/def/static/js/gverify.js"></script>
	<script src="./templates/index/def/static/js/all.js"></script>
</head>
<body class="login-page">
    <div class="logo">
        <a href="/"><img src="" alt=""></a>
    </div>
    <!--logo-->
    <div class="con">
        <div class="top">
            <h5>用户登录</h5>
			<form id="form_login" action="<?php echo url("index.postlogin")?>" method="post">
            <div class="check">
                <div class="input">
                    <div class="list">
                        <p>用户名</p>
                        <input type="text" name="username" placeholder="请输入用户名" />
                    </div>
                    <div class="list">
                        <p>密码</p>
                        <input type="password" name="password" id="type_password_id" placeholder="请输入密码" />
                        <i class="pbt" id="pbt_password"></i>
                        
                    </div>
                    <div class="list code">
						<p>验证码</p>
						<input type="text" name="checkcode" id="auth_code" placeholder="请输入验证码" />
						<div id="v_container" class="yzm">
                        <img id="jauth_code" src="index.php?e=index.codeimage" title="如果不显示请刷新" onclick="this.src='index.php?e=index.codeimage&rand='+Math.random();" />
                        </div>
					</div>
                    <input type="submit" class="log jbtn_login" value="登录" />
					<p class="tip">如有账户疑问请联系客服专员</p>
				</div>
            </div>
			</form>
        </div>
        <div class="bottom">
            <p>还没注册帐号？<a href="index.php?e=index.register">立即注册</a></p>
        </div>
    </div>
    <!--con-->
     <p class="copy">&copy;2019 uu2o.com 版权所有 服务热线： </p>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
<!-- <script type="text/javascript" src="./templates/index/def/static/js/mobile_user.js"></script> -->
<script type="text/javascript">
// MobileUser.event_login();
$('#pbt_password').click(function(){
	var _cla = $('#pbt_password').attr('class');
	if(_cla=='pbt'){
		$('#pbt_password').attr('class','pbt-o');
		$('#type_password_id').attr('type','text');
		}else{
			$('#pbt_password').attr('class','pbt');
			$('#type_password_id').attr('type','password');
			}
})
</script>
</body>
</html>