@extends('templates.default')
@section('content')
<style media="screen">
#load {
      position: absolute;
      background-color: blue;
      color: #fff;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
height:100%;
  display:none;
  }
</style>
    <script>
        $(document).ready(function () {
            $('#loadMe').click(function (e) {
			$('#load').show();
			$("#load").attr("src", "https://en.m.wikipedia.org/wiki/Apple");
            });
        });
    </script>
</head>
<body>
    <button id="loadMe">loadMe</button>
    <b>Load my website here.</b>
	   <iframe id="load" src="" ></iframe>
@stop
