<div class="col-md-3">
  <div class="card card-raised cardback">
    <a href="#join" class="btn btn-success btn-raised btn-fab fab_com"><i class="material-icons">play_circle_outline</i></a>
      <div class="label_pos">
        <span class="label label-info">free</span>
      </div>
        <div class="card-body vid_data">
    <div class="com_tit col-md-6">
      <a href="#">
        <span class="tit_h">
          learn maths
        </span><br>
        <span class="vi_price">$5</span>
        </a>
    </div>
    <div class="num_member col-md-6">
      <a href="#">
          <span class="vi_up_na">Mary Mark</span><br>
          <span class="occ">Maths Teacher</span>
          </a>
    </div>
    </div>
</div>
</div>


<script type="text/javascript">
// NOTE:// aJAX BEGINS
$(function() {

    $(".lib_switch").click(function(){
      //  $(".ski_loader").css("display", "block");
        $(".lib_point").load("{{route('vidlib.libload')}}");
        $.ajax({
            success:function(re){
            SnackBar.show({text:'Showing Library Section'});

            $(".lib_icon").css("display", "none");
              $(".vid_icon").css("display", "block");
              console.log(switch_code);
    }
      });
    });
    });
</script>
