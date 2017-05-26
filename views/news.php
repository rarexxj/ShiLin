<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('news'); ?>">企业新闻</a>
    			<div class="selsan fr"></div>
    		</div>
    	</div>
        <ul class="nelist">
            <li class="f-cb">
                <a href="<?php echo site_url('news/info'); ?>">
                    <p class="fl">全国压力计量技术委员会</p>
                    <span class="fr">2015-09-24</span>
                </a>
            </li>
             <li class="f-cb">
                <a href="<?php echo site_url('news/info'); ?>">
                    <p class="fl">全国压力计量技术委员会年会召开</p>
                    <span class="fr">2015-09-24</span>
                </a>
            </li>
             <li class="f-cb">
                <a href="<?php echo site_url('news/info'); ?>">
                    <p class="fl">石林公司信用等级获评AAA级</p>
                    <span class="fr">2015-09-24</span>
                </a>
            </li>
             <li class="f-cb">
                <a href="<?php echo site_url('news/info'); ?>">
                    <p class="fl">中国质检出版教育培训中心联合全国...</p>
                    <span class="fr">2015-09-24</span>
                </a>
            </li>
             <li class="f-cb">
                <a href="<?php echo site_url('news/info'); ?>">
                    <p class="fl">我公司参加全国压力计量技术委员会</p>
                    <span class="fr">2015-09-24</span>
                </a>
            </li>
             <li class="f-cb">
                <a href="<?php echo site_url('news/info'); ?>">
                    <p class="fl">贵阳全国压力计量技术委员会规程...</p>
                    <span class="fr">2015-09-24</span>
                </a>
            </li>
        </ul>
      
        
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
    
	echo static_file('m/js/main.js');
?>
<script>
$(function(){
	$(".selsan").click(function(){
		$(".selnav").slideToggle();
	})
	
})
</script>
</body>
</html>