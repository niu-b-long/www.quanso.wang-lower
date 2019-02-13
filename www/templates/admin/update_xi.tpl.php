<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div id="ajaxModal" class="modal modal-trigger  fade in" ref="/cdn/index.php?m=holiday&amp;f=coefcreate&amp;tid=1" aria-hidden="false" style="display: block;"><div class="icon icon-spin loader icon-spinner-indicator"></div><div class="modal-dialog" style="width: 700px; margin-top: 115.333px;">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>      <strong class="modal-title">新建系数</strong>
          </div>
    <div class="modal-body">
<!--<link rel="stylesheet" href="/js/datetimepicker/css/min.css?v=5.0" type="text/css" media="screen">
<link rel="stylesheet" href="/js/datetimepicker/css/min.css?v=5.0" type="text/css" media="print">
<script src="/js/datetimepicker/js/min.js?v=5.0" type="text/javascript"></script>-->
<style>
.only-pick-time table {width: 100%}
.only-pick-time table td {width: 150px}
.only-pick-time table > tfoot .today, .only-pick-time table > thead {display: none !important;}
</style>

<div class="panel-body">
  <form id="/*ajaxForm*/" method="post" action="<?php echo url('admin/tongji.add_post')?>">
    <table class="table table-form table-condensed">
      <tbody><tr>
        <th>所属账号</th>
        <td>
          <div class="required required-wrapper"></div>
          <select name="tid" id="tid" class="form-control">\
          	<?php foreach($token as $v){?>
                 <option selected="" value="<?php echo $v['torder']?>"><?php echo $v['username']?></option>
            <?php }?>
           </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <th class="w-80px">站长ID</th>
        <td><div class="required required-wrapper"></div><input type="text" name="uid" id="uid" value="" autocomplete="on" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>广告位ID</th>
        <td><div class="required required-wrapper"></div><input type="text" name="zoneid" id="zoneid" value="" autocomplete="on" class="form-control">
</td>
        <td></td>
      </tr>
      <tr>
        <th>百度ID</th>
        <td><div class="required required-wrapper"></div><input type="text" name="bid" id="bid" value="" autocomplete="on" class="form-control">
</td>
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
        <td><input type="text" name="moneycoef" id="moneycoef" value="1" autocomplete="on" class="form-control">
</td>
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
           	<!--<option value="直链">直链</option>
            <option value="pc对联">pc对联</option>
            <option value="pc右下角">pc右下角</option>-->
          </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <th>广告尺寸</th>
        <td>
          <select name="sizeid" id="sizeid" class="form-control">
                        <option value="1">
              600x200            </option>
                      </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <th>结算系数</th>
        <td><input type="text" name="numcoef" id="numcoef" value="1" autocomplete="on" class="form-control">
</td>
        <td></td>
      </tr>
      <tr><th></th><td clospan="2"> <button type="submit" id="submit" class="btn btn-primary" data-loading="稍候...">保存</button></td></tr>
    </tbody></table>
  </form>
</div>
    </div>
  </div>
</div></div>
</body>
</html>