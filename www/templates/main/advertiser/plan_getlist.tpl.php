<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--去掉 begin -->
<!--    	<link rel="stylesheet" href="--><!--/style/style.css">-->
    <!--去掉 end -->
    
    <title>计划管理-广告商后台</title>
    
    <link rel="stylesheet" href="/templates/main/ximg/home.css">
    <link rel="stylesheet" href="/templates/main/style/style.css">
</head>

<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="main" class="wrap" style="min-width: 1240px; height: 1210px;"><?php TPL::display('left');?>


<link rel="stylesheet" href="/templates/main/ximg/calendar.css" media="all" type="text/css">

<script>
    var newsTable=document.getElementById("news-table");
    if(newsTable){
        if(newsTable.offsetHeight<h-165){
            newsTable.style.height=h-169+"px";
        }
    }
    var newsTable1=document.getElementById("news-table1");
    if(newsTable1){
        if(newsTable1.offsetHeight<h-215){
            newsTable1.style.height=h-240+"px";
        }
    }
    setInterval(function(){
        var Con=document.getElementById("content");
        var h=document.documentElement.clientHeight;
        if(Con.offsetHeight+56>h){
            main.style.height=Con.offsetHeight+56+"px";
        }
    },100)
    /*var photoChange=document.getElementById("change-photo");
    var photo=document.getElementById("photo");
    var aLi=photoChange.getElementsByTagName("li");
    var photoCancel=document.getElementById("photo-cancel");
    var photoBtn=document.getElementById("photo-btn");
    photoCancel.onclick=function(){
        photoChange.style.display="none";
    }
    photo.onclick=function(){
        photoChange.style.display="block";
    }
    var now=0;
    for (var i =0;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onclick=function(){
            for (var i =0;i<aLi.length;i++){
                aLi[i].className="";
            }
            this.className="active";
            now=this.index;
        }
    }
    photoBtn.onclick=function(){
        photo.src=aLi[now].children[0].src;
        var phpUrl = $("#change-photo img").eq(now).attr("val");
        photoChange.style.display="none";
        var xhr=new XMLHttpRequest();
        // xhr.open("get","1php1.php?user=nishishabo&pass=123&"+new Date().getTime(),true);
        // xhr.send(null);
        xhr.open("get",'/adv/index.photo&id=15911&photo='+phpUrl,true);
        xhr.send(aLi[now].children[0].val);
        xhr.onreadystatechange=function(){
            if(xhr.readyState==4){
                if(xhr.status==200){
                    console.log(xhr.responseText)
                }else{
                    console.log("wrong"+xhr.status)
                }
            }
        }
    }*/
</script>
<script src="/templates/main/ximg/homead.js"></script><link rel="stylesheet" href="/templates/main/ximg/plan.css">



<div style="margin-left:50px; id="content">
  
  <div class="box" >
    <div class="box-title">
      <h3><i class="icon-table"></i>计划列表</h3>
      <div class="mt30" style=" height:10px; ">
   
   
  </div>
       <div class="actions" style="color: #08c;"> 
          <p>
             <a href="<?php echo url("advertiser/plan.create?type=".$type)?>">新建计划</a>
          </p>
          <p>&nbsp;</p>
       </div>
    </div>
     
    <div class="box-content">
      <table class="table plan_logo">
        <thead>
          <tr>
            <th>活动名称</th>
            <th width="80">类型</th>
            <th width="90">佣金</th>
            <th width="90">限额</th>
            <th width="90">分类</th>
            <th width="100">状态</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach((array)$plantype_list as $p) { 
		  			 $c =  dr ( 'main/class.get_one',(int)$p["classid"] );
		  ?>
          <tr class="d_a" >
            <td><table border="0" cellpadding="0" cellspacing="0" class="logo">
                <tr>
                  <td>
                 <?php echo $p['planname']?>&nbsp;&nbsp;&nbsp;&nbsp;结算：
                    <?php 
							if ($p['clearing'] == 'day') echo '日结';
							if ($p['clearing'] == 'week') echo '周结';
							if ($p['clearing'] == 'month') echo '月结';
							?></td>
                </tr>
                <tr>
                  
              </table></td>
            <td><?php echo strtoupper($p['plantype'])?></td>
            <td><?php 
					if ($p['plantype'] != 'cps') {
						echo abs($p['priceadv']).' 元';
					} else {
						if($p['gradeprice'] ==1 ) {
							echo '按类目分成';
						}else{
							echo abs($p['priceadv']).' %';
						}
					}
			?></td>
            <td><?php echo $p['budget']?></td>
            <td class="status"><?php echo $c['classname']?></td>
            <td class="status"><?php 
			  		switch($p['status']){
						case 0:
							echo '<span class="notification error_bg">待审</span>';
							break;
						case 1:
							echo '<span class="notification info_bg">活动</span>';
							break;
						case 2;
							echo '<span class="notification error_bg">锁定</span>';
							break;
						case 3:
							echo '<span class="notification error_bg">暂停中(限额)</span>';
							break;
						case 4:
							echo '<span class="notification error_bg">停止(过期或是余额不足)</span>';
						case 5:
							echo '<span class="notification error_bg">广告商未激活</span>';
						case 6:
							echo '<span class="notification error_bg">暂停中(修改)</span>';
							
					} 
				?></td>
            <td> 
              
             <a href="<?php echo url("advertiser/plan.edit?planid=".$p['planid'])?>">编辑</a>
             <a href="<?php echo url("advertiser/ad.get_list?planid=".$p['planid'])?>">查看广告</a> 
              <a href="<?php echo url("advertiser/ad.create?planid=".$p['planid'])?>">新建广告</a>
             </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div></div></div>
  
  <object id="ClCache" click="sendMsg" host="" width="0" height="0"></object></div></body></html>