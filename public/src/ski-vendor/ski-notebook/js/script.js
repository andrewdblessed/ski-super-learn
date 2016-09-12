/***REVIEW
// SCRIPT WRITTEN TO HANDLE AJAX FUNCUNALITY OF Ainotes BETA VERSION.
// THIS CODE IS WRITTEN BY ANDREW BEN RICHARD SCRIPT RECORD__AUGUST_29TH_2016::_TIME::_8:22
// SCRIPT PIORITY IMPORTANT
{{ I LOVE PEACE LIGHT}}
//REVIEW ENDS
***/


//XXX BEGINING JQUERY READY FUNCTION
$(document).ready(function(){
$(".btn-ain-icon").draggable
                $(".ski_loader").css("display", "block");
            SnackBar.show({text:"Loading Ai notes",
            pos: 'bottom-center',
           duration: '9000',
            });
              $(".ajax_point").load("/Ainotes/callnotes");
              $(".notes_loader").css("display", "none");


      // NOTE: ALL Ainotes
                $(".ain-all").click(function(){
                  $(".ain-notebook").css("display", "none");
              SnackBar.show({text:"Loading Notebooks",
              pos: 'bottom-center',
             duration: '9000',
           });
                $(".ajax_point").load("/Ainotes/callnotes");

                $(".notes_loader").css("display", "none");
                  $(".ain-all").addClass("sid-active");
                  $(".ain-nbs").removeClass("sid-active");

      });


      // NOTE: script for new note without notebook
                $(".make-note").click(function(){
                    $(".notes_loader").css("display", "block");
                  SnackBar.show({text:"Opeining Skilearn-pad",
              pos: 'bottom-center',
             duration: '9000',
           });
                $(".newnote_point").load("/new_note_index");
                $.ajax({
                    success:function(re){
                        $(".notes_loader").css("display", "none");
                        $(".newSkilearn").removeClass("bounce");
                        $(".newnote_point").css("display", "block");
                  console.log("load completed");
                }
              });
      });



// NOTE: ALL NOTEBOOKS
          $(".ain-nbs").click(function(){
            $(".ains_loader").css("display", "block");
            $(".ai-ajax").css("display", "none");
            $(".ai-srt").removeClass("sid-active");

        SnackBar.show({text:"Loading Notebooks",
        pos: 'bottom-center',
       duration: '9000',
     });
          $(".ain_point").load("/Ainotes/call_all");
          $.ajax({
              success:function(re){

              $(".ain-notebook").css("display", "block");
              $(".ains_loader").css("display", "none");
            $(".ain-nbs").addClass("sid-active");
            $(".ain-all").removeClass("sid-active");

            console.log("load completed");
          }
        });
});
$(".ain-nbs-close").click(function(){
  $(".ain-notebook").css("display", "none");
  $(".ain-nbs").removeClass("sid-active");
});

// NOTE: AI QUERRY
          $(".ai-srt").click(function(){
            $(".ains_loader").css("display", "block");
              $(".ain-notebook").css("display", "none");
              $(".ain-nbs").removeClass("sid-active");

        SnackBar.show({text:"Loading...",
        pos: 'bottom-center',
       duration: '9000',
     });
          $(".ai_point").load("/adela/query-ai-notes");
          $.ajax({
              success:function(re){

              $(".ai-ajax").css("display", "block");
              $(".ains_loader").css("display", "none");
            $(".ai-srt").addClass("sid-active");
            $(".ain-all").removeClass("sid-active");
            console.log("load completed");
          }
        });
});
$(".close_ajax").click(function(){
  $(".ain-notebook").css("display", "none");
  $(".ain-nbs").removeClass("sid-active");
  $(".ai-ajax").css("display", "none");
  $(".ai-srt").removeClass("sid-active");
});
});
