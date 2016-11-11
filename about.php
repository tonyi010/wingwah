<?php include 'resources/views/header.php'; ?>
<?php include 'resources/views/topnav.php'; ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><img src="/cupload/images/home.png" style="width:20px; height:auto; margin-right:1em; vertical-align:-2px">首頁</a></li>
				<li class="active">關於榮華</li>
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
		<p style="color:#FB6703; font-size:32px">關於榮華</p><br><br>
		<p style="font-size:14px">香港榮華藥業集團店始創於 1970 年，三代繼承有近年的歷史，至今旗下藥房藥行共計接近 30 間，員工多於 250 名。分行遍布於荃灣、天水圍、長沙灣、沙田、黃埔、觀塘、將軍澳、馬鞍山、油塘、藍田、深水埗等社區，致力服務香港市民大眾，僅次於香港屈臣氏及萬寧連鎖店，是香港第三大藥業連鎖店。<br><br>
榮華參茸中西藥房多年來以「社區藥房」為宗旨，除配藥服務外，還針對性在不同社區提供中醫應診甚至免費代客煎藥服務，只默默為街坊服務，從不在游客區開店，更加不會參予 “急功近利 ” 的宰客生意，歷年來贏得無數街坊及商界伙伴的一致肯定與支持。<br><br>
除零售業務，集團擁有批發進出口公司，同時自設中央倉，為集團旗下藥房及集團以外的本地藥房提供產品批發服務。<br><br>
展望未來，集團會繼續開拓更多不同零售渠道，為各區市民提供個人、家居衛生及家庭醫護的生活所需；集團亦會配合時代發展，積極拓展網上購物平台，同時引入更多歐美澳日韓等地的優質商品，讓市民選擇更多。 </p><br><br>

	<div class="container">
		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<img src="cupload/images/RX.png" width="25%">
			<br><br><p>香港政府註冊藥房</p>
		</div>

		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<img src="cupload/images/HKGCP.png" width="70%">
			<br><br><p>香港港九藥房總商會成員</p>
		</div>

		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<img src="cupload/images/HKHS.png" width="70%">
			<br><br><p>香港房屋署旗下商場優先租用商戶</p>
		</div>

		<div class="col-md-3 col-sm-6" style="text-align:center; padding:0 0 50px;">
			<a href="http://yp.com.hk/ypaward/list.htm" target="_blank">
				<img src="cupload/images/ypaward2.png" width="70%">
			</a>
			<br><br><p>2014-17 連續三年獲港人港情<br>最佳中西藥房連鎖店品牌大獎</p>
		</div>
	</div>

</div>

<script>
	$('.wow').each(function(){
		$(this). one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () { 
			$(this).removeClass('wow, animated');
		}); 
	});
</script>
<?php include 'resources/views/footer.php'; ?>