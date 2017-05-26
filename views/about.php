<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('about'); ?>">公司荣誉</a>
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
        <div class="horwrap">
            <div class="honor f-cb por" id="honor">
                <div class="holist">
                    <img   src="<?php echo static_file('m/img/y83.jpg'); ?>" alt="">
                </div>
                <div class="holist">
                    <img  src="<?php echo static_file('m/img/img5.jpg'); ?>" alt="">
                </div>
                <div class="holist">
                    <img  src="<?php echo static_file('m/img/img5.jpg'); ?>" alt="">
                </div>
                <div class="holist">
                    <img  src="<?php echo static_file('m/img/img2.jpg'); ?>" alt="">
                </div>
                 <div class="holist">
                    <img  src="<?php echo static_file('m/img/y811.jpg'); ?>" alt="">
                </div>
                <div class="holist">
                    <img  src="<?php echo static_file('m/img/ban.jpg'); ?>" alt="">
                </div>
                <div class="holist">
                    <img  src="<?php echo static_file('m/img/s1.jpg'); ?>" alt="">
                </div>
                <div class="holist">
                    <img  src="<?php echo static_file('m/img/p3.jpg'); ?>" alt="">
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
     $('#honor').BlocksIt({
                            numOfCol:2,
                            offsetX: 5,
                            offsetY:5
                    });

    $(window).resize(function(){
        $('#honor').BlocksIt({
                     numOfCol:2,
                    offsetX: 5,
                    offsetY:5

                });
    });
  
    var NewUrl = "<?php echo site_url('about/ho_ajax'); ?> ";
    var flagPage=true;
    var p = 1;
    $(window).scroll(function(){
        var load = false;
        // 当滚动到最底部时， 加载新内容

        if ($(document).height() - $(this).scrollTop() - $(this).height() < 50 && flagPage==true) {
            flagPage=false;
            p += 1; //下一页
            
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
                    $('.honor').append(html);
                    $(".honor").find("img").on("load",function(){
                     $('#honor').BlocksIt({
                            numOfCol:2,
                            offsetX: 5,
                            offsetY:5
                    });

                })
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