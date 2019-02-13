<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>付款记录</title>

    
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
<div id="main" style="padding-top:10px">
   
  
  <div class="alert alert-info" style="margin-top:10px">
							<h4>付款规则</h4>
							<p>1.支付标准为 <?php echo $GLOBALS['C_ZYIIS']['min_clearing']?>元起付</p>
							<p>2.结算时间 <?php $ec=explode(',',$GLOBALS['C_ZYIIS']['clearing_cycle']);foreach($ec as $c){if($c=='day')echo '日结 ';if($c=='week')echo '周结（每周二） ';if($c=='month')echo '月结（每月'.$GLOBALS['C_ZYIIS']['clearing_monthdata'].'号）';}?></p>
							<p>3.如果您帐户分类金额尚未累计至 <?php echo $GLOBALS['C_ZYIIS']['min_clearing']?>元，系统会自动累计下次结算</p>
  </div>
     
  
  <div class="box" >
    <div class="box-title">
      <h3><i class="icon-table"></i>付款记录</h3>
      
    </div>
     
    <div class="box-content">
      <table class="table">
        <thead>
          <tr>
            <th>时间</th>
            <!--<th>广告收入</th>
            <th>下线收入</th>
            <th>代扣税</th>
            <th width="100">手续费</th>
            <th width="100">应付金额</th>-->
            <th>付款金额</th>
            <th>状态</th>
            
          </tr>
        </thead>
        <tbody>
          <?php foreach((array)$paylog as $p) {
		  		
		  ?>
          <tr sid="<?php echo $p['paytime']?>">
          <td><?php echo $p['addtime']?></td>
           <!-- <td>￥<?php echo abs($p['money'])?></td>
            <td>￥<?php echo abs($p['xmoney'])?></td>
            <td>￥<?php echo $p['tax']?> </td>
            <td>￥<?php echo $p['charges']?></td>-->
            <td>￥<?php echo $p['pay'];?></td>
            <td><?php
			  if ($p['status'] == '0')
				{
					$statusY = '<font color=red>未支付</font>';
				} 
				if ($p['status']=='1')
				{
					$statusY = '<font color=blue>已支付</font>';
				} 
				echo $statusY;
			  ?></td>
            
          </tr>
          <?php }?>
        </tbody>
      </table>
      
        <div><?php  echo $page->echoPage ();?></div>
        
    </div>
  </div>
</div>
 
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