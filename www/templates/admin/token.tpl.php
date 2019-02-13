<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/css/jquery.min.js"></script>
  <script src="/css/bootstrap.min.js"></script>
</head>
<body>
<div class="row page-content with-menu">
<div id="menuActions">
 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  新建
</button>
<a href="<?php echo url('admin/settings.get_list')?>" class="btn btn-primary btn-lg">首页</a>
</div>
</div>
<div class="main" style="margin:0 auto;">
  <div class="panel">
    <table class="table table-data table-hover text-center table-fixed">
      <thead>
        <tr class="text-center">
          <th class="w-150px text-center">编号</th>
          <th class="w-150px text-center">名称</th>
          <th class="w-150px text-center">CPM</th>
          <th class="w-100px text-center">状态</th>
          <th class="w-100px text-center">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($token as $v){?>
        <tr>
          <td class="text-center"><?php echo $v['id']?></td>
          <td class="text-center"><?php echo $v['username']?></td>
          <td class="text-center"><?php echo $v['cpm']?></td>
          <td class="text-center">
            <span style="background:#058dc7;padding:2px 6px;font-size:2px;color:#fff;border-radius: 4px;">活动</span>
          </td>
          <td>
            <a href="<?php echo url('admin/tongji.lock').'&id='.$v['id']?>" <?php if($v['status']==0){?>style="background:red;"<?php }?>></a>
            <a href="" data-toggle="modal" data-target="#gaimyModal" onclick="token(<?php echo $v['id']?>)">编辑</a>
            <a href="javascript:void(0)" url="<?php echo url('admin/tongji.del').'&id='.$v['id']?>" class="tokenDeleter">删除</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          新建token
        </h4>
      </div>
      <div class="panel-body">
  <form method="post" action="<?php echo url('admin/tongji.add_post_token')?>">
    <table class="table table-form table-condensed">
      <tbody><tr>
        <th class="w-100px">名称</th>
        <td><div class="required required-wrapper"></div><input type="text" name="name" id="name" value="" autocomplete="off" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>密码</th>
        <td><div class="required required-wrapper"></div><input type="text" name="pwd" value="" autocomplete="off" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>Token</th>
        <td><div class="required required-wrapper"></div><input type="text" name="token" value="" autocomplete="off" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>CPM</th>
        <td><input type="text" name="cpm" value="1000" autocomplete="off" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>执行文件</th>
        <td>
          <select name="order" id="" class="form-control">
            <option value="1">1:dmeo.php</option>
            <option value="2">2:demo2.php</option>
            <option value="3">3:demo3.php</option>
          </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <td clospan="2"> <button type="submit" id="submit" class="btn btn-primary" data-loading="稍候...">保存</button>
        </td>
      </tr>
    </tbody></table>
  </form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
<div class="modal fade" id="gaimyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          编辑token
        </h4>
      </div>
      <div class="modal-body">

<div class="panel-body">
    <form id="/*ajaxForm*/" method="post" action="<?php echo url('admin/tongji.update_post_token')?>">
    <table class="table table-form table-condensed">
      <tbody><tr>
        <th class="w-100px">名称</th>
        <input type="hidden" name="id" id="id">
        <td><div class="required required-wrapper"></div><input type="text" name="name" id='username' value="" autocomplete="off" class="form-control name">
</td>
        <td></td>
      </tr>
      <tr>
        <th>密码</th>
        <td><div class="required required-wrapper"></div><input type="password" name="pwd" id="pwd" value="dsada" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>Token</th>
        <td><div class="required required-wrapper"></div><input type="password" id="token" name="token" value="" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>CPM</th>
        <td><input type="text" name="cpm" id="cpm" value="" autocomplete="off" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>执行文件</th>
        <td>
          <select name="order" class="form-control torder">
            <option value="1">1:demo.php</option>
            <option value="2">2:demo2.php</option>
            <option value="3">3:deno3.php</option>
          </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <th></th>
        <td clospan="2">
           <button type="submit" class="btn btn-primary" data-loading="稍候...">保存</button>          <a href="javascript:void(-1);" class="btn btn-back" id="t-cut" t="pwd">点击查看</a>
        </td>
      </tr>
    </tbody></table>
  </form>
</div>
<script type="text/javascript">
  $(function(){
    $(".tokenDeleter").click(function(){
      var turl = $(this).attr("url");
      var isation = confirm("确定删除吗？");
      if(isation==true){
        window.location.href=turl;
      }
    })
  })
</script>
<script type="text/javascript">
$(function(){
  $("#t-cut").click(function(){
    var t = $(this).attr("t");
    if(t=="pwd"){
      $("#pwd").attr("type","text");
      $("#token").attr("type","text");
      $(this).attr("t","text").text("点击隐藏");
    }else if(t=="text"){
      $("#pwd").attr("type","password");
      $("#token").attr("type","password");
      $(this).attr("t","pwd").text("点击查看");
    }
    console.log(t);
  })

})
</script>
<script type="text/javascript">
  function token(id){
    var url = "<?php echo url('admin/tongji.update_post_token')?>";
    //设置ajax请求为异步
    $.ajaxSettings.async = false;
    $.get(url,{id:id},function(data){
      //返回的JSON数据转换
      var obj = $.parseJSON(data);
      $('#username').val(obj.username);
      $('#id').val(obj.id);
      $('#pwd').val(obj.password);
      $('#token').val(obj.token);
      $('#cpm').val(obj.cpm);
      $(".torder option[value='"+obj.torder+"']").attr("selected","selected");
    });
  }
</script>
</div>
</body>
</html>