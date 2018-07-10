

$( "#upload" ).click(function() {
    if($("#hotel_photo_id").val() == ""){
      //alert("Hotel Name should not be empty");
      $.growlUI('<p style="font-size:18px;color:red;">Hotel name should not be empty...</p>', "");
      return false;
    }
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


$( "#imageUpload" ).click(function() {
      if($("#hotel_photo_id").val() == ""){
        //alert("Hotel Name should not be empty");
        $.growlUI('<p style="font-size:18px;color:red;">Hotel name should not be empty...</p>', "");
        return false;
      }
      var hotelId = $("#hotel_photo_id").val();
      var hotelName = $("#hotel_name").val();

      var uploadedImgArr = [];

      $(".imageThumb").each(function(i){uploadedImgArr.push($(this).attr("title"));})
    
      $.ajax({
      url: base_url + "hotel/savePhotoDb", // point to server-side controller method
      data: {hotelId:hotelId,hotelName:hotelName,uploadedImgArr:uploadedImgArr},
      type: 'post',
      success: function (response) {
        $.growlUI('Success!!!', response.message);
        //$("#hotel_photos_form").load(location.href + " #hotel_photos_form");
      },
      error: function (response) {
        $.growlUI('Error!!!', response.message);

      }
    });

  });

  $(".image-up").click(function(event){
    if($(this).val() == "zip"){
       $(".zipDiv").removeClass("hide").addClass("show");
       $(".imgDiv").removeClass("show").addClass("hide");
    }else if($(this).val() == "image"){
      $(".imgDiv").removeClass("hide").addClass("show");
      $(".zipDiv").removeClass("show").addClass("hide");
    }
  });

  if(window.File && window.FileList && window.FileReader) {
     $("#imagefiles").on("change",function(e) {

      if($("#hotel_photo_id").val() == ""){
        //alert("Hotel Name should not be empty");
        $.growlUI('<p style="font-size:18px;color:red;">Hotel name should not be empty...</p>', "");
        return false;
      }

     var files = e.target.files ,
     filesLength = files.length ;
         // console.log(files);
     var form_data = new FormData();
     form_data.append('hotel_id', $("#hotel_photo_id").val());
     form_data.append('hotel_name', $("#hotel_name").val());
     for (var i = 0; i < filesLength ; i++) {
     var f = files[i];
     form_data.append("image_file[]", f);
     // var fileReader = new FileReader();
     //    fileReader.onload = (function(e) {
     //      var file = e.target;
     //      $("<span class=\"pip\">" +
     //        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
     //        "<br/><span class=\"remove\">Remove image</span>" +
     //        "</span>").insertAfter("#imagefiles");
     //      $(".remove").click(function(){
     //        $(this).parent(".pip").remove();
     //      });
          
     //      // Old code here
     //      /*$("<img></img>", {
     //        class: "imageThumb",
     //        src: e.target.result,
     //        title: file.name + " | Click to remove"
     //      }).insertAfter("#files").click(function(){$(this).remove();});*/
          
     //    });
     //    fileReader.readAsDataURL(f);
     }
      $.ajax({
          url: base_url + "hotel/uploadImages", // point to server-side controller method
          dataType: 'json', // what to expect back from the server
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,
          type: 'post',
          success: function (response) {
            $.growlUI('Success!!!', response.message);

            var imagePreviewHtml = "";

            for(var i=0;i<response.imgNames.length;i++){
              imagePreviewHtml += "<span class='pip'><img class='imageThumb' src='"+base_url+response.uploadPath+'/'+response.imgNames[i]+"' title='"+response.imgNames[i]+"' /><br><span class='remove' id='"+response.imgNames[i]+"'>Remove Image</span></span>";
            }

            $("#img-preview").html("");
      
            $("#img-preview").html(imagePreviewHtml);

             $(".remove").click(function(event){
                 var hotelName = $("#hotel_name").val();
                 var hotelId = $("#hotel_photo_id").val();
                 var uploadPath = 'uploads/'+hotelName;
                 $.ajax({
                   url: base_url +'hotel/removeImage',
                   type: 'post',
                   data: {path:uploadPath,imageName: $(this).attr("id"),hotelId:hotelId,hotelName:hotelName},
                   success: function(response){
                    response = JSON.parse(response);
                    if(response.success == true){
                       $("span[id='"+response.imgName+"']").parent(".pip").remove();
                    }
                   }
                 });
              });
            //$("#hotel_photos_form").load(location.href + " #hotel_photos_form");
            // $("<span class=\"pip\">" +
            // "<img class=\"imageThumb\" src=\"" + response.uploadPath+"\"+ + "\" title=\"" + file.name + "\"/>" +
            // "<br/><span class=\"remove\">Remove image</span>" +
            // "</span>").insertAfter("#imagefiles");

          },
          error: function (response) {
            $.growlUI('Error!!!', response.message);

          }
        });
    });
 } else { 
  alert("Your browser doesn't support to File API") 
}


 $(".remove").click(function(event){
     var hotelName = $("#hotel_name").val();
     var hotelId = $("#hotel_photo_id").val();
     var uploadPath = 'uploads/'+hotelName;
     $.ajax({
       url: base_url +'hotel/removeImage',
       type: 'post',
       data: {path:uploadPath,imageName: $(this).attr("id"),hotelId:hotelId,hotelName:hotelName},
       success: function(response){
        response = JSON.parse(response);
        if(response.success == true){
           $("span[id='"+response.imgName+"']").parent(".pip").remove();
        }
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

    console.log(data);return false;
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