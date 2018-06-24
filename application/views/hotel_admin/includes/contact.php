
<form id="hotel_contact_form">
    <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id">
    <div class=" col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Contact No</label>
        <input type="text" class="form-control" value="<?php echo !empty($hotel_contacts)? $hotel_contacts['contact_no'] : '';?>" required id="contact_no" name="contact_no"  placeholder="Enter Display Name">
    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Mobile No </label>
        <input type="text" class="form-control" value="<?php echo !empty($hotel_contacts)? $hotel_contacts['mobile_no'] : '';?>" required id="mobile_no" name="mobile_no"  placeholder="Enter Display Name">
    </div>
    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Contact List</label>
        <textarea name="contact_list" id="contact_list" required class="form-control" cols="5" rows="5"><?php echo !empty($hotel_contacts)? $hotel_contacts['contact_list'] : '';?></textarea>

    </div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Email List</label>
        <textarea name="email_list" id="email_list" required class="form-control" cols="5" rows="5"><?php echo !empty($hotel_contacts)? $hotel_contacts['email_list'] : '';?></textarea>

    </div>
    <div class="clearfix"></div>

    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <label for="">Parimary Email Id</label>
        <input type="text" class="form-control" value="<?php echo !empty($hotel_contacts)? $hotel_contacts['email_id'] : '';?>" id="email_id" name="email_id" required>
    </div>

  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Website</label>
    <input type="text" class="form-control" value="<?php echo !empty($hotel_contacts)? $hotel_contacts['website'] : '';?>" id="website" name="website" required>
  </div>

    <div class="clearfix"></div>
    <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
        <button type="button" class="btn btn-default" id="contact_submit">Save</button>
    </div>
    <div class="clearfix"></div>
</form>

