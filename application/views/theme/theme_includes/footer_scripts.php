<div class="modal-map modal" id="modalMap" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header align-items-center py-2">
            <h4 class="modal-title"><a class="d-flex align-items-center" href="hotel.html"><i class="icon mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 22.1"><path d="M0.3,10.3C0.3,10.3,0.3,10.3,0.3,10.3c-0.4,0.5-0.4,1.2,0,1.6l10,10c0,0,0,0,0,0c0.4,0.4,1.1,0.4,1.6,0 c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1c0,0,0,0,0,0c0-0.6-0.5-1.1-1.1-1.1H3.8l8-8c0.4-0.4,0.4-1.1,0-1.6 c0,0,0,0,0,0c-0.4-0.4-1.1-0.4-1.6,0L0.3,10.3z"/></svg></i><span class="title">Hotel</span></a></h4>
            <button class="btn btn-secondary btn--round px-4" type="button" data-dismiss="modal">map close
            </button>
          </div>
          <div class="map-contain" id="map"></div>
        </div>
      </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>
    <script src="<?php echo JS_THEME_URL; ?>maps.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/moment.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/wNumb.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/nouislider.min.js"></script>
    <script src="<?php echo JS_THEME_URL; ?>libs/jquery.min.js"></script>
   <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
    <script src="<?php echo base_url('assets/js/homeautocomplete.js');?>"></script>
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
				window.location.href = "<?php echo BASE_URL; ?>;
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