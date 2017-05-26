<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('service/question'); ?>">问题解决</a>
    			<div class="selsan fr"></div>
    		</div>
            <div class="selnav">
                <a href="<?php echo site_url('service'); ?>">
                    售后服务
                </a>
                <a href="<?php echo site_url('service/download'); ?>">
                    文件资料
                </a>
                <a href="<?php echo site_url('service/dataload'); ?>">
                    资料下载
                </a>
                <a class="on" href="<?php echo site_url('service/question'); ?>">
                    问题解决
                </a>
            </div>
    	</div>
    	<ul class="quelist">
    		<li class="f-cb">
    			<a href="<?php echo site_url('service/qinfo'); ?>">
    				<p class="fl">全自动压力校验台</p>
    				<span class="fr">2016-09-14</span>
    			</a>
    		</li>
    		<li class="f-cb">
    			<a href="<?php echo site_url('service/qinfo'); ?>">
    				<p class="fl">哪些原因会导致仪器测量不正确</p>
    				<span class="fr">2016-09-14</span>
    			</a>
    		</li>
    		<li class="f-cb">
    			<a href="<?php echo site_url('service/qinfo'); ?>">
    				<p class="fl">压力校验仪的正确使用方法</p>
    				<span class="fr">2016-09-14</span>
    			</a>
    		</li>
    		<li class="f-cb">
    			<a href="<?php echo site_url('service/qinfo'); ?>">
    				<p class="fl">全自动压力校验台</p>
    				<span class="fr">2016-09-14</span>
    			</a>
    		</li>
    		<li class="f-cb">
    			<a href="<?php echo site_url('service/qinfo'); ?>">
    				<p class="fl">哪些原因会导致仪器测量不正确</p>
    				<span class="fr">2016-09-14</span>
    			</a>
    		</li>
    		<li class="f-cb">
    			<a href="<?php echo site_url('service/qinfo'); ?>">
    				<p class="fl">压力校验仪的正确使用方法</p>
    				<span class="fr">2016-09-14</span>
    			</a>
    		</li>

    	</ul>
    
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	$(".service").click(function(){
        $(".selnav").slideToggle();
    })
    $(".quelist li:first").css("borderTop","1px solid #ccc")
})
</script>
</body>
</html>