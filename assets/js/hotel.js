$(function() {
  $(".error").hide();
});

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
    },
    error: function (response) {
      $.growlUI('Error!!!', response.message);

    }
  });
});

$( "#basic_submit" ).click(function( event ) {
  var error = false;
  $(".error").remove();
  $('#basic_hotel_form input, #basic_hotel_form select').each(
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
          $(document).scrollTop(0);
          $.growlUI('Success!!!', response.message);
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



