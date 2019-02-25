@extends('layouts.layout')
@section('content')

{{-- 
<div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
          <div class="media v-middle">
            <div class="media-left text-center">
              <a href="#">
                <img src="/images/people/110/guy-6.jpg" alt="people" class="img-circle width-80" />
              </a>
            </div>
            <div class="media-body">
            <h1 class="text-white text-display-1 margin-v-0">{{$user->fname}} {{$user->lname}}</h1>
              <p class="text-subhead"><a class="link-white text-underline" href="website-student-public-profile.html">View public profile</a></p>
            </div>
            <div class="media-right">
               
                        <span class="label bg-blue-500">{{$user->account_type}}</span>
                   
             
            </div>
          </div>
        </div>
      </div> --}}
      @include('layouts.bluehead',['fname'=>$user->fname,'lname'=>$user->lname,'account'=>$user->account_type])
    
      <div class="container">
          @if($errors->any())
          <div class="notification is-danger">
                  <ul>
                  @foreach($errors->all() as $error)
                      <li>
                          {{$error}}
                      </li>
                  @endforeach    
                  </ul>
          </div>
          @endif             
        <div class="page-section">
          <div class="row">
    
            <div class="col-md-9">
    
              <!-- Tabbable Widget -->
              <div class="tabbable paper-shadow relative" data-z="0.5">
    
                <!-- Tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="website-student-profile.html"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                  <li><a href="website-student-billing.html"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Billing Details</span></a></li>
                </ul>
                <!-- // END Tabs -->
    
                <!-- Panes -->
                <div class="tab-content">
    
                  <div id="account" class="tab-pane active">
                  <form method="POST" action="/users/{{$user->id}}" id="updateform"class="form-horizontal">
                    @method("PATCH")
                    @csrf
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                        <div class="col-md-6">
                          <div class="media v-middle">
                            <div class="media-left">
                              <div class="icon-block width-100 bg-grey-100">
                                <i class="fa fa-photo text-light"></i>
                              </div>
                            </div>
                            <div class="media-body">
                              <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFirstName" class="col-md-2 control-label">Full Name</label>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" id="exampleInputFirstName" name="fname" value="{{$user->fname}}" placeholder="Your first name">
                                <label for="exampleInputFirstName"></label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" id="exampleInputLastName" name="lname" value="{{$user->lname}}" placeholder="Your last name">
                                <label for="exampleInputLastName"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <input type="email" class="form-control" name="email" value="{{$user->email}}" id="inputEmail3" placeholder="Email">
                              <label for="inputEmail3"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-md-2 control-label">Phone</label>
                          <div class="col-md-6">
                            <div class="form-control-material">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}" id="inputEmail3" placeholder="Phone">
                                <label for="inputEmail3"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Adress</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-home"></i></span>
                              <input type="text" class="form-control used" id="address" value="{{$user->address}}" name="address" placeholder="Address">
                              <label for="address"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            <label for="inputPassword3">Password</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">

                          <div class="col-md-6">
                            
                              <div class="panel panel-default" id="checks">
                                
                                  <div class="panel-body">
                                    
                                    <div class="radio radio-info radio-inline" >
                                      <input type="radio" id="inlineRadio1" value="Student" name="account_type" checked="">
                                      <label for="inlineRadio1">Student</label>
                                    </div>
                                    <div class="radio radio-inline">
                                      <input type="radio" id="inlineRadio2" value="Instructor" name="account_type" checked="">
                                      <label for="inlineRadio2">Instructor</label>
                                    </div>
                                  </div>
                              </div>
                             

                        </div>
                        
                      </div>
                      <div class="form-group margin-none">
                        <div class="col-md-offset-2 col-md-10">
                          <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
    
                </div>
                <!-- // END Panes -->
    
              </div>
              <!-- // END Tabbable Widget -->
    
              <br/>
              <br/>
    
            </div>
            <div class="col-md-3">
    
              <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                <div class="panel-heading panel-collapse-trigger">
                  <h4 class="panel-title">My Account</h4>
                </div>
                <div class="panel-body list-group">
                  <ul class="list-group list-group-menu">
                   @if($user->account_type=="Instructor")
                      <li class="list-group-item"><a class="link-text-color" href="/instructors">Dashboard </a></li>
                    @else
                      <li class="list-group-item"><a class="link-text-color" href="#">Dashboard </a></li>
                    @endif
                    <li class="list-group-item"><a class="link-text-color" href="website-student-courses.html">My Courses</a></li>
                    <li class="list-group-item active"><a class="link-text-color" href="website-student-profile.html">Profile</a></li>
                    <li class="list-group-item"><a class="link-text-color" href="website-student-messages.html">Messages</a></li>
                    <li class="list-group-item"><a class="link-text-color" href="login.html"><span>Logout</span></a></li>
                  </ul>
                </div>
              </div>
    
              <h4>Featured</h4>
              <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
               @include('layouts.f_job_item',['lessonName'=>'Github fundamentals for gits','icon'=>'fa fa-github','stars'=>3])
               
                <div class="item">
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media media-clearfix-xs">
                        <div class="media-left">
                          <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-default"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                            <span class="v-center">
                                <i class="fa fa-github"></i>
                            </span>
                            </span>
                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                              <span class="v-center">
                                <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                          <p class="small margin-none">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media media-clearfix-xs">
                        <div class="media-left">
                          <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-primary"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                            <span class="v-center">
                                <i class="fa fa-css3"></i>
                            </span>
                            </span>
                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                              <span class="v-center">
                                <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
                          <p class="small margin-none">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media media-clearfix-xs">
                        <div class="media-left">
                          <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-lightred"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                            <span class="v-center">
                                <i class="fa fa-windows"></i>
                            </span>
                            </span>
                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                              <span class="v-center">
                                <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Portable Environments with Vagrant</a></h4>
                          <p class="small margin-none">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media media-clearfix-xs">
                        <div class="media-left">
                          <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-brown"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                            <span class="v-center">
                                <i class="fa fa-wordpress"></i>
                            </span>
                            </span>
                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                              <span class="v-center">
                                <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
                          <p class="small margin-none">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media media-clearfix-xs">
                        <div class="media-left">
                          <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-purple"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                            <span class="v-center">
                                <i class="fa fa-jsfiddle"></i>
                            </span>
                            </span>
                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                              <span class="v-center">
                                <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
                          <p class="small margin-none">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                    <div class="panel-body">
                      <div class="media media-clearfix-xs">
                        <div class="media-left">
                          <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-default"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                            <span class="v-center">
                                <i class="fa fa-cc-visa"></i>
                            </span>
                            </span>
                            <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                              <span class="v-center">
                                <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
                          <p class="small margin-none">
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </div>
    
      </div>
    </body>

@endsection