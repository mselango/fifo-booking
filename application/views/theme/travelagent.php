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
        <div class="page-intro__cover jarallax"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>franchise.jpg" alt="#"/></div>
        <div class="container p-5 text-center">
          <h1 class="text-uppercase fw-bold">Travel Agent</h1>
        </div>
      </div>
      <div class="bg-white">
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Travel Agent</span></li>
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
          <?php echo $description;?>
        </div>
        <div class="col-lg-4">
          <section class="sidebar__card card">
            <div class="sidebar__card-title">
              <h4 class="card-title">Talk to us</h4>
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
            <form class="sidebar__subscribe" action="<?php echo BASE_URL; ?>travelagent" method="POST" data-toggle="validator">
              <div class="form-group">
                <select class="form-control" name="yourtravelagent" required>
                  <option value="I am Travel Agent">I am Travel Agent</option>
                </select>
              </div>

               <div class="form-group">
                <input class="form-control" type="text" name="yourcompanyname" placeholder="Your company name" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="yourcompanycity" placeholder="Your company city" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="yourname" placeholder="Your name" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="yourmobile" placeholder="Your mobile number" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="email" name="youremail" placeholder="Your email ID" required>
              </div>

              <div class="form-group">
                <input type="radio" name="contracting" value="Contracting">Contracting
                <input type="radio" name="contracting" value="One time query">One time query
              </div>

              <div class="form-group mb-0">
                <button class="btn btn-secondary btn--round mx-auto mx-lg-0" type="submit">Request a callback
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