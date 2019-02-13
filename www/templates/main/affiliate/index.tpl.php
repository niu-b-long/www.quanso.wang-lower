<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>网站主后台主页</title>

    <script type="text/javascript" src="/js/calendar/calendar.js"></script>
  	<link rel="stylesheet" href="/js/calendar/calendar.css" media="all" type="text/css">
  	<link rel="shortcut icon" href="./logo.ico" />
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/ca.css">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min14ed.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/font-awesome.min93e3.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/animate.min.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/style.min862f.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/ad-skin/layer.css" id="layuicss-layer"></head>

<body class="fixed-sidebar full-height-layout gray-bg  pace-done" style="overflow:auto"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
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
            <body class="gray-bg">

<div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">今日</span>
                        <h5>收入</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo sprintf("%.2f",$get_day_sunpay["sumpay"]) ?>元</h1>
<!--                         <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i> -->
<!--                         </div> -->
                        <small>今日收入</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">昨日</span>
                        <h5>收入</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo sprintf("%.2f",$get_yesterday_sunpay["sumpay"]) ?>元</h1>
<!--                         <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i> -->
<!--                         </div> -->
                        <small>昨日收入</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">最近一月</span>
                        <h5>收入</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo sprintf("%.2f",$get_month_sunpay["sumpay"]) ?>元</h1>
<!--                         <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i> -->
<!--                         </div> -->
                        <small>月收入</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">账户余额</span>
                        <h5>账户余额</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo sprintf("%.2f",$zmoney-$GLOBALS['userinfo']['zhifu']) ?>元</h1>
<!--                         <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i> -->
<!--                         </div> -->
                        <small>总余额</small>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
            <!--主页信息开始 -->
             <div>
              	<div align="center">
                	<form action="" method="post">
                      <select name="type" style="width:105px;display:inline;" class="form-control">
                        <option value="all" selected="">广告类型</option>
                        <option value="1000">固定位</option>
                        <option value="1001">顶漂</option>
                        <option value="1002">底漂</option>
                        <option value="1003">侧漂</option>
                      </select>
                      <select name="timerange" id="timerange" style="width:300px;display:inline;" class="form-control">
                        <option value="all" selected="">指定时间</option>
                        <option value="<?php echo $get_timerange['day'];?>">今天</option>
                        <option value="<?php echo $get_timerange['yesterday'];?>">昨天</option>
                        <option value="<?php echo $get_timerange['7day'];?>">最近7天</option>
                        <option value="<?php echo $get_timerange['30day'];?>">最近30天</option>
                        <option value="<?php echo $get_timerange['lastmonth'];?>">上个月</option>
                      </select>
                      <img src="/templates/admin/images/calendar.png" align="absmiddle" onclick="__C('timerange',2,'r')" style="margin-bottom: 3px;display:inline;">
                      <input name="_s" type="image" src="/templates/admin/images/sb.jpg" align="top" border="0" style="margin-left: 20px;">
                   </form> 
                </div>
             	<table class="table">
                <tr>
                    <th>日期</th>
                    <th>佣金</th>
                </tr>
                <?php foreach($stats as $v){?>
                <tr>
                    <td><h4><?php echo $v['day']?></h4></td>
                    <td><h4><?php  echo round($v['sumpay'],2);?></h4></td>
                </tr>
                 <?php }?>
              </table>
               <div class="row"><?php echo $page->echoPage();?></div>
			</div>
            <div class="footer">
                <div class="pull-right">© 2014-2015 <a href="<?php echo WEB_URL?>" target="_blank"><?php echo $GLOBALS['C_ZYIIS']['sitename']?></a>
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