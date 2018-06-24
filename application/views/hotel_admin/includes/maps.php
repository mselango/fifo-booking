
<form id="hotel_map_form">

  <input type="hidden" class="form-control" value="<?php echo !empty($hotel)? $hotel['id'] : '';?>" name="hotel_id">
  <div class=" col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
    <label for="">Address</label>
    <input type="text" class="form-control" name="map_address" id="pac-input" value="<?php echo !empty($hotel)? $hotel['map_address'] : '';?>">
  </div>
  <div class="clearfix"></div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
    <label for="">Latitude</label>
    <input type="text" class="form-control" name="latitude" id="latitude"  value="<?php echo !empty($hotel)? $hotel['latitude'] : '';?>">
  </div>
  <div class="clearfix"></div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
    <label for="">Longitude</label>
    <input type="text" class="form-control" value="<?php echo !empty($hotel)? $hotel['longitude'] : '';?>" id="longitude" name="longitude">
  </div>
  <div class="clearfix"></div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-ele">
    <button type="button" class="btn btn-default" id="map_submit">Save</button>
  </div>
  <div class="clearfix"></div>

  <div id="map"></div>
  <div id="infowindow-content">
    <img src="" width="16" height="16" id="place-icon">
    <span id="place-name"  class="title"></span><br>
    <span id="place-address"></span>
  </div>

</form>
<script type="text/javascript">
  var hotel_lat = '<?php echo !empty($hotel)? $hotel['latitude']: '11.12345';?>';
  var hotel_lon = '<?php echo !empty($hotel)? $hotel['longitude']: '78.98877';?>';
</script>