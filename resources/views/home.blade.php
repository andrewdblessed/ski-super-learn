@extends('templates.home_include')
@section('content')  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <style media="screen">
  .account-logo-box {
  padding: 10px;
  border-radius: 5px 5px 0 0;
  background-color: #188ae2;
}
body{
    @if ($bg_number == 1)
    background-image: url(/landing/ba1.jpg);
    @elseif ($bg_number == 2)
    background-image: url(/landing/ba1.jpg);

    @elseif ($bg_number == 3)
    background-image: url(/landing/ba1.jpg);
@endif
    background-size: cover;
    background-repeat: no-repeat;
}

.account-pages .account-content {
    padding: 1px 30px 14px 30px;
    background-color: #ffffff;
}
.wrapper-page {
    margin:0;
    position: relative;
    max-width: 662px;
}
.col-md-8.demo {
    position: fixed;
    top: 36.5%;
    right: 7%;
    z-index: 10000;
}
  </style>
  <div class="content-page">
      <!-- Start content -->
      <div class="content">
          <div class="container-fluid">


              <div class="row">
    <div class="col-xs-12">
    <div class="row">

      <div class="col-md-8 demo">

        <div class="wrapper-page">

            <div class="m-t-40 account-pages">
                <div class="text-center account-logo-box">
                    <h2 class="text-uppercase">
                          <a href="{{route('home')}}" class="logo">
                            <span class="text-white"><img src="icons/favicon.png" alt="" height="36"> SKI-Learn</span>
                        </a>
                    </h2>
                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                </div>
                <div class="account-content">
                  <h4 class="text-primary text-center">Join With social</h4>
                  <div class="button-list">
                      <button type="button" class="btn btn-facebook waves-effect waves-light">
                         <i class="fa fa-facebook"></i>
                      </button>

                      <button type="button" class="btn btn-twitter waves-effect waves-light">
                         <i class="fa fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-linkedin waves-effect waves-light">
                         <i class="fa fa-linkedin"></i>
                      </button>
                      <button type="button" class="btn btn-googleplus waves-effect waves-light">
                         <i class="fa fa-google-plus"></i>
                      </button>
                      <button type="button" class="btn btn-github waves-effect waves-light">
                         <i class="fa fa-github"></i>
                      </button>
                    </div>
                    <h4 class="text-primary text-center">OR</h4>

                    <form id="user" class="form-horizontal" action="{{route('auth.signup')}}" method="post">
                      <div class="form-group ">
                          <div class="col-xs-6">
                              <input class="form-control" name="first_name" type="text" required="" placeholder="First Name">
                          </div>

                          <div class="col-xs-6">
                              <input class="form-control" name="last_name" type="text" required="" placeholder="Last Name" >
                          </div>
                      </div>

                        <div class="form-group ">
                            <div class="col-xs-6">
                                <input class="form-control" name="email" type="email" required="" placeholder="Email">
                            </div>

                            <div class="col-xs-6">
                                <input class="form-control" name="username" type="text" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <input class="form-control" name="password" type="password" required="" placeholder="Password">
                            </div>

                            <div class="col-xs-6">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox-signup" type="checkbox" checked="checked">
                                    <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group account-btn text-center m-t-10">
                            <div class="col-xs-12">
                                <button class="btn w-md btn-primary btn-bordered waves-effect waves-light save_user" type="submit">Register</button> <a href="page-login.html" class="btn w-md btn-primary btn-bordered waves-effect waves-light"><b>Sign In</b></a>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                    </form>

                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- end card-box-->




        </div>
        <!-- end wrapper -->




      </div>
    </div>
    </div>
  </div>
              <!-- end row -->



          </div> <!-- container -->

      </div> <!-- content -->

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<script type="text/javascript">

$(function() {
       var form = $('#user');

       $(".save_user").click(function(e) {
      console.log("loading");
       e.preventDefault();
           $(".ski_loader").css("display", "block");
           var formData = $(form).serialize();
       $.ajax({
       type: 'POST',
       url: $(form).attr('action'),
       data: formData
       })
       .done(function(response) {
        alert("account created");
         })
       .fail(function(data) {
  alert("failed")

           });
       });
     });
</script>

@stop
