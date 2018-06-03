
<form id="hotel_photos_form">
  <input type="hidden" class="form-control" value="<?php echo ($hotel)? $hotel['id'] : '';?>" name="hotel_id" id="hotel_photo_id">
  <input type="hidden" class="form-control" value="<?php echo ($hotel)? str_replace(' ','-',$hotel['name']) : '';?>" name="hotel_name" id="hotel_name">
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <label for="">Photos</label>
    <input type="file" id="file" name="zip_file" />
  </div>

  <div class="clearfix"></div>
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <button type="button"  id="upload" class="btn btn-default">Upload</button>
  </div>
  <div class="clearfix"></div>
    <?php
    $dir = $hotel['image_path'];
    $hotelName = str_replace(' ','-',$hotel['name']);
    if (is_dir($dir)) {
        $handle = opendir($dir);
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                $url = base_url().'uploads/'.$hotelName.'/';
                echo "<img src=".$url.$file." height='150px' width='200px'/><br>";
            }
        }

    }

    ?>
</form>