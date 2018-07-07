<script src="http://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBze-yY5uhbYpaSSTp52to_Ab97xsbdQVY"></script>
    <script src="<?php echo JS_THEME_URL; ?>maps.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/moment.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/wNumb.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/nouislider.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery-ui.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/barba.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/sticky-kit.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/velocity.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/velocity.ui.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.waypoints.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/popper.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/bootstrap.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/masonry.pkgd.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/isotope.pkgd.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/ofi.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jarallax.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jarallax-video.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jarallax-element.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/swiper.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/flatpickr/flatpickr.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/flatpickr/rangePlugin.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/select2.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/select2/en.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.mask.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/validator.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.barrating.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.blueimp-gallery.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>script.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>demo-switcher.js"></script>
	<script src="<?php echo JS_THEME_URL; ?>custom_scripts.js"></script>
  </body>
</html>

<script>
$(document).ready(function(){

/* 	var validator = $("#formRegist").validate({
		rules:{
			userEmail:{
				required: true,
				email: true
			},
			userPass:{
				required: true
			}
			confirmPass:{
				required: true,
				equalTo : "#userPass"
			}
		},
		messages:{
		    userEmail:{
				required: "The Email is required!",
				email: "Please enter a valid email address!"
			},
			userPass:{
				required: "Enter the password.",
			}
		},

		
	}); */
		

	
/* $("#fifoRegister-btn").click(function(){
		var email = $("#userEmail").val();
        var pass = $("#userPass").val();
		var terms = 0;
		if ($('#agreePolicy').is(':checked')) {
			terms = 1;
		}
		var specialoffers = 0;
		if ($('#dispatchEmail').is(':checked')) {
			specialoffers = 1;
		}
           
		var payload = {};
		payload.userEmail = email;
		payload.userPass = userPass;
		payload.termsCond = terms;
		payload.specialOfrs = specialoffers;
		$.ajax({
			type: "POST",
			url: "<?php echo BASE_URL; ?>home/register",
			dataType: 'json',
			data : payload,
			success : function(response) {
				alert(JSON.stringify(response));
				// do something
			},
			error : function(response) {
				alert(JSON.stringify(response));
				// do something
			}
		});
		
	});  */
	
	
	$('#formRegist').submit(function(){
     
        // show that something is loading
        $('#response').html("<b>Loading response...</b>");
        $.ajax({
            type: 'POST',
            url: '<?php echo BASE_URL; ?>home/register', 
            data: $(this).serialize()
        })
        .done(function(data){
             
            // show the response
			data = JSON.parse(data);
			if(data.success){
				$('#response').removeClass("failedClass");
				$('#response').addClass("successClass");
				$("#userEmail").val("");
				$("#userPass").val("");
				$('#agreePolicy').prop('checked', false); 
				$('#dispatchEmail').prop('checked', false); 
				$('#response').html(data.success);
				setTimeout(function(){
					$('#response').removeClass("successClass").html("");
				},3000);
				
				
			}else if(data.error){
				$('#response').removeClass("successClass");
				$('#response').addClass("failedClass");
				$('#response').html(data.error);
				setTimeout(function(){
					$('#response').removeClass("failedClass").html("");
				},3000);
				
			}else if(data.user_exists){
				$('#response').removeClass("successClass");
				$('#response').addClass("failedClass");
				$('#response').html(data.user_exists);
				setTimeout(function(){
					$('#response').removeClass("failedClass").html("");
				},3000);
			}
  
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Error occured." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;
 
    });
	
	$("#formLogin").submit(function(){
		
		$('#loginResponse').html("<b>Loading response...</b>");
        $.ajax({
            type: 'POST',
            url: '<?php echo BASE_URL; ?>home/login_process', 
            data: $(this).serialize()
        })
		.done(function(data){
			data = JSON.parse(data);
			alert(data.success);
			if(data.success){
				window.location.href = "<?php echo BASE_URL; ?>";
			}else if(data.error){
				$('#loginResponse').addClass("failedClass");
				$('#loginResponse').html(data.error);
				setTimeout(function(){
					$('#loginResponse').removeClass("failedClass").html("");
				},3000);
				
			}
		})
		.fail(function() {
			 // just in case posting your form failed
            alert( "Error occured." );
		});
		
		return false;
		
	});
	
});
</script>