<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header');
?>

<div id="left">
  <div class="subnav">
    <div class="subnav-title"> <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>广告活动分类</span></a> </div>
    <ul class="subnav-menu">
      <li <?php if(get('type')=='') echo "class='current'"?>> <a href="<?php echo url("affiliate/plan.get_list")?>">所有活动</a> </li>
      <?php foreach((array)$plantype as $p) {?>
      <li <?php if(get('type')==$p['plantype']) echo "class='current'"?>> <a href="<?php echo url("affiliate/plan.get_list?type=".$p['plantype'])?>"><?php echo strtoupper($p['plantype'])?> 类活动</a> </li>
      <?php }?>
    </ul>
  </div>
</div>
<div id="main" style="padding-top:10px">
  <div class="box" >
    <div class="box-title">
      <h3><i class="icon-table"></i>活动列表</h3>
      <div class="actions" style="color: #08c;"> <span style=" cursor:pointer">
        <select name="classid" onchange="location.href = this.options[selectedIndex].value">
          <option value="<?php echo url("affiliate/plan.get_list?type=".get('type'))?>">按活动分类</option>
          <?php  foreach ($plan_class AS $pc){?>
          <option value="<?php echo url("affiliate/plan.get_list?type=".get('type')."&classid=".$pc["classid"])?>" <?php if(get('classid') == $pc["classid"] ){echo 'selected';}?>><?php echo $pc["classname"]?></option>
          <?php }?>
        </select>
        </span> </div>
    </div>
    <div class="z_panel" style="display:none">
      <table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="50">显示：</td>
          <td><input type="checkbox" name="checkbox" value="checkbox" />
            闲置</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="checkbox" name="checkbox2" value="checkbox" />
            活动 </td>
        </tr>
        <tr>
          <td>尺寸：</td>
          <td><select id="zadsize">
              <option value="">全部尺寸</option>
              <?php foreach((array)$adsize as $a) {?>
              <option value="<?php echo $a?>"><?php echo $a?></option>
              <?php }?>
            </select></td>
        </tr>
        <tr>
          <td>类型：</td>
          <td><select id="zadtplid">
              <option value="">全部类型</option>
              <?php foreach((array)$zadtplid as $a) {?>
              <option value="<?php echo $a?>"><?php echo $GLOBALS ['ADTYPE_SPECS'][$a]['name']?></option>
              <?php }?>
            </select></td>
        </tr>
        <tr>
          <td class="brb1d">&nbsp;</td>
          <td class="brb1d">&nbsp;</td>
        </tr>
        <tr>
          <td height="30">ID：</td>
          <td><input type="text" name="zid" id="zid" style="width:110px" /></td>
        </tr>
        <tr>
          <td height="30">名称：</td>
          <td><input type="text" name="zname"  id="zname" style="width:110px" /></td>
        </tr>
        <tr>
          <td height=30</td>
          <td></td>
        </tr>
      </table>
    </div>
    <div class="box-content">
      <table class="table plan_logo">
        <thead>
          <tr>
            <th width="53%">活动名称</th>
            <th width="18%">类型</th>
            <!--    <th width="100">佣金</th>	-->
            <th width="14.5%">活动分类</th>
            <th width="14.5%">状态</th>
            <!--    <th width="120">操作</th>	-->
          </tr>
        </thead>
        <tbody>
          <?php foreach((array)$plantype_list as $p) { 
		  			 $c =  dr ( 'main/class.get_one',(int)$p["classid"] );
					 $adnum =  dr ( 'affiliate/ad.get_planid_adnum',(int)$p["planid"] );
					 $notap = 0;
		  ?>
          <tr class="d_a" >
            <td><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="logo">
                <tr>
                  <td width="120" rowspan="2">
			
                  <a href="<?php echo url("affiliate/plan.info?planid=".$p['planid'])?>"><img src="<?php if($p["logo"]) {
				  $parse_url = parse_url ($p["logo"]);
					if (! $parse_url ['scheme']) {
						$p["logo"] = $GLOBALS ['C_ZYIIS'] ['img_url'] . $p["logo"];
					}
				    echo $p["logo"];
				  } else { echo SRC_TPL_DIR.'/images/no.gif';}?>"  border="0" width="120"/></a></td>
                  <td><a href="<?php echo url("affiliate/plan.info?planid=".$p['planid'])?>"><?php echo $p['planname']?>	  <?php if($p['top']) echo '<font color="#FF0000">[荐]</font>'?></a></td>
                </tr>
                <tr>
                  <td>结算：
                    <?php 
							if ($p['clearing'] == 'day') echo '日结';
							if ($p['clearing'] == 'week') echo '周结';
							if ($p['clearing'] == 'month') echo '月结';
							?></td>
                </tr>
              </table></td>
            <td><?php echo strtoupper($p['plantype'])?></td>
            <!--<td><?php 
			$af = $p["plantype"] == 'cps' ? "%" :"元"; 
			$price = main_public::format_plan_print($p['planid']);
			if(is_array($price)){
				echo $price["min"].$af.'-'.$price["max"].$af;
			}else {
				echo $price.$af;
			}
			
			?></td>		-->
            <td><?php echo $c['classname']?></td>
            <td class="status"><?php 
							if($p['status'] == 3) echo '<span class="notification error_bg">饱和</span>';
							else if($p['status'] == 5) echo '<span class="notification error_bg">暂停申请</span>';
							else if ($p['audit'] == 'y') {
								$ap =  dr ( 'affiliate/apply.get_apply_status',( int )$_SESSION ['affiliate'] ["uid"],$p['planid']);
							 
								if ($ap['status']=='0'){
									echo '<span class="notification error_bg">审核中</span>';
								}else if ($ap['status']=='1'){
									echo '<span class="notification error_bg">已被拒绝</span>';
								}
								else if ($ap['status']=='2'){
									echo '<span class="notification info_bg">活动</span>';
								}else {
									echo '<span class="notification error_bg">未申请</span>';
									$notap = 1;
								}
							 }
							else  echo '<span class="notification info_bg">活动</span>';
							?></td>
            <td><?php if ($p['audit'] == 'y' && $notap){?>
              <a href="javascript:;" class="apply" planid="<?php echo $p['planid']?>">申请广告</a>
              <?php }?>
              <?php if ($adnum || $p['linkon'] == 'y'){?>
             <!--  <a href="<?php echo url("affiliate/plan.get_ad?planid=".$p['planid'])?>">查看广告</a>  -->
              <?php } else{?>
              <span class="notification error_bg">缺少广告</span>
              <?php }?>
             <!--  <a href="<?php echo url("affiliate/plan.info?planid=".$p['planid'])?>">详细</a></td> 	  -->	
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="apply_html" style="display:none">
    <?php if($site_num === 0) {?>
    <div class="alert alert-info" style="margin-top:10px"> 警告！缺少活动网站。 <a href="<?php echo url("affiliate/site.create")?>">增加一个网站</a></div>
    <?php }?>
    <table   border="0" cellpadding="0" cellspacing="0" style="width:450px">
      <tr>
        <td>&nbsp;</td>
        <td height="40"></td>
        <td><button type="button" class="btn btn-primary post_apply"> 确认提交申请 </button></td>
      </tr>
    </table>
  </div>
  <div>
    <?php  echo $page->echoPage ();?>
  </div>
</div>
<script type="text/javascript" src="<?php echo WEB_URL?>js/clipboard/clipboard.js"></script> 
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/js/jquery-1.7.min.js"></script> 
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/lib/leanmodal/leanmodal.min.js"></script>
<link rel="stylesheet" href="<?php echo SRC_TPL_DIR?>/style/modal.css">
<script language="JavaScript" type="text/javascript">
  
$('.apply').on('click', function(option) { 
 applyplanid = $(this).attr("planid"); 
 status_o =  $(this).parent().parent().find('.status');
 box.confirm('确认申请',300,'审请广告',function(bool){ 
	 if(bool){
		 $.ajax(
			{
				dataType: 'html',
				url: '<?php echo url("affiliate/apply.post_apply")?>',
				type: 'post',
				data: 'planid='+applyplanid+'&siteid=&applysiteidtype=1' ,
				success: function() 
				{
					box._hide();
					status_o.html('<span class="notification error_bg">申请中</span>');
					 
					box.alert('申请成功，请等待我们审核',300);

				}
			}); 
		}	
 });

 
  
});




 	
	
</script> 
