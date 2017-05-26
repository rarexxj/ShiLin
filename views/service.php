<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    	<div class="serwrap por">
    		<div class="service w92 f-cb">
    			<a class="fl" href="<?php echo site_url('service'); ?>">售后服务</a>
    			<div class="selsan fr"></div>
    		</div>
			 <div class="selnav">
                <a class="on" href="<?php echo site_url('service'); ?>">
                    售后服务
                </a>
                <a href="<?php echo site_url('service/download'); ?>">
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
    	<div class="sermain w92">
    		<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp说起服务,大家想到的就是维修,其实维修只是服务的一部分。售前和售中的服务需要更专业的知识。石林已经从简单卖产品上升到为用户提供解决方案。提供优秀的解决方案需要专业素质。石林并不是仅仅将自己视为设备供应商，而是将自己视为用户的合作伙伴。</p>
    		<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp公司设有专门的技术支持部解答用户使用中的问题， 有数名以上的服务工程师不定期走访用户，对用户进行指导和培训。</p>
    		<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp产品的维修是用户真正头疼的问题,特别是购买过国外产品的用户有深切的体会,修理费用不仅昂贵,而且修理时间甚至长达半年。为了更好地为用户服务，石林开通了服务电话4008-601-107。
				</p>
				
			<h2>服务的范围</h2>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp按需方要求，所有货物按照合同规定的时间交付到位完成安装调试。在设计生产阶段严格按照ISO9001质量管理体系的要求进行，同时欢迎需方代表到场监督。在交货、安装调试阶段，我公司技术人员在现场进行讲解、指导及技术培训服务。试运行及性能考核阶段，随时提供技术咨询服务。
			</p>
			
			<h2>服务的深度以及服务管理：</h2>
			<p>1、本公司向顾客提供的服务包括:</p>
			<p>2、建立顾客档案；</p>
			<p>3、接待顾客来访，处理顾客来函、来电；</p>
			<p>4、处理顾客投诉；</p>
			<p>5、提供顾客产品质量证明、产品使用说明及使用培训；</p>
			<p>6、不定期走访顾客；</p>
			<p>7、现场技术服务。</p>
			<h2>服务的实施与验证</h2>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp顾客来访时，市场部安排陪同，听取顾客意见，尽量满足顾客需求，顾客需求涉及其它相关职能部门时，由管理者代表予以协调。</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 顾客来函、来电时，由销售人员负责提供顾客质量信息，尽量满足顾客需求。对顾客来访、来函、来电中提出的质量改进意见予以记录在《质量信息反馈表》上呈报管理者代表。</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp市场部建立顾客档案，销售人员定期以电话问询问或实地拜访的形式走访顾客，了解顾客的意见与需求，对顾客提出的质量改进意见记录在《质量信息反馈表》上呈报管理者代表。</p>
			<h2>顾客质量投诉的处理</h2>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp质量投诉发生时，销售人员将顾客投诉内容、顾客的要求及与顾客协调的处理办法记录在《顾客质量投诉处理记录表》上呈报管理者代表。并将《顾客质量投诉处理记录表》转交技术部处理。</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp技术部对顾客进行现场服务、分析投诉产生的原因，并实施纠正措施。并按《纠正和预防措施程序》的规定拟定相关的纠正预防措施报管理者代表审批。</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp客诉处理结果由管理者代表提交管理评审会议讨论。</p>
			<h2>试运行期间设备的保障</h2>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp设备发生需要我公司提供技术咨询或现场服务的情况，我公司在24小时内响应买方。</p>

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