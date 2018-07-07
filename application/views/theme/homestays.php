<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>

	<main class="page-main">
      <section class="intro d-flex flex-column load">
        <div class="intro__bg js-intro-bg">
          <div class="over"></div>
          <div class="swiper-container js-intro-slider-bg">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>homestays/slider2.jpg" alt="#"></div>
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>homestays/slider3.jpg" alt="#"></div>
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>homestays/
                slider1.jpg" alt="#"></div>
            </div>
          </div>
        </div>

        <div class="intro__content d-flex flex-column justify-content-end js-intro-content">
          <div class="intro__search intro-homestays">
            <div class="container">
              <div class="search-hotels shadow-sm">

                <div class="tab-content-homestays">
                  <div class="tab-pane active show" id="tabHotel" role="tabpanel">
                    <form class="search-hotels__form" action="<?php echo BASE_URL; ?>searchlists" method="POST" data-toggle="validator">
                      <div class="row">
                         <div class="form-group col-12 col-md-6 col-lg-4 col-xl-12">
                          <h4>Find out suitable homestays for you</h4>
                         </div>

                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-12">
                          <label class="label-text">Location</label>
                          <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                              <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or name of homestay">
                                <option></option>
                                <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                <option value="Black Pearl">Black Pearl</option>
                                <option value="Marsol">Marsol</option>
                                <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                              </select></span>
                          </div>
                        </div>

                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-12">
                          <label class="label-text">No of guests</label>
                          <div class="d-flex"><span class="select-local d-flex">
                              <select class="select2 js-select-locality" name="noofguests" data-placeholder="Enter the number of guests">
                                <option></option>
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6">6 Guests</option>
                                <option value="7">7 Guests</option>
                                <option value="8">8 Guests</option>
                                <option value="9">9 Guests</option>
                                <option value="10">10 Guests</option>
                                <option value="11">11 Guests</option>
                                <option value="12">12 Guests</option>
                                <option value="13">13 Guests</option>
                                <option value="14">14 Guests</option>
                                <option value="15">15 Guests</option>
                                <option value="16+">16+ Guests</option>
                              </select></span>
                          </div>
                        </div>

                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-12">
                          <label class="label-text">Host Type</label>
                          <div class="d-flex"><span class="select-local d-flex">
                              <select class="select2 js-select-locality" name="hosttype" data-placeholder="Enter the host types">
                                <option></option>
                                <option value="Entire place">Entire place</option>
                                <option value="Private room">Private room</option>
                                <option value="Shared room">Shared room</option>
                              </select></span>
                          </div>
                        </div>

                        <div class="form-group col-12 col-xl-12 d-flex mt-3">
                          <button class="btn btn-secondary btn--round align-self-center" type="submit">Get Homes
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- <div class="tab-pane" id="tabFlight" role="tabpanel">
                    <form class="search-hotels__form" action="#" method="POST">
                      <div class="row">
                        <div class="col-12 col-xl-6">
                          <div class="row">
                            <div class="form-group col-12 col-sm-6 border-0">
                              <label class="label-text">Flying from</label>
                              <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_from" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                              </div>
                            </div>
                            <div class="form-group col-12 col-sm-6 border-0">
                              <label class="label-text">Flying to</label>
                              <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_to" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-12 col-sm-7 col-md-6 col-xl-4 d-flex flex-wrap justify-content-center">
                          <div class="form-group-date text-nowrap text-center">
                            <div class="d-inline-block">
                              <label class="label-text">Departing</label>
                              <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                <input class="form-control js-input-date hidden " id="flyingDate1" type="text" name="departing" required="required"/>
                                <label class="form-control date" for="flyingDate1"></label>
                              </div>
                            </div><i class="bullet mx-4"></i>
                            <div class="d-inline-block">
                              <label class="label-text">Returning</label>
                              <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                <input class="form-control js-input-date hidden " id="flyingDateTo1" type="text" name="returning" required="required"/>
                                <label class="form-control date" for="flyingDateTo1"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-12 col-sm-5 col-md-3 col-xl-2 d-flex justify-content-center">
                          <div class="mx-2">
                            <label class="label-text">Adults</label>
                            <div class="qty">
                              <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                            </div>
                          </div>
                          <div class="mx-2">
                            <label class="label-text">Children</label>
                            <div class="qty">
                              <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-12 col-md-3 col-xl-12 d-flex">
                          <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div> -->
                 <!--  <div class="tab-pane" id="tabFlightHotel" role="tabpanel">
                    <form class="search-hotels__form" action="#" method="GET" data-toggle="validator">
                      <div class="row">
                        <div class="col-12 col-sm-12 mb-2">
                          <div class="row">
                            <div class="form-group col-12 col-lg-4 border-0">
                              <label class="label-text">Place or name of the hotel</label>
                              <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or hotel">
                                    <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                    <option value="Black Pearl">Black Pearl</option>
                                    <option value="Marsol">Marsol</option>
                                    <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                    <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                                  </select></span>
                              </div>
                            </div>
                            <div class="form-group col-12 col-sm-6 col-lg-4 border-0">
                              <label class="label-text">Flying from</label>
                              <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_from" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                              </div>
                            </div>
                            <div class="form-group col-12 col-sm-6 col-lg-4 border-0">
                              <label class="label-text">Flying to</label>
                              <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_to" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-8">
                          <div class="row">
                            <div class="form-group col-12 col-md-6 d-flex justify-content-center mb-3">
                              <div class="form-group-date text-nowrap text-center">
                                <div class="d-inline-block">
                                  <label class="label-text">Departing</label>
                                  <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                    <input class="form-control js-input-date hidden " id="flyingDate2" type="text" name="departing" required="required"/>
                                    <label class="form-control date" for="flyingDate2"></label>
                                  </div>
                                </div><i class="bullet mx-4"></i>
                                <div class="d-inline-block">
                                  <label class="label-text">Returning</label>
                                  <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                    <input class="form-control js-input-date hidden " id="flyingDateTo2" type="text" name="returning" required="required"/>
                                    <label class="form-control date" for="flyingDateTo2"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group col-12 col-md-6 d-flex justify-content-center">
                              <div class="form-group-date text-nowrap text-center">
                                <div class="d-inline-block">
                                  <label class="label-text">Check in date</label>
                                  <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                    <input class="form-control js-input-date hidden " id="hotelDate2" type="text" name="hotel_date_from" required="required"/>
                                    <label class="form-control date" for="hotelDate2"></label>
                                  </div>
                                </div><i class="bullet mx-4"></i>
                                <div class="d-inline-block">
                                  <label class="label-text">Check out date</label>
                                  <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                    <input class="form-control js-input-date hidden " id="hotelDateTo2" type="text" name="hotel_date_to" required="required"/>
                                    <label class="form-control date" for="hotelDateTo2"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-12 col-lg-4 d-flex justify-content-center">
                          <div class="mx-2">
                            <label class="label-text">Rooms</label>
                            <div class="qty">
                              <input class="js-qty" type="text" name="rooms" value="2" data-mask="00"/>
                            </div>
                          </div>
                          <div class="mx-2">
                            <label class="label-text">Adults</label>
                            <div class="qty">
                              <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                            </div>
                          </div>
                          <div class="mx-2">
                            <label class="label-text">Children</label>
                            <div class="qty">
                              <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-12 d-flex">
                          <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <div class="page-content">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <div class="section-header">
                <h2 class="h2">Popular destinations around the world</h2>
                <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
                <p class="fz-norm mb-0"><em>How to be an FIFO homestay</em></p>
              </div>
            </div>
          </div>
         <div class="row">
           <div class="col-12 col-sm-6 col-lg-6 d-flex mb-4">
             <img src="<?php echo IMAGE_THEME_URL; ?>homestays/Homestay1.jpg" height="350px"/>
            </div>
           <div class="col-12 col-sm-6 col-lg-6 d-flex mb-4 mt-2">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Handpicked Homes</h4>
                </div>
                <div class="card-body">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
              </div>
            </div>
         </div>
          <div class="row">
           <div class="col-12 col-sm-6 col-lg-6 d-flex mb-4 mt-2">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Handpicked Homes</h4>
                </div>
                <div class="card-body">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
              </div>
            </div>
              <div class="col-12 col-sm-6 col-lg-6 d-flex mb-4">
             <img src="<?php echo IMAGE_THEME_URL; ?>homestays/Homestay2.jpg" height="305px"/>
            </div>
         </div>
          <div class="row">
            <div class="col-12 text-center">
              <div class="section-header">
                <h2 class="h2">The opportunities we provide</h2>
                <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
                <p class="fz-norm mb-0"><em>Explore the features and benefits of our service</em></p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Handpicked Hotels</h4>
                </div>
                <div class="card-body">
                  <p>All hotels on our website are tested according to various criteria. You can be sure of your choice.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Detailed Descriptions</h4>
                </div>
                <div class="card-body">
                  <p>In order for you to have the most complete idea about the hotel, we try to collect the most complete and detailed description.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Best Price Guarantee</h4>
                </div>
                <div class="card-body">
                  <p>We offer the best hotels at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Secure Booking</h4>
                </div>
                <div class="card-body">
                  <p>Book hotels with us easily and safely. All data on your credit card is encrypted and secure. You can be calm for your means.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Better service</h4>
                </div>
                <div class="card-body">
                  <p>Our specialists visit various hotels to personally assess their quality and provide you with a detailed review.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Any Questions?</h4>
                </div>
                <div class="card-body">
                  <p>Call us at 8-800-2000-6000 and we will answer your questions, help you find a hotel and make a reservation. Working 24/7</p>
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