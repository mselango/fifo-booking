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
        <div class="page-intro__cover jarallax"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>banner_partnership.jpg" alt="#"/></div>
        <div class="container p-5 text-center">
          <h1 class="text-uppercase fw-bold"></h1>
        </div>
      </div>
      <div class="bg-white">
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Partner with us</span></li>
            </ol>
          </div>
        </nav>
      </div>
      <div class="page-content">
        <div class="container">
           <div class="row">
        <div class="col-lg-8">
          <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold"><?php echo $title; ?></h5>
            </li>
          </ul>
          <div class="howWorksImg">
          <img  src="<?php echo IMAGE_THEME_URL; ?>partner-how-works.png"  height="500px" alt="#"/>
        </div>
        </div>
        <div class="col-lg-4">
          <section class="sidebar__card card">
            <div class="sidebar__card-title">
              <h4 class="card-title">Its Free. Register now & get started!</h4>
                    <?php if(isset($_SESSION['success'])){?>
                        <div class="alert btn-success alert-msg" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo $_SESSION['success'];?>
                        </div>      
                    <?php 
                    }
                    else if(isset($_SESSION['error'])){
                    ?>
                        <div class="alert btn-danger alert-msg" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo $_SESSION['error'];?>
                        </div>
                    <?php } ?>
              <hr class="my-3"/>
            </div>
            <form class="sidebar__subscribe" action="<?php echo BASE_URL; ?>partnerwithus" method="POST" data-toggle="validator">

             <div class="form-group">
                <input class="form-control" type="text" name="fullname" placeholder="Full Name" required>
              </div>

              <div class="form-group">
                <select class="form-control" name="propertytype" required>
                  <option value="Hotel">Hotel</option>
                </select>
              </div>

              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email ID" required>
                <icon class="fa fa-star icon-md redColor ml-2"></icon> : <span>This will be your username</span>
              </div>

              <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Create Password" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password" required>
              </div>

              <div class="form-group">
                  <input class="form-control-checkbox" type="checkbox" name="termsandcond" required> <span class="regTermsTxt" value="yes">I have read and accept FIFO Terms and conditions.</span>
              </div>

              <div class="form-group mb-0">
                <button class="btn btn-secondary btn--round mx-auto mx-lg-0" type="submit">Signup Now
                </button>
              </div>
            </form>
          </section>
</div>
        </div>

        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
	<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>

<script type="text/javascript">
$(document).ready(function(){

  setTimeout(function(){ $(".alert-msg").toggle() }, 2000);
});
</script>