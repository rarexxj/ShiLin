<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('about/job'); ?>">企业招聘</a>
    			<div class="selsan fr"></div>
    		</div>
			 <div class="selnav">
                <a class="on" href="<?php echo site_url('about'); ?>">
                    公司荣誉
                </a>
                <a href="<?php echo site_url('about/success '); ?>">
                    公司业绩
                </a>
                <a href="<?php echo site_url('about/job'); ?>">
                    企业招聘
                </a>
            </div>
    	</div>
       <div class="jobinfo">
           <h2>招聘职位：生产部调试</h2>
            <p>要求：不限</p>
            <p>学历：高中以上</p>
            <p>男性，25-45，机械或电子相关专业者优先考虑，，勤恳好学</p>
       </div>
        
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
    
	echo static_file('m/js/main.js');
?>
<script>
$(function(){
	$(".service").click(function(){
		$(".selnav").slideToggle();
	})
	
})
</script>
</body>
</html>