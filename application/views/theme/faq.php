<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>   

<main class="page-main">
      <div class="intro-page d-flex align-items-center">
        <div class="page-intro__cover jarallax"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>faqs.jpg" alt="#"/></div>
        <div class="container p-5 text-center">
          <h1 class="text-uppercase fw-bold">Frequently Asked Questions</h1>
        </div>
      </div>
      <div class="bg-white">
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>FAQs</span></li>
            </ol>
          </div>
        </nav>
      </div>
      <div class="page-content">
        <div class="container">
          <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold"></h5>
            </li>
          </ul>
		  <div class="faq_cls">
		  <?php foreach ($result as $row): ?>
		  <div>
		  <p><b><?php echo $row['question']; ?></b><br>
		  <?php echo $row['answer']; ?>
		  </p>
		  </div>
		  <?php endforeach;?>
		  </div>
         
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
	<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>