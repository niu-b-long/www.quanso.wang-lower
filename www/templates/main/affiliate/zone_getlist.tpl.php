<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>广告位管理</title>

    
    <link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/affstyle.css">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min14ed.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/font-awesome.min93e3.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/animate.min.css" rel="stylesheet">
  	<link rel="shortcut icon" href="./logo.ico" />
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/style.min862f.css" rel="stylesheet">



</head>


<body class="fixed-sidebar full-height-layout gray-bg  pace-done" style="overflow:hidden;">
<div class="pace  pace-inactive">
<div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
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
            

            <div id="main" style="padding-top:10px">

   <?php if($site_num === 0) {?>
  <div class="alert alert-info" style="margin-top:10px"> 警告！缺少活动网站，在开启域名限制条件下广告位代码无法显示。 <a href="<?php echo url("affiliate/site.create")?>">增加一个网站</a></div>
  <?php }?>
           
<?php if($_SESSION ['succ']) {?>
  <div class="alert alert-info" style="margin-top:10px"> 修改成功</div>
   <?php }?>
    <div id="navigation">



    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="">
                          
                            <a href="<?php echo url("affiliate/zone.create?type=".$type)?>" class="btn btn-primary "><i class="fa fa-plus-circle"></i>添加</a>
                            
                  
         
                      </div>
                    </div>
                    
                        
    <?php $dname = dr ( 'affiliate/zone.get_addomain', $GLOBALS ['userinfo']['pingid'],$GLOBALS ['userinfo']['classid']);?>                     
    <div class="box-content">
      <table style="background-color: #fff;" class="table">
        <thead>
          <tr>
            <th width="150">广告位名称</th>
            <th width="80">广告位ID</th>
            <th width="80">广告</th>
            <th width="80">计费方式</th>
            <th width="120">上次修改日期</th>
            <th width="350">操作</th>
          </tr>
        </thead>
        <tbody>
           <?php foreach((array)$zone_list as $z) { 
		  			$tpl = dr ( 'affiliate/adtpl.get_one', $z['adtplid'] );
  					$uid = $z['uid'];
                    $num = strlen($uid);
                    $nums = '';
                    for($n = 0;$n<=($num-1);$n++){
                        $nums = $nums.(substr($uid,$n,1)); 
                    }
    				$catalog = 1000 + substr($nums,0,$num-2);
		  ?>
          <tr class="d_a gzid_<?php echo $z['zoneid']?>" ud="<?php echo $z['uid']?>" catalog="<?php echo $catalog; ?>" dname="<?echo $dname['dname']?>" tplname="<?php echo $GLOBALS ['sitelist'][$z['adtplid']];?>" zname="<?php echo $z['zonename']?>" zid="<?php echo $z['zoneid']?>" zsize="<?php echo $z['width'].'x'.$z['height']?>" ztype="<?php echo $z['adtplid']?>" zl="<?php echo $tpl['tpltype'] == 'url_jump' ? '1' : 0?>">
            <td><?php echo $z['zonename']?><br>
               </td>
            <td><?php echo $z['zoneid']?></td>
            <td><?php  
		    echo  $tpl['tplname'];
			?></td>
            <td>
			<?php echo strtoupper($z['plantype'])?></td>
            
            <td><?php echo $z['uptime']?></td>
            <td> <a href="<?php echo url("affiliate/zone.edit?zoneid=".$z['zoneid'])?>" class="btn btn-info "><i class="fa fa-pencil"></i>修改</a>
                            
                            <!--<a style="margin-left:10px;" href="javascript:;" class="btn btn-danger delzone"><i class="fa fa-trash-o"></i>删除</a>-->
                            <a style="margin-left:10px;" href="javascript:;" class="btn btn-lan getcode">获取<b>http</b>代码</a> 
            				<a style="margin-left:10px;" href="javascript:;" class="btn btn-lan getcodes">获取<b>https</b>代码</a> </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <?php  echo $page->echoPage ();?>
 </div></div></div></div></div></div></div></div></div>
    
        
    
<script type="text/javascript" src="<?php echo WEB_URL?>js/clipboard/clipboard.js"></script>
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
 
 $('.delzone').on('click', function(option) { 
	_zoneid = $(this).parent().parent().attr("zid");
 	_parent = $(this).parent().parent();
	 box.confirm('确认删除吗',300,'删除广告位',function(bool){
	 if(bool) {
	 	  $.ajax(
			{
				dataType: 'html',
				url: '<?php echo url("affiliate/zone.del")?>',
				type: 'post',
				data: 'zoneid=' + _zoneid,
				success: function() 
				{
					 _parent.css("backgroundColor", "#faa").hide('normal');
				}
			});
		}	
	});
	
 }); 
 
$('.getcode').on('click', function(option) { 
 	 var zid = $(this).parent().parent().attr("zid");
	 get_code(zid);
});
  
$('.getcodes').on('click', function(option) { 
 	 var zid = $(this).parent().parent().attr("zid");
	 get_code(zid,'https');
});



function get_code(zid,type='http'){
	 var zl = $('.gzid_'+zid).attr('zl');
	 var ztype =  $('.gzid_'+zid).attr('ztype');
  	 var dname = $('.gzid_'+zid).attr('dname');
  	 var tplname = $('.gzid_'+zid).attr('tplname') ? $('.gzid_'+zid).attr('tplname') : 'rs';
  	 var catalog = $('.gzid_'+zid).attr('catalog');
  	 var ud = $('.gzid_'+zid).attr('ud');
	
  	var ht='http://';
  	if(type=='http'){
       ht = 'http://';
    }else{
      ht = 'https://';
    }
	 var zsrc = ht + dname + '/' + tplname + '/' + catalog + '/s' + ud + '.js';
  
	 if(zl>0){  
		var surl = "<?php echo $GLOBALS['C_ZYIIS']['jump_url'].WEB_URL?>c.php?id="+zid;
	 }else {
		 //var surl = "<script src='<?php //echo $GLOBALS['C_ZYIIS']['js_url'].WEB_URL?>vs.php?id="+zid+"'><\/script>";
       	var surl = "html格式：\n<script src='"+zsrc+"'><\/script>\n\njs格式：\ndocument.writeln(\"<script src='"+zsrc+"'><\\/script>\");";
	 }
	 text = '<textarea  class="input_text span70 textarea_text" name="log_text" readonly id="log_text" style="width: 90%;height:130px;">'+surl+'</textarea><input name="button"  type="button" class="btn btn-green big" id="getcode"  value="复制代码" /><span class="copy_ok" style=" ">复制成功!</span>';
	
	box.confirm(text,600,'获取代码',function(bool){});
	$("#modeal_ok").hide();
	$('#getcode').on('mouseenter', function(option) {  
		var clip = new ZeroClipboard.Client(); 
		ZeroClipboard.setMoviePath("<?php echo WEB_URL?>js/clipboard/clipboard.swf") ;
		clip.setHandCursor(true); 
		clip.setText($(".textarea_text").val());          
		clip.addEventListener('complete',  function(client, text) {
			$(".copy_ok").show();
		});
		clip.glue('getcode');  
	});
}

<?php 
//if($_GET['code']=='yes') echo "get_code(".$_GET['zone_id'].")";
?> 	
	
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

   