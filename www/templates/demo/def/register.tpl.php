<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册_<?php echo $GLOBALS['C_ZYIIS']['sitename']?></title>
<link rel="stylesheet" type="text/css" href="/images/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="/images/style.css">
<link rel="stylesheet" href="/images/style2.css">

<style>
  .tip{font:bold 14px/2.5 'microsoft yahei';}
  .qq_kf{margin: 10px 0 20px;}
  .qq_kf li{padding-left: 12px}
  .clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}
.clearfix:after {
  clear: both;
}
.clearfix {
  *zoom: 1; /*For IE 6&7 only*/
}
.pfl{float: left;
    margin-right: 20px;
    display: block;
    width: 90px;
    height: 40px;
    line-height: 40px;
    font-size: 14px;
    font-weight: bold;
    color: #000;
    text-align: center;
    border: 1px solid #a9a9a9;
    background: #f7f7f7;
    margin-top: 15px;
    margin-bottom: 14px;
    border-radius: 15px;
  }
.pfl_act{    border: 1px solid #ffab9a;
    background: #fff9eb;}
h1 strong{font:bold 16px/2 'microsoft yahei';color: #000}
.regfrom .f-ipt {
    float: left;
    line-height: 38px;
    width: 740px;
    padding-left: 10px;
    position: relative;
    padding-right: 10px;
}
.regfrom .f-tit {
    float: left;
    text-align: right;
    widtH: 110px;
    line-height: 38px;
    font-size: 16px;
    padding-right: 10px;
	margin-top:15px;
}

</style>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">

</head>
<body style="overflow-y:scroll; margin-top:0">
<?php if(!defined('IN_ZYADS')) exit(); 
TPL::display('header'); ?>
<script type="text/javascript" src="/images/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="/images/jquery.validate.js"></script>
    <script type="text/javascript" src="/images/additional-methods.js"></script>
	<div class="subbanner subbanner_register">
    <div class="wrapper">
        <div class="sub_obj_a cd-headline letters scale">
           
        </div>
        <div class="sub_obj_b cd-headline letters scale">
            
        </div>
    </div>
</div>

<form action="<?php echo url("demo.post_register");?>" method="POST" class="form-horizontal" id="form_b" >


  <table width="960" border="0" align="center" valign="middle" cellpadding="0" cellspacing="0" class="register" style="margin:auto;">
    <tbody><tr>
      <td>        <h1><strong>用户注册</strong></h1></td>

    </tr>
    <tr>
      <td style="color:#333" height="30">请填写下列表单信息，标<font color="#FF0000">*</font>为必填项目。</td>
    </tr>
    
    
        
    <tr>
       <td style="color:#333" height="30">选择要注册的媒体</td>
    </tr>
    <tr>
      <td height="40">
      <div class="regfrom">
	<ul class="clearfix">
	<ul class="leixing">
	<li><div class="f-tit">帐户类型：</div><div class="f-ipt regcate">
     <label class="pfl pfl_act" for="rd1">
       <?php if ( $GLOBALS['C_ZYIIS']['opne_affiliate_register']=='1'){?>
        <input style="transform: scale(1.7,1.7);" name="type" type="radio" value="1" class="r_type" checked />
        <strong style="margin-left:5px">站长</strong>
        <?php }?>
        </label>
                        <label class="pfl" for="rd2">
        <?php if ( $GLOBALS['C_ZYIIS']['opne_advertiser_register']=='1'){?>
        <input style="transform: scale(1.7,1.7);" type="radio" name="type" value="2" class="r_type"  <?php if ( $GLOBALS['C_ZYIIS']['opne_affiliate_register']!='1'){echo "checked";}?>/>
        <strong style="margin-left:5px">广告商</strong>
        <?php }?>
        </label>

		</div>
           
        
        </td>
    </tr>
    <script>
      $('input:radio[name=type]').change(function(event) {
        $('.pfl_act').removeClass('pfl_act')
        $('label').eq( $(this).val()-1).addClass('pfl_act')
      });
    </script>
    <tr>
      <td class="tip">用户名信息：请正确填写用户名信息，提供本人“真实QQ”，遇到产品下线，报毒等问题及时与你联系</td>
    </tr>
    <tr>
      <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="input_1">
          <tbody><tr>
            <td width="180"><font color="#FF0000">*</font>用户名称</td>
            <td><input type="text" name="username" id="username_ajax" class="input_text"></td>
          </tr>
          <tr>
            <td><font color="#FF0000">*</font>密码</td>
            <td><input type="password" name="password" id="password" class="input_text"></td>
          </tr>
          <tr>
            <td><font color="#FF0000">*</font>确认密码</td>
            <td><input type="password" name="passwordre" class="input_text"></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr>
      <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="input_1" style="margin-bottom: 15px">
          <tbody><tr>
            <td width="180" style="display: none"><font color="#FF0000">*</font>联系人</td>
            <td style="display: none"><input type="text" name="contact" class="input_text" value="客户"></td>
          </tr>
          <tr>
            <td style="display: none">电话</td>
            <td style="display: none"><input type="text" name="mobile" class="input_text" value="010"></td>
          </tr>
          <tr>
            <td width="180"><font color="#FF0000">*</font>QQ</td>
            <td><input type="text" name="qq" class="input_text"></td>
          </tr>
          <tr>
            <td width="180" style="display: none"><font color="#FF0000">*</font>Email</td>
            <td style="display: none"><input type="text" name="email" class="input_text" value="client@163lm.com"></td>
          </tr>
        </tbody></table></td>
    </tr>
    
      <tr class="aff_r">
        <td class="tip">收款帐号（推荐使用“支付宝”，请正确填写，注册后无法修改）</td>
      </tr>
      <tr class="aff_r">
        <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="input_1" style="margin-bottom: 15px">
            <tbody><tr>
              <td width="180"><font color="#FF0000">*</font>收款银行</td>
              <td class="f-tit"><div class="f-ipt"><select name="bankname" class='select' style="padding:5px; margin:0px"></div>
                  <?php foreach ($GLOBALS['c_bank'] as $b=>$v){ if(!$v[1]) continue;?>
                  <option value="<?php echo $v[0]?>"><?php echo $b?></option>
                  <?php }?>
                </select></td>
            </tr>
            <tr>
              <td><font color="#FF0000">*</font>收款姓名</td>
              <td><input type="text" name="accountname" class="input_text"></td>
            </tr>
            <tr>
              <td><font color="#FF0000">*</font>开户行</td>
              <td><input type="text" name="bankbranch" class="input_text" value=""></td>
            </tr>
            <tr>
              <td><font color="#FF0000">*</font>收款帐号</td>
              <td><input type="text" name="bankaccount" class="input_text"></td>
            </tr>
          </tbody></table></td>
      </tr>
             <tr class="aff_r">
        <td class="tip">选择一个为您服务的客服</td>
      </tr>
      <tr class="aff_r">
        <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="input_1">
            <tbody><tr>
              <td width="180">选择客服</td>
              <td><ul class="qq_kf clearfix">
                                   <?php foreach($serviceuser AS $s){?>
                   <li>
                     <input style="transform: scale(1.5,1.5);" name="serviceid" type="radio" value="<?php echo $s['uid']?>"   />
                     <span><?php echo $s['contact']?></span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $s['qq']?>&site=qq&menu=yes" style="padding-left:1px;"><img src="<?php echo SRC_TPL_DIR;?>/images/qqonline.gif" alt="点击这里给我发消息" border="0" align="absmiddle" title="点击这里给我发消息" /></a></li>
                  <?php }?>
                                  </ul></td>
            </tr>
          </tbody></table></td>
      </tr>
          
     
      
      <tr class="adv_r" style="display: none;">
        <td class="tip">选择一个为您服务的商务</td>
      </tr>
      <tr class="adv_r" style="display: none;">
        <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="input_1">
            <tbody><tr>
              <td width="180">选择商务</td>
              <td><ul class="qq_kf clearfix">
                                  <?php foreach($commercialuser AS $s){?>
                   <li>
                    <input style="transform: scale(1.5,1.5);" name="serviceid" type="radio" value="<?php echo $s['uid']?>"   />
                     <span><?php echo $s['contact']?></span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $s['qq']?>&site=qq&menu=yes" style="padding-left:1px;"><img src="<?php echo SRC_TPL_DIR;?>/images/qqonline.gif" alt="点击这里给我发消息" border="0" align="absmiddle" title="点击这里给我发消息" /></a></span></li>
                  <?php }?>
                                  </ul></td>
            </tr>
          </tbody></table></td>
      </tr>
          

    <tr>
      <td class="tip">验证码：请正确填写</td>
    </tr>
    <tr>
      <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="input_1">
          <tbody><tr>
            <td width="180"><font color="#FF0000">*</font>验证码</td>
            <td><input type="text" name="regcode" class="input_text">
              <img src="<?php echo url("index.codeimage")?>" align="absmiddle"  title= "看不清?请点击刷新验证码"  onclick="this.src='<?php echo url("index.codeimage?rand=")?>'+Math.random();"  style= "cursor:pointer;"/></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td><button class="f_submit" id="f_submit" type="submit">同意以下服务条款，提交注册信息</button>
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div style="background-color:#FAFAFA;border:1px solid #CCCCCC;height:100px; overflow:auto;padding:5px;text-align:left;width:900px; margin-left:2px"> 一、合作协议的确认和接纳<br />
            <?php echo $GLOBALS['C_ZYIIS']['sitename']?>（<?php echo $GLOBALS['C_ZYIIS']['siteurl']?>）所提供的合作项目的所有权和运作权归<?php echo $GLOBALS['C_ZYIIS']['sitename']?>所有。您通过完成注册程序并点击选择“同意以下服务条款，提交注册信息”，表示您与<?php echo $GLOBALS['C_ZYIIS']['sitename']?>网站签订本合作协议（下称“本合作协议”）并接受所有相关条款的约束，以及表示您成为<?php echo $GLOBALS['C_ZYIIS']['sitename']?>的成员（“联盟成员”）。
        <p></p>
        <p>二、 合作内容及费用说明<br />
                <?php echo $GLOBALS['C_ZYIIS']['sitename']?>成员注册成功后，即可登录系统，获得相关产品代码。联盟成员在其网站页面中嵌入其从系统中获得的产品代码后，该网站的访问者可以获得<?php echo $GLOBALS['C_ZYIIS']['sitename']?>提供的产品及/或相关服务。<br />
                <?php echo $GLOBALS['C_ZYIIS']['sitename']?>根据各种产品的不同计费方式统计带有联盟成员特征代码的产品流量，并按此流量向<?php echo $GLOBALS['C_ZYIIS']['sitename']?>成员支付相应合作费用。其各类产品收益模式及分成比例请登录后仔细阅读相关说明，合作费用支付以<?php echo $GLOBALS['C_ZYIIS']['sitename']?>（<?php echo $GLOBALS['C_ZYIIS']['siteurl']?>）网站上发布的标准为准，除非<?php echo $GLOBALS['C_ZYIIS']['sitename']?>与联盟成员间有另行约定并就此另行达成书面协议的。<?php echo $GLOBALS['C_ZYIIS']['sitename']?>有权根据联盟策略随时更改产品的收益模式、分成比例及结算策略，您在此同意始终遵守。</p>
        <p>关于违规及作弊<br />
          加<?php echo $GLOBALS['C_ZYIIS']['sitename']?>的成员，必须自觉遵守本合作协议，如发现任何违规或作弊行为，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>将停止付费并取消其联盟成员资格，同时保留进一步追究法律责任的权利。</p>
        <p>联盟代码能且只能投放在联盟成员提交的域名下，否则被视为违规投放。若要在多个网站或域名下投放联盟代码，须在注册成功后，在“会员管理中心”中登记所有投放<?php echo $GLOBALS['C_ZYIIS']['sitename']?>代码的域名。</p>
        <p>违规或作弊行为包含但不限于：<br />
          1. 任何形式的分拆代码：<br />
          联盟成员注册成功并经审核通过后，需要将从联盟获取的代码完整拷贝到相应页面，不能进行任何形式的代码分拆；<br />
          2. 通过人工及程序制造的无效点击提高流量：<br />
          1）当用户访问成员网站或鼠标经过联盟产品时，自动弹出联盟产品窗口；<br />
          2）通过代理服务器点击，互换点击等一切不产生任何效益的虚假无效点击；<br />
          3）其他无效点击形式；<br />
          3.<br />
          一切非正常投放的产品形式，一切以文字诱导或强制用户点击的行为：<br />
          1）非正当投放方式：<br />
          * 在无实质内容的页面全部投放<?php echo $GLOBALS['C_ZYIIS']['sitename']?>代码；<br />
          * 以电子邮件的形式制造产品点击； <br />
          2）利用文字诱导、强制用户点击或下载：<br />
          <br />
          如这样的描述：“点击此处，可成为本站VIP用户免费获得更多资源”</p>
        <p>三、联盟成员的注册规则<br />
          1. 联盟成员的用户名的管理：<br />
          A、联盟成员的用户名的注册及使用须遵守中华人民共和国的有关法律法规、尊重网络道德；<br />
          B、联盟成员的用户名不得含有任何威胁、恐吓、漫骂、庸俗、亵渎、色情、淫秽、非法、攻击性、伤害性、骚扰性、诽谤性、辱骂性的或其他侵害他人合法权益的信息；<br />
          C、联盟成员不得以任何方式盗用、冒充他人用户名；<br />
          D、如联盟成员违反上述规定，应自行承担相应法律后果；<?php echo $GLOBALS['C_ZYIIS']['sitename']?>有权在必要时采取相应措施以维护相关合法权益。<br />
          2.<br />
          联盟成员的帐号、密码和安全性：您一旦注册成功并经<?php echo $GLOBALS['C_ZYIIS']['sitename']?>审核通过，成为<?php echo $GLOBALS['C_ZYIIS']['sitename']?>的合法成员，将得到一个密码和用户名。联盟成员将对用户名和密码安全负全部责任，且联盟成员对以其用户名在<?php echo $GLOBALS['C_ZYIIS']['sitename']?>进行的所有行为承担全部责任。联盟成员必须保管好自己的用户名和密码，谨防被盗或泄露；如因保管不善导致帐号和密码被盗或泄露，联盟成员自行承担相应后果。如果联盟成员在发现有任何非法使用联盟成员帐号或安全漏洞的情况，可以立即通告<?php echo $GLOBALS['C_ZYIIS']['sitename']?>以协助处理。<br />
          3.<br />
          提供详尽、准确的个人资料，并不断更新注册资料，符合及时、详尽、准确的要求。真实的联盟成员资料将作为<?php echo $GLOBALS['C_ZYIIS']['sitename']?>提供服务的依据和联盟成员获得法律保障的前提。若联盟成员提供的资料包含有不正确的信息，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>保留停止向该联盟成员付费的权利，因虚假资料造成的任何损失，与<?php echo $GLOBALS['C_ZYIIS']['sitename']?>无关，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>不负任何责任。</p>
        <p>四、 隐私保护政策<br />
          每当联盟成员提供给<?php echo $GLOBALS['C_ZYIIS']['sitename']?>个人信息时，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>会采取合理的步骤保护联盟成员的个人信息，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>也会采取合理的安全手段保护已存储的个人信息。由于网上技术发展的突飞猛进，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>会随时更新并公布<?php echo $GLOBALS['C_ZYIIS']['sitename']?>的信息保密制度，除非以下三种情况外，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>不会在未经合法联盟成员授权时，公开、编辑或透露联盟成员资料及其它保存在<?php echo $GLOBALS['C_ZYIIS']['sitename']?>中的保密性内容：<br />
          1) 根据有关法律规定要求；<br />
          2) 有关权力机关要求；<br />
          3)<br />
          联盟成员授权（包括，如果联盟成员要求<?php echo $GLOBALS['C_ZYIIS']['sitename']?>提供特定服务时，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>则需要把联盟成员的姓名和地址提供给与此相关联的第三方如邮政服务单位）。</p>
        <p>五、 暂停与终止合作<br />
                <?php echo $GLOBALS['C_ZYIIS']['sitename']?>将根据联盟成员合作效果保留暂停或终止合作的权利。<br />
          任何经<?php echo $GLOBALS['C_ZYIIS']['sitename']?>确认已违反了合作协议的联盟成员，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>有权决定是否给予其暂停或终止合作的处理，对屡犯者将立即给予暂停合作或终止合作的处理。<br />
          <?php echo $GLOBALS['C_ZYIIS']['sitename']?>保留其单方暂停或终止本合作协议的权利。但若<?php echo $GLOBALS['C_ZYIIS']['sitename']?>单方决定终止的，应提前一个月通知。通知做出的形式依据本合作协议第七条的规定。</p>
        <p>六、 风险分担<br />
          联盟成员使用本网站将承担一定风险：<?php echo $GLOBALS['C_ZYIIS']['sitename']?>将不承担由于联盟成员自身过错、技术或其它不可控原因导致网站页面信息或其它方面的错误而给联盟成员造成的损失。</p>
        <p>七、 通知<br />
          所有发给联盟成员的通知都将通过网站页面的公告或电子邮件传送。协议条款的修改、服务变更、或其它重要事件的通知都会以此形式进行。</p>
        <p>八、 协议条款和资费标准的修改<br />
                <?php echo $GLOBALS['C_ZYIIS']['sitename']?>有权在必要时修改本合作协议条款的内容和合作资费标准，且该修改以符合国家法律法规的规定，并不侵害联盟成员的合法权益为必要前提。<?php echo $GLOBALS['C_ZYIIS']['sitename']?>合作协议条款一旦发生变动，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>将在网页上公布修改内容。修改后的合作协议一旦在网页上公布即有效代替原来的合作协议。您可随时造访<?php echo $GLOBALS['C_ZYIIS']['siteurl']?>查阅最新版合作协议。联盟成员若不同意合作协议改动的内容，可以主动退出<?php echo $GLOBALS['C_ZYIIS']['sitename']?>；若<?php echo $GLOBALS['C_ZYIIS']['sitename']?>没有收到联盟成员书面通知，明确表示其退出<?php echo $GLOBALS['C_ZYIIS']['sitename']?>的，则视为该联盟成员选择继续享用<?php echo $GLOBALS['C_ZYIIS']['sitename']?>服务，已接受该协议条款的变动并受变动后协议条款的约束。</p>
        <p>九、 法律适用<br />
          本合作协议条款应符合中华人民共和国法律法规的规定，联盟成员和<?php echo $GLOBALS['C_ZYIIS']['sitename']?>一致同意接受中华人民共和国法律的管辖。当本合作协议条款与中华人民共和国法律相抵触时，则这些条款将完全按法律规定重新解释或重新修订，而其它条款则依旧对<?php echo $GLOBALS['C_ZYIIS']['sitename']?>及联盟成员产生法律效力。</p>
        <p>十、 争议解决<br />
          与本合作协议有关的一切争议，双方应通过协商方式友好解决；如协商未果，应将争议提交北京仲裁委员会进行仲裁，该仲裁结果是终局的并对双方均有约束力。</p>
        <p>十一、<?php echo $GLOBALS['C_ZYIIS']['sitename']?>欢迎联盟成员对网站服务条款给予评论或提出质疑。<br />
                <?php echo $GLOBALS['C_ZYIIS']['sitename']?> 将根据网站发展的需求和技术的发展不断完善本合作协议。请将与本合作协议有关的所有评论或疑问发往a@zyiis.com。<br />
          警告： <br />
          对任何违反国家法律和<?php echo $GLOBALS['C_ZYIIS']['sitename']?>网站相应管理规定且侵害了<?php echo $GLOBALS['C_ZYIIS']['sitename']?>网站合法权益的行为，<?php echo $GLOBALS['C_ZYIIS']['sitename']?>将保留追究其法律责任的权利。</p>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody></table>
</form>

<script language="JavaScript" type="text/javascript">


$(".r_type").click(function() {
		var v=$(this).val();
		t_register(v)	;
});
t_register();
function t_register(v){  
	if(!v) var v = $("input:radio[@name='type'][@checked]").val(); 
	if(v == "1"){
		$(".aff_r").show();
		$(".adv_r").hide();
	}else {
		$(".aff_r").hide();
		$(".adv_r").show();
	} 
}

$("#form_b").validate({
        errorClass: "r_error",
        highlight: function(element) {
            $(element).closest('td').addClass("f_error");
        },
        unhighlight: function(element) {
            $(element).closest('td').removeClass("f_error");
        },
         
        rules: {
             username: {
                    required: true,
				      enum:true,
					remote:{  
					　　 type:"POST",
					　　 url:"<?php echo url("index.remote_user?repeat=y")?>",  
					　　 data:{
					　	　 username:function(){ 
							return $("#username_ajax").val();
							}
				　　 		} 
					},
					minlength:4
			　},
			 password: {
                    required: true
             },
			 passwordre: {
                    required: true,
					equalTo: "#password"
             },
             contact: {
                    required: true
             },
             email: {
                    required: true,
					email:true     
             },
             qq: {
                    required: false,
					digits:true,
					minlength:5
             }
			 ,
             accountname: {
                    required: true
             }
			 ,
             bankaccount: {
                    required: true
             }  ,
			 regcode: {
                    required: true
             }
        },
        messages: {
            username:{
					required:"用户名不能为空！",
					remote:"用户名已存在",
					minlength:"长度不能小于4个字符",
					enum:"请使用数字、26个英文字母或者下划线组成"
			 },
			password: {
                    required:"密码不能为空！"
                },
			passwordre: {
                    required:"请再一次输入密码！",
					equalTo:"两次输入的密码不一样！"
             },
             contact: {
                    required: "请填写联系人！",
             },
             email: {
                    required: "请填写Email！",
					email:"格式不正确"
             },
			  qq: {
					digits:"格式不正确",
					minlength:"长度不能小于5"
             },
             accountname: {
                    required: "请填写收款姓名！",
             }
			 ,
             bankaccount: {
                    required: "请填写收款人帐号！",
             } ,
			 regcode: {
                    required: "请填写验证码！",
             }
        },
        
        errorElement: 'span' ,
        errorPlacement: function(error, element) {
            var name = element.attr('name');  
            if (name == 'isok') {
                $('#ckinfo').append(error);
            } else {
                error.insertAfter(element);
            }
        }

    });
</script>
<div class="clear"></div>
 ﻿<?php TPL::display('footer');?>

</body></html>