$(document).ready(function(){

    // NOTE: ALL NOTEBOOKS
              $(".noti-deactive").click(function(){
                $(".ski-noti-body").css("display", "block");
                $(".ski-noti-drawer").css("left", "27%");
                $(".noti-deactive").css("display", "none");
                 $(".noti-active").css("display", "block");


            SnackBar.show({text:"Loading Ski-noti",
            pos: 'bottom-center',
           duration: '9000',
         });
            //   $(".ain_point").load("{{route('dashboard.Skilearn.allSkilearn')}}");
            //   $.ajax({
            //       success:function(re){
            //
            //       $(".ain-notebook").css("display", "block");
            //       $(".ains_loader").css("display", "none");
            //     $(".ain-nbs").addClass("sid-active");
            //     $(".ain-all").removeClass("sid-active");
            //
            //   }
            // });
            console.log("load completed");
    });
      $(".noti-active").click(function(){
        $(".ski-noti-body").css("display", "none");
        $(".ski-noti-drawer").css("left", "0%");
        $(".noti-deactive").css("display", "block");
         $(".noti-active").css("display", "none");
      });

      $(".noti-logo").hover(function(){
        $(".noti-logo").addClass("shake")
      });
});
