$(function() {
  //NOTE:SECTION1995

var form = $('#new_note');
// var formMessages = $('#activate_adela');

$(".save_note").click(function(e) {
e.preventDefault();
    $(".ski_loader").css("display", "block");
    var formData = $(form).serialize();
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData
})
.done(function(response) {
  expUpnote();
  $(".ajax_point").load("http://localhost:8000/notes/area");
SnackBar.show({text:'Note Added'});
$(".ski_loader").css("display", "none");

})
.fail(function(data) {
  SnackBar.show({
  text:"Opps there seems to be an error",
  pos: 'top-center',
  backgroundColor: '#e53935'
  });
  $(".ski_loader").css("display", "none");

    });
});

//NOTE://EXP FUNCTION
function expUpnote() {
	                    var form = $('.expupdate');
	                        $(".ski_loader").css("display", "block");
	                        var formData = $(form).serialize();
	                    $.ajax({
	                    type: 'POST',
	                    url: $(form).attr('action'),
	                    data: formData
	                    })
	                    .done(function(response ) {
	                      console.log('zero level saved')
	                    })
	                    .fail(function(data) {
	                      console.log('zero level not saved')
	                    });
};

});
