<?php $this->load->view('admin/includes/header.php')?>

<?php $this->load->view('admin/includes/adminMenu.php')?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                Add Hotel Rooms
            </h2>
            <?php $this->load->view('admin/includes/flash_msg.php')?>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form id="form_validation" method="POST" action="<?php echo base_url('admin/hotels/rooms/save')?>" enctype="multipart/form-data">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo $hotel['name'];?></h2>
                          <div class="error">
                            <?php if (isset($upload_errors)) {
                                print_r($upload_errors);
                            }?>
                          </div>
                        </div>
                        <div class="body">
                          <div class="form-group form-float">
                            <input type="hidden" class="form-control"  name="hotel_id"  value="<?php echo $hotel['id'];?>">
                            <input type="hidden" class="form-control"  name="hotel_name"  value="<?php echo $hotel['name'];?>">
                          </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="room_name" value="<?php echo set_value("room_name");?>">
                                    <label class="form-label">Room Name</label>
                                </div>
                              <div class="error"><?php echo form_error("room_name");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="description" cols="30" rows="5" class="form-control no-resize"><?php echo set_value("description");?></textarea>
                                    <label class="form-label">Description</label>
                                </div>
                              <div class="error"><?php echo form_error("description");?></div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="no_of_people"  value="<?php echo set_value("no_of_people");?>">
                                    <label class="form-label">No Of People</label>
                                </div>
                                <div class="error"><?php echo form_error("no_of_people");?></div>

                            </div>

                          <div class="form-group form-float">
                            <div class="form-line">
                              <textarea name="additional_details" cols="30" rows="5" class="form-control no-resize"><?php echo set_value("additional_details");?></textarea>
                              <label class="form-label">Additional Details</label>
                            </div>
                            <div class="error"><?php echo form_error("additional_details");?></div>
                          </div>

                          <div class="form-group form-float">
                            <div class="form-line">
                              <textarea name="cancellation_policies" cols="30" rows="5" class="form-control no-resize"><?php echo set_value("cancellation_policies");?></textarea>
                              <label class="form-label">Cancellation Policies</label>
                            </div>
                            <div class="error"><?php echo form_error("cancellation_policies");?></div>
                          </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="actual_price"  value="<?php echo set_value("actual_price");?>">
                                    <label class="form-label">Actual Price</label>
                                </div>
                               <div class="error"><?php echo form_error("actual_price");?></div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="discount_price"  value="<?php echo set_value("discount_price");?>">
                                    <label class="form-label">Discounted Price (Final Price)</label>
                                </div>
                                <div class="error"><?php echo form_error("discount_price");?></div>
                            </div>

                          <div class="form-group form-float">
                            <div class="form-line">
                              <input type="file" class="form-control" name="zip_file">
                            </div>
                          </div>
                          <button class="btn btn-primary waves-effect" type="button">Add More Rooms</button>
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