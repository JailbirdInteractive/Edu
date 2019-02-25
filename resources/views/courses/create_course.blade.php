@extends('layouts.layout',['name'=>$user->name])
@section('content')
@include('layouts.bluehead',['fname'=>$user->fname,'lname'=>$user->lname,'account'=>$user->account_type])

<div class="container">

    <div class="page-section">
      <div class="row">

        <div class="col-md-9">

          <!-- Tabbable Widget -->
          <div class="tabbable paper-shadow relative" data-z="0.5">

            <!-- Tabs 
            <ul class="nav nav-tabs">
              <li class="active"><a href="#course" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Course</span></a></li>
              <li><a href="#meta" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
              <li><a href="#lessons" data-toggle="tab"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
            </ul>
             END Tabs -->

             <div class="wizard-container wizard-1" id="wizard-demo-1">
                <div data-scrollable-h>
                  <ul class="wiz-progress">
                      <li class ="active">Lessons</li>

                    <li>Course Info</li>
                    <li>Course details</li>
                  </ul>
                </div>
            <!-- Panes -->
            <div class="tab-content">

              {{-- <div id="course" class="tab-pane active"> --}}
                <form action="/courses" method="POST" id="courseForm" data-toggle="wizard">
                  <fieldset class="step relative paper-shadow form-horizontal" data-z="2">

                      <div id="lessons" class="tab-pane">
                        <div class="media v-middle s-container">
                          <div class="media-body">
                            <h5 class="text-subhead text-light">{{$lessons->count()}} Lessons</h5>
                          </div>
                          <div class="media-right">
                                <button type="button" class="btn btn-primary paper-shadow relative" 
                                data-toggle="modal" 
                                data-target="#addLesson">
                               Add Lesson
                             </button>
                            {{-- <a class="btn btn-primary paper-shadow relative" href="#addLesson">Add lesson</a> --}}
                          </div>
                        </div>
                        <div class="nestable" id="nestable-handles-primary">
                          <ul class="nestable-list">
                            @if($lessons!=null)
                              @foreach($lessons as $lesson)
                                  @include('layouts.lesson_item',['title'=>$lesson->title,'desc'=>$lesson->description,'time'=>$lesson->created_at])
        
        
                              @endforeach
                            @endif
                           
                          </ul>
                        </div>
                      </div>
                      <div class="text-right">
                          <button type="button" class="wiz-next btn btn-primary">Next</button>
                        </div>
                      </fieldset>
                    <fieldset class="step relative paper-shadow form-horizontal" data-z="2">

                    @csrf
                    <input type="hidden" value={{$course_id}} name="course_id"/>

                    <input type="hidden" value={{$user->id}} name="instructor_id"/>
                  <div class="form-group form-control-material">
                    <input type="text" name="title" placeholder="Course Title" class="form-control used" value="Basics of HTML" />
                    <label for="title">Title</label>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    {{-- <textarea name="description" cols="30" rows="10" class="form-control"></textarea> --}}
                   
              <textarea name="description" cols="30" id="article-ckeditor" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="col-xs-6">
                      <button type="button" class="wiz-prev btn btn-default">Previous</button>
                    </div>
                    <div class="col-xs-6 text-right">
                      <button type="button" class="wiz-next btn btn-primary">Next</button>
                    </div>
                 
                    </fieldset>
                 
              {{-- </div> --}}
              <fieldset class="step relative paper-shadow form-horizontal" data-z="2">

              <div id="meta" class="tab-pane">
                  <div class="form-group">
                    <label for="select" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9 col-md-9">
                      <select id="select" class="form-control select2" name="category">
                        <option value="HTML">HTML</option>
                        <option value="Angular">Angular JS</option>
                        <option value="CSS">CSS / LESS</option>
                        <option value="DesCon">Design / Concept</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="duration" class="col-sm-3 control-label">Course Price</label>
                    <div class="col-sm-4 col-md-2">
                      <input type="number" class="form-control" placeholder="Cost of Course" value=19.99 name="price">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="duration" class="col-sm-3 control-label">Course Duration</label>
                    <div class="col-sm-4 col-md-2">
                      <input type="text" class="form-control" placeholder="No. of Days" value="10" name="duration">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="start" class="col-sm-3 control-label">Start Date</label>
                    <div class="col-sm-9 col-md-4">
                      <input id="datepicker" type="text" class="form-control datepicker" name="start_date">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="end" class="col-sm-3 control-label">End Date</label>
                    <div class="col-sm-9 col-md-4">
                      <input id="datepicker" type="text" class="form-control datepicker" name="end_date">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="select" class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-9 col-md-4">
                      <select id="select" class="form-control select2" name="course_type">
                        <option value="ONLINE">ONLINE</option>
                        <option value="IN-PERSON">IN PERSON</option>
                         </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="text-right">
                      <button type="submit"  name="form1" form="courseForm" class="btn btn-primary">Save</button>
                    </div>
               
              </div>
              </fieldset>

             
             
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
                <li class="list-group-item"><a class="link-text-color" href="website-instructor-dashboard.html">Dashboard</a></li>
                <li class="list-group-item"><a class="link-text-color" href="website-instructor-courses.html">My Courses</a></li>
                <li class="list-group-item"><a class="link-text-color" href="website-instructor-messages.html">Messages</a></li>
                <li class="list-group-item"><a class="link-text-color" href="website-instructor-earnings.html">Earnings</a></li>
                <li class="list-group-item"><a class="link-text-color" href="website-instructor-statement.html">Statement</a></li>
                <li class="list-group-item"><a class="link-text-color" href="website-instructor-profile.html">Profile</a></li>
                <li class="list-group-item"><a class="link-text-color" href="login.html"><span>Logout</span></a></li>
              </ul>
            </div>
          </div>

          <h4>Featured</h4>
          <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
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
<!--LESSON FORM-->
  <div class="modal grow modal-overlay modal-backdrop-body fade" id="addLesson">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <div class="modal-dialog">
      <div class="v-cell">
        <div class="modal-content">
          <div class="modal-body">
         
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
              <form action="{{ action('LessonController@store') }}"
              enctype="multipart/form-data" method="POST" id="lessonForm">
                @csrf
                <input type="hidden" value={{$course_id}} name="course_id"/>
              <div class="form-group form-control-material">
                <input type="text" name="title"  placeholder="Course Title" class="form-control used" value="Basics of HTML" />
                <label for="title">Title</label>
              </div>
              <div class="form-group">
                  <label for="lesson_desc">Description</label>
                <textarea name="lesson_desc"  id="article-ckeditor" cols="30" rows="10" class="form-control" ></textarea>
              </div>
              <div class="col-md-6">

              <div class="form-group">
                  <div class="col-sm-9 col-md-9">
                    <select id="select_less" class="selectpicker" title="Select Category" name="category_less">
                      <option value="HTML">HTML</option>
                      <option value="Angular">Angular JS</option>
                      <option value="CSS">CSS / LESS</option>
                      <option value="DesCon">Design / Concept</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">

                <div class="form-group form-control-material">
                    <input type="text" name="lesson_url" id="lesson_url" placeholder="Lesson Url" class="form-control" value="" />
                  <label for="lesson_url">URL</label>
                </div>
              </div>
              <div class="text-right">
                {{-- <input type="submit" value="Save" name="form2" class="btn btn-primary"/> --}}
                 <button type="submit" name="form2" class="btn btn-primary" id="lessonButton">Save</button> 
              </div>
            </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
@endsection