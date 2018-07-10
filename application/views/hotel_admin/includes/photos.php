

 <div class="col-xs-10 col-sm-5 col-md-5 col-lg-10 form-ele">
    <input type="radio" name="photo-upload" id="imageFile" value="image" class="with-gap radio-col-red image-up" checked="true" /> <label for="imageFile">Image Format</label>
    <input type="radio" name="photo-upload" id="zipFile" value="zip" class="with-gap radio-col-red image-up" /> <label for="zipFile">ZIP Format</label>
  </div>

<form id="hotel_photos_form" class="imgDiv" >
  <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id" id="hotel_photo_id">
  <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? str_replace(' ','-',$hotel['name']) : '';?>" name="hotel_name" id="hotel_name">

  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
    <label for="">Photo</label>
    <input type="file" id="imagefiles" multiple="true" name="image_file[]" />

         <div id="img-preview">

          <?php 
          $dirname = "uploads/".str_replace(' ','-',$hotel['name'])."/";
          $images = glob($dirname."*");
          for ($i=0; $i<count($images); $i++){
            $imgName = substr($images[$i], strrpos($images[$i], '/') + 1);
            $num = base_url().$images[$i];
            ?>

            <span class='pip'><img class='imageThumb' src='<?php echo $num; ?>' title='<?php echo $imgName; ?>' /><br><span class='remove' id='<?php echo $imgName; ?>'>Remove Image</span></span>

          <?php
          }
          ?>
        </div>
  </div>


  <div class="clearfix"></div>
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <button type="button"  id="imageUpload" class="btn btn-default">Upload</button>
  </div>
  <div class="clearfix"></div>




</form>

<form id="hotel_photos_form" class="zipDiv hide">
  <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id" id="hotel_photo_id">
  <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? str_replace(' ','-',$hotel['name']) : '';?>" name="hotel_name" id="hotel_name">

  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele zipDiv hide">
    <label for="">Photos</label>
    <input type="file" id="file" name="zip_file" /> <span class="txt-col-red">Note:allowed format(.zip).</span>
  </div>

  <div class="clearfix"></div>
  <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5 form-ele">
    <button type="button"  id="upload" class="btn btn-default">Upload</button>
  </div>
  <div class="clearfix"></div>

    <?php
    $dir = !empty($hotel) ? json_decode($hotel['image_path']) : '';
    if(!empty($dir)) {
        foreach ($dir as $file) {
            echo "<img src=".base_url().$file." height='150px' width='200px'/><br>";
        }
    }

    ?>


</form>