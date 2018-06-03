<form id="hotel_address_form">
    <input type="hidden" class="form-control" value="<?php echo ($hotel)? $hotel['id'] : '';?>" name="hotel_id">
    <div class=" col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Address</label>
        <textarea name="address1" id="address1" required class="form-control" cols="5" rows="5"><?php echo ($hotel)? $hotel['address1'] : '';?></textarea>
    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Locality </label>
        <input type="text" class="form-control" value="<?php echo ($hotel)? $hotel['near_by_location'] : '';?>" required id="near_by_location" name="near_by_location"  placeholder="Enter Display Name">
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">City</label>
        <input type="text" class="form-control" name="city" id="city"  value="<?php echo ($hotel)? $hotel['city'] : '';?>">

    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">State</label>
        <input type="text" class="form-control" name="states" id="states" autocomplete="off" value="<?php echo ($hotel)? $hotel['state_name'] : '';?>">
        <input type="hidden" name="state" id="statesVal" value="<?php echo ($hotel)? $hotel['state'] : '';?>">
        <p class="help-text">Hint: Type and select from auto suggestion</p>
    </div>
    <div class="clearfix"></div>

    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Pin Code</label>
      <input type="text" class="form-control" value="<?php echo ($hotel)? $hotel['postal_code'] : '';?>" id="postal_code" name="postal_code" required>
    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Country </label>
        <select class="form-control" name="country">
            <option value="">Select Country</option>
            <?php
            $sel_country = ($hotel)? $hotel['country'] : '';
            if(!empty($countries)) {
                foreach ($countries as $country) {
                    $selected = ($sel_country == $country['id']) ? 'selected' : '';
                    ?>
                    <option value="<?php echo $country['id'];?>" <?php echo $selected;?>><?php echo $country['label'];?></option>
                <?php }}?>
        </select>  </div>
    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <button type="button" class="btn btn-default" id="address_submit">Save</button>
    </div>
    <div class="clearfix"></div>
</form>

