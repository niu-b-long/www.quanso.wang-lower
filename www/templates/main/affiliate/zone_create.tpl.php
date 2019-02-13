<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="">
<meta name="format-detection" content="telephone=no">
    <title>广告位修改</title>

<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/ca.css">
<link href="<?php echo SRC_TPL_DIR?>/ad-skin/bootstrap.min14ed.css" rel="stylesheet">
  	<link rel="shortcut icon" href="./logo.ico" />
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/font-awesome.min93e3.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/animate.min.css" rel="stylesheet">
    <link href="<?php echo SRC_TPL_DIR?>/ad-skin/style.min862f.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/ad-skin/layer.css" id="layuicss-layer">


</head>


<body class="fixed-sidebar full-height-layout gray-bg  pace-done" style="overflow:hidden">
<div class="pace  pace-inactive">
<div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <div style="background-color: #f3f3f4;" id="wrapper">
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
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/bigcolorpicker/js/jquery.bigcolorpicker.js"></script>
<link rel="stylesheet" href="<?php echo WEB_URL?>js/jquery/lib/bigcolorpicker/css/jquery.bigcolorpicker.css" type="text/css" />
<div id="main" style="padding-top:10px;"> 

  <?php 
  if(!$get_plantype_ok){
  	echo '<div class="alert alert-error" style="margin-top:10px"> 没有可以投放的广告 </div>';
  	die;
  }
  ?>
  <div class="breadcrumbs mt30">
    <ul>
      <li> <a href="<?php echo url("affiliate/zone.get_list")?>">我的广告位   »</a>  <?php  echo RUN_ACTION == 'create' ? '新建' : '编辑';?>广告位 </li>
    </ul>
    <div class="close-bread"> <a href="#"><i class="icon-remove"></i></a> </div>
  </div>
  
  
  <div style="background-color: #f3f3f4;" class="box">
    <div class="box-title">
      <h3><i class="icon-new"></i>基本信息</h3>
    </div>
    <div class="box-content" style="position:relative">
      <?php  if($adtpl['customcolor']=='2' || $adtpl['customspecs']=='2'){?>
      <div class="ad_demo" <?php if($plantype=='cpm' || RUN_ACTION =='edit'){?>style="display:none" <?php } ?>>广告预览：</div>
      <div class="ad_demo " <?php if($plantype=='cpm' || RUN_ACTION =='edit'){?>style="display:none" <?php } ?>>
        <div  class="ad_demo_iframe">
          <iframe id="myIFrame" name="myIFrame" src="about:blank"  marginwidth="0" marginheight="0" scrolling="no" frameborder="0" allowtransparency="true"> </iframe>
        </div>
      </div>
       <?php }?>
      <form action="
	  <?php if(RUN_ACTION == 'edit') {
	  	echo url("affiliate/zone.edit_post");
	  }else{
	  	echo url("affiliate/zone.create_post");
	  }?>" method="POST" class="form-horizontal" id="form_b" >
        <input name="zoneid" id="zoneid"  type="hidden" value="<?php echo  $z['zoneid']?>" />
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="zone_form controls">
          <tr>
            <td width="100">计费方式</td>
            <td><?php if(RUN_ACTION == 'edit' || $adsid){?>
              <input name="plantype" type="radio" value="<?php echo $z['plantype']?>" checked/>
              <?php echo strtoupper($z['plantype'])?>
              <?php } else {?>
              <?php foreach((array)$get_plantype_ok as $p) {?>
              <label>
                <input name="plantype" type="radio" value="<?php echo $p['plantype']?>" <?php if($plantype==$p['plantype'] ) echo "checked"?>  />
                <?php echo strtoupper($p['plantype'])?></label>
              <?php } }?></td>
          </tr>
          <tr>
            <td>广告位名称</td>
            <td><input type="text" name="zonename" id="zonename" class="input-27" value="<?php echo RUN_ACTION == 'create' ? "创建于".DATETIMES:$z['zonename']?>"></td>
          </tr>
          <tr>
            <td valign="top">广告类型</td>
            <td><div id="adtplid_e_p">
                <?php if(RUN_ACTION == 'edit'){?>
                <input name="adtplid" id="adtplid" type="radio" value="<?php echo $z['adtplid']?>" checked>
                <?php $get_tpl = dr ( 'affiliate/adtpl.get_one_adtpl_adtype', $z['adtplid']);echo $get_tpl['tplname'].' - ' .$get_tpl['name']?>
                <?php } else {?>
                <select  name="adtplid" id="adtplid" style="padding:5px; width:180px" >
                  <?php foreach((array)$get_adtpl_ok as $a) { ?>
                  <option value="<?php echo $a['tplid']?>" <?php if($a['tplid']==$adtplid) echo "selected"?>  > <?php echo $a['tplname'].' - ' .$a['name']?></option>
                  <?php } ?>
                </select>
                <?php } ?>
              </div>
              <div id="add_html" <?php if(!$adstyle_add_html['htmlcontrol']){?>style="display:none"<?php }?>>
                <?php  
				 
				 if($adstyle_add_html['htmlcontrol']){  
					 $cp = (array)unserialize($adstyle_add_html['htmlcontrol']) ;
					 $cp_num =  count($cp["htmlcontrol_title"]);
					 if($z){ $zh =(array) unserialize($z['htmlcontrol']);}
					 
					 
					 for($i=0;$i<$cp_num;$i++){
						 
								if($zh[$cp['htmlcontrol_name'][$i]]!='' && $cp['htmlcontrol_type'][$i] == 'text'){
								  $cp['htmlcontrol_value'][$i] = $zh[$cp['htmlcontrol_name'][$i]];
								}
								 	 
						 
							 	$adhtml .=  "<p> <label>".($cp['htmlcontrol_type'][$i] == 'text' ? $cp['htmlcontrol_title'][$i] :'').'<input name="a_h['.$cp['htmlcontrol_name'][$i].']"  type="'.$cp['htmlcontrol_type'][$i].'" value="'.$cp['htmlcontrol_value'][$i].'" '.($cp['htmlcontrol_type'][$i] == 'text' ? "class=input-27" :' ').'';
							 
							 if(($zh[$cp['htmlcontrol_name'][$i]] && $zh[$cp['htmlcontrol_name'][$i]] == $cp['htmlcontrol_value'][$i] )  || (!$z && $cp['htmlcontrol_checked'][$i]) ){
								 $adhtml .= "checked";
								}
							 $adhtml .= '> '.($cp['htmlcontrol_type'][$i] != 'text' ? $cp['htmlcontrol_title'][$i] :'').'</label></p>';
					}
					echo $adhtml;
				}?>
              </div></td>
          </tr>
          <tr class="ad_size_html_d" <?php if($adtpl['tpltype']=='script'  || $adtpl['tpltype']=='url_jump'){?>style="display:none" <?php } ?> >
            <td>广告尺寸</td>
            <td><div class="ad_size_html">
                <?php if(RUN_ACTION == 'edit'){?>
                <input name="specs" id="specs" type="radio" value="<?php echo $z['width'].'x' .$z['height']?>" checked>
                <?php  echo $z['width'].'x' .$z['height']?>
                <?php } else {?>
                <select name="specs" id="ad_size" style="padding:5px; width:180px">
                  <?php foreach((array)$adspecs as $sp) {?>
                  <option value="<?php echo $sp?>" <?php if($specs == $sp) echo "selected"?>> <?php echo $sp?></option>
                  <?php } ?>
                </select>
                <?php if($adtpl['customspecs']==2){?>
                <a href='javascript:;' style='margin-left:10px' id='ad_size_zd_a'>自定义尺寸</a> <a href='javascript:;' style='margin-left:10px; display:none' id='ad_size_zd_b'>选择尺寸</a>
                <?php } ?>
                <?php } ?>
              </div></td>
          </tr>
          <tr class="ad_size_zd" style="display:none">
            <td valign="top">自定义尺寸</td>
            <td><table border="0" cellpadding="0" cellspacing="3" class="tbcodes">
                <tbody>
                  <tr>
                    <td  width="50">宽度：</td>
                    <td  ><input name="zd_size_w" type="text" id="zd_size_w" value="" size="8" maxlength="6" /></td>
                  </tr>
                  <tr>
                    <td>高度：</td>
                    <td><input name="zd_size_h" type="text" id="zd_size_h" value="" size="8" maxlength="6" /></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
          <tr  <?php if(  $adtpl['tpltype']=='url_jump'){?>style="display:none" <?php } ?>>
            <td>显示效果</td>
            <td><select name="styleid" id="styleid" style="padding:5px; width:180px">
                <?php foreach((array)$adstyle as $as) {?>
                <option value="<?php echo $as['styleid']?>" <?php if($z['adstyleid']==$as['styleid'] || $styleid==$as['styleid']) echo "selected"?> > <?php echo $as['stylename']?></option>
                
                
                <?php } ?>
              </select></td>
          </tr>
          <tr class="color_style_d" <?php if($adtpl['customcolor']==1){?>style="display:none" <?php } ?>>
            <td valign="top">配色</td>
            <td><table width="160" border="0" cellpadding="0" cellspacing="3" class="tbcodes">
                <tbody>
                  <tr>
                    <td  width="160">边框：
                      #
                      <input name="color[border]" type="text" id="color_border" value="<?php echo $codestyle['color']['border'] ? $codestyle['color']['border']:"FFFFFF"?>" size="8" maxlength="6"></td>
                    <td><span style="background-color:#<?php echo $codestyle['color']['border'] ? $codestyle['color']['border']:"FFFFFF"?>" data-target="color_border" class="j_clor color_border"></span></td>
                  </tr>
                  <tr>
                    <td>标题：
                      #
                      <input name="color[headline]" type="text" id="color_headline" value="<?php echo $codestyle['color']['headline'] ? $codestyle['color']['headline']:"0000FF"?>" size="8" maxlength="6"></td>
                    <td><span style="background-color:#<?php echo $codestyle['color']['headline'] ? $codestyle['color']['headline']:"0000FF"?>" data-target="color_headline" class="j_clor color_headline"></span></td>
                  </tr>
                  <tr>
                    <td>背景：
                      #
                      <input name="color[background]" type="text" id="color_background" value="<?php echo $codestyle['color']['background'] ? $codestyle['color']['background']:"FFFFFF"?>" size="8" maxlength="6"></td>
                    <td><span style="background-color:#<?php echo $codestyle['color']['background'] ? $codestyle['color']['background']:"FFFFFF"?>" data-target="color_background" class="j_clor color_background"></span></td>
                  </tr>
                  <tr>
                    <td>描述：
                      #
                      <input name="color[description]" type="text" id="color_description" value="<?php echo $codestyle['color']['description'] ? $codestyle['color']['description']:"444444"?>" size="8" maxlength="6"></td>
                    <td><span style="background-color:#<?php echo $codestyle['color']['description'] ? $codestyle['color']['description']:"444444"?>"   data-target="color_description"class="j_clor color_description"></span></td>
                  </tr>
                  <tr>
                    <td>链接：
                      #
                      <input name="color[dispurl]" type="text" id="color_dispurl" value="<?php echo $codestyle['color']['dispurl'] ? $codestyle['color']['dispurl']:"008000"?>" size="8" maxlength="6"></td>
                    <td><span style="background-color:#<?php echo $codestyle['color']['dispurl'] ? $codestyle['color']['dispurl']:"008000"?>" data-target="color_dispurl"  class="j_clor color_dispurl"></span></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
          <tr>
            <td valign="top">广告过滤</td>
            <td><input name="viewtype" type="radio" value="1" <?php if($z['viewtype'] == 1 || !$z) echo "checked"?> />
              智能轮播
              <!--<input name="viewtype" type="radio"  id="viewtype_s" value="2" <?php if($z['viewtype'] == 2 ) echo "checked"?> />
              手动选择 <span id="ckinfo"></span>-->
              <div class="viewtype_html"  style="display:<?php if($z['viewtype'] == '1' || !$z) echo "none"?>" >
                <p>
                  <input type="checkbox" id="viewadsid_all" >
                  全选</p>
                我们为你匹配到以下的广告 <span id="viewtype_html_e_p_adnum"></span><br>
                <div class="a_d">
                  <?php   
				  $count = count($ads);
				  foreach((array)$ads as $ad) { 
				 		 $ck = $au = '';
				        if(in_array($ad['adsid'], explode(",",$z["viewadsid"])) || $ad['adsid']==$adsid) $ck = ' checked' ; 
                   		$price = main_public::format_plan_print ( $ad ['planid'] );
						if (is_array ( $price )) {
							$price = $price ["min"] . '~' . $price ["max"];
						}
						if ($ad ['audit'] == 'y') {  
							$ap = dr ( 'affiliate/apply.get_apply_status', ( int ) $_SESSION ['affiliate'] ["uid"], $ad ['planid'] );
							if ($ap ['status'] == '0') {
								$ck = ' onclick="return false"  apply="n"';
								$au = '<font color="#ff0000">(申请审核中)</font>';
								$count--;
							} else if ($ap ['status'] == '1') {
								$ck = ' onclick="return false"  apply="n"';
								$au = '<font color="#ff0000">(申请被拒绝)</font>';
								$count--;
							} else if ($ap ['status'] == '2') {
								$audit = "a2";
							} else {
								$ck = ' onclick="return false" apply="n"';
								$au = '<a href="javascript:apply('.$ad['planid'].')" ><font color="#ff0000">(点击申请)</font></a>';
								$count--;
							}
						} 
						if($ad['headline']){
							$html .= ' <p><label> <input type="checkbox" name="viewadsid[]" value="'.$ad['adsid']. '" ' . $ck . ' > <a href= target="_blank">' .$ad['headline']. '#' .$ad['adsid']. ' </a>'.$au.'<font color="#ff0000"> / ' .$price.'元</font></label></p>';
						}else {
							$html .= ' <div class="img" id="ad_id_'.$ad['adsid'].'"><label> <input type="checkbox" name="viewadsid[]"  value="'.$ad['adsid']. '" ' . $ck . '>#' .$ad['planname'].'(Aid#'.$ad['adsid'].')'.$au.'<font color="#ff0000"> ' . ($price) . ''.($plantype == 'cps' ? "%" :"元").'</font>';
							if($ad['width']){
								$html .='<br><iframe  width='.$ad['width'].' height='.$ad['height'].' frameborder=0 src="'.url("affiliate/ad.view_ad?adsid=").$ad['adsid'].'" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"></iframe>';
							}
							$html .='</label></div >';	
							}
					
                   } 
				   echo $html;
				   ?>
                </div>
              </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>  <input type="submit" class="btn btn-primary" value="<?php if(RUN_ACTION == 'edit') {
	  	echo '保存';
	  }else{
	  	echo '保存并获取代码 »';
	  }?>"  class="btn btn-primary"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/leanmodal/leanmodal.min.js"></script>
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/modal.css">
<div id="apply_html" style="display:none">
  <table   border="0" cellpadding="0" cellspacing="0" style="width:450px">
    <tr>
      <td height="40" colspan="3">选择需要申请广告的网站</td>
    </tr>
    <tr>
      <td width="100"><input name="applysiteidtype" type="radio" value="1" checked="checked" />
        <input name="applyplanid" type="hidden" value="" />
        全部网站</td>
      <td height="40"><input type="radio" name="applysiteidtype" value="2" />
        选择网站</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div style="width:258px; overflow: auto;border: 1px solid #b8b8b8;float:left;display:none" class="applysiteid_d">
          <table class="table" style="margin-bottom:0px;">
            <thead>
              <tr>
                <th style="width:12%;"></th>
                <th >名称</th>
              </tr>
            </thead>
            <tbody>
               <?php foreach((array)$site as $s) { ?>
                <tr>
                  <td ><input name="siteid[]" type="checkbox" class="apply_siteid" value="<?php echo $s['siteid']?>" url="<?php echo $s['siteurl']?>" /></td>
                  <td ><?php echo $s['siteurl']?></td>
                </tr>
                <?php }?>
              <tr>
                <th colspan="2" ><input type="checkbox" id="siteid_all" >
                  全选</th>
              </tr>
            </tbody>
          </table>
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="40"></td>
      <td><button type="button" class="btn btn-primary post_apply"> 提交申请 </button></td>
    </tr>
  </table> 
</div>
<script language="JavaScript" type="text/javascript">

$("#viewadsid_all").click(function(){
	var a = $("#viewadsid_all").attr("checked");
	if(a!='checked') a = false;
	//$("input[name='viewadsid[]']").attr("checked",a);	
	
	$.each($("input[name='viewadsid[]']"), function(i,o){    
	 	if($(o).attr('apply') != 'n'){
			$(o).attr("checked",a);	
		}
	});
			  
});
	
var acount = <?php echo (int)$count?>;
 
if($('input:radio[name=viewtype]:checked').val()==1 && !acount){

	box.alert("当前的计费方式和广告类型尺寸下的广告无法使用智能轮播，以下广告需要申请，或更换一个其它尺寸");

//box.confirm('当前<?php echo $plantype?>广告需要申请才能投放',300,'系统提示',function(bool){ 
	$('input:radio[name=viewtype]')[1].checked = true;
	$(".viewtype_html").show();
//});

}
 

function apply(planid) { 
 
  box.confirm('确认申请',300,'审请广告',function(bool){ 
		 $.ajax(
			{
				dataType: 'html',
				url: '<?php echo url("affiliate/apply.post_apply")?>',
				type: 'post',
				data: 'planid='+planid+'&siteid=&applysiteidtype=1' ,
				success: function() 
				{
					 
					box.alert('申请成功，请等待我们审核',300);

				}
			}); 	
 
 
});
}  
$('#ad_size_zd_a').on('click', function(option) {  
	$(".ad_size_zd").show(); 
	$("#ad_size_zd_b").show(); 
	$("#ad_size").hide(); 
});

$('#ad_size_zd_b').on('click', function(option) {  
	$(".ad_size_zd").hide(); 
	$("#ad_size_zd_b").hide(); 
	$("#ad_size").show(); 
});
$('input:radio[name=viewtype]').on('click', function(option) {
	if(!acount){
		$('input:radio[name=viewtype]')[1].checked = true;
		$(".viewtype_html").show();
		return;
	} 
    var v = $(this).val();
    if (v == 2) {
		 $(".viewtype_html").show();
	}else {
		 $(".viewtype_html").hide();
		}	
});
$('input:radio[name=plantype]').on('click', function(option) {
    var v = $(this).val();
    var url = "<?php echo url("affiliate/zone.create?plantype=")?>"+v;
	location.href = url;
});


$('#ad_size').on('change', function(option) {
    var v = $(this).val();
    var url = "<?php echo url("affiliate/zone.create?plantype=".$plantype."&adtplid=".$adtplid."&specs=")?>"+v;
	location.href = url;
});

$('#adtplid').on('change', function(option) {
    var v = $(this).val();
    var url = "<?php echo url("affiliate/zone.create?plantype=".$plantype."&adtplid=")?>"+v;
	location.href = url;
});

$('#styleid').on('change', function(option) {
	if('<?php echo RUN_ACTION?>' == 'create'){
  	 	var v = $(this).val();
    	var url = "<?php echo url("affiliate/zone.create?plantype=".$plantype."&adtplid=".$adtplid."&specs=".$specs."&styleid=")?>"+v;
		location.href = url;
	}
});


$(".j_clor").bigColorpicker(function(el, color) {
      $(el).css("backgroundColor", color);
      $("#" + $(el).attr("data-target")).val(color.replace('#', '')); 
	  setTimeout(demo,500); 
}); 
$('#zd_size_w,#zd_size_h').on('keyup', function(option) { 
 
	setTimeout(demo,500);  
});
setTimeout(demo,500);

  
function demo(){ 	 
	<?php 
	if($adtpl['customcolor']=='2'  || $adtpl['customspecs']=='2') {
	?>
	var v2 = $("#ad_size").val(); 
	var zw = $('#zd_size_w').val();
	var zh = $('#zd_size_h').val();
	if(zw && zh) {
		v2 = zw+'x'+zh;	
	}
	if(!v2) return;
	g2 = v2.split('x');
	$("#myIFrame").attr("width",g2[0]);
	$("#myIFrame").attr("height",g2[1]);  
	$("#form_b").attr("target","myIFrame");
	var ac = $("#form_b").attr("action"); 
	$("#form_b").attr("action","<?php echo url("affiliate/zone.demo")?>");
	$("#form_b").submit();  
	$("#form_b").attr("target","");
	$("#form_b").attr("action",ac);	    
	$('.ad_demo_iframe').on('mouseenter', function(option) { 
	if(g2[0]>360){
		$(this).css("width",g2[0]+"px"); 
		$(this).parent().css("width",g2[0]+"px"); 
	}	
	}).on('mouseleave', function(option) { 
		$(this).css("width", "360px"); 
		$(this).parent().css("width", "360px"); 
	})
	<?php }?>
}

$("#form_b").validate({
        errorClass: "error",
        highlight: function(element) {
            $(element).closest('td').addClass("f_error");
        },
        unhighlight: function(element) {
            $(element).closest('td').removeClass("f_error");
        },
		          rules: {
            
            zonename: {
                required: true
            } ,
			"viewadsid[]": {
              
				required: "#viewtype_s:checked",
				 
            }
        },
        messages: {
           
            zonename: "网站名称不能为空",
			"viewadsid[]": "需要选择一个广告"
			 
        },
        
        errorElement: 'span' ,
        errorPlacement: function(error, element) {
            var name = element.attr('name');  
            if (name == 'viewadsid[]') {
                $('#ckinfo').append(error);
            } else {
                error.insertAfter(element);
            }
        }

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
