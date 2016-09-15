/***REVIEW
// SCRIPT WRITTEN TO HANDLE AJAX FUNCUNALITY OF CALENDAR BETA VERSION.
// THIS CODE IS WRITTEN BY ANDREW BEN RICHARD SCRIPT RECORD__AUGUST_29TH_2016::_TIME::_8:22
// SCRIPT PIORITY IMPORTANT
{{ I LOVE PEACE LIGHT}}
//REVIEW ENDS
***/

$(document).ready(function() {

  SnackBar.show({
      text:"Loading calendar, Please Wait",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });
  
    var myModal = new jBox('Modal', {
    content: $('#grabMe')
    });

   
   $(".begin-cal").click(function(){
                myModal.open();
              });

   
      $(".cal-type-1").click(function(){
              SnackBar.show({text:"Seting Up",
              pos: 'bottom-center',
           });
                $("#cal_point").load("/calendar/simple");
});

    $(".cal-type-1").click(function(){
              SnackBar.show({text:"Seting Up",
              pos: 'bottom-center',
           });
});

    var form = $('#post_year');

       
    $(".post-year").click(function(e) {
         e.preventDefault();
         var $btn = $(this).button('loading');
          $(".ski_loader").css("display", "block");

       SnackBar.show({
      text:"Adding School year",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });

        var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
    })
    .done(function(response) {
      $btn.button('reset');
          $(".main_view").load("/calendar/school/events");
 SnackBar.show({
      text:"chool Year Added",
      pos: 'bottom-center',
      backgroundColor: '#039be5',
      textColor: '#fff'
      });
 $('#newevent').modal('toggle');

       $(".wel-cal").css("display", "none");


    })
    .fail(function(data) {
      SnackBar.show({
      text:"Opps there seems to be an error",
      pos: 'top-center',
      backgroundColor: '#e53935'
      });
      $btn.button('reset');
      $(".adela_loader").css("display", "none");

        });
    });

});

