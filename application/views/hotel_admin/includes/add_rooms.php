<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>FIFO::DASHBOARD</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core Css -->
  <link href="<?php echo PLUGINS_URL; ?>bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom Css -->
  <link href="<?php echo CSS_URL; ?>style.css" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="<?php echo CSS_URL; ?>themes/all-themes.css" rel="stylesheet" />
  <link href="<?php echo ASSETS_URL; ?>css/autocomplete.css" rel="stylesheet" />
  <link href="<?php echo ASSETS_URL; ?>css/magicsuggest.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/jquery-ui.css">
  <script>var base_url = '<?php echo base_url() ?>';</script>
</head>
<body id="add_hotel_display">
<form id="hotel_rooms_form">
  <div class="form-group form-float">
    <input type="hidden" class="form-control" value="<?php echo ($hotelId)? $hotelId : '';?>" name="hotel_id" id="hotel_id">
  </div>
  <div class="hotel_rooms">
    <input type="hidden" name="room_id">
    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Room Name</label>
      <input type="text" class="form-control validate-field" name="room_name" >
      <div class="error"><?php echo form_error("room_name");?></div>
    </div>

    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
      <label for="">Room Type</label>
      <select name="room_type" class="form-control validate-field">
        <option value="">Select Room type</option>
        <?php if(!empty($roomTypes)) {
          foreach ($roomTypes as $type){
        ?>
        <option value="<?php echo $type['id'];?>"><?php echo $type['name'];?></option>
        <?php }}?>
      </select>
    </div>
    <div class="clearfix"></div>

    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Description</label>
      <textarea name="description" cols="30" rows="5" class="form-control validate-field no-resize"><?php echo set_value("description");?></textarea>
      <div class="error"><?php echo form_error("description");?></div>
    </div>

    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">No Of Rooms</label>
      <input type="number" class="form-control validate-field" name="room_count"  value="<?php echo set_value("room_count");?>">
      <div class="error"><?php echo form_error("room_count");?></div>

    </div>
    <div class="clearfix"></div>

    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Adults (Base)</label>
      <input type="text" class="form-control validate-field" name="no_of_adults"  value="<?php echo set_value("no_of_adults");?>">
      <div class="error"><?php echo form_error("no_of_adults");?></div>
    </div>
    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Adults (Max)</label>
      <input type="text" class="form-control validate-field" name="max_adults"  value="<?php echo set_value("max_adults");?>">
      <div class="error"><?php echo form_error("max_adults");?></div>
    </div>
    <div class="clearfix"></div>


    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Childs (Base) </label>
      <input type="text" class="form-control validate-field" name="no_of_childs"  value="<?php echo set_value("no_of_childs");?>">
      <div class="error"><?php echo form_error("no_of_childs");?></div>
    </div>
    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Childs (Max)</label>
      <input type="text" class="form-control validate-field" name="max_child"  value="<?php echo set_value("max_child");?>">
      <div class="error"><?php echo form_error("max_child");?></div>
    </div>
    <div class="clearfix"></div>


    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Infants (Max)</label>
      <input type="text" class="form-control validate-field" name="actual_price"  value="<?php echo set_value("actual_price");?>">
      <div class="error"><?php echo form_error("actual_price");?></div>
    </div>
    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Guests (Max)</label>
      <input type="text" class="form-control validate-field" name="discount_price"  value="<?php echo set_value("discount_price");?>">
      <div class="error"><?php echo form_error("discount_price");?></div>
    </div>
    <div class="clearfix"></div>


    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Actual Price</label>
      <input type="text" class="form-control validate-field" name="no_of_guests"  value="<?php echo set_value("no_of_guests");?>">
      <div class="error"><?php echo form_error("no_of_guests");?></div>
    </div>
    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Discounted Price (Final Price)</label>
      <input type="text" class="form-control validate-field" name="no_of_infants"  value="<?php echo set_value("no_of_infants");?>">
      <div class="error"><?php echo form_error("no_of_infants");?></div>
    </div>
    <div class="clearfix"></div>

    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
      <label for="">Bed Type</label>
      <select name="bed_type" class="form-control validate-field">
        <option value="">Select Bed Type</option>
          <?php if(!empty($bedTypes)) {
              foreach ($bedTypes as $btype){
                  ?>
                <option value="<?php echo $btype['id'];?>"><?php echo $btype['name'];?></option>
          <?php }}?>
      </select>
    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
      <label for="">Extra Bed Type</label>
      <select id="id_extra_bed" name="extra_bed_type" class="form-control validate-field">
        <option value="">Select Extra Bed</option>
          <?php if(!empty($extraBeds)) {
              foreach ($extraBeds as $beds){
                  ?>
                <option value="<?php echo $beds['id'];?>"><?php echo $beds['name'];?></option>
              <?php }}?>
      </select>
    </div>

    <div class="clearfix"></div>

    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
      <label for="">Room View</label>
      <select class="form-control validate-field" required id="type" name="room_view" >
        <option value="">Select View</option>
          <?php if(!empty($roomViews)) {
              foreach ($roomViews as $views){
                  ?>
                <option value="<?php echo $views['id'];?>"><?php echo $views['name'];?></option>
              <?php }}?>
      </select>
    </div>

    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label class="form-label">Room Size</label>
      <input type="text" class="form-control input-sm validate-field" name="room_size_a" size="5" style="width:50%"> X
      <input type="text" class="form-control input-sm validate-field" name="room_size_b" size="5" style="width:50%">
    </div>
    <div class="clearfix"></div>

    <div class=" col-xs-10 col-sm-10 col-md-5 col-lg-5 form-ele">
      <label for="">Services</label>
      <input type="text" class="services" name="services"  placeholder="services">
    </div>
    <div class="clearfix"></div>
  </div>
</form>
<button class="btn btn-primary waves-effect" id="save_hotel_rooms" type="button">SAVE</button>
<a href='#' style="display: none;" id="close_color_box" onclick='parent.$.colorbox.close(); return false;'>Close</a>

<!-- Jquery Core Js -->
<script src="<?php echo PLUGINS_URL; ?>jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="<?php echo PLUGINS_URL; ?>bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('assets/js/autocomplete.js');?>"></script>
<script src="<?php echo base_url('assets/js/magicsuggest.js');?>"></script>
<script src="<?php echo base_url('assets/js/hotel.js');?>"></script>

</body>

</html>