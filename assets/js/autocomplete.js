$(function() {

    $(".btn-pref .btn").click(function () {
      $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
      // $(".tab").addClass("active"); // instead of this do the below
      $(this).removeClass("btn-default").addClass("btn-primary");
    });

    $("#admins").autocomplete({
      source: base_url + "masterData/hotelAdmin",
      minLength: 2,
      select: function (event, ui) {
        $("#adminVal").val(ui.item.id);
      }
    });

  $( "#states" ).autocomplete({
    source: base_url+ "masterData/states",
    minLength: 2,
    select: function( event, ui ) {
      $("#statesVal").val( ui.item.id);
    }
  });

    var ms = $('#amenties').magicSuggest({
        data: base_url+ "masterData/amenties",
        valueField: 'id',
        displayField: 'label',
        mode: 'remote',
        placeholder: 'Amenties',
        allowFreeEntries: false,
        allowDuplicates: false,
        renderer: function(data){
            return '<div class="amenties"><div class="name">' + data.label + '</div></div>';
        },
        resultAsString: true,
        selectionRenderer: function(data){
            return '<div class="name">' + data.label + '</div>';
        }
    });

    var ms = $('.services').magicSuggest({
        data: base_url+ "masterData/amenties",
        valueField: 'id',
        displayField: 'label',
        mode: 'remote',
        placeholder: 'Amenties',
        allowFreeEntries: false,
        allowDuplicates: false,
        renderer: function(data){
            return '<div class="amenties"><div class="name">' + data.label + '</div></div>';
        },
        resultAsString: true,
        selectionRenderer: function(data){
            return '<div class="name">' + data.label + '</div>';
        }
    });

});
