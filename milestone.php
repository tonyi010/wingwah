<?php include_once 'resources/views/header.php'; ?>
<?php include_once 'resources/views/topnav.php'; ?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><img src="/cupload/images/home.png" style="width:20px; height:auto; margin-right:1em; vertical-align:-2px">首頁</a></li>
			<li class="active">發展里程碑</li>
		</ol>
	</div>
</div>

<div class="container milestone">
		<p style="color:#FB6703; font-size:32px">發展里程碑</p><br><br>
		
		<p class="h1">1970 年</p>
		<p class="p">
			香港榮華藥業集團第一間香港店始創。
		</p>
	
		<div>
			<p class="h1">1970 - 2016 年</p>		
			<p class="p">
				成為香港港九藥房總商會會員。
			</p>
		</div>

		<div class="col-sm-12 spacing">
			<img src="cupload/images/HKGCP.png" width="40%">
		</div>

		<div>
			<p class="p">
				香港第一間與香港房屋協會，擁有香港房屋處旗下商場優先租用權。
			</p>
		</div>

		<div class="col-sm-12 spacing">
			<img src="cupload/images/HKHS.png" width="40%">
		</div>
		
		<div>
			<p class="p">
				三代繼承有近 46 年的歷史，至今旗下藥房藥行共計接近 30 間，是香港第三大藥業連鎖店。
			</p>
		</div>

			<div class="milestone-image">
				<div class="slideshow-container">
					<div class="fotorama" data-click="false" data-autoplay="true" data-arrows="always" data-fit="cover" data-width="750px" data-height="auto">
						  <img src="cupload/shops/leiyuemun/1.jpg" data-caption="榮華藥坊 (鯉魚門)">

						  <img src="cupload/shops/butterfly/1.jpg" data-caption="榮華藥坊 (蝴蝶邨)">

						  <img src="cupload/shops/tkoplaza/1.jpg" data-caption="榮華藥坊 (將軍澳廣場)">

						  <img src="cupload/shops/popcorn/1.jpg" data-caption="榮華參茸中西藥房 (君傲灣 PopCorn)">

						  <img src="cupload/shops/cityone/1.jpg" data-caption="榮華參茸中西藥房 (第一城)">
					</div>
				</div>
			</div><br><br>
			
	<div class="container">
		<div class="col-md-8 footer-grid animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<div style="text-align:left; padding:0 15px; "> 
				<h3>跨境電商業務</h3>
			</div>
			<p style="font-size:14px; margin-left:20px; margin-right:50px">
			自 2010 年起,榮華藥業集團就跨境業務曾與多間知名機構有合作關係。</p><br><br>
		</div>
		<div class="col-md-6 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<img src="<?php asset('images/online1.png') ?>" id="img1" class="img-responsive">
			<br>
			<p style="font-size:14px;">曾與中國聯通的游惠寶的電商合作</p>
		</div>

		<div class="col-md-6 animated wow slideInRight animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
			<img src="<?php asset('images/online2.png') ?>" id="img1" class="img-responsive">
			<br>
			<p style="font-size:14px;">曾與中國工商銀行的 "融 e 購" 合作</p>
		</div>


		<div class="col-md-6 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<img src="<?php asset('images/online3.png') ?>" id="img1" class="img-responsive">
			<br>
			<p style="font-size:14px;">曾與中國電信百仕通的電商合作</p>
		</div>
		
		<!-- stand alone video-->		
		<div class="col-md-6">
			<video controls poster="<?php asset('images/video1.png') ?>">
				<source src="cupload/video/video1.mp4" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
			
		<p style="font-size:14px;"><br>曾與跨境電商百百購簽訂戰略合作</p>
		</div>
	</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				   x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 9000);
			}
			</script><br><br>
		
		<p class="h1">2014 - 2015 年</p>		
		<p class="p">被香港電訊盈科選為香港最佳中西藥房連鎖店。</p>

		<!--  modal -->
		<div class="col-md-12 line-margin sixteen-year">
			<div class="animated wow slideInLeft animated col-md-4 col-xs-12 col-ld-xs-4 col-sm-4" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="cupload/images/cert2014-15.png" id="img1" class="img-responsive">
					<p style="font-size:14px;">2014-15 港人港情品牌大獎</p>
				</a>	
			</div>
			<div class="animated wow slideInRight animated col-md-4 col-xs-12 col-ld-xs-4 col-sm-4" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="cupload/images/award3.jpg" id="img1" class="img-responsive">
					<p style="font-size:14px;">港人港情品牌大獎得獎訪問</p>
				</a>	
			</div>
			<div class="animated wow slideInRight animated col-md-4 col-xs-12 col-ld-xs-4 col-sm-4" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="cupload/images/award4.jpg" id="img1" class="img-responsive">
					<p style="font-size:14px;">&nbsp;</p>
				</a>	
			</div>
		</div>

		<div class="col-md-12 line-margin sixteen-year">
			<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="<?php asset('images/award3.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px;">榮華集團董事長鄭建志先生領獎留影</p>
				</a>	
			</div>
			<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="<?php asset('images/award4.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px;">榮華集團掌舵人鄭朝平先生及鄭建志先生留影</p>
				</a>	
			</div>
			<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4">
				<video poster="<?php asset('images/video3.png') ?>" controls>
					<source src="cupload/video/video3.mp4" type="video/mp4"><font><font>
					Your browser does not support HTML5 video.
					</font></font>
				</video>
			</div>
		</div><br><br>

		<p class="h1">2015 - 2016 年</p>		
		<p class="p">連續第二年被香港電訊盈科選為香港最佳中西藥房連鎖店。</p>

		<div class="col-md-12 line-margin sixteen-year">
			<div class="animated wow slideInLeft animated col-md-4 col-xs-12 col-ld-xs-4 col-sm-4" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="cupload/images/cert2015-16.jpg" id="img1" class="img-responsive">
					<p style="font-size:14px;">2015-16 港人港情品牌大獎</p>
				</a>	
			</div>
			<div class="animated wow slideInRight animated col-md-8 col-xs-12 col-ld-xs-8 col-sm-8" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="cupload/images/award5.jpg" id="img1" class="img-responsive">
					<p style="font-size:14px;">港人港情品牌大獎得獎訪問</p>
				</a>	
			</div>
		</div>		

		<div class="col-md-12 line-margin">
			<div class="col-md-6 col-xs-12 col-ld-xs-6 col-sm-6 animated wow slideInRight animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="<?php asset('images/award5.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px;">榮華集團董事長鄭朝安先生領獎留影</p>
				</a>	
			</div>
			
			<div class="col-md-6 col-xs-12 col-ld-xs-6 col-sm-6">
				<video poster="<?php asset('images/video2.png') ?>" controls>
					<source src="cupload/video/video2.mp4" type="video/mp4"><font><font>
					Your browser does not support HTML5 video.
					</font></font>
				</video>
			</div>
		</div>
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-lg">

		  <!-- Modal content-->
		  <div class="modal-content">
			<!--<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">your image title here (can be dynamic) </h4>
			</div>-->
			<div class="modal-body" id="showImg">

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal"><font><font>Close</font></font></button>
			</div>
		  </div>
		</div>
	  </div>
	  

<style>
      .modal-lg {
        width: 60%;
      }
      .modal-body {
        overflow: auto;
        max-width: 1300px;
      }
	  
	  @media (max-width: 640px){
      .modal-lg {
        width: 100%;
      }	
		}
</style>
<script type="text/javascript">
      $(document).ready(function() {
        $('img').on('click', function() {
          $("#showImg").empty();
          var image = $(this).attr("src");
          $("#showImg").append("<img class='img-responsive' src=' + image + "' />")
          //alert(image);
        })
      });
</script>
	<div class="col-md-12 line-margin">
		<p class="h1">2016 年</p>		
		<p class="p">
		香港榮華藥業集團成為雅各臣科研製藥 (02633) 上市的基礎投資者，預期未來可以產生協同效應，有很多空間合作。
		</p>	
		<div class="col-md-6 col-xs-12 col-ld-xs-6 col-sm-6">
			<video poster="<?php asset('images/video4.png') ?>" controls="" style="margin:0 auto">
			<source src="cupload/video/video4.mp4" type="video/mp4"><font><font>
			Your browser does not support HTML5 video.
			</font></font></video>
		</div>		
	</div>

	<div style="margin: 15px 0" class="col-md-12 col-xs-12 col-sm-12 line-margin">
		<p style="font-size:16px;">相關報導:<br>
		now 財經: <a href="http://finance.now.com/news/post.php?id=260424&type=local" target="_blank" style="color:#821D03; text-decoration:none">http://finance.now.com/news/post.php?id=260424&type=local</a><br>
		on.cc 東網: <a href="http://hk.on.cc/hk/bkn/cnt/finance/20160907/bkn-20160907165228246-0907_00842_001.html" target="_blank" style="color:#821D03; text-decoration:none">http://hk.on.cc/hk/bkn/cnt/finance/20160907/bkn-20160907165228246-0907_00842_001.html</a>
		</p>
	</div><br><br>

	<div class="col-md-12 line-margin">
		<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
				<img src="<?php asset('images/clip5.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px; align:center;">東網專訊</p>
			</a>	
		</div>
		<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
				<img src="<?php asset('images/clip6.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px; align:center;">星島日報</p>
			</a>	
		</div>
		<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInRight animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
			<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
				<img src="<?php asset('images/clip7.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px; align:center;">蘋果日報</p>
			</a>	
		</div>
	</div>

	<div class="row line-margin">
		<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
				<img src="<?php asset('images/clip1.jpg') ?>" id="img1" class="img-responsive"><br>
				<p style="font-size:14px; align:center;">星島日報</p>
			</a>	
		</div>
		<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
				<img src="<?php asset('images/clip2.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px; align:center; padding-bottom:50px;">匯港通訊</p>
			</a>	
		</div>
		<div class="col-md-4 col-xs-12 col-ld-xs-4 col-sm-4 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
				<img src="<?php asset('images/clip3.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px; align:center;">經濟通通訊社</p>
			</a>	
		</div>
	</div>

	<div class="row line-margin">
		<p class="h1">2016 年 10 月</p>
		<p class="p">香港榮華藥業集團擬拓批發業務，鋪路5年後上市。</p>
		<div class="col-md-12 line-margin">
			<div class="col-md-6 col-xs-12 col-ld-xs-6 col-sm-6 animated wow slideInLeft animated" data-wow-delay=".5s" style="margin-bottom: 25px; visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<a href="#" id="link1" data-toggle="modal" data-target="#myModal">
					<img src="<?php asset('images/clip8.jpg') ?>" id="img1" class="img-responsive"><br><p style="font-size:14px; align:center;">東網專訊</p>
				</a>	
			</div>
		</div>
	</div>
</div>
<?php include_once 'resources/views/footer.php'; ?>