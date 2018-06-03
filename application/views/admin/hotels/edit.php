<?php $this->load->view('admin/includes/header.php')?>

<?php $this->load->view('admin/includes/adminMenu.php')?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                Add Hotel
            </h2>
            <?php $this->load->view('admin/includes/flash_msg.php')?>

        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form id="form_validation" method="POST" action="<?php echo base_url('admin/hotels/update')?>" enctype="multipart/form-data">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Details</h2>
                          <div class="error">
                            <?php
                            if (isset($upload_errors)) {
                                print_r($upload_errors);
                            }?>
                          </div>
                        </div>
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="basic[name]" value="<?php echo !empty($_POST) ? set_value("basic[name]") : $hotels['name'];?>">
                                    <label class="form-label">Name</label>
                                </div>
                              <div class="error"><?php echo form_error("basic[name]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="basic[description]" cols="30" rows="5" class="form-control no-resize"><?php echo !empty($_POST) ? set_value("basic[description]") : $hotels['description'];?></textarea>
                                    <label class="form-label">Description</label>
                                </div>
                              <div class="error"><?php echo form_error("basic[description]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="basic[contact_no]"  value="<?php echo  !empty($_POST) ? set_value("basic[contact_no]") : $hotels['contact_no'];?>">
                                    <label class="form-label">Contact No</label>
                                </div>
                                <div class="error"><?php echo form_error("basic[contact_no]");?></div>

                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control datetimepicker" name="basic[check_in]"  value="<?php echo   !empty($_POST) ? set_value("basic[check_in]") : $hotels['check_in'];?>">
                                    <label class="form-label">Check In</label>
                                </div>
                              <p class="help-text">Hint: Enter this format 11:20 in 24 hrs format</p>
                               <div class="error"><?php echo form_error("basic[check_in]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="basic[check_out]"  value="<?php echo  !empty($_POST) ? set_value("basic[check_out]"): $hotels['check_out'];?>">
                                    <label class="form-label">Check Out</label>
                                </div>
                                <p class="help-text">Hint:  Enter this format 11:20 in 24 hrs format</p>
                                <div class="error"><?php echo form_error("basic[check_out]");?></div>
                            </div>

                            <div class="form-group form-float" >
                                <div class="form-line">
                                    <input type="text" class="form-control" id="admins" name="user_id"  value="<?php echo  !empty($_POST) ? set_value("user_id") : $hotels['user_id'];?>">
                                    <label class="form-label">Hotel Admin</label>
                                      <input type="hidden" id="adminVal" name="basic[user_id]"  value="<?php echo  !empty($_POST) ? set_value("basic[user_id]") : $hotels['user_id'];?>">
                                </div>
                                <p class="help-text">Hint: Type and select from auto suggestion</p>
                                <div class="error"><?php echo form_error("basic[user_id]");?></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Additional Details</h2>
                        </div>
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[address1]"  value="<?php echo  !empty($_POST) ? set_value("details[address1]") : $hotels['address1'];?>">
                                    <label class="form-label">Address1</label>
                                </div>
                                <div class="error"><?php echo form_error("details[address1]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[address2]"  value="<?php echo  !empty($_POST) ? set_value("details[address2]") : $hotels['address2'];?>">
                                    <label class="form-label">Address2</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[city]"  value="<?php echo  !empty($_POST) ? set_value("details[city]") : $hotels['city'];?>">
                                    <label class="form-label">City</label>
                                </div>
                              <div class="error"><?php echo form_error("details[city]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="states" id="states" autocomplete="off"  value="<?php  echo !empty($_POST) ?  set_value("state") : $hotels['state'];?>">
                                    <label class="form-label">State</label>
                                  <input type="hidden" name="details[state]" id="statesVal" value="<?php echo  !empty($_POST) ? set_value("details[state]") : $hotels['state'];?>">
                                </div>
                              <p class="help-text">Hint: Type and select from auto suggestion</p>
                              <div class="error"><?php echo form_error("details[state]");?></div>

                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                  <select class="form-control" name="details[country]">
                                    <option>Select Country</option>
                                    <?php if(!empty($countries)) {
                                      foreach ($countries as $country) {
                                     ?>
                                    <option value="<?php echo $country['id'];?>"><?php echo $country['label'];?></option>
                                    <?php }}?>
                                  </select>
                                </div>
                              <div class="error"><?php echo form_error("details[country]");?></div>

                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="details[policies]" cols="30" rows="5" class="form-control no-resize"><?php echo  !empty($_POST) ? set_value("details[policies]") : $hotels['policies'];?></textarea>
                                    <label class="form-label">Policies</label>
                                </div>
                              <div class="error"><?php echo form_error("details[policies]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[website]"  value="<?php echo  !empty($_POST) ? set_value("details[website]") : $hotels['website'];?>">
                                    <label class="form-label">Website</label>
                                </div>
                            </div>

                          <div class="form-group form-float">
                            <div class="form-line">
                                <?php
                                if(!empty($_POST['amenties'])) {
                                    $amenties = implode(',',$_POST['amenties']);
                                }else{
                                    $amenties = '';
                                }

                                ?>

                              <input type="text" class="form-control" value="[<?php echo $amenties;?>]" name="amenties" id="amenties" placeholder="Amenties">
                            </div>
                            <p class="help-text">Hint: Type and  select from auto suggestion</p>
                            <div class="error"><?php echo form_error("amenties");?></div>
                          </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[near_by_location]"  value="<?php echo  !empty($_POST) ? set_value("details[near_by_location]")  : $hotels['near_by_location'];?>">
                                    <label class="form-label">Near By Location</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="zip_file">
                                </div>
                              <p class="help-text">Hint: upload zip file only</p>
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


 <?php $this->load->view('admin/includes/footer_includes.php')?>
 <script type="text/javascript">

  jQuery("#m_dashboard").addClass("active");

</script>