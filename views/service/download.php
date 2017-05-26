<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('service/download'); ?>">文件资料</a>
    			<div class="selsan fr"></div>
    		</div>
            <div class="selnav">
                <a href="<?php echo site_url('service'); ?>">
                    售后服务
                </a>
                <a class="on" href="<?php echo site_url('service/download'); ?>">
                    文件资料
                </a>
                <a href="<?php echo site_url('service/dataload'); ?>">
                    资料下载
                </a>
                <a href="<?php echo site_url('service/question'); ?>">
                    问题解决
                </a>
            </div>
    	</div>
    	<ul class="downlist">
    		<li class="f-cb">
                <div class="fl">
                    <p >APSL601便携式全自动压力校验台选型画册</p>
                    <span>2016-09-14</span>
                </div>
                <a class="fr" href="javascript:;">下载</a>
    		</li>
            <li class="f-cb">
                <div class="fl">
                    <p >APSL601便携式全自动压力校验台选型画册</p>
                    <span>2016-09-14</span>
                </div>
                <a class="fr" href="javascript:;">下载</a>
            </li>
            <li class="f-cb">
                <div class="fl">
                    <p >APSL601便携式全自动压力校验台选型画册</p>
                    <span>2016-09-14</span>
                </div>
                <a class="fr" href="javascript:;">下载</a>
            </li>
            <li class="f-cb">
                <div class="fl">
                    <p >APSL601便携式全自动压力校验台选型画册</p>
                    <span>2016-09-14</span>
                </div>
                <a class="fr" href="javascript:;">下载</a>
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
    $(".downlist li:first").css("borderTop","1px solid #ccc")
})
</script>
</body>
</html>