<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/common.css" rel="stylesheet">
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/style_2016.css" rel="stylesheet">
<link type="text/css" href="<?php echo SRC_TPL_DIR?>/images/iconfont.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/images/slideshow.js"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/bigfoucs.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/image-switch.js" type="text/javascript"></script>
<script src="<?php echo SRC_TPL_DIR?>/images/sliderlite.js" type="text/javascript"></script>
</head>
<body>

  <?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
  <div class="banner_460 page_faq">   
  </div>
  <!--page_banner end-->
  
  <div class="container">
    <div class="bread_crumbs">
      <div class="w1200">
        <p>帮助中心</p>
      </div>
    </div><!--liucheng end-->
    
    <div class="block about_container clearfix">
      <div class="w1200">
        <div class="block_left">
          <ul class="menu" id="tags">
            <li class="current"><a onclick="selectTag(&#39;tagContent0&#39;,this)" href="javascript:void(0)">账户问题</a></li>
            <li class=""><a onclick="selectTag(&#39;tagContent1&#39;,this)" href="javascript:void(0)">广告主问题</a></li>
            <li class=""><a onclick="selectTag(&#39;tagContent2&#39;,this)" href="javascript:void(0)">媒介主问题</a></li>
          </ul>
        </div><!--左侧菜单 结束-->
        <div class="block_right">
          <div class="faq_container" id="tagContent0" style="display: block;">
            <ul class="faq_list">
              <li class="clearfix">
                <span class="action" jid="1"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如何注册行者移动账户？</a></span>
                <div class="faq_content" id="1">
                  <p>(1)点击  http://www.xinzhe.cc 【首页】用户登录框右下角【立即注册】按钮，即可进入注册页面</p>
                  <p>(2) 在注册页面中填写相关信息，点击”接受协议并提交”。</p>
                  <p>(3) 登录填写的邮箱，打开邮件中的验证链接来完成邮箱的验证。邮箱验证后，您就可以使用行者移动提供的各种服务了。如果您在数分钟之内没有收到我们的邮件，请及时联系我们。</p>
                </div>
              </li>
              <li class="clearfix">
                 <span class="action" jid="2"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>忘记密码时怎么办？</a>
                <div class="faq_content" style="display:none;" id="2">
                  <p>(1) 点击 http://www.xinzhe.cc 页面右上角的"登录"，在登录页面中点击"找回密码"。</p>
                  <p>(2) 输入您注册时填写的邮箱地址，点击"提交"按钮。</p>
                  <p>(3) 登录您的邮箱，打开邮件中的重置密码链接，然后在页面中完成账户密码的重置。如果您在重置密码过程中遇到任何问题，请及时联系我们。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="3"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如何修改密码？</a>
                <div class="faq_content" style="display:none;" id="3">
                  <p>(1) 登录行者移动用户后台，然后点击导航栏中的"个人设置"。</p>
                  <p>(2) 点击"修改密码"选项卡，输入新密码及确认密码。</p>
                  <p>(3) 点击"修改密码"按钮，以保存修改结果。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="4"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如何填写、修改账户信息？</a>
                <div class="faq_content" style="display:none;" id="4">
                  <p>(1) 登录行者移动用户后台，然后点击导航栏中的"个人设置"。</p>
                  <p>(2) 点击"更新资料"选项卡，然后在选项卡中点击"编辑我的信息"按钮。</p>
                  <p>(3) 在页面修改相关信息，并点击"保存信息"。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="5"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>个人账户和公司账户有什么不同？</a>
                <div class="faq_content" style="display:none;" id="5">
                  <p>个人账户和公司账户主要是税收政策的不同；其他的创建应用、应用管理等都是一样的。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="6"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如何转换账户角色？</a>
                <div class="faq_content" style="display:none;" id="6">
                  <p>如需转换账户角色（开发者/广告主），请与客服人员联系。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="7"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>被冻结的账户是否还能登录？</a>
                <div class="faq_content" style="display:none;" id="7">
                  <p>目前被冻结的账户无法再登录行者移动广告平台，您如果对此有什么异议可向客服人员询问。</p>
                </div>
              </span></li>
            </ul>
            <div class="pages">
             	 总共有<span class="txtOrange">7</span>条信息
            </div>
          </div><!--账户问题 结束-->
          <div class="faq_container" style="display: none;" id="tagContent1">
            <ul class="faq_list">
              <li class="clearfix">
                 <span class="action" jid="8"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>行者移动的广告投放到哪些媒体上？</a>
                <div class="faq_content" id="8">
                  <p>广告主的广告将直接投放到行者移动所有的合作媒体上，这些媒体包括全国性、行业性、地方性的各媒体网站，行者移动的合作媒体一直在不断增加，覆盖各个地区与行业，超大的访问量，注定超大的浏览点击率，宣传效果可见一斑。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="9"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>行者的广告样式有哪些？</a>
                <div class="faq_content" style="display:none;" id="9">
                  <p>（1）横幅广告</p>
                  <p>（2）固定位广告（图片、图文、网摘）</p>
                  <p>（3）插屏广告</p>
                  <p>（4）全屏广告</p>
                  <p>（5）信息流广告</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="10"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>广告如何计费？</a>
                <div class="faq_content" style="display:none;" id="10">
                  <p>本平台对于广告的收费分为每千次展示收费和单次点击收费，每千次展示收费和单次点击收费的基本标准是根据广告主创建的广告内容（是否有文字、图标、图片）、制定的投放目标（覆盖范围、精准程度、投放时间段）而给定的，即提供一个最低定价和一般定价区间，具体定价由广告主用户自主设定。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="11"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如果做到广告精准投放？</a>
                <div class="faq_content" style="display:none;" id="11">
                  <p>广告主用户创建广告时，可以填写投放目标信息，而开发者用户提交应用时会填写应用的相关信息，那么平台就会自动地将广告按照广告主制定的投放目标推送到跟该目标相符合的应用程序中，从而实现精准投放。其精准的程序包括广告投放到的应用类型、手机系统、手机品牌、地区、投放的时间段乃至使用手机的用户类别等。例如广告主指定投放目标时将广告投放到网络游戏中，那么该广告就将只出现在网络游戏中，不会出现在其他游戏或软件中。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="12"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>平台支持怎样的付款方式？</a>
                <div class="faq_content" style="display:none;" id="12">
                  <p>广告主用户可以通过网银转账、充值的方式向本平台的广告账户充入一定的金额，该金额将完全用于广告支出，平台会根据广告的展示千次数和点击次数对广告余额进行扣费。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="13"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如何查看广告效果？</a>
                <div class="faq_content" style="display:none;" id="13">
                  <p>广告主用户可以登录平台，进入广告主管理后台，查看“广告列表”查看广告统计，则可以看到自己的广告在某段时期或时间内的展示次数、点击次数和点击率等。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="14"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>如何控制广告费用？</a>
                <div class="faq_content" style="display:none;" id="14">
                  <p>为了控制广告费用，广告主用户可以制定“广告预算”，预算中包括每天的广告费用预算、每千次展示的价格和单次点击的价格，并且可以设定投放的时间段，从而来控制广告的支出。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="15"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>账户余额是否支持退款？</a>
                <div class="faq_content" style="display:none;" id="15">
                  <p>支持的，不过必须过去3个月内没有新的消耗，且该笔款项没有开过发票，与您的专属客服联系，申请退款即可。</p>
                </div>
              </span></li>
            </ul>
            <div class="pages">
              	总共有<span class="txtOrange">8</span>条信息
            </div>
          </div><!--广告主问题 结束-->
          <div class="faq_container" style="display: none;" id="tagContent2">
            <ul class="faq_list">
              <li class="clearfix">
                 <span class="action" jid="17"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>支持的应用类型有哪些？</a>
                <div class="faq_content" id="17">
                  <p>目前支持Android、iOS类应用以及wap网站；接下来将支持WP7类应用，敬请期待。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="18"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>是否支持积分墙类广告？</a>
                <div class="faq_content" id="18">
                  <p>支持。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="19"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>平台的计费方式有哪些？</a>
                <div class="faq_content" style="display: none;" id="19">
                  <p>行者移动支持主流的计费方式，包括 CPC、CPA、CPM。</p>
                </div>
              </span></li>
              <!-- <li class="clearfix">
                 <span class="action" jid="20"><a href="javascript:void(false);"><span class="right"><i class="iconfont">&#xe624;</i></span><i class="iconfont">&#xe628;</i>怎样创建新应用？</a>
                <div class="faq_content" style="display:none;" id="20">
                  <p>(1) 登录行者用户后台，然后点击导航栏中的"媒体管理"；</p>
                  <p>(2) 点击左侧"APP管理"选项卡，然后在选项卡中点击"创建APP"按钮；</p>
                  <p>(3) 进入页面后，选择对应的应用平台，并填写应用的描述信息；</p>
                  <p>(4) 下载对应的SDK，创建应用即完成，并得到对应的Publisher ID；</p>
                  <p>(5) Publisher ID仅能在对应的应用中使用，否则会被判定为作弊应用；</p>
                  <p>(6) 作弊应用中，广告点击有可能不产生收入。</p>
                </div>
              </li>
              <li class="clearfix">
                 <span class="action" jid="21"><a href="javascript:void(false);"><span class="right"><i class="iconfont">&#xe624;</i></span><i class="iconfont">&#xe628;</i>如何在应用中展示广告？</a>
                <div class="faq_content" style="display:none;" id="21">
                  <p>登录并填写应用程序信息，完成后即可进入对应SDK的下载页面；</p>
                  <p>点击下载SDK，下载的压缩包中包含开发说明文档和SDK文件，请根据开发说明文档中的详细步骤将SDK嵌入您的应用。</p>
                  <p>将嵌入SDK的应用上传到行者，并等待审核。通过审核之后，您的应用就能正常接收并展现广告了。</p>
                  <p>请注意：嵌入SDK但未通过审核的应用只能接收测试广告！</p>
                  <p>在您将SDK嵌入应用的过程中，请认真填写登记Publisher ID，这将作为识别您的应用的重要标识！Publisher ID嵌入对应的应用，将能使投放的广告与应用内容切合，提高广告的有效点击数， 从而提高您的的收入。</p>
                </div>
              </li>
             <li class="clearfix">
                 <span class="action" jid="22"><a href="javascript:void(false);"><span class="right"><i class="iconfont">&#xe624;</i></span><i class="iconfont">&#xe628;</i>怎样下载SDK？</a>
                <div class="faq_content" style="display:none;" id="22">
                  <p>(1) 创建新应用、填写应用信息后，即可直接下载相关类型的SDK；</p>
                  <p>(2) 或进入“媒介主”页面，下载所需类型的SDK。</p>
                </div>
              </li>
              <li class="clearfix">
                 <span class="action" jid="23"><a href="javascript:void(false);"><span class="right"><i class="iconfont">&#xe624;</i></span><i class="iconfont">&#xe628;</i>怎样申请PublishID？</a>
                <div class="faq_content" style="display:none;" id="23">
                  <p>目前被冻结的账户无法再登录行者广告平台，您如果对此有什么异议可向客服人员询问。</p>
                  <p>详见第四条“怎样创建新应用”，在创建应用完成后，即可得到PublishID。请注意PublishID仅能在对应的应用中使用。</p>
                </div>
              </li>
              --><li class="clearfix">
                 <span class="action" jid="24"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>怎样才能提款，提款有什么限制？</a>
                <div class="faq_content" style="display:none;" id="24">
                  <p>只要完成财务信息设置并通过身份审核，且账户余额达到100元便可以申请提款。提款金额必须小于或等于后台“可提款余额”的金额,且必须为正整数。</p>
                </div>
              </span></li>
              <li class="clearfix">
                 <span class="action" jid="25"><a href="javascript:void(false);"><span class="right"><i class="iconfont"></i></span><i class="iconfont"></i>提款申请的结算周期是？</a>
                <div class="faq_content" style="display:none;" id="25">
                  <p>我们每周审核上周一至上周日的提款申请，款项于周三汇出；每月最后一个星期三处理上周及之前的媒介提款请求并打款。如遇节假日则顺延处理（具体见相应公告）。</p>
                </div>
              </span></li>
            </ul>
            <div class="pages">
              总共有<span class="txtOrange">5</span>条信息
            </div>
          </div><!--媒介主问题 结束-->
        </div><!--右侧内容 结束-->
      </div>
    </div>

<script type="text/javascript">
function selectTag(showContent,selfObj){
	// 操作标签
	var tag = document.getElementById("tags").getElementsByTagName("li");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "current";
	// 操作内容
	for(i=0; j=document.getElementById("tagContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
}
			$(".action").each(function() {
				$(this).click(function() {
					var var1 = $(this).attr('jid');
					if (document.getElementById(var1).style.display == "none") {
						document.getElementById(var1).style.display = '';
					} else {
						document.getElementById(var1).style.display = "none";
					}
					return false;
				});
			});
</script>
</div>
<?php TPL::display('footer');?>
</body></html>