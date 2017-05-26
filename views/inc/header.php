<header class="fixed">
	<div class="header">
		<div class="tognav"></div>
		<a class="logo" href="<?php echo site_url('welcome'); ?>"><img src="<?php echo static_file('m/img/logo.png'); ?>" alt=""></a>
		<div class="search"></div>
	</div>
	<div class="navwrap">
		<ul>        
			<li><a href="<?php echo site_url('welcome'); ?>">首页</a></li>
			<li><a href="<?php echo site_url('about'); ?>">关于石林</a></li>
			<li><a href="<?php echo site_url('press'); ?>">压力检定系统</a></li>
			<li><a href="<?php echo site_url('degrees'); ?>">温度检定系统</a></li>
			<li><a href="<?php echo site_url('multifun'); ?>">多功能校验仪</a></li>
			<li><a href="<?php echo site_url('other'); ?>">其它产品</a></li>
			<li><a href="<?php echo site_url('service'); ?>">服务与支持</a></li>
			<li><a href="<?php echo site_url('news'); ?>">新闻动态</a></li>
			<li><a href="<?php echo site_url('contact'); ?>">联系我们</a></li>
		</ul>
	</div>
	<div class="seamain f-cb">
		<input id="search" class="fl" type="text" placeholder="搜索">
		<input class="fr" type="submit" value="">
	</div>
</header>
 <div class="h100"></div>
<script>
	$(function(){
		window['adaptive'].desinWidth = 640;// 设计图宽度 
		window['adaptive'].baseFont = 24;// 没有缩放时的字体大小 
		window['adaptive'].init();// 调用初始化方法 
		$(".tognav").click(function(){
			if ($(this).hasClass("on")) {
				$(this).removeClass("on");
			$(".navwrap").removeClass("open");
			
			} else{
				$(this).addClass("on");
			$(".navwrap").addClass("open");
			
			};
			
		})
		$(".search").click(function(){
			if ($(".tognav").hasClass("on")) {
				$(".tognav").removeClass("on");
				$(".navwrap").removeClass("open");
			};
			$(".seamain").toggleClass("open");
		})

	})
</script>