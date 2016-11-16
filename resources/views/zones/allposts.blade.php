@if (!$all_post->count())

<div class="col-md-12">
  <div class="jumbotron zone-jumbotron" style="    box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0;">
Every Tree was once a little seed.
</div>
</div>
@else
@foreach ($all_post as $posts)

<div class="col-md-12">
  <div class="jumbotron zone-jumbotron" style="    box-shadow: 0 0px 0px 0 rgba(0,0,0,0),0 0px 0px 0;">
      <a class="zone-feed-pic" href="#user-profile"><img src="user-files/img/user1.jpg" class="zone-user-pic" alt="" />Andrew Ben</a>
      <p class="text-muted text-sm">
        October 1, <span class="text-muted">ProductHunt</span>
      </p>
      <h5>{{$posts->ques_head}} <a href="#questionzones" class="zone-hashtag">#QuestionZOnes</a></h5>
         <hr class="title-div">
         {{$posts->ques_body}}
@if( $posts->ques_type === 'text' )
@echo null
@elseif ( $posts->ques_type != 'text')
           <img src="user-files/img/MOD.jpg" class="zone-img-uploads" alt="" />
     @endif
           <div class="zone-l-c-s">
             <a href="#" class="zone-l">Like</a> <a href="#" class="zone-c">Answer</a> <a href="#" class="zone-s">Request</a>
           </div>
           <div class="zone-interact-main">
             <div class="zone-interact">
                 <i class="material-icons zone-likes">thumb_up</i> <a href="#" class="zone-likes">You</a>,
                  <a href="#" class="zone-likes">Big Head</a>,
                  <a href="#" class="zone-likes">John Doe</a>, <a href="#" class="zone-likes">Jane Doe</a> and <a href="#" class="zone-likes">20 others</a> Like this
             </div>
             <hr>

             <div class="zone-comment">
               <a class="zone-feed-pic" href="#user-profile"><img src="user-files/img/user1.jpg" class="zone-user-pic" alt="you" /> <span class="text-muted">Answers</span></a>

               <div class="form-group label-floating">
                           <label class="control-label" for="addon2">Write a Answer</label>
                           <div class="input-group">
                             <input type="text" id="addon2" class="form-control">
                             <span class="input-group-btn">
                               <button type="button" class="btn btn-fab btn-info btn-fab-mini">
                                 <i class="material-icons zone-icons">comment</i>
                               </button>
                             </span>
                           </div>
                         </div>
                       </div>
           </div>
  </div>
</div>
@endforeach
@endif
