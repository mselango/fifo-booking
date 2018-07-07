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
        <div class="page-intro__cover jarallax"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>rebranding.jpg" alt="#"/></div>
        <div class="container p-5 text-center">
          <h1 class="text-uppercase fw-bold">Rebrand My Hotel</h1>
        </div>
      </div>
      <div class="bg-white">
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Rebrand My Hotel</span></li>
            </ol>
          </div>
        </nav>
      </div>
      <div class="page-content">
       <div class="container">
         <!--  <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold"><?php echo $title; ?></h5>
            </li>
          </ul>
          <?php echo $description;?> -->
          <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'About Us')">About Us</button>
            <button class="tablinks" onclick="openCity(event, 'Services')">Services</button>
            <button class="tablinks" onclick="openCity(event, 'Our Clients')">Our Clients</button>
            <button class="tablinks" onclick="openCity(event, 'Career')">Career</button>
            <button class="tablinks" onclick="openCity(event, 'Contact Us')">Contact Us</button>
          </div>

          <div id="About Us" class="tabcontent" style="display: block;">
            <p>Who we are <br>With more than a decade of online experience, Internet has become part of our DNA. We are not a
software company but we are abreast with the rapidly changing technology world and we know exactly
what works and what does not for a Hotel. We are a bunch of seasoned youngsters and have worked
with leading Hospitality operators, Global Distribution Systems, Online Travel agencies and Online
Reputation companies. We have come together to provide the best of marketing, distribution, revenue
and brand building solutions to accommodation providers in Travel & Tourism industry. Our team
understands the way Online Travel Distribution works and leverage the wisdom acquired to generate
higher Returns on Investment for our client.</p>
          <h5>Mission &amp; Vision</h5>
          <p>Rebrand My Hotel is established with a mission to help Hoteliers adapt to the changing world of Travel
Distribution and with the vision to provide a platform to generate higher Return on Investments for
Hotels. Travel & Tourism industry runs on Trust & Relationships and hence it’s very important that
relationships are valued and Trust is maintained. Since inception Rebrand My Hotel is governed by the
core values which foster strong relationships with its partners.
</p>

<h5>Our Values</h5>
          <p>Travel & Tourism industry runs on Trust & Relationships and hence it’s very important
that relationships are valued and Trust is maintained. Since inception Rebrand My Hotel
is governed by the core values which foster strong relationships with its partners.
Integrity | Client-centric focus | Transparency | Innovation | Flexibility. Core values
stated above shapes the culture and defines the character of Rebrand My Hotel and is
fundamental to our decision making.
</p>
          </div>

          <div id="Services" class="tabcontent">
            <p><b>Rebrand My Hotel</b> offers services to the hotel industries for promotion and earning
revenues for the sectors. Rebrand My Hotel will provide solutions with management layout
to boost the hotel industries. The category of services by Rebrand My Hotel may be
explained as below:</p> 
<h5><i class="icon icon-bellboy icon-md mr-1 icon-size text-primary"></i>Hotel Staff Management</h5>
<p>Rebrand My Hotel offers services for staff management of the hotels in
behalf of the hotel owners. As the busy schedule of the owners does not
allow to do the staff management properly, Rebrand My Hotel operates
staff management in systematic manner smoothly on the agreement
between the hotel owners and Rebrand My Hotel .</p>
<h5><i class="icon icon-pets icon-md mr-1 icon-size text-primary"></i>OTA Channel Management</h5>
<p>Rebrand My Hotel offers the hotel industries Ota Channel Management which
efficiently enhances the online bookings. This is type of innovative hotel
management solutions from a single source, utilizes proven channel management
technology. This will enhance the bookings by managing the rate parity, inventory
and by assessing the ranking of online multiple travel partners.</p>

<h5><i class="icon icon-tags icon-md mr-1 icon-size text-primary"></i>Online Sales Management</h5>
<p>This type of module is created by Rebrand My Hotel to deal directly with accommodation online and make
the required sales agreement for the promotion of the hotel industries. This type of dealings for sales
agreement of accommodations, enhance the sales capitals and market value generation with the mode of
responsive web solutions.</p>

<h5><i class="icon icon-family icon-md mr-1 icon-size text-primary"></i>B2B Partnerships</h5>
<p>Rebrand My Hotel offers B2B or business to business partnerships which offer the transactions
between two companies. Rebrand My Hotel offers the services of B2B with their specialized in
house team of professionals with the help of online or offline area to boost the hotel industries.</p>

<h5><i class="icon icon-user icon-md mr-1 icon-size text-primary"></i>Travel Agent and Offline Sales</h5>
<p>Rebrand My Hotel offers the services for bookings of hotels through engaging offline travel agents
and thus develops the growth of the hotel industries.</p>

<h5><i class="icon icon-building icon-md mr-1 icon-size text-primary"></i>Hotel Competition Analysis</h5>
<p>Hotel competition analysis may be a very essential tool for running the hotel industries. It may be done in excelspreadsheet by comparing the data for different elements in hotel industries for different categories..Rebrand My Hotel offers the services for hotel competition management analysis, so that the industry can be operated efficiently and rates of hotel accommodation can be fixed accordingly.</p>

<h5><i class="icon icon-sort-duble icon-md mr-1 icon-size text-primary"></i>Bulk Emailers for travel agent &amp; existing guest</h5>
<p>Rebrand My Hotel offers bulk emails regarding booking offers or other terms to the
targeted customers, existing guests and travel agents to achieve platform for bulk
bookings.</p>

<h5><i class="icon icon-badge icon-md mr-1 icon-size text-primary"></i>Hotel photo shoot and 360-degree virtual tour</h5>
<p>Rebrand My Hotel offers professional photo shoot of the hotels and can enhance the
customers’ bookings. The photo shoot will support text, sound effect, music with location
of photos and will create actually virtual 360-degree tour for the customers and will
ultimately support bookings.</p>

<h5><i class="icon icon-calendar icon-md mr-1 icon-size text-primary"></i>Online payments follow-up</h5>
<p>Rebrand My Hotel offers payment follow up online for the hotel industries and
makes the hurdles decrease for the hotel owners. Collection with follow up of
payment online is one category of service to the hotel industries by Rebrand My
Hotel .</p>

<h5><i class="icon icon-calendar icon-md mr-1 icon-size text-primary"></i>Booking Engine &amp; Payment Gateway</h5>
<p>Rebrand My Hotel offers services for bookings for hotel industries using the booking engine which is
website to be used by the customers and travel agents for booking of flights, hotels, holiday
packages and insurance and other services online. Rebrand My Hotel uses payment gateway which is
authorized for processing of payments for credit card holders safely in secured manner.</p>

<h5><i class="icon icon-plus icon-md mr-1 icon-size text-primary"></i>Rate Disparity Management</h5>
<p>Rate parity is defined as consistency in fixing of pricing of hotels in all online travel agencies on
particular day. If the rate disparity occurs on particular day in different travel online, then it
earns negative points to the hotel industries. So, Rebrand My Hotel offers rate disparity
management services online to restrict the bad reputation of the hotel industries.</p>

<h5><i class="icon icon-info icon-md mr-1 icon-size text-primary"></i>Content Management</h5>
<p>Rebrand My Hotel offers services for content management for the hotel industries to
create smooth process of organizing and floating the pieces of articles or texts online
through websites.</p>

<h5><i class="icon icon-24-hours icon-md mr-1 icon-size text-primary"></i>Website Management</h5>
<p>Rebrand My Hotel offers website management which includes editing, daily website backups,
updating and other supports. This sort of service of website management helps to grow the
hotel industries.</p>



          </div>

          <div id="Our Clients" class="tabcontent">
   <div id="carousel">
      <img src="<?php echo IMAGE_THEME_URL; ?>hotels/item-1.jpg" id="wwcp-1" />
      <img src="<?php echo IMAGE_THEME_URL; ?>hotels/item-10.jpg" id="wwcp-10" />
      <img src="<?php echo IMAGE_THEME_URL; ?>hotels/item-11.jpg" id="wwcp-11" />
      <img src="<?php echo IMAGE_THEME_URL; ?>hotels/item-12.jpg" id="wwcp-12" />
      <img src="<?php echo IMAGE_THEME_URL; ?>hotels/item-13.jpg" id="wwcp-13" />
      <img src="<?php echo IMAGE_THEME_URL; ?>hotels/item-14.jpg" id="wwcp-14" />
    </div>
          </div>

          <div id="Career" class="tabcontent">
            <p>We are the hotel promoter and best services partner in hotel
booking industries, you can join us and make your career better ,
so don’t take more time for avail this opportunity just send us your
details. We will contact you asap.
<br>Looking to join us – write to email us <a href="mailto:career@fifobooking.com">career@fifobooking.com</a></p>
          </div>

           <div id="Contact Us" class="tabcontent">
            <section class="sidebar__card card col-lg-12">

            <div class="sidebar__card-title">
              <h4 class="card-title">Write us</h4>
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
            
              <div class="col-lg-8">
            <form class="sidebar__subscribe" action="<?php echo BASE_URL; ?>franchise" method="POST" data-toggle="validator">
             
              <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="mobile" placeholder="Mobile" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
              </div>

              <div class="form-group">
                <input class="form-control" type="company" name="company" placeholder="Company" required>
              </div>

              <div class="form-group">
                <textarea class="form-control rounded" rows="7" name="message" placeholder="Your message..." required></textarea>
              </div>

              <div class="form-group mb-0">
                <button class="btn btn-secondary btn--round mx-auto mx-lg-0" type="submit">Submit
                </button>
              </div>
            </form>
          </div>
          </section>
          </div>

        </div> 
      
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
	<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>

<script type="text/javascript">
 function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>