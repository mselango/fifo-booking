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
                    <div class="card">
                        <div class="header">
                          <div class="error">
                              <?php if (isset($upload_errors)) {
                                  print_r($upload_errors);
                              }?>
                          </div>

                          <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                              <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <div class="hidden-xs">Basic Details</div>
                              </button>
                            </div>
                            <div class="btn-group" role="group">
                              <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <div class="hidden-xs">Address</div>
                              </button>
                            </div>
                            <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <div class="hidden-xs">Contacts</div>
                              </button>
                            </div>
                            <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <div class="hidden-xs">Amenties</div>
                              </button>
                            </div>
                            <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab5" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <div class="hidden-xs">Photos</div>
                              </button>
                            </div>

                          <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab6" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                  <div class="hidden-xs">Policies</div>
                              </button>
                          </div>

                          <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab7" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                  <div class="hidden-xs">Rooms</div>
                              </button>
                          </div>
                          </div>

                        </div>
                        <div class="body">

                          <div class="well">
                            <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab1">
                                  <?php $this->load->view('hotel_admin/includes/basic_details.php')?>
                               </div>
                              <div class="tab-pane fade in" id="tab2">
                                  <?php $this->load->view('hotel_admin/includes/address.php')?>
                              </div>
                              <div class="tab-pane fade in" id="tab3">
                                  <?php $this->load->view('hotel_admin/includes/contact.php')?>
                              </div>
                              <div class="tab-pane fade in" id="tab4">
                                  <?php $this->load->view('hotel_admin/includes/amenties.php')?>
                              </div>
                              <div class="tab-pane fade in" id="tab5">
                                  <?php $this->load->view('hotel_admin/includes/photos.php')?>
                              </div>
                              <div class="tab-pane fade in" id="tab6">
                                <?php $this->load->view('hotel_admin/includes/policies.php')?>
                              </div>

                            <div class="tab-pane fade in" id="tab7">
                                <?php $this->load->view('hotel_admin/includes/rooms.php')?>
                            </div>
                            </div>
                          </div>


                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('admin/includes/footer_includes.php')?>
<script type="text/javascript">

  jQuery("#m_dashboard").addClass("active");

</script>