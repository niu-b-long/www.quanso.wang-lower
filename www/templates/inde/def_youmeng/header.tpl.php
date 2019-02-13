<div class="wrap">
  <div class="header fixed">
    <div class="topbar w1200">
      <div class="logo"><a href="http://www.xinzhe.cc/" title="行者移动广告平台"><img src="<?php echo SRC_TPL_DIR?>/images/qd_logo.png" title="行者移动广告平台"></a></div>
      <div class="nav">
      <ul class="nav_list"><li><a href="http://www.xinzhe.cc/">首页</a></li><li><a href="/index.php?e=index.advertiser">广告主</a></li><li><a href="/index.php?e=index.affiliate">媒介主</a></li><li><a href="/index.php?e=index.article_list">公告中心</a></li><li><a href="/index.php?e=index.help" >帮助中心</a></li><li><a href="/index.php?e=index.contact">关于我们</a></li><li><a href="/index.php?e=index.register">立即加入</a></li></ul>   </div>
    </div>
  </div>
  <script type="text/javascript">
    
    $(document).ready(function() {

        $(".nav a").each(function() {

            $this = $(this);

            if ($this[0].href == String(window.location)) {

                $this.addClass("current");

            }

        });

    });
    
</script>
