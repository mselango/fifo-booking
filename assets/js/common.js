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

});