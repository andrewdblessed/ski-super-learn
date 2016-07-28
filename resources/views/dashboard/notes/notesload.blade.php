@foreach ($note_call as $notes)

<div class="col-md-3">
  <div class="card card-raised cardback {{ $notes->note_color }}">
    <div class="card-title">
      <h4>{{ $notes->note_title }}</h4>
    </div>
      <div class="label_pos">
        <span class="label label-info">label</span>
      </div>
        <div class="card-body note_data ">
          <p>
            {!!$notes->note_body!!}
          </p>
    </div>
    <button href="{{ route('dashboard.notes.view', ['title' => $notes->id]) }}" class="btn btn-info btn-raised btn-fab fab_note load_note{{ $notes->id }}">
      <i class="material-icons">edit</i></button>

</div>
</div>
                  <!-- <a class="chip" href="{{route('section.subject')}}">
                      <p id="subjectNote" style="float: right;
                  ">        {{ $notes->note_subject }}
                      </p>
                      </a> -->

                       <!-- <div class="s-h-buttons{{ $notes->id }}" style="display:none;">
                       <button id="ar{{ $notes->id}}"
                               class="mdl-button mdl-js-button mdl-button--icon">
                         <i class="fa fa-archive"></i>
                       </button>
                       <button id='sha{{ $notes->id }}'
                               class="mdl-button mdl-js-button mdl-button--icon">
                         <i class="fa fa-share-alt"></i>
                       </button>
                       <button id='pdf{{ $notes->id }}'
                               class="mdl-button mdl-js-button mdl-button--icon">
                         <i class="fa fa-file-pdf-o"></i>
                       </button>
                       </div> -->


                      <!-- Right aligned menu on top of button  -->
                      <script>
                  $(document).ready(function(){
                    $(".load_note{{ $notes->id }}").click(function(){
                        $(".ski_loader").css("display", "block");
                        $(".ajax_point").load("{{ route('dashboard.notes.view', ['title' => $notes->id]) }}");
                        $.ajax({
                            success:function(re){
                            SnackBar.show({text:'{{ $notes->note_title }} opened'});
                              $(".ski_loader").css("display", "none");
                    }
                      });
                    });
                      });

                  </script>
                  <script type="text/javascript">
                  $(document).ready(function() {
                                      $(".note-area").hover(function(){
                                            $(".s-h-buttons{{ $notes->id }}").css("display", "block");
                                          });

                                      });
                  </script>
@endforeach
