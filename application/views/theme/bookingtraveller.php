<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>

   <main class="page-main">
      <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="under" href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a class="under" href="category.html">Hotels</a></li>
            <li class="breadcrumb-item"><a class="under" href="category.html">Spain</a></li>
            <li class="breadcrumb-item"><a class="under" href="category.html">Costa Brava</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Ravenna Best Hotel</span></li>
          </ol>
        </div>
      </nav>
      <div class="page-content">
        <div class="container">
          <div class="row">
            <aside class="sidebar col-lg-3 order-1 order-lg-0">
              <div class="sidebar__content js-sticky-top">
                <section class="sidebar__card card">
                  <div class="sidebar__card-title">
                    <h4 class="card-title mb-1">Ravena Best Hotel</h4>
                    <ul class="sidebar__card-meta d-flex align-items-center">
                      <li>
                        <div class="rating">
                          <select class="js-rating-stat" data-current-rating="5">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected="selected">5</option>
                          </select>
                        </div>
                      </li>
                      <li class="likes ml-auto text-nowrap"><i class="mr-1 icon icon-thumbs-up"></i><span>8/10</span></li>
                    </ul>
                    <hr class="my-3 mt-2"/>
                  </div>
                  <ul class="sidebar__payment">
                    <li class="d-inline-block align-top mr-5 mb-2">
                      <div class="fw-bold">Rooms</div>
                      <ul>
                        <li>- Standard twin room</li>
                        <li>- Junior suite*2</li>
                      </ul>
                    </li>
                    <li class="d-inline-block align-top mr-5 mb-2">
                      <div class="fw-bold">Check-in date</div>
                      <ul>
                        <li>Fre, Jan 5 2018</li>
                      </ul>
                    </li>
                    <li class="d-inline-block align-top mr-5 mb-2">
                      <div class="fw-bold">Check-out date</div>
                      <ul>
                        <li>Thu, Jan 18 2018</li>
                      </ul>
                    </li>
                    <li class="d-inline-block align-top mr-5 mb-2">
                      <div class="fw-bold">Time of stay</div>
                      <ul>
                        <li>13 Nights</li>
                      </ul>
                    </li>
                  </ul>
                  <hr class="mt-2">
                  <ul class="sidebar__payment-total">
                    <li class="h4 fw-bold f-primary mb-0">Total Price: 3 976 €</li>
                    <li>VAT (20%) included</li>
                  </ul>
                </section>
                <section class="sidebar__card card">
                  <div class="sidebar__card-title">
                    <h4 class="card-title mb-1">Need Help Booking?</h4>
                    <hr class="my-3 mt-2"/>
                  </div>
                  <p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your holiday needs.</p>
                  <ul class="sidebar__contacts">
                    <li class="d-flex align-items-center"><i class="icon icon-phone mr-2"></i><a class="fw-bold" href="tel:#">8-800-0011-2222-333</a></li>
                  </ul>
                </section>
              </div>
            </aside>
            <div class="col-lg-9 d-flex" id="barba-wrapper">
              <div class="barba-container">
                <div class="booking-card card">
                  <div class="card-body">
                    <div class="booking-card__title">
                      <h2>01 Traveler info</h2>
                      <hr class="mb-4">
                    </div>
                    <form class="booking-card__form js-form-booking" action="#" method="POST" novalidate data-next="booking-payment.html">
                      <div class="row pad-lg-20">
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" type="text" name="first_name" placeholder="First name" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" type="text" name="last_name" placeholder="Last name" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" id="email" type="email" name="email" placeholder="Email address" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" type="email" name="confirm_email" placeholder="Confirm email address" required="required" data-match="#email" data-match-error="Whoops, these don't match"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" type="text" name="street" placeholder="Street Address an Number" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" type="text" name="city" placeholder="Town / City" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" id="zip" type="text" name="zip_code" placeholder="ZIP code" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <input class="form-control" type="text" name="country" placeholder="Country" required="required"/>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-12">
                          <p class="fw-sm mb-3">Special requirements: (Not Guaranteed)</p>
                          <textarea class="form-control" rows="6" name="message" required="required"></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <button class="btn btn-secondary btn--round mx-auto ml-sm-0" type="submit">Proceed to next step
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>