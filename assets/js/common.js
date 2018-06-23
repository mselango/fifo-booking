$(function() {
  showUserForm();
  $(".user_type").click(function()
  {
    showUserForm();
  });

  function showUserForm() {
    if($('#exist').is(':checked')) {
      $("#show_user_block").hide();
      $("#user_id_block").show();
    }else{
      $("#user_id_block").hide();
      $("#show_user_block").show();

    }
  }
    $("#add_more_rooms").click(function () {
        content = $("#hotel_rooms_form").find(".hotel_rooms:first").clone();
        $("#hotel_rooms_form").append(content);
    })

    $("#remove_rooms").click(function () {
        content = $(".hotel_rooms:last-child").remove();
    })

    $(".youtube").colorbox({iframe:true, innerWidth:1000, innerHeight:550});
});