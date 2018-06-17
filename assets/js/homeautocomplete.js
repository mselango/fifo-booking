$(function() {
    $("#search").autocomplete({
      source: base_url + "masterData/searchList",
      minLength: 2,
      select: function (event, ui) {

      }
    });
});
