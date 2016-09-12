
   <script type="text/javascript">
   $(document).ready(function() {

 var myModal = new jBox('Modal', {
    //title: 'Grab an element',
    content: $('#grabMe')

});

  if (document.readyState === 'complete'){
  console.log("load complete");
}else{
//   $(".loading").css("display", "block")
    //  $("body").css("display", "none")
      console.log("loading");
     myModal.open();
 
}

var interval = setInterval(function () {
  if(document.readyState === 'loading'){
      console.log("load loading");
  }
  if(document.readyState === 'complete'){
      clearInterval(interval);
      // myModal.close();
    console.log("loading complete");
   // $(".loading").css("display", "block")
  }
}, 100);
});
</script>
<div style="display: none" id="grabMe">
<h3>hello world</h3>

</div>
   <div class="adela_result">
        <div class="aires">
          <h3 class="text-muted">
            @if ($bg_number == 1)
              Hello {{Auth::user()-> getFirstNameorUsername() }} here is what i could find
            @elseif ($bg_number == 2)
              Alright here we go
            @elseif ($bg_number == 3)
              This is fun
            @elseif ($bg_number == 4)
              Hello {{Auth::user()-> getFirstNameorUsername() }} bring it up
            @elseif ($bg_number == 5)
              Don't forget to save this to Ainotes
            @else ($bg_number == 6)
              Is this what you were looking for
            @endif

</h3>
<input onclick="responsiveVoice.speak($(" .ai'));'="" type="button" value="🔊" class="btn btn-info btn-raised btn-round btn-sm">
          <h4 class="ai"></h4>
        </div>
      <div class="animated fadeIn not_found" style="display:none" >
            <p id="not_found">Hey, i Could not understand your request or am not allowed to do that...<br>try any of my advance Research methods </p>
            <div class="adv_opt btn-group">
                <button class="btn btn-info btn-raised btn-sm">Tags</button>
                <button class="btn btn-info btn-raised btn-sm">uncover Wiki</button>
                <button class="btn btn-info btn-raised btn-sm">Search the web</button>
            </div>

         <div class="adela_user_query" style="display:none;">

               </div>
        </div>
            <p id="ai_null"></p>
        <div class="adela_blank"></div>

        </div>
<div class="ai-tip text-info">
    @if ($bg_number == 1)
<i class="fa fa-gittip"></i> Tips: hit the enter key to make requests.
  @elseif ($bg_number == 2)
  <i class="fa fa-gittip"></i> Tips: Adela can teach you french, spanish e.t.c
  @elseif ($bg_number == 3)
  <i class="fa fa-gittip"></i> Tips: Adela is good at basic mathematics.
  @elseif ($bg_number == 4)
  <i class="fa fa-gittip"></i> Tips: Adela knows alot about history.
  @elseif ($bg_number == 5)
  <i class="fa fa-gittip"></i>Soon: Chat features for Fb Messenger with Adela.
  @elseif ($bg_number == 6)
  <i class="fa fa-gittip"></i>Soon: Turn any website article into Ai-notes.
  @elseif ($bg_number == 7)
  <i class="fa fa-gittip"></i>Soon: Adela is Coming to Desktop.
  @elseif ($bg_number == 8)
  <i class="fa fa-gittip"></i> Tips: Speack to Adela through the <i class="material-icons">mic</i>
  @else
  <i class="fa fa-gittip"></i> Tips:Adela is Your Ai-note companion
@endif

</div>
