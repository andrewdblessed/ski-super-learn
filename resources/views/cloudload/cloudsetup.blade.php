<div class="container">
  <div class="col-md-8 col-md-push-2">
    <div class="card card-raised">
      <h2>things to add to setup</h2>
      <ul>
        <li>show the current data space used</li>
        <li>show share capability</li>
        <li>show the display settings GRID OR LIST</li>
        <li>show the preview capability</li>
        <li class="text-info">show upgraded disabled features</li>
      </ul>
      <a href="#" class="btn btn-info btn-round btn-raised savesetting">
        save and close settings
      </a>

      <script type="text/javascript">
      $(function() {
        function ajaxfun(welcload, btn, url, loadcom) {
          $(btn).click(function(){
            $(".ski_loader").css("display", "block");
            SnackBar.show({text:welcload,
              pos: 'top-center',
             duration: '9000',
            });
          console.log('loading');
              $(".ajax_point").load(url);
              $.ajax({
                  success:function(re){
                  SnackBar.show({text:loadcom,
                    pos: 'top-center',
                   duration: '9000',});
                  console.log(loadcom);
                  $(".ski_loader").css("display", "none");

              }
            });
          });
          }
              //NOTE:// NEW note function
      ajaxfun( "Saving settings", ".savesetting", "/cloudtest", "Settings saved");

        });
      </script>
    </div>
  </div>
</div>
