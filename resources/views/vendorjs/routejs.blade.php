<script type="text/javascript">
$(function() {
  /**
  NOTE:: CREATEING A FUNCTION FOR AJAX CALLED AJAXFUN. IT CONTAINS THE
  **     CALL OF THE LOADER, THE URL CALL, WHERE THE CALLED CONTNT SHOULD BE DISPLAYED
  **     AND ALSO THE RESPONSESUCCESS FUNCTION FOR THE USER WITH SNACKBAR
  **/
  function ajaxfun(welcload, url, loadcom) {
      $(".ski_loader").css("display", "block");
        SnackBar.show({text:welcload,
              pos: 'top-center',
              });
          $(".ajax_point").load(url);
        $.ajax({
            success:function(re){
            SnackBar.show({text:loadcom,  pos: 'top-center',});
            $(".ski_loader").css("display", "none");

        }
      });
    }
/**
NOTE:: ROUTES BEGIN HERE FOR DEFAULT ROUTES
**/
    /**
    NOTE:: NOTEBOOK MANAGER
    **/
    $.routes.add('/nbmanager/', function() {
      location.replace("{{route('nbmanager')}}");
    });

     /**
    NOTE:: MAIN NOTES INDEX
    **/
    $.routes.add('/noteindex', function() {
      ajaxfun("Give me a sec", "{{route('dashboard.notebook.allnotebook')}}", "Please select a notebook");
        console.log("select a note");
    });
      //
    // /**
    // NOTE:: ALL NOTES
    // **/
    $.routes.add('/allnote/', function() {
       ajaxfun("Pulling all notes", "/notebooks/callnotes", "pull complete");
    });

    // /**
    // NOTE:: NEW NOTES
    // **/
    $.routes.add('/newnote/', function() {
      ajaxfun("Give me a sec", "{{route('dashboard.notebook.allnotebook')}}", "Please select a notebook");
    });

    // /**
    // NOTE:: FEEDBACK
    // **/
    $.routes.add('/feedback/', function() {
      ajaxfun("Loading feedback section", "{{route('newnote')}}", "Welcome to feedback section");
    });

    // /**
    // NOTE:: Cloud
    // **/
    $.routes.add('/cloudsetup/', function() {
      ajaxfun("Loading Settings", "{{route('cloudsetup')}}", "Manage your Cloud pack preference here");

    });
    });

</script>
