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

});

