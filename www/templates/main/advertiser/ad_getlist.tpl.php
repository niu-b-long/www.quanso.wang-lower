<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    
    <title>广告管理-广告商后台</title>
    <link rel="stylesheet" href="/templates/main/ximg/home.css">
</head>

<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="main" class="wrap" style="min-width: 1240px; height: 1277px;">
<?php TPL::display('left');?>
<script src="/templates/main/ximg/homead.js"></script><link rel="stylesheet" href="/templates/main/ximg/ads.css">

<div style="margin-left:50px;" id="content">
  <h2>广告管理</h2>
  <div class="con-con">
    <select class="classification" size="1" name="choose_type" id="choose_type" style="margin-left:20px"  onchange="location.href = this.options[selectedIndex].value">
            <option value="<?php echo url("advertiser/ad.get_list")?>" >所有计划</option>
            <?php foreach((array)$plan_all as $p) { ?>
            <option <?php if($planid==$p['planid']) echo "class='current'"?> value="<?php echo url("advertiser/ad.get_list?planid=".$p['planid'])?>"  ><?php echo $p['planname']?></option>
            <?php }?>
          </select>
    <div class="main_container clearfix" id="news-table">
      <div class="box-title"><span>活动列表</span><a href="/index.php?e=adv/ad.create&amp;planid=0">新建广告</a></div>
      <div class="box-content">
        <table class="table">
          <thead>
          <tr>
            <th width="50">ID</th>
            <th width="260">浏览</th>
            <th>广告尺寸</th>
            <th>计划名称</th>
            <th>计费形式</th>
            <th>广告类型</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
         <?php foreach((array)$ads as $a) { 
		  		 $tpl = dr ( 'admin/adtpl.get_one', $a['adtplid']);
		  ?>
                    <tr class="d_a">
            <td><?php echo $a['adsid']?></td>
            <td>
             <?php                  
				  
				  if($a['plantype']=='cpm'){
					 echo "<a href='javascript:void(0)' onclick='tourl(\"".$a['url']."\")'>".$a['url']."</a>";
				  }else {
					$v = api ( 'ad.view', $a['adsid'],$a );
					if(!$v) {echo "无预览";}else { echo $v;}
				  }
				  
				 
				  ?></td>
            <td><?php echo  $a['width'].'x'.$a['height'];?></td>
            <td><?php echo $a['planname']?></td>
            <td><?php echo strtoupper($a['plantype'])?></td>
            <td><?php  echo $tpl['tplname']?></td>
            <td class="status"><span class="notification info_bg"><?php 
					if($a['planstatus'] != '1') $p['status'] =6;
			  		switch($a['status']){
						case 0:
							echo '<span class="notification error_bg">新增待审</span>';
							break;
						case 1:
							echo '<span class="notification error_bg">已被锁定</span>';
							break;
						case 2;
							echo '<span class="notification error_bg">修改待审</span>';
							break;
						case 3:
							echo '<span class="notification info_bg">活动</span>';
							break;
						case 4:
							echo '<span class="notification error_bg">已被锁定</span>';
						case 5:
							echo '<span class="notification error_bg">广告商未激活</span>';
						case 6:
							echo '<span class="notification error_bg">计划未激活</span>';
							
					} 
				?></span></td>
            <td> 
              <a href="<?php echo url("advertiser/ad.edit?adsid=".$a['adsid'])?>">编辑</a>
             </td>
          </tr>
                  </tbody>
                   <?php }?>
      </table>
  </div></div></div></div></div>
  <object id="ClCache" click="sendMsg" host="" width="0" height="0"></object></div></body></html>