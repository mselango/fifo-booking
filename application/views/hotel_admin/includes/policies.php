
<form id="hotel_policy_form">
    <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id">
    <div class=" col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
        <label for="">General Policies</label>
      <textarea name="general_policy" id="general_policy" required class="form-control" cols="5" rows="5"><?php echo !empty($hotel_policies)? $hotel_policies['general_policy'] : '';?></textarea>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
        <label for="">Cancellation Policy </label>
      <textarea name="cancellation_policy" id="cancellation_policy" required class="form-control" cols="5" rows="5"><?php echo !empty($hotel_policies)? $hotel_policies['cancellation_policy'] : '';?></textarea>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
        <label for="">Services</label>
        <textarea name="services" required class="form-control" cols="5" rows="5"><?php echo !empty($hotel_policies)? $hotel_policies['services'] : '';?></textarea>

    </div>


    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
        <label for="">Data Change</label>
      <select name="date_change" class="form-control">
        <option value="">select</option>
        <option value="allowed">allowed</option>
        <option value="not_allowed">Not Allowed</option>
        <option value="allowed_fee">allowed with fee</option>
      </select>
    </div>

  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">

    <input type="checkbox" name="name_change" id="notexist" class="form-control" value="1">
    <label for="notexist" class="m-l-20"><b>Name Change Allowed</b></label>

  </div>

    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
        <button type="button" class="btn btn-default" id="policy_submit">Save</button>
    </div>
    <div class="clearfix"></div>
</form>

