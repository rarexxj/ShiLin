<footer>
	<div class="footer f-cb">
		<a class="tel" href="tel:4008601107"><em></em><span>电话</span></a>
		<a class="leave" href="<?php echo site_url('contact/message'); ?>"><em></em><span>留言</span></a>
		<a class="map" href="<?php echo site_url('map'); ?>"><em></em><span>地图</span></a>
		<a class="share" href="javascript:;?>"><em></em><span>分享</span></a>
	</div>
	<div class="shinfo">
		<span>分享到</span>
		 <div class="bdsharebuttonbox">
			<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
			<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">微博</a>
			<a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友">QQ</a>
			<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
		</div> 
		<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
		</script>
	</div>
	<div class="cover"></div>
</footer>
<script>
	$(function(){
		$(".share").click(function(){
			$(".shinfo").show();
			$(".cover").show();
		})
		$(".cover").click(function(){
			$(".shinfo").hide();
			$(this).hide();
		})
		$(".footer a:last").css("borderRight","none")
	})
</script>