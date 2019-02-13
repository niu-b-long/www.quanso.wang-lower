<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--去掉 begin -->
<!--    	<link rel="stylesheet" href="--><!--/style/style.css">-->
    <!--去掉 end -->
    
    <title>广告商后台</title>
    <link rel="stylesheet" href="/templates/main/ximg/home.css">
</head>

<body>
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<div id="main" class="wrap" style="min-width: 1240px; height: 1277px;">
<?php TPL::display('left');?>
<script src="/templates/main/ximg/homead.js"></script><link rel="stylesheet" href="/templates/main/ximg/ads.css">

<div id="content">
  <h2>广告管理</h2>
  <div class="con-con">
    <select class="classification" name="choose_type" id="choose_type" onChange="location.href = this.options[selectedIndex].value">
		   所有计划 
              <option value="/adv/ad.get_list/planid-5679">所有计划</option>
          </select>
    <div class="main_container clearfix" id="news-table">
      <div class="box-title"><span>活动列表</span><a href="/index.php?e=adv/ad.create&amp;planid=0">新建广告</a></div>
      <div class="box-content">
        <table class="table">
          <thead>
          <tr>
            <th width="50">ID</th>
            <th width="260">浏览</th>
            <th>&nbsp;</th>
            <th>计划名称</th>
            <th>计费形式</th>
            <th>广告类型</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
                    <tr class="d_a">
            <td align="left" style="padding:20px; padding-left:10px">138</td>
            <td align="left" height="30"> 
                  <a href="javascript:void(0)" onClick="tourl(&quot;http://weitui.58sg.cn&quot;)">http://weitui.58sg.cn</a>                   </td>
            <td>0x0</td>
            <td>WiFi浮窗广告条</td>
            <td>CPM</td>
            <td>移动跳转（IOS、安卓等）</td>
            <td class="status"><span class="notification info_bg">新增待审</span></td>
            <td> 
              <a href="/index.php?e=adv/ad.edit&amp;adsid=138">编辑</a>
             </td>
          </tr>
                  </tbody>
      </table>
    </div>
  </div>
  <div id="apply_html" style="display:none">
    <table border="0" cellpadding="0" cellspacing="0" style="width:450px">
      <tbody><tr>
        <td height="40" colspan="3">选择需要申请广告的网站</td>
      </tr>
      <tr>
        <td width="100"><input name="applysiteidtype" type="radio" value="1" checked="checked">
          <input name="applyplanid" type="hidden" value="">
          全部网站</td>
        <td height="40"><input type="radio" name="applysiteidtype" value="2">
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
                  <th>名称</th>
                </tr>
              </thead>
              <tbody>
                                <tr>
                  <th colspan="2"><input type="checkbox" id="siteid_all">
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
    </tbody></table>
	
  </div>
  
  <div></div>
  
</div>


</div></div><div><object id="ClCache" click="sendMsg" host="" width="0" height="0"></object></div></body></html>