<?php include 'resources/views/header.php'; ?>
<?php include 'resources/views/topnav_cn.php'; ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><img src="/cupload/images/home.png" style="width:20px; height:auto; margin-right:1em; vertical-align:-5px">首页</a></li>
				<li class="active">关於荣华</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- slider -->
	<div class="container">
	  <img src="cupload/images/slide4.jpg" style="width:100%"><br><br>
	</div>
<!-- //slider -->
<!-- about -->
<div class="container">
	<p style="color:#FB6703; font-size:32px">关於荣华</p><br><br>
	<p style="font-size:14px">
		香港荣华药业集团店始创于 1970 年，三代继承有近 46 年的历史，至今旗下药房药行共计接近 30 间，员工多于 250 名。分行遍布于荃湾、天水围、长沙湾、沙田、黄埔、观塘、将军澳、马鞍山、油塘、蓝田、深水埗等社区，致力服务香港市民大众，仅次于香港屈臣氏及万宁连锁店，是香港第三大药业连锁店。<br><br>

		荣华参茸中西药房多年来以「社区药房」为宗旨，除配药服务外，还针对性在不同社区提供中医应诊甚至免费代客煎药服务，只默默为街坊服务，从不在游客区开店，更加不会参予 “急功近利 ” 的宰客生意，历年来赢得无数街坊及商界伙伴的一致肯定与支持。<br><br>

		除零售业务，集团拥有批发进出口公司，同时自设中央仓，为集团旗下药房及集团以外的本地药房提供产品批发服务。<br><br>

		展望未来，集团会继续开拓更多不同零售渠道，为各区市民提供个人、家居卫生及家庭医护的生活所需；集团亦会配合时代发展，积极拓展网上购物平台，同时引入更多欧美澳日韩等地的优质商品，让市民选择更多。
	</p>
		<br><br>

	<div class="container">
		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<img src="cupload/images/RX.png" width="25%">
			<br><br><p>香港政府注册药房</p>
		</div>

		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<img src="cupload/images/HKGCP.png" width="70%">
			<br><br><p>香港港九药房总商会成员</p>
		</div>

		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<img src="cupload/images/HKHS.png" width="70%">
			<br><br><p>香港房屋署旗下商场优先租用商户</p>
		</div>

		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<a href="http://yp.com.hk/ypaward/list.htm" target="_blank">
				<img src="cupload/images/ypaward2.png" width="70%">
			</a>
			<br><br><p>2014-17 连续三年获港人港情<br>最佳中西药房连锁店品牌大奖</p>
		</div>
	</div>

</div>
<!-- //about -->

<script>
	$('.wow').each(function(){
		$(this). one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () { 
			$(this).removeClass('wow, animated');
		}); 
	});
</script>
<?php include 'resources/views/footer.php'; ?>