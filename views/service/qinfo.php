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
    	<div class="queinfo">
            <h2>全国压力计量技术委员会年会召开</h2>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2016年7月12日~15日，全国压力计量技术委员会2016年宣贯会，在黑龙江省哈 尔宾市召开。</p>  
             <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp新修订的JJG860-2015《压力传感器（静态）》国家计量检定规程、新制定的JJG1107-2015《自动标准压力发生器》和新制定的JJF1107-2015《电阻应变式压力传感器》型评大纲已于2015年经国家质检总局发布并安排。</p>  
              <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp我公司经理王博出席会议。</p>
             
              <img src="<?php echo static_file('m/img/s1.jpg'); ?>" alt="">   
        </div>
        <div class="pawrappe">
            <div class="page f-cb">
                <a href="" class="up fl">上一页</a>
                <a href="" class="down fr">下一页</a>
            </div>
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
    $(".quelist li:first").css("borderTop","1px solid #ccc")
})
</script>
</body>
</html>