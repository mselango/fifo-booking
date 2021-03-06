<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>

	<main class="page-main">
      <section class="intro d-flex flex-column load">
        <div class="intro__bg js-intro-bg">
          <div class="over"></div>
          <div class="swiper-container js-intro-slider-bg">
            <div class="swiper-wrapper">
<!--               <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>intro/1505898469banner_01.png" alt="#"></div> -->
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>intro/item-5.jpg" alt="#"></div>
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>intro/air-banner-big.png" alt="#"></div>
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>intro/item-4.jpg" alt="#"></div>
              <div class="swiper-slide"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>intro/1505898946banner_03.png" alt="#"></div>
            </div>
          </div>
        </div>
        <!--<div class="intro__desc js-intro-slider-desc swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <div class="container w-100 text-center">
                <div class="row">
                  <div class="col-12 col-lg-10 mx-auto">
                    <h4 class="h4 intro__caption prlx-scroll">Looking for something amazing?</h4>
                    <h1 class="h1 intro__title prlx-scroll">your best trip</h1>
                    <p class="prlx-scroll">
                      we have collected the best offers in
                      <span class="js-counter">4 217</span>
                      accommodation options - to see them, just enter the dates!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container w-100 text-center">
                <div class="row">
                  <div class="col-12 col-lg-10 mx-auto">
                    <h4 class="h4 intro__caption prlx-scroll">We offer a variety of services and options</h4>
                    <h1 class="h1 intro__title prlx-scroll">discover places</h1>
                    <p class="prlx-scroll">
                      we have collected the best offers in
                      <span class="js-counter">4 217</span>
                      accommodation options - to see them, just enter the dates!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container w-100 text-center">
                <div class="row">
                  <div class="col-12 col-lg-10 mx-auto">
                    <h4 class="h4 intro__caption prlx-scroll">Visit museum with a dedicated tour guide</h4>
                    <h1 class="h1 intro__title prlx-scroll">city tours</h1>
                    <p class="prlx-scroll">
                      we have collected the best offers in
                      <span class="js-counter">4 217</span>
                      accommodation options - to see them, just enter the dates!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container w-100 text-center">
                <div class="row">
                  <div class="col-12 col-lg-10 mx-auto">
                    <h4 class="h4 intro__caption prlx-scroll">City tours / tour tickets / tour guides</h4>
                    <h1 class="h1 intro__title prlx-scroll">more tours</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="container w-100 text-center">
                <div class="row">
                  <div class="col-12 col-lg-10 mx-auto">
                    <h4 class="h4 intro__caption prlx-scroll">Looking for something amazing?</h4>
                    <h1 class="h1 intro__title prlx-scroll">Your travel tours</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="intro__btn-scroll js-intro-btn-jump" type="button"><span></span></button>
        </div>-->
        <div class="intro__content d-flex flex-column justify-content-end js-intro-content">
          <div class="intro__search">
            <div class="container">
              <div class="search-hotels shadow-sm">
                <!--<ul class="search-hotels__tabs nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tabHotel" role="tab" aria-controls="tabHotel" aria-selected="false"><span class="d-none d-md-block">Hotel</span><i class="icon icon-building d-md-none mx-1 text-secondary"></i></a>
                  </li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabFlight" role="tab" aria-controls="tabFlight" aria-selected="true"><span class="d-none d-md-block">Flight</span><i class="icon icon-airplane d-md-none mx-1 text-secondary"></i></a>
                  </li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabFlightHotel" role="tab" aria-controls="tabFlightHotel" aria-selected="true"><span class="d-none d-md-block">Flight &amp; Hotel</span><i class="icon icon-airplane d-md-none mx-1 text-secondary"></i><i class="icon icon-building d-md-none mx-1 text-secondary"></i></a>
                  </li>
                </ul>-->
                <div class="tab-content homeTabPane">
                  <div class="tab-pane active show" id="tabHotel" role="tabpanel">
                    <form class="search-hotels__form" action="<?php echo BASE_URL; ?>searchlists" method="POST" data-toggle="validator">
                      <div class="row">
                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-12">
                          <label class="label-text">Place or name of the hotel</label>
                          <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                              <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or hotel">
                                <option></option>
                                <?php if(isset($hotellists)): 
                                 foreach($hotellists as $row):
                                ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> (hotel)</option>
                               <?php endforeach; endif;?>

                                <?php if(isset($hotelcitylists)): 
                                 foreach($hotelcitylists as $row):
                                ?>
                                <option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?>   (city)</option>
                              <?php endforeach; endif;?>
                              </select></span>
                          </div>
                        </div>
                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-6 d-flex home-hotel-search">
                          <div class="form-group-date text-nowrap">
                            <div class="d-inline-block">
                              <label class="label-text">Check in date</label>
                              <div class="input-date-group position-relative"><i class="mr-0 icon icon-calendar text-secondary"></i>
                                <input class="form-control js-input-date" id="hotelDate1" type="text" name="hotel_from" required="required" placeholder="Choose Checkin" />
                                <!-- <label class="form-control date" for="hotelDate1"></label> -->
                              </div>
                            </div><i class="bullet mx-2"></i>
                            <div class="d-inline-block">
                              <label class="label-text">Check out date</label>
                              <div class="input-date-group position-relative"><i class="mr-0 icon icon-calendar text-secondary"></i>
                                <input class="form-control js-input-date" id="hotelDateTo1" type="text" name="hotel_to" required="required" placeholder="Choose Checkout" />
                               <!--  <label class="form-control date" for="hotelDateTo1"></label> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-12 col-lg-4 col-xl-3 d-flex home-hotel-search">
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
                        <div class="form-group col-12 col-xl-2 d-flex mt-3">
                          <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
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
          <div class="intro__hotels">
            <div class="container-fluid p-0">
              <div class="swiper-container js-intro-hotels">
                <div class="swiper-wrapper">
                  <?php if(isset($cmshotellists)):
                    foreach($cmshotellists as $row): 
                      $one = "fa-star-o";
                      $two = "fa-star-o";
                      $three = "fa-star-o";
                      $four = "fa-star-o";
                      $five = "fa-star-o";
                      if($row['star_rating'] >= 1){
                           $one="fa-star";
                      }
                      if($row['star_rating'] >= 2){
                           $two = "fa-star";
                      }
                      if($row['star_rating'] >= 3){
                           $three = "fa-star";
                      }
                      if($row['star_rating'] >= 4){
                           $four = "fa-star";
                      }
                      if($row['star_rating'] >= 5){
                           $five = "fa-star";
                      }
                      ?>
                      <div class="swiper-slide">
                        <div class="card-intro d-block" style="background-image: url(<?php echo IMAGE_THEME_URL; ?>cmshotels/<?php echo $row['img_url']; ?>);">
                          <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary"><i class="fa fa-inr"></i> <?php echo $row['discount_price']; ?></span></div>
                          <div class="card-intro__footer">
                            <h4 class="h4 f-primary"><i class="icon icon-label mr-1"></i> <?php echo $row['address']; ?></h4>
                            <div class="card-intro__local d-flex align-items-center"><span><?php echo $row['description']; ?></span></div>
                            <div class="card-intro__rating">
                              <span class="fa <?php echo $one; ?>"></span>
                              <span class="fa <?php echo $two; ?>"></span>
                              <span class="fa <?php echo $three; ?>"></span>
                              <span class="fa <?php echo $four; ?>"></span>
                              <span class="fa <?php echo $five; ?>"></span>
                            </div>
                          </div>
                          <div class="card-hover">
                            <h3 class="h3 text-uppercase"><?php echo $row['address']; ?></h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                          </div>
                        </div>
                      </div>
                <?php endforeach; endif;?>
                </div>
              </div>
              <div class="intro__hotels-controls">
                <button class="btn btn-primary btn-nav btn-nav--left js-prev" type="button"><i class="fa fa-angle-left"></i></button>
                <button class="btn btn-primary btn-nav btn-nav--right js-next" type="button"><i class="fa fa-angle-right"></i></button>
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
                <p class="fz-norm mb-0"><em>The best choice of hotels we have</em></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-7.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Saint Peterburg</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Russia</li>
                      <li class="amout">1234
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Saint Peterburg</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-8.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Milan</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Italy</li>
                      <li class="amout">953
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Milan</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-9.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Barselona</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Spain</li>
                      <li class="amout">1234
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Barselona</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-10.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Rio de Janeiro</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Brazil</li>
                      <li class="amout">1976
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Rio de Janeiro</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-11.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Paris</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">England</li>
                      <li class="amout">953
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Paris</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-12.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Barselona</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">France</li>
                      <li class="amout">1976
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Barselona</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-13.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Amsterdam</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Netherlands</li>
                      <li class="amout">1976
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Amsterdam</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-14.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Berlin</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Germany</li>
                      <li class="amout">953
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Berlin</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotels/item-15.jpg" alt="#"/>
                </div>
                <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Budapest</h4>
                  <div class="card-hotel__local d-flex align-items-center"><i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Hungary</li>
                      <li class="amout">1976
                        Hotels
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Budapest</h3><a class="btn btn-light btn--round card-hover__view" href="<?php echo BASE_URL; ?>searchlists">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 page-section__more text-center">
              <button class="btn btn-secondary btn--round btn-load" type="button">Show more<i class="fa fa-spin"></i>
              </button>
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