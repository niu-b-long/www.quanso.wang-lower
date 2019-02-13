<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>网站管理</title>
<link href="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min14ed.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/font-awesome.min93e3.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/animate.min.css" rel="stylesheet">
  	<link rel="shortcut icon" href="./logo.ico" />
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/style.min862f.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/ad-skin/layer.css">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/ad-skin/style.css">
</head>

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
  <div style="width:820px; margin-top:23px;">会员发展链接：<?php echo $GLOBALS ['C_ZYIIS']['authorized_url'].WEB_URL.'track/c/?rid='.$GLOBALS ['userinfo']['uid'];?> <span style="padding-left:20px; color:#F00">成功发展：<?php echo dr ( 'main/account.get_sum_recommend', $GLOBALS ['userinfo']['uid'])?>个</span></div>
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


    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="">
                        
                        
                            <a href="<?php echo url("affiliate/site.create")?>" class="btn btn-primary "><i class="fa fa-plus-circle"></i>添加</a>
                            
                            
                        </div>
                    </div>
                    <?php if($_SESSION ['succ']) {?>
  <div class="alert alert-info" style="margin-top:10px"> 添加成功</div>
   <?php }?>
                    <div class="ibox-content">
						
                        <div class="jqGrid_wrapper">
                            <table id="table_list_1"></table>
                            <div id="pager_list_1"></div>
                        </div>
                        <div class="box-content">
      <table class="table">
        <thead>
          <tr>
            <th width="100">网站名称</th>
            <th width="150">网站域名</th>
            <th width="80">分类</th>
            <th width="100">星级</th>
            <th width="40">状态</th>
            <th width="220">操作</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach((array)$site as $s) { 
		  		$c =  dr ( 'main/class.get_one',$s["sitetype"] );
		  ?>
          <tr sid="<?php echo $s['siteid']?>">
            <td style="width:100px;"><?php echo $s['sitename']?></td>
            <td style="width:100px;"><?php echo $s['siteurl']?></td>
            <td width="80px"><?php echo $c['classname']?></td>
            <td width="120px"><img alt="" src="<?php echo SRC_TPL_DIR?>/images/s<?php echo $s['grade']?>.jpg" title="<?php echo $s['grade']?>级" /></td>
            <td width="100px"><?php 
					 
			  		switch($s['status']){
						case 0:
							echo '<span class="notification error_bg">新增待审</span>';
							break;
						case 1:
							echo '<span class="notification error_bg">拒绝</span>';
							break;
						case 2;
							echo '<span class="notification error_bg">锁定</span>';
							break;
						case 3:
							echo '<span class="notification info_bg">正常</span>';
							break;
						case 4:
							echo '<span class="notification error_bg">修改待审</span>';
							
					} 
				?> </td>
             <td>
              
                           <!-- <a onClick="fnClickEditBatch();" href="<?php echo url("affiliate/site.edit?siteid=".$s['siteid'])?>" class="btn btn-info "><i class="fa fa-pencil"></i>修改</a> -->
                            
                            <a href="javascript:;" class="btn btn-danger delsite"><i class="fa fa-trash-o"></i>删除</a>
                            
                            
            
             
             </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     

   <script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/leanmodal/leanmodal.min.js"></script>
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/modal.css">
<script language="JavaScript" type="text/javascript">
$("#zid").on('keyup', function(option) {
	 var v = $(this).val();
	 $(".d_a").each(function() {
	 	 $(this).hide();
          if(v == $(this).attr("zid"))   $(this).show();
     });
	 if(!v) $(".d_a").show(); 
	 
});

$("#zname").on('keyup', function(option) {
	 var v = $(this).val();
	 $(".d_a").each(function() {
	 	  $(this).hide();
          if ($(this).attr("zname").indexOf(v) > -1 )  $(this).show();
     });
	 if(!v) $(".d_a").show(); 
	 
});


$("#zadsize").on('change', function(option) {
	 var v = $(this).val();
	 $(".d_a").each(function() {
	 	  $(this).hide();
          if ($(this).attr("zsize").indexOf(v) > -1 )  $(this).show();
     });
	 if(!v) $(".d_a").show(); 
	 
});


$("#zadtplid").on('change', function(option) {
	 var v = $(this).val();
	 $(".d_a").each(function() {
	 	  $(this).hide();
          if ($(this).attr("ztype").indexOf(v) > -1 )  $(this).show();
     });
	 if(!v) $(".d_a").show(); 
	 
});

 $('.actions').on('click', function(option) { 
       if($('.z_panel').is(":hidden")){
	   		$('.actions span span').html("一");
			$('.z_panel').show();
	   }else {
	   		$('.actions span span').html("十");
			$('.z_panel').hide();
	   }
 });
 
 $('.delsite').on('click', function(option) { 
	_siteid = $(this).parent().parent().attr("sid");
 	_parent = $(this).parent().parent();
	 box.confirm('确认删除吗',300,'删除网站',function(bool){
	 if(bool) {
	 	  $.ajax(
			{
				dataType: 'html',
				url: '<?php echo url("affiliate/site.del")?>',
				type: 'post',
				data: 'siteid=' + _siteid,
				success: function() 
				{
					 _parent.css("backgroundColor", "#faa").hide('normal');
				}
			});
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
                        <a data-toggle="tab" href="https://www.80ad.com/user/user_index.html#tab-1">
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
