<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pinnock Edu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script
    src="https://www.paypal.com/sdk/js?client-id=Ac3x1cQFV6364VunezqOA4A9vxRtyofb4zRpeGSqsztP1z26efP4Lbz7vjHSyEroSFxofWCLKhZlHNLf">
  </script>
  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="/css/vendor/all.css" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.countdown.css" rel="stylesheet"> -->

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "html" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "html" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/html/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="/css/app/app.css" rel="stylesheet">

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/material.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/messages.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand navbar-brand-logo">
          <a class="img" href="/">
          <img src="/images/pin_blue.png" width="50" height="50">
        </a>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-nav-margin-left">
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="/">Home page</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="tutors.html">Tutors</a></li>
              <li><a href="survey.html">Survey</a></li>
              <li><a href="website-forum.html">Forum Home</a></li>
              <li><a href="website-forum-category.html">Forum Category</a></li>
              <li><a href="website-forum-thread.html">Forum Thread</a></li>
              <li><a href="website-blog.html">Blog Listing</a></li>
              <li><a href="website-blog-post.html">Blog Post</a></li>
              <li><a href="website-contact.html">Contact</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="website-directory-grid.html">Grid Directory</a></li>
              <li><a href="website-directory-list.html">List Directory</a></li>
              <li><a href="website-course.html">Single Course</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="website-student-dashboard.html">Dashboard</a></li>
              <li><a href="website-student-courses.html">My Courses</a></li>
              <li><a href="website-take-course.html">Take Course</a></li>
              <li><a href="website-course-forums.html">Course Forums</a></li>
              <li><a href="website-take-quiz.html">Take Quiz</a></li>
              <li><a href="website-student-messages.html">Messages</a></li>
              <li><a href="website-student-profile.html">Private Profile</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="website-instructor-dashboard.html">Dashboard</a></li>
              <li><a href="website-instructor-courses.html">My Courses</a></li>
              <li><a href="website-instructor-course-edit-course.html">Edit Course</a></li>
              <li><a href="website-instructor-earnings.html">Earnings</a></li>
              <li><a href="website-instructor-statement.html">Statement</a></li>
              <li><a href="website-instructor-messages.html">Messages</a></li>
              <li><a href="website-instructor-profile.html">Private Profile</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="essential-buttons.html">Buttons</a></li>
              <li><a href="essential-icons.html">Icons</a></li>
              <li><a href="essential-progress.html">Progress</a></li>
              <li><a href="essential-grid.html">Grid</a></li>
              <li><a href="essential-forms.html">Forms</a></li>
              <li><a href="essential-tables.html">Tables</a></li>
              <li><a href="essential-tabs.html">Tabs</a></li>
            </ul>
          </li>
        </ul>
        <div class="navbar-right">
          <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
           @if(!Auth::guest())
            <!-- user -->
            <li class="dropdown user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/images/people/110/guy-6.jpg" alt="" class="img-circle" /> {{Auth::user()->fname}}<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                    @if(Auth::user()->account_type=="Instructor")
                    <li><a href="/instructors"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>

                  @else
                  <li><a href="/students"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>

                  @endif
                <li><a href="website-student-courses.html"><i class="fa fa-mortar-board"></i> My Courses</a></li>
              <li><a href="users/{{Auth::user()->id}}/edit"><i class="fa fa-user"></i> Profile</a></li>
                <li><a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="fa fa-sign-out"></i> Logout</a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
              </ul>
            </li>
            <!-- // END user -->
            
          
          </ul>
        </div>
      </div>
        @else
            <a href="#login" class="navbar-btn btn btn-primary" data-animated data-toggle="modal">Log In</a>
        </div>
      </div>
        
        @endif
          
      <!-- /.navbar-collapse -->

    </div>
    
  
                      
  </div>
  <div class="modal grow modal-overlay modal-backdrop-body fade" id="login">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
          <div class="v-cell">
            <div class="modal-content">
              <div class="modal-body">
                    <div class="login">
                            <form method="POST" action="{{route('login')}}" data-toggle="modal" >
       @csrf
                        <div id="content">
                              <div class="container-fluid">
                          
                                <div class="lock-container">
                                  <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                                    <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                                    <img src="images/pin_blue.png" class="img-circle width-80">
                                    <div class="panel-body">
                                      <div class="form-group">
                                        <div class="form-control-material">
                                          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="email" type="email" placeholder="Email">
                                          <label for="email">Email</label>
                                        </div>
                                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                      </div>
                                      <div class="form-group">
                                        <div class="form-control-material">
                                          <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password" type="password" placeholder="Enter Password">
                                          <label for="password">Password</label>
                                        </div>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                      </div>
                          
                                      <button type="submit"class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></button>
                                      <a href="#" class="forgot-password">Forgot password?</a>
                                      <a href="#modal-overlay-signup" class="link-text-color" data-toggle="modal" data-dismiss="modal">Create account</a>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                          
                              </div>
                            </form>
                            </div>
              </div>
            </div>
          </div>
        </div>
      </div>