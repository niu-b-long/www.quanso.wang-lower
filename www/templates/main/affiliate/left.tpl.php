<script type="text/javascript" src="<?php echo SRC_TPL_DIR?>/ad-skin/contabs.min.js"></script>
<style type="text/css">
.act{background:#233646;
</style>
<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;"><div class="sidebar-collapse" style="width: auto; height: 100%;">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="<?php echo SRC_TPL_DIR?>/ad-skin/profile_small.jpg"></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo url("affiliate/index.get_list")?>">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo $GLOBALS ['userinfo'] ["username"]?></strong></span>
                                </span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
<!--                                 <li><a href="form_avatar.html">修改头像</a> -->
<!--                                 </li> -->
                                
                            </ul>
                        </div>
                        <div class="logo-element"><?php echo $GLOBALS['C_ZYIIS']['sitename']?></div>
                    </li>
                     <li>
                        <a  href="/index.php?e=aff/index.get_list">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    
  		                <li><a href="<?php echo url("affiliate/site.get_list")?>"><i class="fa fa-internet-explorer"></i> <span class="nav-label">网站管理</span></a></li>
  		 				<li><a href="<?php echo url("affiliate/paylog.get_list")?>"><i class="fa fa-credit-card"></i> <span class="nav-label">付款记录</span></a></li>
  					  	<li><a href="<?php echo url("affiliate/zone.get_list")?>"><i class="fa fa-columns"></i> <span class="nav-label">广告位管理</span></a></li>
  					
			        
                  <li><a href="<?php echo url("affiliate/msg.get_list")?>"><i class="fa fa-envelope"></i> <span class="nav-label">公告列表</span></a></li>
                  
                  <li><a href="/index.php?e=aff/account.get_list"><i class="fa fa-credit-card"></i> <span class="nav-label">个人资料</span></a></li>
              <script type="text/javascript">
    
    $(document).ready(function() {

        $(".nav a").each(function() {

            $this = $(this);

            if ($this[0].href == String(window.location)) {

                $this.addClass("act");

            }

        });

    });
    
</script>
    


                </ul>
            </div>
            
            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 605px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.9; z-index: 90; right: 1px;"></div></div>
        </nav>