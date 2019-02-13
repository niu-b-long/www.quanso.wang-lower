<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>个人资料</title>

    
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/affstyle.css">
  	<link rel="shortcut icon" href="./logo.ico" />
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min14ed.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/font-awesome.min93e3.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/animate.min.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/style.min862f.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/ad-skin/layer.css" id="layuicss-layer"><link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/ad-skin/style.css" id="layuicss-themeextendlayerextjs,skinmoonstylecss"></head>

<body class="fixed-sidebar full-height-layout gray-bg  pace-done" style="overflow:hidden"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div id="wrapper">
        <!--左侧导航开始-->
        <?php TPL::display('left');?>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>   
                      <div class="col-sm-5"><h2>会员中心</h2></div>
                      <?php if($GLOBALS ['C_ZYIIS']['recommend_status']=='1'){?>
  <div style="margin-top:20px;">会员发展链接：<?php echo $GLOBALS ['C_ZYIIS']['authorized_url'].WEB_URL.'track/c/?rid='.$GLOBALS ['userinfo']['uid'];?> <span style="color:#F00">成功发展：<?php echo dr ( 'main/account.get_sum_recommend', $GLOBALS ['userinfo']['uid'])?>个</span></div>
  <?php }?>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" target="target" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $GLOBALS ['service_qq'];?>&site=qq&menu=yes">
                                <i class="fa fa-commenting-o"></i>客 服
                            </a>
                        </li>
                       
<!--                         <li class="hidden-xs"> -->
<!--                             <a href="index_v1.html" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 购买</a> -->
<!--                         </li> -->
                         <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
          <div class="row content-tabs">
                
                
            
              <a href="<?php echo url("main/main.logout?id=".$GLOBALS ['userinfo']['uid'])?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
            <body class="gray-bg">

<div class="wrapper wrapper-content">
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/jquery-validation/additional-methods.js"></script>

<div id="main">
  <div class="alert alert-info" style="margin-top:10px;display:<?php if($_SESSION ['succ']){ echo "";}else {echo "none"  ;}?>"> 修改成功</div>
  <style type="text/css">
      .big { overflow:auto;}
      .left {
        float: left;
        width: 400px;
      }
      .right {
        width: 400px;
		margin-top:-300px;
		margin-left:650px;
      }
    </style>
  <div class="big">
  
    <div class="left"><form action="<?php echo url("affiliate/account.edit_post")?>" method="POST" class="form-horizontal editAccount" id="form_b" >
      <div class="box-content">
        <div class="box-title" style="margin-bottom: 40px;">
          <h3><i class="icon-new"></i>基本信息 <span style="font-size:14px; padding-left:30px; color:#08c; cursor:pointer" id="s_edit">修改</span></h3>
        </div>
        <input name="uid" id="uid"  type="hidden" value="<?php echo  $_SESSION['uid']?>" />
        <div class="control-group">
          <label for="textfield" class="control-label">用户名</label>
          <div class="controls"> <?php echo $u['username']?> </div>
        </div>
        <div class="control-group">
          <label for="textfield" class="control-label">密码</label>
          <div class="controls"> ******** <a href="javascript:;" id="s_editpass">修改密码</a>
            <div id="s_password">
              <p><span>原始密码</span>
                <input type="password" name="oldpassword" id="oldpassword">
              </p>
              <p><span>新密码</span>
                <input type="password" name="password" id="password">
              </p>
              <p><span>确认新密码</span>
                <input type="password" name="password_confirm" id="password_confirm">
              </p>
              <button type="button" class="btn btn-primary" style="margin-left:102px; margin-top:10px"> 提 交 </button>
            </div>
          </div>
        </div>
        <div class="control-group">
          <label  class="control-label">手机号码</label>
          <div class="controls">
            <input type="text" name="mobile" id="mobile" class="input-27 ed_input" value="<?php echo $u['mobile']?>">
            <span class="help-block"> </span> </div>
        </div>
        <div class="control-group">
          <label  class="control-label">QQ号码</label>
          <div class="controls">
            <input type="text" name="qq" id="qq" class="input-27 ed_input" value="<?php echo $u['qq']?>">
          </div>
        </div>
        <div class="control-group">
          <label  class="control-label">电子邮件</label>
          <div class="controls">
            <input type="text" name="email" id="email" class="input-27 ed_input" value="<?php echo $u['email']?>">
          </div></div></div>
    
    <div class="right"><div class="box-title">
          <h3><i class="icon-new"></i>财务信息</h3>
        </div>
        <div class="control-group">
          <label style="margin-top:-210px; margin-left:-80px;" for="textfield" class="control-label">收款银行</label>
          <div style="background-color: #fff;" class="controls">
            <?php foreach ($GLOBALS['c_bank'] as $b=>$v){ if(!$v[1]) continue;?>
            <?php if($u['bankname'] == $v[0]){echo $b;}?>
            &nbsp;
            <?php }?>
          </div>
        </div>
        <div class="control-group">
          <label style="margin-top:-160px; margin-left:-68px;" class="control-label">开户地分行</label>
          <div class="controls">
            <input type="text" name="bankbranch"  class="input-27 ed_input" value="<?php echo $u['bankbranch']?>">
          </div>
        </div>
        <div class="control-group">
          <label style="margin-top:-100px; margin-left:-84px;" class="control-label">银行账号</label>
          <div class="controls">
            <input type="text" name="bankaccount"  class="input-27 ed_input" value="<?php echo $u['bankaccount']?>">
          </div>
        </div>
        <div class="control-group">
          <label style="margin-top:-45px; margin-left:-88px;" class="control-label">收款人</label>
          <div class="controls">
            <input type="text" name="accountname"  class="input-27 ed_input" value="<?php echo $u['accountname']?>">
          </div>
        </div></div>
    <div class="form-actions" style="margin-top:60px; margin-bottom:60px">
        <button style="margin-left:370px; margin-top:40px;" type="submit" class="btn btn-primary"> 提 交 </button>
      </div>
    </form>
  </div>
</div>
 
        
    
<script language="JavaScript" type="text/javascript">

$(document).ready(function() {
$(".input-27").css({"border-color":"#fff","border-width": "0px"}).attr("readonly",true);  
$('#s_edit').on('click', function(option) {
       $(".ed_input").css({"border-color":"#ccc","border-width": "1px"}).attr("readonly",false);  
}); 

$('#s_editpass').on('click', function(option) {
     $('#s_password').show();
});
$('#s_password button').on('click', function(option) {
     var oldpassword =   $('#oldpassword').val();
	  var password =   $('#password').val();
	  var password_confirm =   $('#password_confirm').val();
	  if(oldpassword=='' || password=='' || password_confirm==''){
	  		alert("三项必填,请重新输入");
			return false;
	  }
	  if(password!=password_confirm){
	  		alert("两次输入的密码不一样,请重新输入");
			return false;
	  }
	   $.post("<?php echo url("affiliate/account.edit_password")?>", { oldpassword:oldpassword,password:password,password_confirm:password_confirm},
			function (data, textStatus){
				if(data){
					if(data=='err_pw'){
						alert("原始密码不能认证，无法修改")
					}
					if(data=='err_re'){
						alert("两次输入的密码不一样,请重新输入");
					}
					if(data=='ok'){
						 $('#s_password').hide();
						 $('.alert-info').show();
					}
				}
	 }, "text")

}); 
});
</script> 
<!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;"><div class="sidebar-container" style="width: auto; height: 100%;">

                <ul class="nav nav-tabs navs-3">

                    <li class="active">
                        <a data-toggle="tab" href="#">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                          <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                   
                </div>

            </div>
  
    <script src="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/ad-skin/jquery.metisMenu.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/ad-skin/jquery.slimscroll.min.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/ad-skin/layer.js"></script>
    <script src="<?php echo SRC_TPL_DIR?>/ad-skin/hplus.min.js"></script>    
</body></html>