<?php include 'resources/views/header.php'; ?>
<?php include 'resources/views/topnav_cn.php'; ?>

<!-- swipable slider -->
<div class="container-fluid2">
	<div class="slideshow-container">
		<div class="fotorama" data-click="false" data-autoplay="true" data-arrows="always" data-width="100%">
		  <?php
			$folder = 'slider';
			$images = GLOB('cupload/'.$folder.'/{*.jpg}', GLOB_BRACE);
			
			if (count($images)>0) {
				foreach($images as $img) {
		  			echo "<img src=\"$img\">";
				}
			}
		 ?>
		</div>
	</div>
</div>


<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container"> 
				<div class="row">
					<div class="col-md-4 animated wow slideInLeft" data-wow-delay=".5s">
						<a href="pharmacy_cn.php" style="text-decoration: none; font-weight:800;"><img src="cupload/images/3.jpg" alt=" " class="img-responsive" style="padding-bottom:15px";/></a>
					</div>
					<div class="col-md-4 animated wow slideInUp" data-wow-delay=".5s">
						<a href="chimed_cn.php" style="text-decoration: none"><img src="cupload/images/2.jpg" alt=" " class="img-responsive" style="padding-bottom:15px";/></a>
					</div>
					<div class="col-md-4 animated wow slideInRight" data-wow-delay=".5s">
						<a href="milestone_cn.php" style="text-decoration: none"><img src="cupload/images/1.jpg" alt=" " class="img-responsive" style="padding-bottom:15px";/></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!-- //banner-bottom -->

<!-- Partner -->
		<div class="container">
			<div style="text-align:left; padding-bottom:20px;"> 
			<div class="row">
				<div class="col-md-8 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
				<div style="text-align:left; padding:0 15px; "> 
				<h3>合作伙伴</h3>
				</div>
				</div>
			</div>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated wow slideInLeft" data-wow-delay=".5s">
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.abbott.com.hk/" target="_blank"><img src="cupload/logos/abbott.png" align="middle" style="height: auto; width: 100%;" alt="美國雅培" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.meadjohnson.com.hk/" target="_blank"><img src="cupload/logos/mjohnson.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.friso.com.hk/hk/" target="_blank"><img src="cupload/logos/friso.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.pigeon.com/" target="_blank"><img src="cupload/logos/pigeon.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.nestle.com.hk/" target="_blank"><img src="cupload/logos/nestle.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>	
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.gsk.com.hk/" target="_blank"><img src="cupload/logos/gsk.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.nutriciaeln.com.hk/home" target="_blank"><img src="cupload/logos/nutrilon.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.pghongkong.com/" target="_blank"><img src="cupload/logos/png.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.jnj.com.hk/" target="_blank"><img src="cupload/logos/johnson.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.cowandgate.com.hk/" target="_blank"><img src="cupload/logos/cowandgate.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.kleenex.com/" target="_blank"><img src="cupload/logos/kleenex.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.stives.com/" target="_blank"><img src="cupload/logos/stives.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.hk.kotex.com/" target="_blank"><img src="cupload/logos/kotex.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.facebook.com/TRESemme.HK" target="_blank"><img src="cupload/logos/tresemme.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><img src="cupload/logos/pears.png" align="middle" style="height: auto; width: 100%;" alt="" /></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/VS" target="_blank"><img src="cupload/logos/vs.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.sebamed.hk/" target="_blank"><img src="cupload/logos/sebamed.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.krgchina.com/hk/" target="_blank"><img src="cupload/logos/krg.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/rejoice" target="_blank"><img src="cupload/logos/rejoice.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://zh-hk.facebook.com/LuxHongKong" target="_blank"><img src="cupload/logos/lux.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/Olay" target="_blank"><img src="cupload/logos/olay.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.hk.huggies.com/" target="_blank"><img src="cupload/logos/huggies.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.pampers.com.hk/" target="_blank"><img src="cupload/logos/pampers.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.tempo.com.hk/" target="_blank"><img src="cupload/logos/tempo.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/headandshoulders" target="_blank"><img src="cupload/logos/hns.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.kao.com/hk/" target="_blank"><img src="cupload/logos/kao.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://zh-hk.facebook.com/ScottBrandHK/" target="_blank"><img src="cupload/logos/scott.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.roche.com.hk/" target="_blank"><img src="cupload/logos/roche.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.mekim.com/" target="_blank"><img src="cupload/logos/mekim.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.facebook.com/VaselineHongKong/" target="_blank"><img src="cupload/logos/vaseline.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.colgate.com.hk/" target="_blank"><img src="cupload/logos/colgate.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.bayer.com/" target="_blank"><img src="cupload/logos/bayer.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.servier.com/" target="_blank"><img src="cupload/logos/servier.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://hk.caudalie.com/" target="_blank"><img src="cupload/logos/caudalie.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><img src="cupload/logos/clairol.png" align="middle" style="height: auto; width: 100%;" alt="" /></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.rexona.com.tw/" target="_blank"><img src="cupload/logos/rexona.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://zh.durex.com.hk/" target="_blank"><img src="cupload/logos/durex.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.sanofi.hk/" target="_blank"><img src="cupload/logos/aventis.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.playtex.com/" target="_blank"><img src="cupload/logos/playtex.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.pfizer.com.hk/" target="_blank"><img src="cupload/logos/pfizer.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.facebook.com/dovehk/" target="_blank"><img src="cupload/logos/dove.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.tongrentang.com.hk/" target="_blank"><img src="cupload/logos/tungyantong.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.babisil.com/" target="_blank"><img src="cupload/logos/babisil.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.astrazeneca.com.hk/" target="_blank"><img src="cupload/logos/astra.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.dettol.com.hk/" target="_blank"><img src="cupload/logos/dettol.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.unilever.com/" target="_blank"><img src="cupload/logos/unilever.png" align="middle" style="height: auto; width: 100%;" alt="" /></a></div>
			</div>
		</div>
	</div><br><br><br>

<?php include 'resources/views/footer.php'; ?>