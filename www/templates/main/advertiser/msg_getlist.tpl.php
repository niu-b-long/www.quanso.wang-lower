<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <title>公告列表-广告商后台</title>

    <link rel="stylesheet" href="/templates/main/ximg/home.css">
    <script src="/templates/main/ximg/homead.js"></script><link rel="stylesheet" href="/templates/main/ximg/modal.css" media="all" type="text/css">
<script type="text/javascript" src="/templates/main/ximg/jquery-1.7.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/templates/main/ximg/leanmodal.min.js"></script>
<script src="/templates/main/ximg/jquery.min.js"></script>
<script src="/templates/main/ximg/wwwhighcharts.js"></script>
<link rel="stylesheet" href="/templates/main/ximg/indexTotalggs.css">
<script type="text/javascript" src="/templates/main/ximg/calendar.js"></script>
<link rel="stylesheet" href="/templates/main/ximg/calendar.css" media="all" type="text/css">
 </head>

<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="main" class="wrap" style="min-width: 1240px; height: 1210px;">
<?php TPL::display('left');?>


</div>
<div id="main" style="padding-top:10px">
   
 
     
  
  <div style="margin-top:-1210px; margin-left:80px;" class="box" >
    <div class="box-title">
      <h3><i class="icon-table"></i>系统消息</h3>
      
    </div>
     
    <div class="box-content">
      <table class="table">
        <thead>
          <tr>
            <th>标题</th>
            <th width="160">发送时间</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach((array)$msg as $m) { ?>
          <tr>
            <td class="in_read" msgid="<?php echo $m['messageid']?>"><div class="i"></div> <?php 
			 if($m['read'] == 'n'){  
				  echo  "<b>".$m['title']."</b>";
			 }else {
				 echo  $m['title'];
			 }
			 ?></td>
            <td><?php echo $m['addtime']?></td>
          </tr>
          
          
           <tr id="read_msg_id_<?php echo $m['messageid']?>" style="display:none" >
            <td colspan="2"> <div class="read_msg"><div> <?php echo nl2br($m["content"]);?></div></div></td>
           </tr>
          
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo WEB_URL?>js/jquery/js/jquery-1.7.min.js"></script> 
<script type="text/javascript">
$('.in_read').on('click', function(option) {   
	var msgid = $(this).attr("msgid");
	if($(this).attr("data_v") == 1){  
		var o = $('#read_msg_id_'+msgid).hide();
		$(this).attr("data_v",0);
		$(this).find('div').css("backgroundImage","url(<?php echo SRC_TPL_DIR?>/images/z_13x13.jpg)"); 
	
	}else { 
    	var o = $('#read_msg_id_'+msgid).show();
		$(this).attr("data_v",1);
		$(this).find('div').css("backgroundImage","url(<?php echo SRC_TPL_DIR?>/images/g_13x13.jpg)"); 
		$.get("<?php echo url("advertiser/msg.read?msgid=")?>"+msgid, function(result){
			 
		});
	}
});
</script>
</body></html>