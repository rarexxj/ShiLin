<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('multifun'); ?>">APSL型601便携式全自动压力校验台</a>
    			<div class="selsan fr"></div>
    		</div>
			 <div class="selnav">
                <a class="on" href="<?php echo site_url('multifun'); ?>">
                    APSL型601便携式全自动压力校验台  
                </a>
                <a href="<?php echo site_url('multifun'); ?>">
                    APSL型501系列全自动压力校验台
                </a>
                <a href="<?php echo site_url('multifun'); ?>">
                    APSL型701高静压差压全自动压力校
                </a>
                <a href="<?php echo site_url('multifun'); ?>">APSL型311系列精密压力校验仪</a>
                <a href="<?php echo site_url('multifun'); ?>">APSL型312系列精密数字压力表</a>
            </div>
    	</div>
    	<div class="w_presslist">
    		<ul class="presslist reclist f-cb" id="presslist">
				<li>
					<a href="<?php echo site_url('press/pinfo'); ?>">
						<div class="imgbox">
							<img width="270" height="233" src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
						</div>
						<p>APSL型311系列精密压力校验仪</p>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('press/pinfo'); ?>">
						<div class="imgbox">
							<img width="270" height="233" src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
						</div>
						<p>APSL型311系列精密压力校验仪</p>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('press/pinfo'); ?>">
						<div class="imgbox">
							<img width="270" height="233" src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
						</div>
						<p>APSL型311系列精密压力校验仪</p>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('press/pinfo'); ?>">
						<div class="imgbox">
							<img width="270" height="233" src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
						</div>
						<p>APSL型311系列精密压力校验仪</p>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('press/pinfo'); ?>">
						<div class="imgbox">
							<img width="270" height="233" src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
						</div>
						<p>APSL型311系列精密压力校验仪</p>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('press/pinfo'); ?>">
						<div class="imgbox">
							<img width="270" height="233" src="<?php echo static_file('m/img/w3.jpg'); ?>" alt="">
						</div>
						<p>APSL型311系列精密压力校验仪</p>
					</a>
				</li>
			</ul>
    	</div>
    	<div class="more">
    		<div class="moreinfo">加载更多</div>
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
	$("#presslist li:odd").addClass("odd");

	// 下拉加载
	var NewUrl = "<?php echo site_url('ajax/pro_ajax'); ?> ";
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
                $('.w_presslist ul').append(html);
               
                if(html==""){
                    //没有数据
                     $('.more').hide();

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