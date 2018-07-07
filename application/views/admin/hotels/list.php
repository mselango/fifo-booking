<?php $this->load->view('admin/includes/header.php')?>

<?php $this->load->view('admin/includes/adminMenu.php')?>

<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>
        Hotel
      </h2>

        <?php $this->load->view('admin/includes/flash_msg.php')?>

    </div>
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="header">
              <h2>Hotel List</h2>
            </div>
            <div class="body">
              <?php if(count($hotelList) >0 ) {?>
              <div class="body table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Hotel Name</th>
                    <th>UserName</th>
                    <th>Contact No</th>
                    <th>City</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($hotelList as $hotel) { ?>
                  <tr>
                    <th scope="row"><?php echo $hotel['id'];?></th>
                    <td><?php echo $hotel['name'];?></td>
                    <td><?php echo $hotel['user_name'];?></td>
                    <td><?php echo $hotel['contact_no'];?></td>
                    <td><?php echo $hotel['city'];?></td>
                    <td><a href="<?php echo base_url();?>hotel/manage/<?php echo $hotel['id']?>">Manage</a> </td>
                  </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
              <?php }?>
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