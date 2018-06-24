
<form id="hotel_bank_form">
    <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id">

    <div class=" col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
      <label for="">Account Name</label>
      <input type="text" class="form-control validate-field" value="<?php echo !empty($hotel_banks)? $hotel_banks['account_name'] : '';?>" required id="account_name" name="account_name"  placeholder="Enter Account Name">
    </div>

    <div class=" col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Bank Name</label>
        <input type="text" class="form-control validate-field" value="<?php echo !empty($hotel_banks)? $hotel_banks['bank_name'] : '';?>" required id="bank_name" name="bank_name"  placeholder="Enter Bank Name">
    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Branch </label>
        <input type="text" class="form-control validate-field" value="<?php echo !empty($hotel_banks)? $hotel_banks['branch_name'] : '';?>" required id="branch_name" name="branch_name"  placeholder="Enter Branch Name">
    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Account Number</label>
      <input type="text" class="form-control validate-field" value="<?php echo !empty($hotel_banks)? $hotel_banks['account_no'] : '';?>" required id="account_no" name="account_no"  placeholder="Enter Account No">

    </div>
  <div class="clearfix"></div>

  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">IFSC Code</label>
      <input type="text" class="form-control validate-field" value="<?php echo !empty($hotel_banks)? $hotel_banks['ifsc_code'] : '';?>" required id="ifsc_code" name="ifsc_code"  placeholder="Enter IFSC Code">

    </div>
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Bank Code</label>
    <input type="text" class="form-control" value="<?php echo !empty($hotel_banks)? $hotel_banks['bank_code'] : '';?>" required id="bank_code" name="bank_code"  placeholder="Enter Bank Code">

  </div>

  <div class="clearfix"></div>

  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">PAN Number</label>
    <input type="text" class="form-control" value="<?php echo !empty($hotel_banks)? $hotel_banks['pan_number'] : '';?>" required id="pan_number" name="pan_number"  placeholder="Enter PAN No">

  </div>
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Name On PAN</label>
    <input type="text" class="form-control" value="<?php echo !empty($hotel_banks)? $hotel_banks['pan_name'] : '';?>" required id="pan_name" name="pan_name"  placeholder="Enter PAN Name">

  </div>

  <div class="clearfix"></div>

  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Service Tax Number</label>
    <input type="text" class="form-control" value="<?php echo !empty($hotel_banks)? $hotel_banks['service_tax_no'] : '';?>" required id="service_tax_no" name="service_tax_no"  placeholder="Enter servcice tax">

  </div>

  <div class="clearfix"></div>

    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <button type="button" class="btn btn-default" id="bank_submit">Save</button>
    </div>
    <div class="clearfix"></div>
</form>

