<div class="">
  <p><a class='youtube' href="<?php echo base_url() ?>/HotelRooms/addRooms/<?php echo !empty($hotel) ? base64_encode($hotel['id']): '';?>">Add New Room</a></p>
  <table class="table table-bordered" id="room-table">
    <tr>
      <td>Room Name</td>
      <td>Description</td>
      <td>Action</td>
    </tr>
    <?php if(!empty($hotel_rooms)) {
      foreach ($hotel_rooms as $room) {
   ?>
    <tr>
      <td>
      <?php echo $room['room_name'];?>
      </td>
      <td>
          <?php echo $room['description'];?>
      </td>
      <td>
        <p><a class='youtube' href="<?php echo base_url() ?>/HotelRooms/edit/<?php echo base64_encode($room['id']);?>">Edit</a></p>
      </td>
    </tr>

    <?php }}?>
  </table>
</div>

<button type="button"  style="display:none" id="load-room-table" onclick="hotelRefreshRoom()" >test</button>