<?php include 'resources/views/header.php'; ?>
<?php include 'resources/views/topnav.php'; ?>

<!-- swipable slider -->
<div class="container-fluid2">
	<div class="slideshow-container">
		<div class="fotorama" data-click="false" data-autoplay="true" data-arrows="always" data-width="100%">
		  <?php
			$images = cupload('slider');
			
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
				<div class="col-md-4 col-sm-4 animated wow slideInLeft" data-wow-delay=".5s">
					<a href="pharmacy.php" style="text-decoration: none; font-weight:800;"><img src="cupload/images/3.jpg" alt=" " class="img-responsive" style="padding-bottom:15px";/></a>
				</div>
				<div class="col-md-4 col-sm-4 animated wow slideInUp" data-wow-delay=".5s">
					<a href="chimed.php" style="text-decoration: none"><img src="cupload/images/2.jpg" alt=" " class="img-responsive" style="padding-bottom:15px";/></a>
				</div>
				<div class="col-md-4 col-sm-4 animated wow slideInRight" data-wow-delay=".5s">
					<a href="milestone.php" style="text-decoration: none"><img src="cupload/images/1.jpg" alt=" " class="img-responsive" style="padding-bottom:15px";/></a>
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

			<div class="col-md-12 products animated wow slideInLeft no-up-padding no-down-padding" data-wow-delay=".5s" style="border-style:double; border-color:#ff9800; margin-bottom:48px;">
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.abbott.com.hk/" target="_blank"><img src="cupload/logos/abbott.png" align="middle" style="height: auto; width: 100%;" alt="美國雅培"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.meadjohnson.com.hk/" target="_blank"><img src="cupload/logos/mjohnson.png" align="middle" style="height: auto; width: 100%;" alt="美讚臣"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.friso.com.hk/hk/" target="_blank"><img src="cupload/logos/friso.png" align="middle" style="height: auto; width: 100%;" alt="美素佳兒"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.pigeon.com/" target="_blank"><img src="cupload/logos/pigeon.png" align="middle" style="height: auto; width: 100%;" alt="Pigeon"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.nestle.com.hk/" target="_blank"><img src="cupload/logos/nestle.png" align="middle" style="height: auto; width: 100%;" alt="雀巢"></a></div>	
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.nutriciaeln.com.hk/home" target="_blank"><img src="cupload/logos/nutrilon.png" align="middle" style="height: auto; width: 100%;" alt="Nutrilon"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.cowandgate.com.hk/" target="_blank"><img src="cupload/logos/cowandgate.png" align="middle" style="height: auto; width: 100%;" alt="Cow & Gate"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.kleenex.com/" target="_blank"><img src="cupload/logos/kleenex.png" align="middle" style="height: auto; width: 100%;" alt="kleenex"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.stives.com/" target="_blank"><img src="cupload/logos/stives.png" align="middle" style="height: auto; width: 100%;" alt="St Ives"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.hk.kotex.com/" target="_blank"><img src="cupload/logos/kotex.png" align="middle" style="height: auto; width: 100%;" alt="Kotex"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.tresemme.com" target="_blank"><img src="cupload/logos/tresemme.png" align="middle" style="height: auto; width: 100%;" alt="TRESemmé"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><img src="cupload/logos/pears.png" align="middle" style="height: auto; width: 100%;" alt="Pears 梨牌護手霜">	</div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/VS" target="_blank"><img src="cupload/logos/vs.png" align="middle" style="height: auto; width: 100%;" alt="VS 沙宣"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/Whisper‎" target="_blank"><img src="cupload/logos/whisper.png" align="middle" style="height: auto; width: 100%;" alt="護舒寶"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.neutrogena.com.hk‎" target="_blank"><img src="cupload/logos/neutrogena.png" align="middle" style="height: auto; width: 100%;" alt="Neutrogena"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.listerine.com.hk‎" target="_blank"><img src="cupload/logos/listerine.png" align="middle" style="height: auto; width: 100%;" alt="李施德林"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.johnsonsbaby.com.hk‎" target="_blank"><img src="cupload/logos/jbaby.png" align="middle" style="height: auto; width: 100%;" alt="Johnsom's Baby"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.nivea.com.hk/‎" target="_blank"><img src="cupload/logos/nivea.png" align="middle" style="height: auto; width: 100%;" alt="Nivea"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.angliatech.com/showcase/ego/zh/products/category/28/‎" target="_blank"><img src="cupload/logos/qv.png" align="middle" style="height: auto; width: 100%;" alt="QV"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.loreal-paris.com.hk/" target="_blank"><img src="cupload/logos/loreal.png" align="middle" style="height: auto; width: 100%;" alt="L'OREAL"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.veet.com.hk/" target="_blank"><img src="cupload/logos/veet.png" align="middle" style="height: auto; width: 100%;" alt="Veet"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.fisher-price.com/zh_HK/index.html/" target="_blank"><img src="cupload/logos/fisher.png" align="middle" style="height: auto; width: 100%;" alt="費雪牌"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://web.kao.com/hk/asience/" target="_blank"><img src="cupload/logos/asience.png" align="middle" style="height: auto; width: 100%;" alt="Asience"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://web.kao.com/hk/essential/" target="_blank"><img src="cupload/logos/essential.png" align="middle" style="height: auto; width: 100%;" alt="Essential"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://web.kao.com/hk/liese/" target="_blank"><img src="cupload/logos/liese.png" align="middle" style="height: auto; width: 100%;" alt="Liese"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://web.kao.com/hk/laurier/home/" target="_blank"><img src="cupload/logos/laurier.png" align="middle" style="height: auto; width: 100%;" alt="Laurier"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://web.kao.com/hk/merries/" target="_blank"><img src="cupload/logos/merries.png" align="middle" style="height: auto; width: 100%;" alt="Merries"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.sebamed.hk/" target="_blank"><img src="cupload/logos/sebamed.png" align="middle" style="height: auto; width: 100%;" alt="施巴 sebamed"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.krgchina.com/hk/" target="_blank"><img src="cupload/logos/krg.png" align="middle" style="height: auto; width: 100%;" alt="正官庄"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/rejoice" target="_blank"><img src="cupload/logos/rejoice.png" align="middle" style="height: auto; width: 100%;" alt="Rejoice"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://zh-hk.facebook.com/LuxHongKong" target="_blank"><img src="cupload/logos/lux.png" align="middle" style="height: auto; width: 100%;" alt="LUX"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/Olay" target="_blank"><img src="cupload/logos/olay.png" align="middle" style="height: auto; width: 100%;" alt="OLAY"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.hk.huggies.com/" target="_blank"><img src="cupload/logos/huggies.png" align="middle" style="height: auto; width: 100%;" alt="HUGGIES"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.pampers.com.hk/" target="_blank"><img src="cupload/logos/pampers.png" align="middle" style="height: auto; width: 100%;" alt="Pampers"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.tempo.com.hk/" target="_blank"><img src="cupload/logos/tempo.png" align="middle" style="height: auto; width: 100%;" alt="Tempo"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.livingartist.com.hk/tag/headandshoulders" target="_blank"><img src="cupload/logos/hns.png" align="middle" style="height: auto; width: 100%;" alt="head & shoulder"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://zh-hk.facebook.com/ScottBrandHK/" target="_blank"><img src="cupload/logos/scott.png" align="middle" style="height: auto; width: 100%;" alt="Scott 絲潔"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.facebook.com/VaselineHongKong/" target="_blank"><img src="cupload/logos/vaseline.png" align="middle" style="height: auto; width: 100%;" alt="Vaseline"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.colgate.com.hk/" target="_blank"><img src="cupload/logos/colgate.png" align="middle" style="height: auto; width: 100%;" alt="Colgate"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://hk.caudalie.com/" target="_blank"><img src="cupload/logos/caudalie.png" align="middle" style="height: auto; width: 100%;" alt="Caudalie"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.clairol.com/" target="_blank"><img src="cupload/logos/clairol.png" align="middle" style="height: auto; width: 100%;" alt="Clairol"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.rexona.com.tw/" target="_blank"><img src="cupload/logos/rexona.png" align="middle" style="height: auto; width: 100%;" alt="Rexona"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://zh.durex.com.hk/" target="_blank"><img src="cupload/logos/durex.png" align="middle" style="height: auto; width: 100%;" alt="Durex"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.playtex.com/" target="_blank"><img src="cupload/logos/playtex.png" align="middle" style="height: auto; width: 100%;" alt="PLAYTEX"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.facebook.com/dovehk/" target="_blank"><img src="cupload/logos/dove.png" align="middle" style="height: auto; width: 100%;" alt="Dove"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.tongrentang.com.hk/" target="_blank"><img src="cupload/logos/tungyantong.png" align="middle" style="height: auto; width: 100%;" alt="北京同仁堂"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.babisil.com/" target="_blank"><img src="cupload/logos/babisil.png" align="middle" style="height: auto; width: 100%;" alt="Babisil"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.dettol.com.hk/" target="_blank"><img src="cupload/logos/dettol.png" align="middle" style="height: auto; width: 100%;" alt="Dettol"></a></div>
			</div>

			<div class="col-md-12 products animated wow slideInLeft no-up-padding no-down-padding" data-wow-delay=".5s" style="border-style:double; border-color:#ff9800">
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.gsk.com.hk/" target="_blank"><img src="cupload/logos/gsk.png" align="middle" style="height: auto; width: 100%;" alt="gsk"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.pghongkong.com/" target="_blank"><img src="cupload/logos/png.png" align="middle" style="height: auto; width: 100%;" alt="P&G"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.jnj.com.hk/" target="_blank"><img src="cupload/logos/johnson.png" align="middle" style="height: auto; width: 100%;" alt="Johnson & Johnson"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.kao.com/hk/" target="_blank"><img src="cupload/logos/kao.png" align="middle" style="height: auto; width: 100%;" alt="Kao"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.roche.com.hk/" target="_blank"><img src="cupload/logos/roche.png" align="middle" style="height: auto; width: 100%;" alt="Roche"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.mekim.com/" target="_blank"><img src="cupload/logos/mekim.png" align="middle" style="height: auto; width: 100%;" alt="Mekim "></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.bayer.com/" target="_blank"><img src="cupload/logos/bayer.png" align="middle" style="height: auto; width: 100%;" alt="Bayer"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.servier.com/" target="_blank"><img src="cupload/logos/servier.png" align="middle" style="height: auto; width: 100%;" alt="Servier"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.sanofi.hk/" target="_blank"><img src="cupload/logos/aventis.png" align="middle" style="height: auto; width: 100%;" alt="Aventis"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.pfizer.com.hk/" target="_blank"><img src="cupload/logos/pfizer.png" align="middle" style="height: auto; width: 100%;" alt="Pfizer"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.astrazeneca.com.hk/" target="_blank"><img src="cupload/logos/astra.png" align="middle" style="height: auto; width: 100%;" alt="Astrazeneca"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.unilever.com/" target="_blank"><img src="cupload/logos/unilever.png" align="middle" style="height: auto; width: 100%;" alt="Unilever"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.singaporemedicine.com.hk/" target="_blank"><img src="cupload/logos/sgm.png" align="middle" style="height: auto; width: 100%;" alt="星洲藥業"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.hysan-pharm.com/frame_c.html/" target="_blank"><img src="cupload/logos/hysan.png" align="middle" style="height: auto; width: 100%;" alt="海山堂"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.rb.com/" target="_blank"><img src="cupload/logos/rb.png" align="middle" style="height: auto; width: 100%;" alt="利潔時"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.shunsang.com/zh/" target="_blank"><img src="cupload/logos/shunsang.png" align="middle" style="height: auto; width: 100%;" alt="信生"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.frieslandcampina.com/en/" target="_blank"><img src="cupload/logos/friesland.png" align="middle" style="height: auto; width: 100%;" alt="荷蘭皇家菲仕蘭"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="https://www.fonterra.com/cn/zh/Home" target="_blank"><img src="cupload/logos/fonterra.png" align="middle" style="height: auto; width: 100%;" alt="恆天然乳品"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.lux-mp.com/" target="_blank"><img src="cupload/logos/luxmp.png" align="middle" style="height: auto; width: 100%;" alt="盧森堡大藥廠"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.jacobsonmedical.com.hk/zh" target="_blank"><img src="cupload/logos/jacobson.png" align="middle" style="height: auto; width: 100%;" alt="雅各臣"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.apc.com.hk/" target="_blank"><img src="cupload/logos/apc.png" align="middle" style="height: auto; width: 100%;" alt="樂信藥業"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www.hindwing.com/tchi/aboutus.php" target="_blank"><img src="cupload/logos/hindwing.png" align="middle" style="height: auto; width: 100%;" alt="顯榮行"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://www2.ninjiom.com/index.php?lang=hk" target="_blank"><img src="cupload/logos/ninjiom.png" align="middle" style="height: auto; width: 100%;" alt="念慈菴"></a></div>
				<div class="col-md-1 col-sm-2 col-xs-3 img-frame" style="padding:10px"><a href="http://dksh.com/cs/dksh_hk/hk/home" target="_blank"><img src="cupload/logos/dksh.png" align="middle" style="height: auto; width: 100%;" alt="DKSH 大昌華嘉"></a></div>
			</div>

		</div>

		
<?php include 'resources/views/footer.php'; ?>