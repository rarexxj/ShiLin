<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="swiper-container banner">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide"><img src="<?php echo static_file('m/img/ban.jpg'); ?>" alt=""></div>
		        <div class="swiper-slide"><img src="<?php echo static_file('m/img/ban.jpg'); ?>" alt=""></div>
		        <div class="swiper-slide"><img src="<?php echo static_file('m/img/ban.jpg'); ?>" alt=""></div>
		        <div class="swiper-slide"><img src="<?php echo static_file('m/img/ban.jpg'); ?>" alt=""></div>
		        <div class="swiper-slide"><img src="<?php echo static_file('m/img/ban.jpg'); ?>" alt=""></div>
		        <div class="swiper-slide"><img src="<?php echo static_file('m/img/ban.jpg'); ?>" alt=""></div>
		    </div>
		    <div class="swiper-pagination"></div>
		</div>
		<div class="recom w92">
			<h2>推荐产品</h2>
			<ul class="reclist f-cb">
					<li>
						<a href="<?php echo site_url('press/pinfo'); ?>">
							<div class="imgbox">
								<img src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
							</div>
							<p>APSL型311系列精密
			压力校验仪</p>
						</a>
					</li>
				<li>
						<a href="<?php echo site_url('press/pinfo'); ?>">
							<div class="imgbox">
								<img src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
							</div>
							<p>APSL型311系列精密
			压力校验仪</p>
						</a>
					</li>
				<li>
						<a href="<?php echo site_url('press/pinfo'); ?>">
							<div class="imgbox">
								<img src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
							</div>
							<p>APSL型311系列精密
			压力校验仪</p>
						</a>
					</li>
				<li>
						<a href="<?php echo site_url('press/pinfo'); ?>">
							<div class="imgbox">
								<img src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
							</div>
							<p>APSL型311系列精密
			压力校验仪</p>
						</a>
					</li>
			</ul>
		</div>

    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	var mySwiper = new Swiper('.swiper-container',{
			pagination : '.swiper-pagination',
			paginationClickable :true,
			autoplay :2000,
			loop : true,
	})
	$(".reclist li:odd").addClass("odd");
})
</script>
</body>
</html>