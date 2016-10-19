<style>
.loader2 {
  position: relative;
  overflow: hidden;
  min-height: 30px;
}

.loader2 span {
  animation: straight 4s cubic-bezier(.71, .13, .36, .89) 0s infinite;
  display: inline-block;
  width: 10px;
  height: 10px;
  background: #90CAF9;
  border-radius: 50%;
  position: relative;
  margin-right: 10px;
  left: -10%;
  -webkit-animation: straight 4s cubic-bezier(.71, .13, .36, .89) 0s infinite;
}

.loader2 span.circle1 {
  animation-delay: 1.775s;
  -webkit-animation-delay: 1.775s;
}

.loader2 span.circle2 {
  animation-delay: 1.75s;
  -webkit-animation-delay: 1.75s;
}

.loader2 span.circle3 {
  animation-delay: 1.7s;
  -webkit-animation-delay: 1.7s;
}

.loader2 span.circle4 {
  animation-delay: 1.6s;
  -webkit-animation-delay: 1.6s;
}

.loader2 span.circle5 {
  animation-delay: 1.4s;
  -webkit-animation-delay: 1.4s;
}

.loader2 span.circle6 {
  animation-delay: 1s;
  -webkit-animation-delay: 1s;
}

@keyframes straight {
  0% {
    left: -10%;
  }
  40% {
    left: 50%;
  }
  60% {
    left: 50%;
  }
  100% {
    left: 110%;
  }
}

@-webkit-keyframes straight {
  0% {
    left: -10%;
  }
  40% {
    left: 50%;
  }
  60% {
    left: 50%;
  }
  100% {
    left: 110%;
  }
}
</style>
<div  class="ski_loader loader2" style="display:none;">
  <span class="circle1"></span>
  <span class="circle2"></span>
  <span class="circle3"></span>
  <span class="circle4"></span>
  <span class="circle5"></span>
  <span class="circle6"></span>
</div>
