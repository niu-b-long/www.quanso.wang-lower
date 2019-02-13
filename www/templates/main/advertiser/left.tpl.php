<link rel="stylesheet" href="/templates/main/style/style.css">
<div id="side-bar">
    <div class="logo">
        <div></div>
        <h1>云都传媒</h1>
    </div>
    <div class="personal">
        <div class="photo"><img id="photo" src="/templates/main/ximg/photo.jpg" alt="头像"></div>
        <div class="user" style="width:161px;">
            <span id="userid"><?php echo $GLOBALS ['userinfo'] ["username"]?></span>
            <div class="setting" style="left:25px;">
                <a href="/?e=adv/account.get_list">账户设置</a>
                <a href="/?e=main/main.logout&amp;id=1214">立即注销</a>
            </div>
        </div>
    </div>
  
   <a href="/?e=adv/index.get_list"><i></i>平台概况</a>
    <a href="/?e=adv/plan.get_list"><i></i>计划管理</a>
   <a href="/?e=adv/ad.get_list"><i></i>广告管理</a>
   <!-- <a href="/?e=adv/xg.get_list"><i></i>效果报告</a> -->
  <a href="/?e=adv/paylog.get_list"><i></i>充值记录</a>
 <a href="/?e=adv/msg.get_list"><i></i>公告列表</a>
</div>

<script src="/templates/main/ximg/qie.js"></script>

