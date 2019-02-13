<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/images/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="/images/style.css">
<link href="/images/style_login.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/images/bootstrap.min.css">
<title>会员登陆—<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
</head>

<body>


    


<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div class="subbanner subbanner_register">
    <div class="wrapper">
        <div class="sub_obj_a cd-headline letters scale">
           
        </div>
        <div class="sub_obj_b cd-headline letters scale">
            
        </div>
    </div>
</div>


<div class="about-bg">
<div class="container col-lg-4 col-lg-offset-4 denglu ">
  <br>
    <div id="login" class="panel panel-primary">
    <form id="form1" name="form1" method="post" action="<?php echo url("demo.postlogin")?>" onSubmit="return doLogin()">
        <div class="panel-body">
          <img src="/images/foot-logo02.png">
          <div class="form-group col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 shuru">
                <label><span>●&nbsp;</span>用户名:</label>
                <div style="color: red; font-size: 12px; " id="txt_username_tip"></div>
                <input type="text" class="form-control one" name="username" id="username" placeholder="请输入用户名" maxlength="20">
                
 <!--               <div class="alert alert-warning">用户名不能为空！</div>-->
                <label><span>●&nbsp;</span>密  &nbsp;&nbsp;&nbsp;码:</label>
                <div style="color: red; font-size: 12px;" id="txt_password_tip"></div>
                <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码" maxlength="20">

                <label><span>●&nbsp;</span>验证码:</label>
                <div style="color: red; font-size: 12px;"></div>
                <input type="text" class="form-control" name="checkcode" id="password" placeholder="请输入验证码" maxlength="20">
                <div>
                <img style=" position:static;" id="jauth_code" src="index.php?e=index.codeimage" title="如果不显示请刷新" onclick="this.src='index.php?e=index.codeimage&rand='+Math.random();" />
                <span>看不清，点击刷新</span>
                </div>
                
                
            </div>
            <div class="form-group col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 text-right jizhumima">
                        <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="remember" value="1" id="remember"> 记住密码
                                    </label>
                              </div>
                        </div>
            </div>
            
            
            
            <input type="submit" value="登录" class="btn btn-primary text-center col-xs-6 col-xs-offset-3 one" id="dl-btn">
            <p class="col-xs-8 col-xs-offset-2 text-center"><a href="/index.php?e=index.register" class="ljzc">立即注册</a></p>
            
               
        </div></form>
    </div>
</div>  



</div>

<script>
 function doLogin() {

   var username = $.trim($("#username").val());

     if (username == "") {
        $("#txt_username_tip").html('用户名不能为空').show();  
        return false;
     }
   $("#txt_username_tip").hide(); 
   var password = $.trim($("#password").val());
     if (password == "") {
        $("#txt_password_tip").html('密码不能为空').show(); 
        return false;
     }
   $("#txt_password_tip").hide(); 

   
} 
</script> 



         
 <?php TPL::display('footer');?>
 </body></html>