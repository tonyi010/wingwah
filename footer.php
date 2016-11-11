<!-- footer -->
	<div class="footer" style="padding: 0 0 0 0;">
			<div class="copy-right animated wow slideInRight" data-wow-delay=".5s">
				<p style="color:#e7e3d7; vertical-align:middle; line-height:30px;">
				&copy; 2016 榮華藥業集團有限公司 版權所有。 Wing Wah Medicine Group Limited. All Rights Reserved.</p>
			</div>
	</div>

<!-- Scroll to Top -->
<div class="scrollToTop btn btn-danger"><i id="arrow-up"></i></div>

<style>
#arrow-up {
    position: relative;
    bottom: 3px;
    left: 1px;
    background-image: url(/assets/images/arrow_up.png);
    padding: 14px;
    font-size: 0px;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.scrollToTop {
	display: none;
    z-index: 299;
    padding: 13px;
    position: fixed;
    width: 60px;
    box-shadow: 0px 0px 1.5px #AC0403;
    height: 50px;
    top: auto;
    left: auto;
    right: 30px;
    bottom: 50px;
    cursor: pointer;
    background-color: #AC0403;
    transition: all 0.3s;
    border-radius: 100%;
}

</style>

<script>
$( document).ready(function() {
	
	var nav = $('#top_nav_area');
	$(window).scroll(function() {
			if ($(this).scrollTop() > 60) {
					nav.addClass("scroll-nav");
			} else {
					nav.removeClass("scroll-nav");
			}
	});
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});

// $('.lang').click(function(){
	// var lang = $(this).data('lang') {
		// $.ajax({
			// type: "POST",
			// url: "post_process.php",
			// data: data,
			// success: function(data) {
				// if (data == 'success') {
					// window.location.reload();
				// }
			// }
		// });
	// };
// });
</script>
<!-- //Scroll to Top -->