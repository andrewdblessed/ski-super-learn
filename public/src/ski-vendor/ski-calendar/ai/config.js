var accessToken = "c0e455d7212c4660b0aecb4ef2ed2081";
var subscriptionKey = "62bd556a-e3b3-4a8e-a896-fa8051e842dd";
var baseUrl = "https://api.api.ai/v1/";
$(document).ready(function() {
  //HACK LOADS THE BLANK ICON OF ADELA
 

    $(".adela_blank").css("display", "block");
  //  $(".ai_network_error").css("display", "none");
    $(".ai_loading_msg").css("display", "none");
    $(".not_found").css("display", "none");



  //HACK AI INPUT CODES STARTS HERE
    $("#input").keypress(function(event) {
        if (event.which == 13) {
            event.preventDefault();
            send();
        }
    });
    $("#rec").click(function(event) {
        switchRecognition();
    });
});
var recognition;
function startRecognition() {
    recognition = new webkitSpeechRecognition();
    recognition.onstart = function(event) {
        updateRec();
    };
    recognition.onresult = function(event) {
        var text = "";
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            text += event.results[i][0].transcript;
        }
        setInput(text);
        stopRecognition();
    };
    recognition.onend = function() {
        stopRecognition();
    };
    recognition.lang = "en-US";
    recognition.start();
}

function stopRecognition() {
    if (recognition) {
        recognition.stop();
        recognition = null;
    }
    updateRec();
}
function switchRecognition() {
    if (recognition) {
        stopRecognition();
    } else {
        startRecognition();
    }
}
function setInput(text) {
    $("#input").val(text);
    send();
}
function updateRec() {
 console.log("stop speak");
    $("#rec_response").text(recognition ? "Stop" : "Speak");
}
function send() {
    var text = $("#input").val();
      $.ajax({
        type: "POST",
        url: baseUrl + "query/",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        headers: {
            "Authorization": "Bearer " + accessToken,
            "ocp-apim-subscription-key": subscriptionKey
        },
        data: JSON.stringify({ q: text, lang: "en" }),
        success: function(data) {
                      console.log(data);
                      //HACK: Get important results as varibles
                      var dataAction = (data.result.action);
                      var dataSpeech = (data.result.speech);
                      var dataQuery = (data.result.resolvedQuery);

                      // var dataprameta = (data.result.parameters.result);
                            $(".ski_loader").css("display", "none");
                    //  $(".adela_result").addClass("col-md-8");
                      $(".adela_blank").addClass("col-md-4 animated flipInX");
                      $("#ai").html(data.result.speech);
                        $(".ai").html(data.result.speech);
                          $(".ai2").html(data.result.resolvedQuery);
                          $(".ai_loading_msg").css("display", "none");

                           /*
                           **
                           *HACK:calling all functions
                           **
                           */
                           //XXX:call save query function
                           ai_tts(dataSpeech);
                          saveQuery();
                          expUp();
                          // XXX: call web.seaa\rch domain
                          if (data && data.result && data.result.parameters && data.result.parameters.q == undefined) {
                            alert('ol');
                          }
                          if(dataAction === "web.search" || "images.search")
                           {
                          //  var dataQ = (data.result.parameters.q);
                          //  console.log(dataQ);
                          // 		search(dataQ);
                          };
                          //XXX: call empty speach domain
                          if (dataSpeech == ""){
                              alert('is empty')
                          }
                          else{
                            alert('not empty');
                          }


                            /*
                           **
                           *HACK:calling all functions ENDS
                           **
                           */
                      // HACK
                      if ( $('#ai').is(':empty')  ) {
                        $(".not_found").css("display", "block");
                       // $("#not_found").html("  Hey, i Could not understand your request try any of my advance Research methods");
                      }
                      else {
                        console.log('ai null fail');
                      }
                      // HACK XXX
                        $(".adela_user_query").css("display", "block");
                      $("#ai2").html("<b>"+ data.result.resolvedQuery+ "</b>");
                          $(".ski_loader").css("display", "none");
                          $(".adela_result").css("display", "block");
                          $(".adela_process").css("display", "none");
                          $(".adela_blank").css("display", "block");
                    },

        error: function() {
          // HACK LOADING TEH ERROR CODE
            $(".ai_network_error").css("display", "block");
            $(".adela_blank").addClass("col-md-4 animated flipInX");
      $(".ski_loader").css("display", "none");
            $(".adela_blank").css("display", "block");


              SnackBar.show({
              text:'Adela Could not connect',
              actionTextColor: '#2980B9',
              onActionClick: function(element) {         //Set opacity of element to 0 to close Snackbar
                        $(element).css('opacity', 0);     
                    window.open('/adela/faq');
                   }
          });
        }
    });
    // HACK LOADING THE SUCCESS CODE
    // $(".adela_load").addClass("col-md-8");
    $(".ai_loading_msg").css("display", "block");
    $(".ai_network_error").css("display", "none");
    $(".adela_result").css("display", "none");
        $(".adela_blank").css("display", "none");
    $(".ski_loader").css("display", "block");


}
function setResponse(val) {

    $("#response").text(val);
  }
function setResponse_error(val) {
    $("#error").text(val);

}
// HACK
$(document).ready(function() {

$(".adela_color").click(function() {

  $(".adela_color").css("color", "rgb(231, 76, 60)");

});

});
