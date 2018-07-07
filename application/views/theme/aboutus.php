<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>   

<?php
if(isset($result) && !empty($result)){ 
	$title = $result[0]['title'];
	$description = $result[0]['description'];
	$id = $result[0]['id'];
}
else{
	$title="";
	$description="";
	$id="";
}
?>
<main class="page-main">
      <div class="intro-page d-flex align-items-center">
        <div class="page-intro__cover jarallax"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>upload/16.jpg" alt="#"/></div>
        <div class="container p-5 text-center">
          <h1 class="text-uppercase fw-bold">About us</h1>
        </div>
      </div>
      <div class="bg-white">
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>About Us</span></li>
            </ol>
          </div>
        </nav>
      </div>
      <div class="page-content">
        <div class="container">
          <div class="col-12 col-lg-6 float-lg-left px-0 pr-lg-4 mb-3"><a href="<?php echo BASE_URL; ?>contactus"><img class="img-fluid mx-auto" src="<?php echo IMAGE_THEME_URL; ?>upload/14.jpg" alt="#"></a></div>
          <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold">FIFO Booking Pvt. Ltd</h5>
            </li>
          </ul>
          <?php echo $description;?>
          <p class="text-right"><a class="btn btn-btn btn-dark" href="<?php echo BASE_URL; ?>contactus" role="button">Our contacts</a>
          </p>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
	<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>