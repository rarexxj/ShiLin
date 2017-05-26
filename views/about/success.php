<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('about/success'); ?>">公司业绩</a>
    			<div class="selsan fr"></div>
    		</div>
			 <div class="selnav">
                <a  href="<?php echo site_url('about'); ?>">
                    公司荣誉
                </a>
                <a class="on" href="<?php echo site_url('about/success '); ?>">
                    公司业绩
                </a>
                <a href="<?php echo site_url('about/job'); ?>">
                    企业招聘
                </a>
            </div>
    	</div>
        <div class="sucwrap">
            <p>杭州石林的客户主要来自电力、石油化工、冶金、军工
机械、计量等领域。</p>
                <div class="success f-cb por" id="success">
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/su1.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s6.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/su1.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s7.jpg'); ?>" alt="">
                    </div>
                     <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s8.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/ban.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/su2.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/su2.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s8.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s6.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s8.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s7.jpg'); ?>" alt="">
                    </div>
                     <div class="suclist">
                        <img  src="<?php echo static_file('m/img/s8.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/ban.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/su2.jpg'); ?>" alt="">
                    </div>
                    <div class="suclist">
                        <img  src="<?php echo static_file('m/img/su2.jpg'); ?>" alt="">
                    </div>
                </div>
        </div>
        
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
    echo static_file('m/js/blocksit.min.js');
	echo static_file('m/js/main.js');
?>
<script>
$(function(){
	$(".service").click(function(){
		$(".selnav").slideToggle();
	})

     $('#success').BlocksIt({
         numOfCol:2,
        offsetX: 5,
        offsetY:5

    });
	
})
</script>
</body>
</html>