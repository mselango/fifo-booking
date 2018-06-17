<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>   

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
              <li class="breadcrumb-item"><a class="under" href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>About Us</span></li>
            </ol>
          </div>
        </nav>
      </div>
      <div class="page-content">
        <div class="container">
          <div class="col-12 col-lg-6 float-lg-left px-0 pr-lg-4 mb-3"><a href="contacts.html"><img class="img-fluid mx-auto" src="<?php echo IMAGE_THEME_URL; ?>upload/14.jpg" alt="#"></a></div>
          <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold">FIFO Booking Pvt. Ltd</h5>
            </li>
            <li><a class="fw-bold text-dark text-nowrap" href="#"><i class="fa fa-file-text-o mr-2"></i><span>16 Article</span></a></li>
          </ul>
          <ul class="social-links d-flex mb-3">
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
          </ul>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p>I am a business owner myself. I coach, blog, maintain a website and develop curricula for leadership-development workshops. I use social media, including Facebook, Twitter and LinkedIn. By far, my biggest distraction was Facebook on my iPhone.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p class="text-right"><a class="btn btn-btn btn-dark" href="<?php echo BASE_URL; ?>contactus" role="button">Our contacts</a>
          </p>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
	<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>