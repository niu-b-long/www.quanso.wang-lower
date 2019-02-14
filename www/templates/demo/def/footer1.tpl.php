<div class="section footer fp-auto-height fp-section" data-anchor="page5" style="height: 612px;">
		<div class="footer-link">
			<div class="center-wrap">
				<div class="clearfix">
					<dl>
						<dt>商务合作</dt>
						<dd><span>616447860</span></dd>
						<dd><b>jiangbangjie@emar.com</b></dd>
					</dl>

					<dl>
						<dt>媒体合作</dt>
						<dd><h5>15321591595</h5></dd>
						<dd><span>329994500</span></dd>
						<dd><b>wangzhining@emar.com</b></dd>
					</dl>

					<dl>
						<dt>联系我们</dt>
						<dd><h5>+86 10 89508058</h5></dd>
						<dd><abbr>北京朝阳区三间房东柳巷甲一号院意菲克大厦A座</abbr></dd>
					</dl>
                    
				</div>
			</div>
		</div>
		
		<div class="copyright center-wrap">
			<p>Copyright © 2016 – 2017Emar Inc. 亿玛公司 版权所有  京ICP备10001024号-18</p>
		</div>
	</div>
</div>

<script src="<?php echo SRC_TPL_DIR?>/images/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(function(){
        var $banner=$('.banner');
        var $banner_ul=$('.banner-img');
        var $btn=$('.banner-btn');
        var $btn_a=$btn.find('a')
        var v_width=$banner.width();
        
        var page=1;
        
        var timer=null;
        var btnClass=null;

        var page_count=$banner_ul.find('li').length;//把这个值赋给小圆点的个数
        
        var banner_cir="<li class='selected' href='#'><a></a></li>";
        for(var i=1;i<page_count;i++){
                //动态添加小圆点
                banner_cir+="<li><a href='#'></a></li>";
                }
        $('.banner-circle').append(banner_cir);
        
        var cirLeft=$('.banner-circle').width()*(-0.5);
        $('.banner-circle').css({'marginLeft':cirLeft});
        
        $banner_ul.width(page_count*v_width);
        
        function move(obj,classname){
                //手动及自动播放
        if(!$banner_ul.is(':animated')){
                if(classname=='prevBtn'){
                        if(page==1){
                                        $banner_ul.animate({left:-v_width*(page_count-1)});
                                        page=page_count; 
                                        cirMove();
                        }
                        else{
                                        $banner_ul.animate({left:'+='+v_width},"slow");
                                        page--;
                                        cirMove();
                        }        
                }
                else{
                        if(page==page_count){
                                        $banner_ul.animate({left:0});
                                        page=1;
                                        cirMove();
                                }
                        else{
                                        $banner_ul.animate({left:'-='+v_width},"slow");
                                        page++;
                                        cirMove();
                                }
                        }
                }
        }
        
        function cirMove(){
                //检测page的值，使当前的page与selected的小圆点一致
                $('.banner-circle li').eq(page-1).addClass('selected')
                           .siblings().removeClass('selected');
        }
        
        $banner.mouseover(function(){
                $btn.css({'display':'block'});
                clearInterval(timer);
                                }).mouseout(function(){
                $btn.css({'display':'none'});                
                clearInterval(timer);
                timer=setInterval(move,2000);
                                }).trigger("mouseout");//激活自动播放

        $btn_a.mouseover(function(){
                //实现透明渐变，阻止冒泡
                        $(this).animate({opacity:0.6},'fast');
                        $btn.css({'display':'block'});
                         return false;
                }).mouseleave(function(){
                        $(this).animate({opacity:0.3},'fast');
                        $btn.css({'display':'none'});
                         return false;
                }).click(function(){
                        //手动点击清除计时器
                        btnClass=this.className;
                        clearInterval(timer);
                        timer=setInterval(move,2000);
                        move($(this),this.className);
                });
                
        $('.banner-circle li').live('click',function(){
                        var index=$('.banner-circle li').index(this);
                        $banner_ul.animate({left:-v_width*index},'slow');
                        page=index+1;
                        cirMove();
                });
});
</script>
<script src="<?php echo SRC_TPL_DIR?>/images/jquery.fullPage.js"></script>
<script>
$(function(){
	var $mlNav = $('#aa');
	$('#dowebok').fullpage({

		verticalCentered: false,

		anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],

		navigation: true,

		navigationTooltips: ['首页', '投放优势', '合作伙伴', '成功案例', '联系我们'],
		
		menu: '.nav-bar'
	});
});
</script>


<div id="fp-nav" class="right" style="margin-top: -53.5px;"><ul><li><a href="http://jutui.vipmuse.com/#page1" class="active"><span></span></a><div class="fp-tooltip right">首页</div></li><li><a href="http://jutui.vipmuse.com/#page2"><span></span></a><div class="fp-tooltip right">投放优势</div></li><li><a href="http://jutui.vipmuse.com/#page3"><span></span></a><div class="fp-tooltip right">合作伙伴</div></li><li><a href="http://jutui.vipmuse.com/#page4"><span></span></a><div class="fp-tooltip right">成功案例</div></li><li><a href="http://jutui.vipmuse.com/#page5"><span></span></a><div class="fp-tooltip right">联系我们</div></li></ul></div>