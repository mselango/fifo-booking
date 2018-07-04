

  $( "#upload" ).click(function() {
  var file_data = $('#file').prop('files')[0];
  var form_data = new FormData();
  form_data.append('file', file_data);
  form_data.append('hotel_id', $("#hotel_photo_id").val());
  form_data.append('hotel_name', $("#hotel_name").val());
  $.ajax({
    url: base_url + "hotel/savePhotos", // point to server-side controller method
    dataType: 'json', // what to expect back from the server
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'post',
    success: function (response) {
      $.growlUI('Success!!!', response.message);
      $("#hotel_photos_form").load(location.href + " #hotel_photos_form");
    },
    error: function (response) {
      $.growlUI('Error!!!', response.message);

    }
  });
});

$( "#basic_submit" ).click(function( event ) {
  var error = false;
  $(".error").remove();
  $('#basic_hotel_form .validate_field').each(
    function(index){
      if($(this).val() == '')
      {
        $(this).css('border','1px solid red');
        $(this).after('<div class="error" id="avc">This field is required</div>')
        $(".error").show();
        error=true;
        $(document).scrollTop(180);
      } else {
        $(this).css('border','1px solid #ccc');
      }
    }
  );
  if(error === false) {
    var data = $("#basic_hotel_form").serialize();
    $.ajax({
      type: "POST",
      url: base_url + "hotel/save",
      data: data,
      dataType: "json",
      success: function (response) {
        if(response.success == true) {
          alert(response.message);
          window.location.href= base_url + 'hotel/manage/'+ response.hotel_id
        }
      },
      error: function () {
        alert('error handing here');
      }
    });
  }else{
    alert('mandtory fields are missing')
  }
});

$( "#address_submit" ).click(function( event ) {
  var error = false;
  $(".error").remove();
  $('#hotel_address_form input, #hotel_address_form select').each(
    function(index){
      if($(this).val() == '')
      {
        $(this).css('border','1px solid red');
        $(this).after('<div class="error" id="avc">This field is required</div>')
        $(".error").show();
        error=true;
        $(document).scrollTop(180);
      } else {
        $(this).css('border','1px solid #ccc');
      }
    }
  );
  if(error === false) {
    var data = $("#hotel_address_form").serialize();
    $.ajax({
      type: "POST",
      url: base_url + "hotel/saveAddress",
      data: data,
      dataType: "json",
      success: function (response) {
        $(document).scrollTop(0);
        $.growlUI('Success!!!', response.message);
      },
      error: function () {
        alert('error handing here');
      }
    });
  }
});

$( "#contact_submit" ).click(function( event ) {

  var error = false;
  $(".error").remove();
  $('#hotel_contact_form input, #hotel_contact_form select').each(
    function(index){
      if($(this).val() == '')
      {
        $(this).css('border','1px solid red');
        $(this).after('<div class="error" id="avc">This field is required</div>')
        $(".error").show();
        error=true;
        $(document).scrollTop(180);
      } else {
        $(this).css('border','1px solid #ccc');
      }
    }
  );
  if(error === false) {
    var data = $("#hotel_contact_form").serialize();
    $.ajax({
      type: "POST",
      url: base_url + "hotel/saveContacts",
      data: data,
      dataType: "json",
      success: function (response) {
        $(document).scrollTop(0);
        $.growlUI('Success!!!', response.message);
      },
      error: function () {
        alert('error handing here');
      }
    });
  }
});


$( "#amenty_submit" ).click(function( event ) {

    let data = {};
    var amenty = $("input[name='amenties[]']")
      .map(function(){return $(this).val();}).get();
    data.amenties = amenty;
    data.hotel_id = $("#hotel_id").val();
    $.ajax({
      type: "POST",
      url: base_url + "hotel/saveAmenties",
      data: data,
      dataType: "json",
      success: function (response) {
        $(document).scrollTop(0);
        $.growlUI('Success!!!', response.message);
      },
      error: function () {
        alert('error handing here');
      }
    });

});


  $( "#save_hotel_rooms" ).click(function( event ) {
     var error = false;
      $(".error").remove();
      $('.validate-field').each(
          function(index){
              if($(this).val() == '')
              {
                  $(this).css('border','1px solid red');
                  $(this).after('<div class="error" id="avc">This field is required</div>')
                  $(".error").show();
                  error=true;
                  $(document).scrollTop(180);
              } else {
                  $(this).css('border','1px solid #ccc');
              }
          }
      );
      if(error === false) {
          var data = $("#hotel_rooms_form").serialize();
          $.ajax({
              type: "POST",
              url: base_url + "HotelRooms/save",
              data: data,
              dataType: "json",
              success: function (response) {
                  if(response.success == true) {
                    alert(response.message);
                    $("#close_color_box").click();
                    $("#load-room-table").click();
                  }
              },
              error: function () {
                  alert('error handing here');
              }
          });
      }else{
          alert('mandatory fields are missing')
      }
  });

  $( "#edit_hotel_rooms" ).click(function( event ) {
    var error = false;
    $(".error").remove();
    $('.validate-field').each(
      function(index){
        if($(this).val() == '')
        {
          $(this).css('border','1px solid red');
          $(this).after('<div class="error" id="avc">This field is required</div>')
          $(".error").show();
          error=true;
          $(document).scrollTop(180);
        } else {
          $(this).css('border','1px solid #ccc');
        }
      }
    );
    if(error === false) {
      var data = $("#edit_rooms_form").serialize();
      $.ajax({
        type: "POST",
        url: base_url + "HotelRooms/save",
        data: data,
        dataType: "json",
        success: function (response) {
          if(response.success == true) {
            alert(response.message);
            $("#load-room-table").click();
            $("#close_color_box").click();
          }
        },
        error: function () {
          alert('error handing here');
        }
      });
    }else{
      alert('mandatory fields are missing')
    }
  });


  $( "#policy_submit" ).click(function( event ) {
    var error = false;
    $(".error").remove();
    $('#hotel_policy_form input, #hotel_policy_form select').each(
      function(index){
        if($(this).val() == '')
        {
          $(this).css('border','1px solid red');
          $(this).after('<div class="error" id="avc">This field is required</div>')
          $(".error").show();
          error=true;
          $(document).scrollTop(180);
        } else {
          $(this).css('border','1px solid #ccc');
        }
      }
    );
    if(error === false) {
      var data = $("#hotel_policy_form").serialize();
      $.ajax({
        type: "POST",
        url: base_url + "hotel/savePolicies",
        data: data,
        dataType: "json",
        success: function (response) {
          $(document).scrollTop(0);
          $.growlUI('Success!!!', response.message);
        },
        error: function () {
          alert('error handing here');
        }
      });
    }
  });



  $( "#map_submit" ).click(function( event ) {
    var error = false;
    $(".error").remove();
    $('#hotel_map_form input').each(
      function(index){
        if($(this).val() == '')
        {
          $(this).css('border','1px solid red');
          $(this).after('<div class="error" id="avc">This field is required</div>')
          $(".error").show();
          error=true;
          $(document).scrollTop(180);
        } else {
          $(this).css('border','1px solid #ccc');
        }
      }
    );
    if(error === false) {
      var data = $("#hotel_map_form").serialize();
      $.ajax({
        type: "POST",
        url: base_url + "hotel/saveMaps",
        data: data,
        dataType: "json",
        success: function (response) {
          $(document).scrollTop(0);
          $.growlUI('Success!!!', response.message);
        },
        error: function () {
          alert('error handing here');
        }
      });
    }
  });

  $( "#bank_submit" ).click(function( event ) {
    var error = false;
    $(".error").remove();
    $('#hotel_bank_form .validate-field').each(
      function(index){
        if($(this).val() == '')
        {
          $(this).css('border','1px solid red');
          $(this).after('<div class="error" id="avc">This field is required</div>')
          $(".error").show();
          error=true;
          $(document).scrollTop(180);
        } else {
          $(this).css('border','1px solid #ccc');
        }
      }
    );
    if(error === false) {
      var data = $("#hotel_bank_form").serialize();
      $.ajax({
        type: "POST",
        url: base_url + "hotel/saveBankDetails",
        data: data,
        dataType: "json",
        success: function (response) {
          $(document).scrollTop(0);
          $.growlUI('Success!!!', response.message);
        },
        error: function () {
          alert('error handing here');
        }
      });
    }
  });


  function hotelRefreshRoom()
  {
    $("#room-table").load(location.href + " #room-table");
  }