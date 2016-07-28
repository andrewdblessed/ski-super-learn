// TRYING THE GOOGLE CUSTOM searchapi
function search(dataQ) {
	var aiload = dataQ;
	var temp = '?adela=' + aiload;
	url = "http://localhost:8000/adela" + temp;
	window.location.replace(url);
};
//	check ends

// save query begins
function saveQuery () {
	$(function() {
                          var form = $('.form');
                              $(".ski_loader").css("display", "block");
                              var formData = $(form).serialize();
                          $.ajax({
                          type: 'POST',
                          url: $(form).attr('action'),
                          data: formData
                          })
                          .done(function(response ) {
                            console.log('Query saved')
                          })
                          .fail(function(data) {
                            console.log('Query not saved')
                          });
	})
	};
// save query ends
// speach begins
	function ai_tts (dataSpeech) {
		  $(function(){
		    $('button.say').click(function(e){
		       var aiload = document.getElementById('ai').innerHTML;
		      e.preventDefault();
		      var text = dataSpeech;
		     // alert(text);
		           // Use setInterval to keep checking if the voices array has been filled prior to creating the speech utterance
			var voiceGetter = setInterval(function() {
			  var voices = window.speechSynthesis.getVoices();
			  if (voices.length !== 0) {
			    var msg = new SpeechSynthesisUtterance(text);
			    // Pick any voice from within the array; you can console.log(voices) to see options
			    console.log(voices);
			    msg.voice = voices[3];
			    msg.volume = 1;
			    msg.rate = 1;
			    msg.pitch = 0;
			    // msg.text = aiload; <== This is redundant because of how msg is defined
			    msg.lang = 'en-US';
			    msg.onend = function(e) {
			        console.log('Finished in ' + event.elapsedTime + ' seconds.');
			    };
			    speechSynthesis.speak(msg);
			    clearInterval(voiceGetter);
			  }
			}, 200)

			             });
			          });
}
	// speach ends
//response for empty speach
function emptySpeach (dataSpeech) {
	// body...
}
// save query begins
function expUp () {
	$(function() {
                          var lev = $('.levup');
                          var formData = $(lev).serialize();
                          $.ajax({
                          type: 'POST',
                          url: $(levup).attr('action'),
                          data: formData
                          })
                          .done(function(response ) {
                            console.log('Level up')
														SnackBar.show({text:'level Upgraded'});
                          })
                          .fail(function(data) {
                            console.log('Level not upgraded')
                          });
	})
	};
// save query ends
