<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php //echo '<pre>'; print_r($accommodationlists); echo '<pre>'; exit();

?>

<?php $this->load->view('theme/theme_includes/header.php')?>
 
 <main class="page-main">
      <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
            <!-- <li class="breadcrumb-item"><a class="under" href="category.html">Hotels</a></li>
            <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>hoteldetails">Spain</a></li>
            <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>hoteldetails">Costa Brava</a></li> -->
            <li class="breadcrumb-item active" aria-current="page"><span>Search results</span></li>
          </ol>
        </div>
      </nav>
      <div class="page-content">
        <div class="container">
          <div class="row">
            <aside class="sidebar col-lg-3 order-1 order-lg-0">
              <div class="sidebar__content js-sticky-top">
                <div class="sidebar-filter modal card fade" id="sidebarFilter" tabindex="-1" role="dialog">
                  <button class="btn-toggle btn btn-light" type="button" data-dismiss="modal"><span class="icon-bar"></span></button>
                  <div class="modal-header bg-white">
                    <h4 class="modal-title">Refine search result</h4>
                  </div>
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <ul class="sidebar-filter__list">
                          <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#price" data-toggle="collapse" role="button"><span>Price (per night)</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="price">
                              <div class="sidebar-filter__content">
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">below <i class="fa fa-rupee mr-1"></i> 1000</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer"><i class="fa fa-rupee mr-1"></i> 1000 - <i class="fa fa-rupee mr-1"></i> 1999</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer"><i class="fa fa-rupee mr-1"></i> 2000 - <i class="fa fa-rupee mr-1"></i> 2999</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer"><i class="fa fa-rupee mr-1"></i> 3000 - <i class="fa fa-rupee mr-1"></i> 4999</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer"><i class="fa fa-rupee mr-1"></i> 5000 and above</span>
                                </label>

                              </div>
                            </div>
                          </li>
                          <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#accommodation" data-toggle="collapse" role="button"><span>Accommodation type</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="accommodation">
                              <div class="sidebar-filter__content">
                                <?php if(isset($accommodationlists)):  foreach($accommodationlists as $row):?>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox" value="<?php echo $row['id']; ?>"/><span class="custom-control-label pointer"><?php echo $row['name']; ?></span>
                                </label>
                                <?php endforeach; endif;?>
                              </div>
                            </div>
                          </li>
                          <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#HotelAttrs" data-toggle="collapse" role="button"><span>Hotel facilites</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="HotelAttrs">
                              <div class="sidebar-filter__content">
                                <?php if(isset($amenties)):  foreach($amenties as $row):?>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="<?php echo $row['id']; ?>"/><span class="custom-control-label pointer"><?php echo $row['name']; ?></span>
                                  </label>
                                <?php endforeach; endif;?>
                              </div>
                            </div>
                          </li>
                          <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" role="button"><span>Star rating</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show d-block" id="starRating">
                              <div class="sidebar-filter__content">
                                <div class="sidebar-filter__stars rating d-flex justify-content-between align-items-center">
                                  <select class="js-rating-filter" data-current-rating="3 of more">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                  <div class="amount ml-3"><span class="val"></span></div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" role="button"><span>User rating</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show d-block" id="userRating">
                              <div class="sidebar-filter__content">
                                <div class="sidebar-filter__rating">
                                  <div class="mb-2" id="userRatingChange"></div>
                                  <div class="d-flex justify-content-between"><span class="amount" id="userRatingMin"></span><span class="amount" id="userRatingMax">10</span></div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <!-- <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#roomAttrs" data-toggle="collapse" role="button"><span>Rooms facilites</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="roomAttrs">
                              <div class="sidebar-filter__content">
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Wi-Fi</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Room safe</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Desck</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Pay TV</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Mini bar</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Air condition</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Bathroom</span>
                                </label>
                              </div>
                            </div>
                          </li> -->
                         <!--  <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#mealBoard" data-toggle="collapse" role="button"><span>Meal Board</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="mealBoard">
                              <div class="sidebar-filter__content">
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">No meal</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Bed &amp; Breackfast</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Half board</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Full board</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">All-inclusive</span>
                                </label>
                              </div>
                            </div>
                          </li> -->
                          <!-- <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#accessibility" data-toggle="collapse" role="button"><span>Accessibility option</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="accessibility">
                              <div class="sidebar-filter__content">
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">No meal</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Bed &amp; Breackfast</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Half board</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Full board</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">All-inclusive</span>
                                </label>
                              </div>
                            </div>
                          </li> -->
                          <!-- <li class="sidebar-filter__item">
                            <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#location" data-toggle="collapse" role="button"><span>Location area</span><i class="fa fa-angle-down"></i></a></h5>
                            <div class="collapse show" id="location">
                              <div class="sidebar-filter__content">
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">University of Denver</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Zoo</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Art Museum</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Museum of Nature and Science</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Red Rocks Amphitheater</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Pepsi Center</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Coors Field</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Dick's Sporting Goods Park</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Coors Brewery</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">United States Mint</span>
                                </label>
                                <div class="collapse">
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Sports Authority Field at Mile High</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Elitch Gardens Theme Park</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Molly Brown House Museum</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Colorado State Capitol Building</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver's Downtown Aquarium</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Botanic Gardens</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Public Library</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Union Station</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">University of Colorado-Denver</span>
                                  </label>
                                  <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Paramount Theater</span>
                                  </label>
                                </div><a class="d-block js-show-more mt-2" href="#">Show more</a>
                              </div>
                            </div>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <div class="col-lg-9 category-content">
              <nav class="sortbar navbar shadow-sm d-flex align-items-stretch">
                <div class="sortbar__title d-flex align-items-stretch">
                  <button class="navbar-brand d-flex align-items-center pointer js-toggle-sidebar" data-target="#sidebarFilter" data-toggle="modal" type="button"><i class="d-lg-none icon icon-filter"></i><span class="ml-2 d-none d-lg-inline">Sort by:</span></button>
                </div>
                <div class="sortbar__sort js-sorting d-flex align-items-stretch"><a class="nav-link" href="#">Popularity</a><a class="nav-link" href="#">Price</a><a class="nav-link" href="#">Stars</a><a class="nav-link" href="#">Rating</a><a class="nav-link d-flex d-md-none align-items-center" href="#"><span class="mr-2">Sort by</span><i class="icon icon-sort-duble"></i></a></div>
                <div class="sortbar__grid d-flex align-items-stretch ml-md-auto"><a class="nav-link js-toggle-grid" href="#" data-grid="grid" data-cols="col-12 col-sm-6 col-xl-4 d-flex"><i class="icon icon-grid"></i></a><a class="nav-link active js-toggle-grid" href="#" data-grid="list" data-cols="col-12 d-flex"><i class="icon icon-list-mb"></i></a></div>
              </nav>
              <div class="category-content__items row pad-lg-20 row-list">
                <?php if(isset($searchhotellists)) : foreach ($searchhotellists as $row) { 

                    $min_price = 0.00;

                 
                      $one = "fa-star-o";
                      $two = "fa-star-o";
                      $three = "fa-star-o";
                      $four = "fa-star-o";
                      $five = "fa-star-o";
                      if($row['rating'] >= 1){
                           $one="fa-star";
                      }
                      if($row['rating'] >= 2){
                           $two = "fa-star";
                      }
                      if($row['rating'] >= 3){
                           $three = "fa-star";
                      }
                      if($row['rating'] >= 4){
                           $four = "fa-star";
                      }
                      if($row['rating'] >= 5){
                           $five = "fa-star";
                      }
                     

                      foreach($minimumpricelists as $hotel){
                        if ( $hotel['hotel_id'] == $row['hotel_id'] ){
                          $min_price = $hotel['min_price'];
                        }
                      }
                     

                  $dirname = "uploads/".str_replace(' ','-',$row['name'])."/";
                  $num="";
                  $images = glob($dirname."*");
                  for ($i=0; $i<count($images); $i++){
                    if($i==0){
                      $imgName = substr($images[$i], strrpos($images[$i], '/') + 1);
                      $num = BASE_URL.$images[$i];
                    }
                  }
                    ?>

                ?>
                <div class="col-12 d-flex">
                  <div class="product bg-white js-grid-item product--list">
                    <div class="product__special bg-primary text-white">special price
                    </div><a class="product__img-top d-block" href="<?php echo BASE_URL; ?>hoteldetails/<?php echo $row['hotel_id']; ?>" target="_new"><img class="img-fluid" src="<?php echo $num; ?>" alt="#"/></a>
                    <div class="product__body">
                      <h4 class="product__title"><a href="<?php echo BASE_URL; ?>hoteldetails/<?php echo $row['hotel_id']; ?>" target="_new"><?php echo $row['name']; ?></a></h4>
                      <div class="product__rating mb-2">
                        <div class="rating">
                          <div class="card-intro__rating">
                              <span class="fa <?php echo $one; ?>"></span>
                              <span class="fa <?php echo $two; ?>"></span>
                              <span class="fa <?php echo $three; ?>"></span>
                              <span class="fa <?php echo $four; ?>"></span>
                              <span class="fa <?php echo $five; ?>"></span>
                            </div>
                        </div>
                      </div>
                      <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                        <li class="mr-3"><span><?php echo $row['city']; ?></span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-latitude="<?php echo $row['latitude']; ?>" data-longitude="<?php echo $row['longitude']; ?>" data-title="<?php echo $row['name']; ?>">Show on map</a></li>
                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                      </ul>
                      <hr/>
                      <ul class="product__price d-flex justify-content-between align-items-center">
                        <li class="mr-2"><span>Price per night from</span></li>
                        <li><span class="cost"> <i class="fa fa-rupee mr-1"></i> <?php echo $min_price; ?></span>
                        </li>
                      </ul>
                      <hr/>
                      <div class="product__desc">
                        <p><?php echo $row['description']; ?></p><a class="product__link-more" href="<?php echo BASE_URL; ?>hoteldetails/<?php echo $row['hotel_id']; ?>" target="_new">Read more</a>
                      </div>
                      <div class="hotel_amenties mt-1">
                        <i class="fa fa-wifi mr-1" aria-hidden="true"></i>
                        <i class="fa fa-cutlery mr-1" aria-hidden="true"></i>
                        <i class="fa fa-pool mr-1" aria-hidden="true"></i>
                      </div>
                    </div>
                    <hr class="d-none d-sm-block"/>
                    <div class="product__footer">
                      <ul class="product__price d-flex justify-content-between align-items-center">
                        <li class="mr-2"><span>Price per night from</span></li>
                        <li><span class="cost"><i class="fa fa-rupee mr-1"></i> <?php echo $min_price; ?></span>
                        </li>
                      </ul><a class="product__btn-book btn btn-secondary btn--round" href="<?php echo BASE_URL; ?>bookingtraveller">book now</a>
                    </div>
                  </div>
                </div>
              <?php  } endif; ?>
        
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>

    <div class="modal-map modal" id="modalMap" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header align-items-center py-2">
            <h4 class="modal-title"><a class="d-flex align-items-center" href="<?php echo BASE_URL; ?>searchlists"><i class="icon mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 22.1"><path d="M0.3,10.3C0.3,10.3,0.3,10.3,0.3,10.3c-0.4,0.5-0.4,1.2,0,1.6l10,10c0,0,0,0,0,0c0.4,0.4,1.1,0.4,1.6,0 c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1c0,0,0,0,0,0c0-0.6-0.5-1.1-1.1-1.1H3.8l8-8c0.4-0.4,0.4-1.1,0-1.6 c0,0,0,0,0,0c-0.4-0.4-1.1-0.4-1.6,0L0.3,10.3z"/></svg></i><span class="title">Hotel</span></a></h4>
            <button class="btn btn-secondary btn--round px-4" type="button" data-dismiss="modal">map close
            </button>
          </div>
          <div class="map-contain" id="map"></div>
        </div>
      </div>
    </div>
	
<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>

<script type="text/javascript">
$(document).ready(function() {
    $("#modalMap").on("show.bs.modal", function(e) {
        var t = $(e.relatedTarget),
            o = t.data("title"),
            n = $(this),
            lat = parseFloat(t.data("latitude"))
            long = parseFloat(t.data("longitude"));
        n.find(".modal-title .title").text(o);
        mapInit(lat,long);
    })
  });
</script>

