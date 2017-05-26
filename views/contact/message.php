<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('contact/message'); ?>">在线留言</a>
    			<div class="selsan fr"></div>
    		</div>
			 <div class="selnav">
                <a  href="<?php echo site_url('contact'); ?>">
                    联系我们
                </a>
                <a class="on" href="<?php echo site_url('contact/message'); ?>">
                    在线留言
                </a>
            </div>
    	</div>
        <div class="message">
            <h2>请留下联系方式，我们将第一时间联系您</h2>
            <form action="">
                <input type="text" placeholder="姓名">
                <input type="text" placeholder="邮件">
                <input type="text" placeholder="手机">
                <input type="text" placeholder="公司名">
                <textarea placeholder="内容"></textarea>
                <input type="submit" value="在线提交">
            </form>
        </div>
   
    	
    
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
	echo static_file('web/js/main.js');
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