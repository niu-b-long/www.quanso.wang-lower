<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>网站修改</title>
<link href="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min14ed.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/font-awesome.min93e3.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/animate.min.css" rel="stylesheet">
  	<link rel="shortcut icon" href="./logo.ico" />
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/style.min862f.css" rel="stylesheet">
</head>
<body class="fixed-sidebar full-height-layout gray-bg  pace-done" style="overflow:hidden">
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
           
<div style="margin-top:30px;" class="container-fluid" id="content">
<script type="text/javascript" src="/js/jquery/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/js/jquery/lib/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript" src="/js/jquery/lib/jquery-validation/additional-methods.js"></script>

  <form action=" /index.php?e=aff/site.create_post" method="POST" class="form-horizontal" id="form_b">
        <input name="isok" id="isok"  type="hidden" value="" />
        <input name="siteid" id="siteid"  type="hidden" value="<?php echo  $site['siteid']?>" />
                            <div class="form-group">
                                <label for="textfield" class="col-sm-3 control-label">网站名称：</label>
                                <div class="col-sm-8">
                                <input type="text" name="sitename" id="sitename" class="form-control" value="<?php echo $site['sitename']?>">
                                    
<!--                                     <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 这里写点提示的内容</span> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textfield" class="col-sm-3 control-label">网站地址：</label>
                                <div class="col-sm-8">
                                
            <input type="text" name="siteurl" id="siteurl" class="form-control" value="http://<?php echo $site['siteurl']?>" <?php if(RUN_ACTION == 'edit') {?>disabled="disabled" <?php }?>>
            
                                    
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>请输入正确地址，如：http://www.baidu.com</span> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">网站备案信息：</label>
                                <div class="col-sm-8">
                                <input type="text" name="beian" id="beian" class="error" value="<?php echo $site['beian']?>">
                                
                                   
                                </div>
                            </div>
                            <div class="form-group"> 
                                 <label class="col-sm-3 control-label">网站类别：</label> 
                                 <div class="col-sm-8"> 
                                   <div class="input-group"> 
                                   <select name="sitetype" id="sitetype" class="chosen-select" style="width:150px; height:25px">
              <option value="">请选择</option>
              <?php foreach((array)$sitetype as $st) {?>
              <option value="<?php echo $st['classid']?>" <?php if($site['sitetype']==$st['classid']) echo "selected"?> ><?php echo $st['classname']?></option>
              <?php }?>
            </select>
            
            
 	                                
                            </div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="textfield" class="col-sm-3 control-label">日访问量：</label>
                                <div class="col-sm-8">
                                
                                <input name="dayip" type="text" class="form-control" id="dayip"   value="<?php echo $site['dayip']?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textfield" class="col-sm-3 control-label">网站描述：</label>
                                <div class="col-sm-8">
                                <textarea name="siteinfo" class="form-control" id="siteinfo" style="height:50px"><?php echo $site['siteinfo']?></textarea>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary"> 保 存 </button>
                                
                                    
                                </div>
                            </div>
                        </form>
           </div></div></div>
    <script language="JavaScript" type="text/javascript">

$(document).ready(function() {

$("#form_b").validate({
        errorClass: "error",
        highlight: function(element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function(element) {
            $(element).closest('div').removeClass("f_error");
        },
		  <?php if(RUN_ACTION == 'create' && in_array($GLOBALS ['C_ZYIIS'] ['site_status'],array(4,5))) {?>
		  ignore: "",
		  <?php }?>
        rules: {
            siteurl: {
                required: true,
				remote:{  
					　　 type:"POST",    
					　　 url:'<?php echo url("affiliate/site.check_site_repeat")?>',  
					　　 data:{
						  siteurl:function(){
								return $("#siteurl").val();
							}
				　　 	   } 
				},
			   url2:true
            },
            sitename: {
                required: true
            },
			beian: {
                required: true
            },
			sitetype: {
                required: true
            },
			dayip: {
                required: true
            },
			isok: {
                required: true
            }
        },
        messages: {
            siteurl: {
				required:"网站url为能空",
				url2:"请填写一个正确url",
				remote:"存在的域名"
			},
            sitename: "网站名称不能为空",
			beian: "输入一个备案号",
			sitetype: "选择一个网站类型",
			dayip: "日访问量不能为空",
        	isok: "无法验证当前网站域名"
        },
        
        errorElement: 'span' ,
        errorPlacement: function(error, element) {
            var name = element.attr('name');  
            if (name == 'isok') {
                $('#ckinfo').append(error);
            } else {
                error.insertAfter(element);
            }
        }

    });


$("#cksite").click(function(){
		 if($("#form_b").validate().element($("#siteurl"))){
		 		$(".checksite").show();
		 }
});


$("#down").click(function(){
		if($("#form_b").validate().element($("#siteurl"))){
			this.href +="<?php echo url_f("&url=")?>"+$("#siteurl").val();  
		}
});

$("#for_1").click(function(){
		this.className = 'active cktab';
		$('#for_2').removeClass().addClass("cktab");
		$('#text1').show();
		$('#text2').hide();
});
$("#for_2").click(function(){
		var siteurl = $("#siteurl").val();
		this.className = 'active cktab';
		$('#for_1').removeClass().addClass("cktab");
		$('#text2').show();
		$('#text1').hide();
		$.post("<?php echo url("affiliate/site.download_file")?>", { type:'html',url: siteurl},
		function (data, textStatus){
			if(data){
				$('#ck2val').val(data);
				$("#ck2val").attr("disabled",true);  
			}
		}, "text");
		
});

$("#doCheckSite").click(function(){
	 if($("#form_b").validate().element($("#siteurl"))){
			 var siteurl = $("#siteurl").val();
	 		 var cktype = $("input:[name=cktype]:radio:checked").val();
	 		$.post("<?php echo url("affiliate/site.check_site")?>", { type:cktype,url:siteurl},
			function (data, textStatus){
				if(data){
					if(data=='ok'){
						$("#ckinfo").html("验证完成");
						$('#isok').val("ok");
					}
					if(data=='repeat'){
						$("#ckinfo").html("无法完成验证，重复的域名");
					}
					
					if(data=='no'){
						$("#ckinfo").html("无法验证当前域名,请按上面的方法操作");
					}
					
				}
			}, "text")
	 }
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
</body>
</html>