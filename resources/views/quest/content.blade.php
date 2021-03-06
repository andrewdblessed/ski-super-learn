@include('adela.config_ai')
<style>
.loader {
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
padding: 5px;
margin: auto;
width: 200px;
height: 200px;
}

.loader span {
width: 0px;
height: 0px;
left: 50%;
top: 50%;
position: absolute;
display: inline-block;
}

.loader span:after {
position: absolute;
width: 10px;
height: 10px;
background: #1565C0;
border-radius: 50%;
content: "";
}

.loader span.circle1:after {
left: -74px;
top: -16px;
}

.loader span.circle2:after {
left: -69px;
top: -33px;
}

.loader span.circle3:after {
left: -60px;
top: -47px;
}

.loader span.circle4:after {
left: -47px;
top: -60px;
}

.loader span.circle5:after {
left: -32px;
top: -70px;
}

.loader span.circle6:after {
left: -16px;
top: -74px;
}

.loader span {
animation: rotate 2s cubic-bezier(.71, .13, .36, .89) 0s infinite;
-webkit-animation: rotate 2s cubic-bezier(.71, .13, .36, .89) 0s infinite;
}

.loader span.circle1 {
animation-delay: 1.5s;
-webkit-animation-delay: 1.5s;
}

.loader span.circle2 {
animation-delay: 1.4s;
-webkit-animation-delay: 1.4s;
}

.loader span.circle3 {
animation-delay: 1.3s;
-webkit-animation-delay: 1.3s;
}

.loader span.circle4 {
animation-delay: 1.2s;
-webkit-animation-delay: 1.2s;
}

.loader span.circle5 {
animation-delay: 1.1s;
-webkit-animation-delay: 1.1s;
}

.loader span.circle6 {
animation-delay: 1s;
-webkit-animation-delay: 1s;
}

@keyframes rotate {
0% {
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-ms-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
}
100% {
-webkit-transform: rotate(360deg);
-moz-transform: rotate(360deg);
-ms-transform: rotate(360deg);
-o-transform: rotate(360deg);
transform: rotate(360deg);
}
}

@-webkit-keyframes rotate {
0% {
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-ms-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
}
100% {
-webkit-transform: rotate(360deg);
-moz-transform: rotate(360deg);
-ms-transform: rotate(360deg);
-o-transform: rotate(360deg);
transform: rotate(360deg);
}
}

</style>
