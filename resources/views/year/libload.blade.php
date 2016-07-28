this is hello world
<script type="text/javascript">
// NOTE:// aJAX BEGINS
$(function() {

    $(".lib_switch").click(function(){
      //  $(".ski_loader").css("display", "block");
        $(".lib_point").load("{{route('vidlib.vidload')}}");
        $.ajax({
            success:function(re){
            SnackBar.show({text:'Showing Video Section'});

            $(".lib_icon").css("display", "block");
              $(".vid_icon").css("display", "none");

    }
      });
    });
    });
    </script>
