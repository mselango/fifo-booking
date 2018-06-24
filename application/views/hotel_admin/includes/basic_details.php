

<form id="basic_hotel_form">
  <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id">
<div class=" col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Hotel Name</label>
    <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['name'] : '';?>" required id="name" name="basic[name]" placeholder="Enter Hotel Name">
</div>
<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Display Name</label>
    <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['display_name'] : '';?>" required id="display_name" name="basic[display_name]"  placeholder="Enter Display Name">
</div>
<div class="clearfix"></div>
<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Hotel Type</label>
  <select class="form-control validate_field" required id="type" name="basic[type]" >
    <option value="">Select Type</option>
    <?php
    $type = !empty($hotel)? $hotel['type'] : '';
    foreach($hotel_type as $hotels) {
      $selected = ($type == $hotels['id']) ? 'selected' : '';
      echo "<option value=".$hotels['id']." $selected>".$hotels['label']."</option>";
    }
    ?>
  </select>
</div>
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Currency</label>
    <select class="form-control validate_field" required id="type" name="basic[currency]" >
      <option value="">Select Type</option>
        <?php
        $type = !empty($hotel)? $hotel['currency'] : '';
        foreach($currencies as $currency) {
            $selected = ($type == $currency['id']) ? 'selected' : '';
            echo "<option value=".$currency['id']." $selected>".$currency['code']."</option>";
        }
        ?>
    </select>
  </div>

<div class="clearfix"></div>

<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">Built Year</label>
  <select class="form-control validate_field" id="built_year" value="<?php echo !empty($hotel)? $hotel['built_year'] : '';?>" required name="detail[built_year]">
    <option value="">Select Year</option>
    <?php
    $built_year = !empty($hotel)? $hotel['built_year'] : '';
    $currentYear = date('Y');
    for($year=1980;$year<=$currentYear;$year++) {
      $selected = ($year == $built_year) ? 'selected' : '';
      echo "<option value=".$year." $selected>$year</option>";
    }
    ?>
  </select>
</div>
<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">No Of Restaurants</label>
  <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['no_of_hotels'] : '';?>" id="no_of_hotels" name="detail[no_of_hotels]" placeholder="Enter No Of Restaurants" required>
</div>
<div class="clearfix"></div>


<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">No of Rooms</label>
  <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['no_of_rooms'] : '';?>" id="no_of_rooms" name="detail[no_of_rooms]" placeholder="Enter No of Rooms" required>
</div>
<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">No of Floors</label>
  <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['no_of_floors'] : '';?>" id="no_of_floors" name="detail[no_of_floors]" placeholder="Enter No of Floors" required>
</div>
<div class="clearfix"></div>

<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">Check In</label>
  <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['check_in'] : '';?>" id="check_in" placeholder="Enter CheckIn" name="basic[check_in]" required>
</div>
<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">Check Out</label>
  <input type="text" class="form-control validate_field" value="<?php echo !empty($hotel)? $hotel['check_out'] : '';?>" id="check_out" placeholder="Exter Check Out" name="basic[check_out]" required>
</div>
<div class="clearfix"></div>

<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
  <label for="">Description</label>
  <textarea class="form-control validate_field" id="textarea" cols="5" rows="5" name="basic[description]" required><?php echo !empty($hotel)? $hotel['description'] : '';?></textarea>
</div>

<div class="clearfix"></div>

<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <button type="button" class="btn btn-default" id="basic_submit">Save</button>
</div>
<div class="clearfix"></div>
</form>

