<?php include 'resources/views/header.php'; ?>
<?php include 'resources/views/topnav.php'; ?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><img src="/cupload/images/home.png" style="width:20px; height:auto; margin-right:1em; vertical-align:-2px">首頁</a></li>
				<li class="active">聯絡我們</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
		<p style="color:#FB6703; font-size:32px">聯絡我們</p><br><br>
			<div class="mail-grids">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div id="response"></div>
					<form id="enquiry" method="POST">
						<div class="form-group has-feedback">
							<input class="required form-control" type="text" id="ename" name="name" placeHolder="姓名" required>
							<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input class="required form-control" type="email" id="eemail" name="email" placeHolder="電郵地址" required>
							<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input class="required form-control" type="text" id="esubject" name="subject" placeHolder="主題" required>
							<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<textarea class="required form-control" type="text" id="emessage" name="message" placeHolder="內容..." required></textarea>
							<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
						</div>
						<div id="mail_submit">送出</div>
					</form>
				</div>
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="mail-grid-right1">
						<img src="<?php asset('images/3.png') ?>" alt=" " class="img-responsive" />
						<h4>榮華參茸中西藥房<br />Wing Wah Dispensary</h4>
						<ul class="phone-mail">
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +852 3956 3113</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:contact.us@wingwahgroup.com">contact.us@wingwahgroup.com</a></li>
						</ul>
						<!--<ul class="social-icons">
							<li><a href="#" class="facebook"></a></li>
							<li><a href="#" class="twitter"></a></li>
							<li><a href="#" class="g"></a></li>
							<li><a href="#" class="instagram"></a></li>
						</ul>-->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<iframe class="animated wow slideInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1844.9174218051094!2d114.1311672163009!3d22.35986413538782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403f8980261efed%3A0x1a2bd009ca9cd18c!2sMai+Sik+Industrial+Building%2C+1+Kwai+Ting+Rd%2C+Kwai+Chung!5e0!3m2!1sen!2shk!4v1473213797779" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
		</div>
	</div>
<!-- //mail -->
<script>
	$('#mail_submit').click(function(e){
		var check = true;
		$('.required').each(function(){
			var value = $(this).val();
			var tag = $(this).attr('placeHolder');

			$(this).closest('.form-group').removeClass('has-warning');

			if (value == '' || value == null) {
				$(this).closest('.form-group').addClass('has-warning');
				check = false;
				e.stopPropagation();
			}
		});

		if (check == true) {
			var dataString = $('form#enquiry').serialize();
			$.ajax({
				url: "mail.php",
				type: "POST",
				data: dataString,
				dataType: "json",
				success: function(data) {
					var message = data.message;
					var type = data.type;

					$('#response').css('margin', '10px 0 0 0');

					$('#response').html(message);

					$('#response').show();
					

					if (type !== 'info') {
						setTimeout(function () {
							$('#response').hide();
						}, 6500);						
					}else if (type === 'success') {
						$('form#enquiry')[0].reset();
					}

				}
			});
		}
	});
</script>
<?php include 'resources/views/footer.php'; ?>