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
                <a href="<?php echo site_url('about'); ?>">
                    公司荣誉
                </a>
                <a href="<?php echo site_url('about/success '); ?>">
                    公司业绩
                </a>
                <a class="on" href="<?php echo site_url('about/job'); ?>">
                    企业招聘
                </a>
            </div>
    	</div>
        <ul class="joblist">
            <li>
                 <a href="<?php echo site_url('about/jinfo'); ?>"><h2>生产部调试</h2></a>
                <p>招聘生产部调试员，一年以上工作经验。招聘生产部调
试员，一年以上工作经验。</p>
                <div class="f-cb tex">
                    <div class="fl data">2016-02-19</div>
                    <a class="fr" href="<?php echo site_url('about/jinfo'); ?>"><div class="more">More</div></a>
                </div>
            </li>
            <li>
                 <a href="<?php echo site_url('about/jinfo'); ?>"><h2>生产部调试</h2></a>
                <p>招聘生产部调试员，一年以上工作经验。招聘生产部调
试员，一年以上工作经验。</p>
                <div class="f-cb tex">
                    <div class="fl data">2016-02-19</div>
                     <a class="fr" href="<?php echo site_url('about/jinfo'); ?>"><div class="more">More</div></a>
                </div>
            </li>
            <li>
                 <a href="<?php echo site_url('about/jinfo'); ?>"><h2>生产部调试</h2></a>
                <p>招聘生产部调试员，一年以上工作经验。招聘生产部调
试员，一年以上工作经验。</p>
                <div class="f-cb tex">
                    <div class="fl data">2016-02-19</div>
                     <a class="fr" href="<?php echo site_url('about/jinfo'); ?>"><div class="more">More</div></a>
                </div>
            </li>
        </ul>
        
    <?php include_once VIEWS.'inc/footer.php'; ?>
<?php
    
	echo static_file('m/js/main.js');
?>
<script>
$(function(){
	$(".service").click(function(){
		$(".selnav").slideToggle();
	})
	$(".joblist li:first").css("borderTop","1px solid #ccc");

    var NewUrl = "<?php echo site_url('about/job_ajax'); ?> ";
    var flagPage=true;
    var p = 1;
    $(window).scroll(function(){
        var load = false;
        // 当滚动到最底部时， 加载新内容

        if ($(document).height() - $(this).scrollTop() - $(this).height() < 50 && flagPage==true) {
        flagPage=false;
        p += 1; //下一页
        //加载下一页
        console.log(p)
        if (load) {
            return;
        }
        load = true;
        $.ajax({
            url: NewUrl,
            data: { page: p},
            cache: false,
            dataType: 'html',
            success: function (html) {
                $('.joblist').append(html);
               
                if(html==""){
                    //没有数据
                     /*$('.more').hide();
*/
                }else{
                    setTimeout(function(){
                        flagPage=true;
                    },300)
                }
            },
            complete : function(){
                load = false;

            }
        });

        }
    });






})
</script>
</body>
</html>