<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php $this->load->view('theme/theme_includes/header.php')?>   

<link rel="stylesheet" href="<?php echo CUSTOM_THEME_URL; ?>wizard-styles.css">

<link rel="stylesheet" href="<?php echo CUSTOM_THEME_URL; ?>jquery-gmaps-latlon-picker.css">

<main class="page-main">
      <div class="intro-page d-flex align-items-center">
        <div class="page-intro__cover jarallax"><img class="img-cover" src="<?php echo IMAGE_THEME_URL; ?>hotelreservation.jpg" alt="#"/></div>
        <div class="container p-5 text-center">
          <h1 class="text-uppercase fw-bold fifo-white"></h1>
        </div>
      </div>
      <div class="bg-white">
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="under" href="<?php echo BASE_URL; ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Hotel Properties</span></li>
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

           <h4>Welcome to your FIFO.</h4>
           <p>Your account has been created succesfully!<br>
           You can now add your property details</p>
          
         <section class="form-box" >
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-3 form-wizard">
          
            <!-- Form Wizard -->
                      <form role="form" action="" method="post">

                <!-- Form progress -->
                        <div class="form-wizard-steps form-wizard-tolal-steps-6">
                          <div class="form-wizard-progress">
                              <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                          </div>
                <!-- Step 1 -->
                          <div class="form-wizard-step active">
                            <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <p>Add Property</p>
                          </div>
                <!-- Step 1 -->
                
                <!-- Step 2 -->
                          <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                            <p>Hotel Info</p>
                          </div>
                <!-- Step 2 -->
                
                <!-- Step 3 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                            <p>Location Map</p>
                          </div>
                <!-- Step 3 -->
                
                <!-- Step 4 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>Room Price</p>
                          </div>
                <!-- Step 4 -->

               <!-- Step 5 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>Photos</p>
                          </div>
                <!-- Step 5 -->

                <!-- Step 6 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>Amenities</p>
                          </div>
                <!-- Step 6 -->

                        </div>
              <!-- Form progress -->
                        
              
              <!-- Form Step 1 -->


            <fieldset>

              <h4>Property Details: <span>Step 1 - 6</span></h4>


                  <div class="form-group">
                     <label>How did you come to know about us?: </label>
                     <select class="form-control" name="knowaboutus" id="knowaboutus">
                      <option value="FIFO Website">FIFO Website</option>
                      <option value="FIFO Staffs">FIFO Staffs</option>
                      <option value="Advertisement">Advertisement</option>
                      <option value="Other Hotel Referred You">Other Hotel Referred You</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label>Hotel Name: <span>*</span></label>
                      <input type="text" name="hotelname" id="hotelname" placeholder="Hotel Name" class="form-control required">
                  </div>

                  <div class="form-group">
                      <label>Hotel Type: </label>
                      <select name="hoteltype" class="form-control" id="hoteltype" wfd-id="123">
                        <option value="Resort">Resort</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Motel">Motel</option>
                        <option value="BnB">BnB</option>
                        <option value="Homestay">Homestay</option>
                        <option value="Tent">Tent</option>
                        <option value="Service Apartment">Service Apartment</option>
                        <option value="Bungalow">Bungalow</option>
                        <option value="Lodge">Lodge</option>
                        <option value="Guest House">Guest House</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Cottage">Cottage</option>
                        <option value="Houseboat">Houseboat</option>
                        <option value="Villa">Villa</option>
                        <option value="Palace">Palace</option>
                        <option value="Beach Hut">Beach Hut</option>
                        <option value="Ryokan">Ryokan (Japanese Inn)</option>
                        <option value="Luxury Yacht">Luxury Yacht</option>
                        <option value="Farm Stay">Farm Stay</option>
                        <option value="Tree house">Tree house</option>
                        <option value="Heritage">Heritage</option>
                        <option value="Others">Others</option>
                        <option value="Ayurvedic Treatment Centre">Ayurvedic Treatment Centre</option>
                      </select>
                  </div>

                  <div class="form-group">
                     <label>Star Rating: </label>
                     <select class="form-control" name="starrating" id="starrating">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="0">No Star</option>
                    </select>
                  </div>
                  <div class="form-group">
                     <label>Currency: </label>
                     <select name="currency" class="form-control" id="currency">
                        <option value="AFN">Afghan afghani</option>
                        <option value="ALL">Albanian lek</option>
                        <option value="DZD">Algerian dinar</option>
                        <option value="AOA">Angolan kwanza</option>
                        <option value="ARS">Argentine peso</option>
                        <option value="AMD">Armenian dram</option>
                        <option value="AWG">Aruban florin</option>
                        <option value="AUD">Australian dollar</option>
                        <option value="AZN">Azerbaijani manat</option>
                        <option value="BSD">Bahamian dollar</option>
                        <option value="BHD">Bahraini dinar</option>
                        <option value="BDT">Bangladeshi taka</option>
                        <option value="BBD">Barbadian dollar</option>
                        <option value="BYR">Belarusian ruble</option>
                        <option value="BZD">Belize dollar</option>
                        <option value="BMD">Bermudian dollar</option>
                        <option value="BTN">Bhutanese ngultrum</option>
                        <option value="BOB">Bolivian boliviano</option>
                        <option value="BAM">Bosnia and Herzegovina convertible mark</option>
                        <option value="BWP">Botswana pula</option>
                        <option value="BRL">Brazilian real</option>
                        <option value="BND">Brunei dollar</option>
                        <option value="BGN">Bulgarian lev</option>
                        <option value="BIF">Burundi franc</option>
                        <option value="XPF">CFP franc</option>
                        <option value="KHR">Cambodian riel</option>
                        <option value="CAD">Canadian dollar</option>
                        <option value="CVE">Cape Verdean escudo</option>
                        <option value="KYD">Cayman Islands dollar</option>
                        <option value="XAF">Central African CFA franc</option>
                        <option value="CLP">Chilean peso</option>
                        <option value="CNY">Chinese Yuan Renminbi</option>
                        <option value="COP">Colombian peso</option>
                        <option value="KMF">Comorian franc</option>
                        <option value="CDF">Congolese franc</option>
                        <option value="none">Cook Islands dollar</option>
                        <option value="CRC">Costa Rican colon</option>
                        <option value="HRK">Croatian kuna</option>
                        <option value="CUP">Cuban peso</option>
                        <option value="CZK">Czech koruna</option>
                        <option value="DKK">Danish krone</option>
                        <option value="DJF">Djiboutian franc</option>
                        <option value="DOP">Dominican peso</option>
                        <option value="XCD">East Caribbean dollar</option>
                        <option value="EGP">Egyptian pound</option>
                        <option value="ERN">Eritrean nakfa</option>
                        <option value="ETB">Ethiopian birr</option>
                        <option value="EUR">European euro</option>
                        <option value="FKP">Falkland Islands pound</option>
                        <option value="none">Faroese krona</option>
                        <option value="FJD">Fijian dollar</option>
                        <option value="GMD">Gambian dalasi</option>
                        <option value="GEL">Georgian lari</option>
                        <option value="GHS">Ghanaian cedi</option>
                        <option value="GIP">Gibraltar pound</option>
                        <option value="GTQ">Guatemalan quetzal</option>
                        <option value="GGP">Guernsey Pound</option>
                        <option value="GNF">Guinean franc</option>
                        <option value="GYD">Guyanese dollar</option>
                        <option value="HTG">Haitian gourde</option>
                        <option value="HNL">Honduran lempira</option>
                        <option value="HKD">Hong Kong dollar</option>
                        <option value="HUF">Hungarian forint</option>
                        <option value="ISK">Icelandic krona</option>
                        <option value="INR" selected="selected">Indian rupee</option>
                        <option value="IDR">Indonesian rupiah</option>
                        <option value="IRR">Iranian rial</option>
                        <option value="IQD">Iraqi dinar</option>
                        <option value="ILS">Israeli new sheqel</option>
                        <option value="JMD">Jamaican dollar</option>
                        <option value="JPY">Japanese yen</option>
                        <option value="JEP">Jersey pound</option>
                        <option value="JOD">Jordanian dinar</option>
                        <option value="KZT">Kazakhstani tenge</option>
                        <option value="KES">Kenyan shilling</option>
                        <option value="KWD">Kuwaiti dinar</option>
                        <option value="KGS">Kyrgyzstani som</option>
                        <option value="LAK">Lao kip</option>
                        <option value="LBP">Lebanese pound</option>
                        <option value="LSL">Lesotho loti</option>
                        <option value="LRD">Liberian dollar</option>
                        <option value="LYD">Libyan dinar</option>
                        <option value="MOP">Macanese pataca</option>
                        <option value="MKD">Macedonian denar</option>
                        <option value="MGA">Malagasy ariary</option>
                        <option value="MWK">Malawian kwacha</option>
                        <option value="MYR">Malaysian ringgit</option>
                        <option value="MVR">Maldivian rufiyaa</option>
                        <option value="IMP">Manx pound</option>
                        <option value="MRO">Mauritanian ouguiya</option>
                        <option value="MUR">Mauritian rupee</option>
                        <option value="MXN">Mexican peso</option>
                        <option value="MDL">Moldovan leu</option>
                        <option value="MNT">Mongolian tugrik</option>
                        <option value="MAD">Moroccan dirham</option>
                        <option value="MZN">Mozambican metical</option>
                        <option value="MMK">Myanmar kyat</option>
                        <option value="NAD">Namibian dollar</option>
                        <option value="NPR">Nepalese rupee</option>
                        <option value="ANG">Netherlands Antillean guilder</option>
                        <option value="TWD">New Taiwan dollar</option>
                        <option value="NZD">New Zealand dollar</option>
                        <option value="NIO">Nicaraguan cordoba</option>
                        <option value="NGN">Nigerian naira</option>
                        <option value="KPW">North Korean won</option>
                        <option value="NOK">Norwegian krone</option>
                        <option value="OMR">Omani rial</option>
                        <option value="PKR">Pakistani rupee</option>
                        <option value="PGK">Papua New Guinean kina</option>
                        <option value="PYG">Paraguayan guarani</option>
                        <option value="PEN">Peruvian nuevo sol</option>
                        <option value="PHP">Philippine peso</option>
                        <option value="PLN">Polish zloty</option>
                        <option value="GBP">Pound sterling</option>
                        <option value="QAR">Qatari riyal</option>
                        <option value="RON">Romanian leu</option>
                        <option value="RUB">Russian ruble</option>
                        <option value="RWF">Rwandan franc</option>
                        <option value="XDR">SDR (Special Drawing Right)</option>
                        <option value="SHP">Saint Helena pound</option>
                        <option value="WST">Samoan tala</option>
                        <option value="STD">Sao Tome and Principe dobra</option>
                        <option value="SAR">Saudi riyal</option>
                        <option value="RSD">Serbian dinar</option>
                        <option value="SCR">Seychellois rupee</option>
                        <option value="SLL">Sierra Leonean leone</option>
                        <option value="SGD">Singapore dollar</option>
                        <option value="SBD">Solomon Islands dollar</option>
                        <option value="SOS">Somali shilling</option>
                        <option value="ZAR">South African rand</option>
                        <option value="KRW">South Korean won</option>
                        <option value="SSP">South Sudanese pound</option>
                        <option value="LKR">Sri Lankan rupee</option>
                        <option value="SDG">Sudanese pound</option>
                        <option value="SRD">Surinamese dollar</option>
                        <option value="SZL">Swazi lilangeni</option>
                        <option value="SEK">Swedish krona</option>
                        <option value="CHF">Swiss franc</option>
                        <option value="SYP">Syrian pound</option>
                        <option value="TJS">Tajikistani somoni</option>
                        <option value="TZS">Tanzanian shilling</option>
                        <option value="THB">Thai baht</option>
                        <option value="TOP">Tongan paanga</option>
                        <option value="TTD">Trinidad and Tobago dollar</option>
                        <option value="TND">Tunisian dinar</option>
                        <option value="TRY">Turkish lira</option>
                        <option value="TMT">Turkmenistani manat</option>
                        <option value="AED">UAE dirham</option>
                        <option value="UGX">Ugandan shilling</option>
                        <option value="UAH">Ukrainian hryvnia</option>
                        <option value="USD">United States dollar</option>
                        <option value="UYU">Uruguayan peso</option>
                        <option value="UZS">Uzbekistani som</option>
                        <option value="VUV">Vanuatu vatu</option>
                        <option value="VEF">Venezuelan bolivar</option>
                        <option value="VND">Vietnamese dong</option>
                        <option value="XOF">West African CFA franc</option>
                        <option value="YER">Yemeni rial</option>
                        <option value="ZMW">Zambian kwacha</option>
                      </select>
                    </div>

                  <div class="form-group">
                      <label>No of Rooms: <span>*</span></label>
                      <input type="text" name="noofrooms" id="noofrooms" placeholder="No.of Rooms" class="form-control required">
                  </div>

                  <div class="form-group">
                     <label>Country: </label>
                     <select class="form-control" name="country" id="country">
                      <option value="1">India</option>
                    </select>
                  </div>

                  <div class="form-group">
                     <label>State: </label>
                     <select class="form-control" name="state" id="state">
                      <option value="1">Tamil Nadu</option>
                    </select>
                  </div>

                  <div class="form-group">
                     <label>City: </label>
                     <select name="city" class="form-control" id="city">
                     <option value="">Select city </option>
                     <option value="Bhavani">Bhavani </option>
                     <option value="Chennai">Chennai </option>
                     <option value="Chinna salem">Chinna salem </option>
                     <option value="Coimbatore">Coimbatore </option>
                     <option value="Coonoor">Coonoor </option>
                     <option value="Cuddalore">Cuddalore </option>
                     <option value="Dharmapuri">Dharmapuri </option>
                     <option value="Dindigul">Dindigul </option>
                     <option value="Erode">Erode </option>
                     <option value="Kanchipuram">Kanchipuram </option>
                     <option value="Karaikudi">Karaikudi </option>
    
                        <option value="Karur">
                          Karur </option>
    
                        <option value="Madurai">
                          Madurai </option>
    
                        <option value="Nagapattinam">
                          Nagapattinam </option>
    
                        <option value="Nagercoil">
                          Nagercoil </option>
    
                        <option value="Namakkal">
                          Namakkal </option>
    
                        <option value="Palani">
                          Palani </option>
    
                        <option value="Paramakudi">
                          Paramakudi </option>
    
                        <option value="Perambalur">
                          Perambalur </option>
    
                        <option value="Pollachi">
                          Pollachi </option>
    
                        <option value="Pudukkottai">
                          Pudukkottai </option>
    
                        <option value="Ramanathapuram">
                          Ramanathapuram </option>
    
                        <option value="Rameshwaram">
                          Rameshwaram </option>
    
                        <option value="Salem">
                          Salem </option>
    
                        <option value="Sathyamangalam">
                          Sathyamangalam </option>
    
                        <option value="Sirkali">
                          Sirkali </option>
    
                        <option value="Sivaganga">
                          Sivaganga </option>
    
                        <option value="Sivakasi">
                          Sivakasi </option>
    
                        <option value="Tenkasi">
                          Tenkasi </option>
    
                        <option value="Thanjavur">
                          Thanjavur </option>
    
                        <option value="Theni Allinagaram">
                          Theni Allinagaram </option>
    
                        <option value="Thiruvallur">
                          Thiruvallur </option>
    
                        <option value="Thiruvarur">
                          Thiruvarur </option>
    
                        <option value="Tiruchendur">
                          Tiruchendur </option>
    
                        <option value="Tiruchirappalli">
                          Tiruchirappalli </option>
    
                        <option value="Tirunelveli">
                          Tirunelveli </option>
    
                        <option value="Tiruvannamalai">
                          Tiruvannamalai </option>
    
                        <option value="Valparai">
                          Valparai </option>
    
                        <option value="Vellore">
                          Vellore </option>
    
                        <option value="Villupuram">
                          Villupuram </option>
    
                        <option value="Virudhunagar">
                          Virudhunagar </option>
    
                        <option value="Ooty">
                          Ooty </option>
    
                        <option value="Kodaikanal">
                          Kodaikanal </option>
    
                        <option value="Yercaud">
                          Yercaud </option>
    
                        <option value="Yelagiri">
                          Yelagiri </option>
    
                        <option value="Tirupur">
                          Tirupur </option>
    
                        <option value="Kumbakonam">
                          Kumbakonam </option>
    
                        <option value="Masinagudi">
                          Masinagudi </option>
    
                        <option value="Mahabalipuram">
                          Mahabalipuram </option>
    
                        <option value="kanyakumari">
                          kanyakumari </option>
    
                        <option value="Kotagiri">
                          Kotagiri </option>
    
                        <option value="Tuticorin">
                          Tuticorin </option>
    
                        <option value="Velankanni">
                          Velankanni </option>
    
                        <option value="Mudumalai">
                          Mudumalai </option>
    
                        <option value="tranquebar">
                          tranquebar </option>
    
                        <option value="Hosur">
                          Hosur </option>
    
                        <option value="Kutralam">
                          Kutralam </option>
    
                        <option value="Tiruttani">
                          Tiruttani </option>
    
                        <option value="Krishnagiri">
                          Krishnagiri </option>
    
                        <option value="Chidambaram">
                          Chidambaram </option>
    
                        <option value="Thirukkadaiyur">
                          Thirukkadaiyur </option>
    
                        <option value="Tiruchengode">
                          Tiruchengode </option>
    
                        <option value="Mettupalayam">
                          Mettupalayam </option>
    
                        <option value="Ponnamaravathy">
                          Ponnamaravathy </option>
    
                        <option value="Ariyalur">
                          Ariyalur </option>
    
                        <option value="Mayiladuthurai">
                          Mayiladuthurai </option>
    
                        <option value="Arani">
                          Arani </option>
    
                        <option value="Devala">
                          Devala </option>
    
                        <option value="Sriperumbudur">
                          Sriperumbudur </option>
    
                        <option value="Jayankondam">
                          Jayankondam </option>
    
                        <option value="Acharapakkam">
                          Acharapakkam </option>
    
                        <option value="Kottamedu">
                          Kottamedu </option>
    
                        <option value="Kumaragiri">
                          Kumaragiri </option>
    
                        <option value="Manapparai">
                          Manapparai </option>
    
                        <option value="Ranipet">
                          Ranipet </option>
    
                        <option value="Cumbum">
                          Cumbum </option>
    
                        <option value="Oragadam">
                          Oragadam </option>
    
                        <option value="Srirangam">
                          Srirangam </option>
    
                    </select>
                  </div>

                  <div class="form-group">
                      <input type="checkbox" name="termsandCond" id="termsandCond" class="form-control-checkbox  required" value="yes"> <span class="regTermsTxt">I have read and accept FIFO Terms and conditions <a href="<?php echo BASE_URL; ?>termsandconditions" target="_new">Click here</a>.</span>
                  </div>

                  <div class="form-wizard-buttons">
                      <button type="button" class="btn btn-next">Next</button>
                  </div>
            </fieldset>
              <!-- Form Step 1 -->

              <!-- Form Step 2 -->
            <fieldset>
              <h4>Hotel Information : <span>Step 2 - 4</span></h4>

                <div class="form-group">
                    <label>Hotel Phone: <span>*</span></label>
                    <input type="text" name="hotelphone" id="hotelphone" placeholder="Hotel Phone" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Hotel Mobile: <span>*</span></label>
                    <input type="text" name="hotelmobile" id="hotelmobile" placeholder="Hotel Mobile" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Email (Multiple emails with comma seperated): <span>*</span></label>
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Checkin Time: <span>*</span></label>
                    <input type="text" name="checkintime" id="checkintime" placeholder="Checkin Time" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Checkout Time: <span>*</span></label>
                    <input type="text" name="checkouttime" id="checkouttime" placeholder="Checkout Time" class="form-control required">
                </div>

                <div class="form-wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

            </fieldset>
              <!-- Form Step 2 -->

              <!-- Form Step 3 -->
            <fieldset class="gllpLatlonPicker">

              <h4>Location Map: <span>Step 3 - 4</span></h4>

                <div class="form-group">
                    <label>Latitude: <span>*</span></label>
                    <input type="text" name="latitude" id="latitude" placeholder="Latitude" class="form-control required gllpLatitude">
                </div>

                <div class="form-group">
                    <label>Longitude: <span>*</span></label>
                    <input type="text" name="longitude" id="longitude" placeholder="Longitude" class="form-control required gllpLongitude">
                </div>

                <div class="form-group map-align col-lg-6">
                    <div class="gllpMap">Google Maps</div>
                    <input type="hidden" class="gllpLatLng"/>
                    <input type="hidden" class="gllpZoom" value="3"/>
                </div>

                <div class="form-group">
                    <label>Address: <span>*</span></label>
                    <input type="text" name="address" id="address" placeholder="Address" class="form-control required gllpSearchField">
                </div>

                <div class="form-group">
                    <label>Locality: <span>*</span></label>
                    <input type="text" name="locality" id="locality" placeholder="Locality" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Zipcode: <span>*</span></label>
                    <input type="text" name="Zipcode" id="zipcode" placeholder="Zipcode" class="form-control required">
                </div>


                <div class="form-wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

            </fieldset>
              <!-- Form Step 3 -->
              
              <!-- Form Step 4 -->
            <fieldset>

              <h4>Room Type &amp; Price: <span>Step 4 - 4</span></h4>

                <div class="form-group">
                    <label>Room Type: <span>*</span></label>
                    <input type="text" name="roomtype" id="roomtype" placeholder="Room Type" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Price(Per Night): <span>*</span></label>
                    <input type="text" name="roomtype" id="roomtype" placeholder="Room Type" class="form-control required">
                </div>

                <div class="form-group">
                    <label>Accommodation Type : </label><br>
                    <input type="radio" name="accommodation" value="Accommodation only"> <span class="regTermsTxt">Accommodation only</span>
                    <input type="radio" name="accommodation" value="Free Breakfast"> <span class="regTermsTxt">Free Breakfast</span>
                    <input type="radio" name="accommodation" value="Free Breakfast and Dinner"> <span class="regTermsTxt">Free Breakfast and Dinner</span>
                    <input type="radio" name="accommodation" value="Free Breakfast, Lunch and Dinner"> <span class="regTermsTxt">Free Breakfast, Lunch and Dinner</span>
                    <input type="radio" name="accommodation" value="Free Cooked Breakfast"> <span class="regTermsTxt">Free Cooked Breakfast</span>
                </div>

                <div class="form-group">
                    <label>Cancellation Type : </label><br>
                    <input type="radio" name="cancellation" value="free24with1ni8"> <span class="regTermsTxt">Free Cancel upto 24 hours. If You cancel your Hotel booking within 24 hrs of Check-In date or a No-show, Cancellation charges will be 1 night Cost.</span><br>
                    <input type="radio" name="cancellation" value="free24with100percent"> <span class="regTermsTxt">Free Cancel upto 24 hours. If You cancel your Hotel booking within 24 hrs of Check-In date or a No-show, Cancellation charges will be 100 Percent Cost.</span><br>
                    <input type="radio" name="cancellation" value="free48with1ni8"> <span class="regTermsTxt">Free Cancel upto 48 hours. If You cancel your Hotel booking within 48 hrs of Check-In date or a No-show, Cancellation charges will be 1 night Cost.</span><br>
                    <input type="radio" name="cancellation" value="free48with100percent"> <span class="regTermsTxt">Free Cancel upto 48 hours. If You cancel your Hotel booking within 48 hrs of Check-In date or a No-show, Cancellation charges will be 100 Percent Cost.</span><br>
                    <input type="radio" name="cancellation" value="free72with50to100percent"> <span class="regTermsTxt">Free Cancel upto 72 hours. If You cancel your Hotel booking within 72 hrs to 48 hrs of Check-In date, Cancellation charges will be 50 Percent Cost. If You cancel your Hotel booking within 48 hrs of Check-In date or a No-show, Cancellation charges will be 100 Percent Cost.</span>
                </div>

                 <div class="form-group">
                      <input type="checkbox" value="Tax included" name="taxincluded" id="taxincluded" class="form-control-checkbox"> <span class="regTermsTxt">Tax included</span><br>
                      <input type="checkbox" value="Pay at hotel" name="payathotel" id="payathotel" class="form-control-checkbox"> 
                      <span class="regTermsTxt">Pay at hotel<a href="<?php echo BASE_URL; ?>termsandconditions" target="_new">Terms &amp; Conditions</a>.</span>
                  </div>

                  <div class="form-wizard-buttons">
                      <button type="button" class="btn btn-previous">Previous</button>
                      <button type="submit" class="btn btn-submit">Submit</button>
                  </div>

            </fieldset>
              <!-- Form Step 4 -->
                      
                      </form>
            <!-- Form Wizard -->
                    </div>
                </div>
                    
            </div>
        </section>


        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
	
	<?php $this->load->view('theme/theme_includes/footer.php')?>

<?php $this->load->view('theme/theme_includes/footer_scripts.php')?>

<script src="<?php echo JS_THEME_URL; ?>wizard-scripts.js"></script>

<script src="<?php echo JS_THEME_URL; ?>jquery-gmaps-latlon-picker.js"></script>

<script type="text/javascript">
  
  $(document).bind("location_changed", function(event, object) {
  var lat = $(object).find('.gllpLatitude').val();
  var lng = $(object).find('.gllpLongitude').val();
  var latLng = lat + ',' + lng;
  $(object).find('.gllpLatLng').val(latLng);
});

</script>
