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
                <form id="form_validation" method="POST" action="<?php echo base_url('admin/hotels/save')?>" enctype="multipart/form-data">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Details</h2>
                          <div class="error">
                            <?php if (isset($upload_errors)) {
                                print_r($upload_errors);
                            }?>
                          </div>
                        </div>
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="basic[name]" value="<?php echo set_value("basic[name]");?>">
                                    <label class="form-label">Name</label>
                                </div>
                              <div class="error"><?php echo form_error("basic[name]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="basic[description]" cols="30" rows="5" class="form-control no-resize"><?php echo set_value("basic[description]");?></textarea>
                                    <label class="form-label">Description</label>
                                </div>
                              <div class="error"><?php echo form_error("basic[description]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact[contact_no]"  value="<?php echo set_value("contact[contact_no]");?>">
                                    <label class="form-label">Contact No</label>
                                </div>
                                <div class="error"><?php echo form_error("contact[contact_no]");?></div>

                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control datetimepicker" name="basic[check_in]"  value="<?php echo set_value("basic[check_in]");?>">
                                    <label class="form-label">Check In</label>
                                </div>
                              <p class="help-text">Hint: Enter this format 11:20 in 24 hrs format</p>
                               <div class="error"><?php echo form_error("basic[check_in]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="basic[check_out]"  value="<?php echo set_value("basic[check_out]");?>">
                                    <label class="form-label">Check Out</label>
                                </div>
                                <p class="help-text">Hint:  Enter this format 11:20 in 24 hrs format</p>
                                <div class="error"><?php echo form_error("basic[check_out]");?></div>
                            </div>

                            <div class="form-group ">
                                <?php
                                $checked1 = ($_POST && $_POST['user_type'] == 'exist') ? 'checked' : '';
                                $checked2 = ($_POST && $_POST['user_type'] == 'notexist') ? 'checked' : '';
                                $checked1 = ($checked2 == '') ? 'checked' : '';
                                ?>
                              <input type="radio" name="user_type" id="exist" class="user_type" value="exist" <?php echo $checked1;?>>
                              <label for="exist">Existing User</label>

                              <input type="radio" name="user_type" id="notexist" class="user_type" value="notexist" <?php echo $checked2;?>>
                              <label for="notexist" class="m-l-20">New User</label>
                            </div>

                            <div class="form-group form-float" id="user_id_block">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="admins" name="user_id"  value="<?php echo set_value("user_id");?>">
                                    <label class="form-label">Hotel Admin</label>
                                      <input type="hidden" id="adminVal" name="basic[user_id]"  value="<?php echo set_value("basic[user_id]");?>">
                                </div>
                                <p class="help-text">Hint: Type and select from auto suggestion</p>
                                <div class="error"><?php echo form_error("basic[user_id]");?></div>
                            </div>

                        </div>
                    </div>

                  <div class="card" id="show_user_block">
                    <div class="header">
                      <h2>User Details</h2>
                    </div>
                    <div class="body">

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user_details[first_name]"  value="<?php echo set_value("user_details[first_name]");?>">
                          <label class="form-label">First Name</label>
                        </div>
                        <div class="error"><?php echo form_error("user_details[first_name]");?></div>
                      </div>

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user_details[last_name]"  value="<?php echo set_value("user_details[last_name]");?>">
                          <label class="form-label">Last Name</label>
                        </div>
                        <div class="error"><?php echo form_error("user_details[last_name]");?></div>
                      </div>

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user_details[email]"  value="<?php echo set_value("user_details[email]");?>">
                          <label class="form-label">Email</label>
                        </div>
                        <div class="error"><?php echo form_error("user_details[email]");?></div>
                      </div>

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user_details[phone_no]"  value="<?php echo set_value("user_details[phone_no]");?>">
                          <label class="form-label">Mobile</label>
                        </div>
                        <div class="error"><?php echo form_error("user_details[phone_no]");?></div>
                      </div>

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user_details[pan_no]"  value="<?php echo set_value("user_details[pan_no]");?>">
                          <label class="form-label">Pan No</label>
                        </div>
                        <div class="error"><?php echo form_error("user_details[pan_no]");?></div>
                      </div>

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user[user_name]"  value="<?php echo set_value("user[user_name]");?>">
                          <label class="form-label">Username</label>
                        </div>
                        <div class="error"><?php echo form_error("user[user_name]");?></div>
                      </div>

                      <div class="form-group form-float">
                        <div class="form-line">
                          <input type="text" class="form-control" name="user[password]"  value="<?php echo set_value("user[password]");?>">
                          <label class="form-label">Password</label>
                        </div>
                        <div class="error"><?php echo form_error("user[password]");?></div>
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
                                    <input type="text" class="form-control" name="details[address1]"  value="<?php echo set_value("details[address1]");?>">
                                    <label class="form-label">Address1</label>
                                </div>
                                <div class="error"><?php echo form_error("details[address1]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[address2]"  value="<?php echo set_value("details[address2]");?>">
                                    <label class="form-label">Address2</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[city]"  value="<?php echo set_value("details[city]");?>">
                                    <label class="form-label">City</label>
                                </div>
                              <div class="error"><?php echo form_error("details[city]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="states" id="states" autocomplete="off"  value="<?php echo set_value("states");?>">
                                    <label class="form-label">State</label>
                                  <input type="hidden" name="details[state]" id="statesVal" value="<?php echo set_value("details[state]");?>">
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
                                    <textarea name="details[policies]" cols="30" rows="5" class="form-control no-resize"><?php echo set_value("details[policies]");?></textarea>
                                    <label class="form-label">Policies</label>
                                </div>
                              <div class="error"><?php echo form_error("details[policies]");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="details[website]"  value="<?php echo set_value("details[website]");?>">
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
                                    <input type="text" class="form-control" name="details[near_by_location]"  value="<?php echo set_value("details[near_by_location]");?>">
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