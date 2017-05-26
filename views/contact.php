<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('contact'); ?>">联系我们</a>
    			<div class="selsan fr"></div>
    		</div>
			 <div class="selnav">
                <a class="on" href="<?php echo site_url('contact'); ?>">
                    联系我们
                </a>
                <a href="<?php echo site_url('contact/message'); ?>">
                    在线留言
                </a>
            </div>
    	</div>
    <div class="contact">
    	<p>地址 : 浙江省杭州市拱墅区景苑路4号A座402室</p>
		<p>电话：4008-601-107 &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp0571-88826538<br> 0571-88055638</p>
		<p>传真 : 0571-88806130</p>
		<p>邮箱 : shilin@hzshilin.com</p>
		<p>邮编 : 310011</p>
		<br>
		<p>杭州石林自动化工程有限公司是一家集科研、生产和经营于一体的高新技术产业公司。公司以“高新技术服务于社会”为宗旨，专门致力于高起点，高技术的自动化仪表及自控技术的开发和研究，并经销代理国际、国内先进的高新技术产品。</p>
		<p>我们的主要福利：</p>
		<p>五天八小时工作制，法定节假日严格按照国家规定休假。</p>
		<p>公司与员工签署正规劳动合同，通常试用期为3个月。
成绩优异者可竞选获得重要岗位和加薪。</p>
		<p>为员工缴纳社保，险种包括养老、失业、工伤、医疗和生育保险。</p>
		<p>中午提供免费的工作餐。</p>
		<p>通常无需加班，否则按国家规定支付相应倍数的加班费。</p>
		<p>正式员工可享受节假日福利、夏季高温福利等。</p>
		<p>不定期组织丰富的员工活动。</p>
		<p>给员工送生日礼物。</p>
		<p>正式员工可享受婚假、丧假、产假、等假期。</p>
		<p>有年终奖、合理化建议奖等各种奖励。</p>
		<p>温馨提示：您若有意加团队，请在投递简历后主动与公司人力资源部取得联系。</p>
		<p>招聘联系人：徐小姐　联系电话：4008-601-107</p>
		<p>Email：shilin@hzshilin.com</p>
    </div>
    <div class="traffic">
    	<div class="line">乘车路线</div>
    	<table>
    		<tr>
    			<th>起始位置</th>
    			<th>乘车路线</th>
    		</tr>
    		<tr>
    			<td>杭州机场</td>
    			<td>1、乘坐机场大巴到达武林门，换游8(Y8)路/188路，到“董家新村”站下车，或换155路/348路/333路，在“北大桥”站</td>
    		</tr>
    		<tr>
    			<td>杭州城
站火车站</td>
    			<td>1、乘坐地铁1号线武林门方向，武林广场站下车，换192路“董家新村”站，或换333路/B支1路到“北大桥”站。<br>
2、乘坐188路、90路到“董家新村”站。</td>
    		</tr>
    		<tr>
    			<td>杭州火
车东站</td>
    			<td>1、乘地铁1号线武林门方向，武林广场站下车，换192路/333路/B支1，到“董家新村”站。<br>
2、乘地铁1号线武林门方向，西湖文化广场站下车，换67路，到“北大桥”站。<br>
3、乘地铁1号线武林门方向，武林广场站下车，换348路，到“北大桥”站。</td>
    		</tr>
    		<tr>
    			<td>汽车北站</td>
    			<td>1、乘坐281路/348路/90路/B支1路/333路抵达“北大桥”站。<br>
2、乘坐333大站/67大站/15路大站/192/188路抵达“董家村”站。</td>
    		</tr>
    		<tr>
    			<td>汽车南站</td>
    			<td>1、乘地铁1号线武林门方向，武林广场站下车，换192路/333路，“董家新村”站下车。<br>
2 、乘地铁1号线武林门方向，武林广场站下车，换B支1路/348路，“北大桥”站下车。<br>
3、乘地铁1号线武林门方向，西湖文化广场站下车，换67路，到“北大桥”站。</td>
    		</tr>
    		<tr>
    			<td>汽车南站</td>
    			<td>1、乘77路，“教工路塘河路口”站下车<br>
2、乘70路/348路，到“北大桥”站。</td>
    		</tr>
    		<tr>
    			<td>汽车东站</td>
    			<td>1、乘坐B1，在“武林门北”站换乘333路/348路，抵达”北大桥“站。<br>
2、乘坐33路/B支3路，在闸弄口新村换乘B支1路，抵达”北大桥“站。</td>
    		</tr>
    	</table>
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
	$("table tr td").eq(0).css("width",'1.4rem');
	$("table tr td").eq(1).css("width",'4.45rem')
})
</script>
</body>
</html>