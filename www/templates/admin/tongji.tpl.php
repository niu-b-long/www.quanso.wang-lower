<!DOCTYPE html>
<html>
<head>
	<title>系数添加</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/css/jquery.min.js"></script>
  <script src="/css/bootstrap.min.js"></script>
  <style>
  	.zpage_bt1 {
	border-top: 1px solid #ccc;
	padding-top: 10px;
}
.zpage_str {
	width: 38%;
	float: left;
	line-height: 30px;
}
.zpage {
	float: right;
}
.zpage li a {
	background: #fff;
	line-height: 24px;
	padding: 0 10px;
	float: left;
	border: 1px solid #ddd;
	border-left-width: 0;
}
.zpage .data {
	float: right;
	margin: 0;
	height: auto;
}
.zpage .data ul {
	margin-bottom: 0;
	margin-left: 0;
	padding-top: 3px;
}
.zpage .data ul li {
	display: inline;
}
.zpage .data ul li a {
	background: #fff;
	line-height: 24px;
	padding: 0 10px;
	float: left;
	border: 1px solid #ddd;
	border-left-width: 0;
}
.zpage .data .prev a {
	border-left-width: 1px;
	-webkit-border-bottom-left-radius: 4px;
	border-bottom-left-radius: 4px;
	-webkit-border-top-left-radius: 4px;
	border-top-left-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	-moz-border-radius-topleft: 4px;
}
.zpage .data .last a {
	-webkit-border-top-right-radius: 4px;
	border-top-right-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
	border-bottom-right-radius: 4px;
	-moz-border-radius-topright: 4px;
	-moz-border-radius-bottomright: 4px;
}
.zpage .data .active a {
	color: #666;
}
  </style>
</head>
<body>
	<div class="row page-content with-menu">
<div id="menuActions">
  <a href="<?php echo url('admin/tongji.add_post');?>" data-toggle="modal" class="btn btn-primary btn-lg">新建</a>
  <a href="<?php echo url('admin/settings.get_list')?>" class="btn btn-primary btn-lg">首页</a>
</div>
<div style="padding-left: 10px;background:#f1f1f1;border-bottom:1px solid #dcdcdc;margin-bottom:10px;overflow: auto; zoom: 1;border-radius:5px;">
  <form action="<?php echo url('admin/tongji.search')?>" method="post" style="margin:5px 0;">
    <label>搜索：</label>
    <input type="text" name="search" id="search" value="" class="form-control" style="display:inline-block;width:8%;">
    <select id="searchtype" name="searchtype" class="form-control" style="display:inline-block;width:8%;">
     <option value="uid" selected="">站长ID</option>
     <option value="zoneid">广告位ID</option>
     <option value="bid">百度ID</option>
    </select>
<!--     <select id="ztype" name="ztype" class="form-control" style="display:inline-block;width:6%;">
     <option value="" selected="">广告类型</option>
     <option value="cpc">CPC</option>
     <option value="cpv">CPV</option>
    </select> -->
    <input type="submit" id="subsettle" class="btn btn-primary" data-loading="稍候..." value="提交">
  </form>
</div>
<div style="background:#f1f1f1;border-bottom:1px solid #dcdcdc;padding:0;margin-bottom:10px;overflow: auto; zoom: 1;border-radius:5px;">
  <div style="float: left;margin:5px 34% 5px 10px;">
    <a href=""><button class="btn btn-success" type="button">系数管理</button></a>
    <!-- <a href=""><button class="btn " type="button">系数回收站</button></a> -->
  </div>
  <form action="" method="post" style="margin:5px 0;    display: inline-block;">
    所属账号：
    <select id="name" name="timerange" style="margin-top:5px;height: auto;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;padding: 5px;line-height: 20px;">
      <option>--请选择--</option>
    <?php foreach($token as $v){?>
        <option value="<?php echo $v['torder']?>" ><?php echo $v['username']?></option>
    <?php }?>
    </select>
  </form>
    <!-- <a href="javascript:void(0)" url="" style="float: right;margin:5px 5px 5px 0">一键整理</a>
  <a href="" class="btn btn-primary updateAll" style="float: right;margin:5px 5px 5px 0" data-toggle="modal">一键更新</a> -->
  </div>
<script>
  $(function(){
    $('#name').change(function(){
     // var u = ;
      var name = $('#name').val();
        location.href='index.php?e=admin/tongji.search&tid='+name;
    })
  })

</script>
<div class="main" style="margin:0 auto;">
  <div class="panel">
    <table class="table table-data table-hover text-center table-fixed">
      	<thead>
        	<tr class="text-center">
	          <th class="w-50px text-center">编号</th>
	          <th class="w-100px text-center">所属账号</th>
	          <th class="w-60px text-center">站长ID</th>
	          <th class="w-60px text-center">广告位ID</th>
	          <th class="w-100px text-center">广告类型</th>
	          <th class="w-100px text-center">广告尺寸</th>
	          <th class="w-100px text-center">百度ID</th>
	          <th class="w-80px text-center">计费类型</th>
	          <th class="w-60px text-center">结算系数</th>
	          <th class="w-100p text-centerx">佣金系数</th>
	          <th class="w-80px text-center">状态</th>
	          <th class="w-150px text-center">操作</th>
        	</tr>
      	</thead>
        <tbody>
        <?php foreach($coef as $v){?>
        	<tr>
		        <td class="text-center"><?php echo $v['id']?></td>
              <?php foreach($token as $tv){ ?>
              	<?php if($tv['torder'] == $v['tid']){ ?>
		        <td class="text-center"><?php echo $tv['username']?></td>
              <?php }?>
              <?php }?>
		        <td class="text-center"><?php echo $v['uid']?></td>
		        <td class="text-center">
	                <?php echo $v['zoneid']?>
	        	</td>
		        <td class="text-center"><?php switch($v['zonetype']){
                 case 1000:
                  echo "固定位置";
                  break;
                 case 1002:
                  echo "底部悬浮";
                  break;
                 case 1001:
                  echo "顶部悬浮";
                  break;
                 case 1003:
                  echo "侧漂";
                  break;
                }?>
  
          </td>
		        <td class="text-center">600x200</td>
		        <td class="text-center"><?php echo $v['bid']?></td>
		        <td class="text-center"><?php echo $v['type']?></td>
		        <td class="text-center"><?php echo $v['numcoef']?></td>
		        <td class="text-center"><?php echo $v['moneycoef']?></td>
		        <td class="text-center">
              <?php if($v['status'] == 1){?>
	                <span style="background:#058dc7;padding:2px 6px;font-size:2px;color:#fff;border-radius: 4px;">活动</span>
                  <?php }else{?>
                  <span style="background:red;padding:2px 6px;font-size:2px;color:#fff;border-radius: 4px;">已锁定</span>
                    <?php }?>
	            </td>
	        	<td>
	          	    <a href="javascript:void(0)" url="" class="coefNeaten"></a>
                  <a href="<?php echo url('admin/tongji.unlock_coef').'&id='.$v['id']?>">激活</a>
	          	    <a href="<?php echo url('admin/tongji.lock_coef').'&id='.$v['id']?>">锁定</a>
	                <a href="javascript:void(0)" data-toggle="modal" data-target="#gaimyModal" onclick="token(<?php echo $v['id']?>)">修改</a>
	              	<a href="javascript:void(0)" url="<?php echo url('admin/tongji.del_coef').'&id='.$v['id']?>" class="coefDeleter">删除</a>
	              	<a href="" class="original" uidkey="10" data-toggle="modal"></a>
	            </td>

      		</tr>
      		<?php }?>
        </tbody>
    </table>
    <div class="row"><?php echo $page->echoPage();?><div>
  </div>
</div>
<div class="modal fade" id="gaimyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          编辑系数
        </h4>
      </div>
      <div class="modal-body">
<div class="panel-body"> 
   <form id="/*ajaxForm*/" method="post" action="<?php echo url('admin/tongji.update_post')?>"> 
    <table class="table table-form table-condensed"> 
     <tbody>
      <tr> 
       <th>所属账号</th> 
       <td>
       <input type="hidden" id="id" name="id">
        <select name="tid" id="tid" class="form-control">
        <?php foreach($token as $v){?>
         <option value="<?php echo $v['id']?>"><?php echo $v['username']?></option>
        <?php }?>
          </select>
       </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th class="w-80px">站长ID</th> 
       <td>
        <div class="required required-wrapper"></div><input type="text" name="uid" id="uid"  autocomplete="off" class="form-control" /> </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>广告位ID</th> 
       <td>
        <div class="required required-wrapper"></div><input type="text" name="zoneid" id="zoneid"  autocomplete="off" class="form-control" /> </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>百度ID</th> 
       <td>
        <div class="required required-wrapper"></div><input type="text" name="bid" id="bid"  autocomplete="off" class="form-control" /> </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>计费类型</th> 
       <td> 
        <div class="required required-wrapper"></div> 
        <select name="type" id="type" class="form-control"> 
        <option value="cpc">CPC</option> 
        <option value="cpv">CPV</option> 
        <option value="uv">UV</option> 
         </select> 
        </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>佣金系数</th> 
       <td><input type="text" name="moneycoef" id="moneycoef" autocomplete="off" class="form-control" /> </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>广告类型</th> 
       <td>
        <select name="zonetype" id="zonetype" class="form-control">
         <option value="1000">固定位置</option>
         <option value="1002">底部悬浮</option> 
         <option value="1001">顶部悬浮</option> 
         <option value="1003">测浮</option> 
         <!--<option  value="直链">直链</option>
            <option  value="pc对联">pc对联</option>
            <option  value="pc右下角">pc右下角</option>-->
        </select> </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>广告尺寸</th> 
       <td> <select name="sizeid" id="sizeid" class="form-control"> <option selected="" value="1"> 600x200 </option> </select> </td> 
       <td></td> 
      </tr> 
      <tr> 
       <th>结算系数</th> 
       <td><input type="text" name="numcoef" id="numcoef" autocomplete="off" class="form-control" /> </td> 
       <td></td> 
      </tr> 
      <tr>
       <th></th>
       <td clospan="2"> <button type="submit" id="submit" class="btn btn-primary" data-loading="稍候...">保存</button></td>
      </tr> 
     </tbody>
    </table> 
   </form> 
  </div>
<script type="text/javascript">
  $(function(){
    $(".coefDeleter").click(function(){
      var turl = $(this).attr("url");
      var isation = confirm("确定删除吗？");
      if(isation==true){
        window.location.href=turl;
      }
    });
    
    $(".coefNeaten").click(function(){
      var turl = $(this).attr("url");
      var isation = confirm("确定整理余额吗？");
      if(isation==true){
        window.location.href=turl;
      }
    });
    $(".neatenAll").click(function(){
      var turl = $(this).attr("url");
      var isation = confirm("确定整理所有站长吗？");
      if(isation==true){
        window.location.href=turl;
      }
    })
  })
</script>
<script type="text/javascript">
  function token(id){
    var url = "<?php echo url('admin/tongji.update_post')?>";
    //设置ajax请求为异步
    $.ajaxSettings.async = false;
    $.get(url,{id:id},function(data){
      //返回的JSON数据转换
      var obj = $.parseJSON(data);
      $('#id').val(obj.id);
      $('#zoneid').val(obj.zoneid);
      $("#tid option[value='"+obj.tid+"']").attr("selected","selected");
      $('#uid').val(obj.uid);
      $('#bid').val(obj.bid);
      $("#type option[value='"+obj.type+"']").attr("selected","selected");
      $('#moneycoef').val(obj.moneycoef);
      $("#zonetype option[value='"+obj.zonetype+"']").attr("selected","selected");
      $('#numcoef').val(obj.numcoef);
      
      
    });
  }
</script>
</div>
</body>
</html>