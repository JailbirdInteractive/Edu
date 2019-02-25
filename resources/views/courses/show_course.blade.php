@extends('layouts.layout')
@section('content')
<div class="parallax bg-white page-section">
    <div class="parallax-layer container" data-opacity="true">
      <div class="media v-middle">
        <div class="media-left">
          <span class="icon-block s60 bg-lightred"><i class="fa fa-github"></i></span>
        </div>
        <div class="media-body">
        <h1 class="text-display-1 margin-none">{{$course->title}}</h1>
          <p class="small margin-none">
            <span class="fa fa-fw fa-star text-yellow-800"></span>
            <span class="fa fa-fw fa-star text-yellow-800"></span>
            <span class="fa fa-fw fa-star text-yellow-800"></span>
            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
          </p>
        </div>
        <div class="media-right">
          <a class="btn btn-white" href="website-directory-grid.html">Library</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-8">

        <div class="page-section">
          <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
            </div>
          </div>
          <p>
        {!!$course->description!!}  
        </p>
          <p class="margin-none">
            <span class="label bg-gray-dark">New</span>
            <span class="label label-grey-200">WordPress</span>
            <span class="label label-grey-200">Beginner</span>
          </p>
        </div>

        <div class="page-section">
          <div class="row">
            <div class="col-md-7">
              <h2 class="text-headline margin-none">What you'll learn</h2>
              <p class="text-subhead text-light">Lessons in this course.</p>
              <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
               @foreach($lessons as $lesson)

               <li class="list-group-item">
                <div class="media v-middle">
                  <div class="media-left">
                    <div class="icon-block s30 bg-red-300 text-white img-circle">
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="media-body text-body-2">
                    {{$lesson->title}}
                </div>
                </div>
              </li>

               @endforeach
                {{-- <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block s30 bg-green-300 text-white img-circle">
                        <i class="fa fa-database"></i>
                      </div>
                    </div>
                    <div class="media-body text-body-2">
                      Database connections & some other nice features.
                    </div>
                  </div>
                </li>
                <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block s30 bg-indigo-300 text-white img-circle">
                        <i class="fa fa-trophy"></i>
                      </div>
                    </div>
                    <div class="media-body text-body-2">
                      Eaque ex exercitationem quia reprehenderit?
                    </div>
                  </div>
                </li>
                <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block s30 bg-orange-300 text-white img-circle">
                        <i class="fa fa-code-fork"></i>
                      </div>
                    </div>
                    <div class="media-body text-body-2">
                      Ab distinctio nemo, provident quia quibusdam ullam.
                    </div>
                  </div>
                </li>
                <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block s30 bg-grey-500 text-white img-circle">
                        <i class="fa fa-check"></i>
                      </div>
                    </div>
                    <div class="media-body text-body-2">
                      Conclusion & Notes.
                    </div>
                  </div>
                </li> --}}
              </ul>
            </div>
            <div class="col-md-5">

              <div class="pull-right">
                <a class="btn btn-white btn-circle paper-shadow relative" data-z="1" href="#"><i class="md md-add"></i></a>
              </div>

              <h2 class="text-headline margin-none">Testimonials</h2>
              <p class="text-subhead text-light">A few words from our past students</p>
              <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                <div class="item">
                  <div class="testimonial">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                      </div>
                    </div>
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-3.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <p class="text-subhead margin-v-5-0">
                          <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                        </p>
                        <p class="small">
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
                <div class="item">
                  <div class="testimonial">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                      </div>
                    </div>
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-4.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <p class="text-subhead margin-v-5-0">
                          <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                        </p>
                        <p class="small">
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
                <div class="item">
                  <div class="testimonial">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                      </div>
                    </div>
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-5.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <p class="text-subhead margin-v-5-0">
                          <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                        </p>
                        <p class="small">
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
                <div class="item">
                  <div class="testimonial">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                      </div>
                    </div>
                    <div class="media v-middle">
                      <div class="media-left">
                        <img src="images/people/50/guy-1.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <p class="text-subhead margin-v-5-0">
                          <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                        </p>
                        <p class="small">
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
      <div class="col-lg-3 col-md-4">

        <div class="page-section">

          <!-- .panel -->
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-heading">
              <h4 class="text-headline">Course</h4>
            </div>
            <div class="panel-body">
              <p class="text-caption">
                <i class="fa fa-clock-o fa-fw"></i> {{$course->duration}} hrs &nbsp;
                <i class="fa fa-calendar fa-fw"></i> {{$course->start_date}}
                <br/>
                <i class="fa fa-user fa-fw"></i> Instructor:{{$user->fname}} {{$user->lname}}
                <br/>
                <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                <br/>
                <i class="fa fa-check fa-fw"></i> Attending: 30
              </p>
            </div>
            <hr class="margin-none" />
            
            <div class="panel-body text-center">
              {{-- <p><a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="website-take-course.html">Start Course</a></p> --}}
            <form action="/paypal_pay" method="POST">
                @csrf
                <input type="text" hidden value={{$course->title}} name="course"/>
                <input type="number" hidden value={{$course->cost}} name="cost"/>
                <input type="text" hidden value={{$course->user_id}} name="instructor_id"/>

              <p><button type="submit" class="btn btn-success btn-lg paper-shadow relative" name="amount" value={{$course->price}}>Purchase Course</button></p>
              </form>
                {{-- <p class="text-body-2">or <a href="#">buy course for ${{$course->price}}</a></p>
              <div id="paypal-button-container"></div>

              <script>
                        var cost={!! json_encode($course->price) !!};
                        var netCost=cost*0.90;
                        var course={!!json_encode($course->title)!!};
                        var ins_id={!!json_encode($course->user_id)!!};
                        var odId='';
                        paypal.Buttons({
                                createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                    amount: {
                                        value: cost
                                    }
                                    }]
                                });
                                },
                                onApprove: function(data, actions) {
                                    odId=data.orderID;
                                return actions.order.capture().then(function(details) {
                                    alert('Transaction completed by ' + details.payer.name.given_name+' id '+odId);
                                    // Call your server to save the transaction
                                    fetch('/paypal', {
                                        headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                                    "Content-Type": "application/json",
                                                    "Accept": "application/json",
                                                },
                                    method: 'post',
                                    body: JSON.stringify({
                                        orderID: odId,
                                        cost:cost,
                                        net:netCost,
                                        course:course,
                                        instructor_id:ins_id,

                                    })
                                    });
                                    
                                });
                                
                                }
                            }).render('#paypal-button-container');
                  </script>
            </div> --}}
            <ul class="list-group">
              <li class="list-group-item">
                <a href="www.facebook.com/pinnockedu" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
              </li>
              <li class="list-group-item">
                <a href="www.twitter.com" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
              </li>
            </ul>
          </div>
          <!-- // END .panel -->

          <!-- .panel -->
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media v-middle">
                <div class="media-left">
                  <img src="images/people/110/guy-6.jpg" alt="About" width="60" class="img-circle" />
                </div>
                <div class="media-body">
                <h4 class="text-title margin-none"><a href="#">{{$user->fname}} {{$user->lname}}</a></h4>
                  <span class="caption text-light">Biography</span>
                </div>
              </div>
              <br/>
              <div class="expandable expandable-indicator-white expandable-trigger">
                <div class="expandable-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aut consectetur consequatur cum cupiditate debitis doloribus, error ex explicabo harum illum minima mollitia nisi nostrum officiis omnis optio qui quisquam saepe sit
                    sunt totam vel velit voluptatibus? Adipisci ducimus expedita id nostrum quas quia!</p>
                </div>
              </div>
            </div>
          </div>
          <!-- // END .panel -->

        </div>
        <!-- // END .page-section -->

      </div>
    </div>

  </div>

  <div class="bg-white page-section">
    <div class="container">
      <h4>Featured</h4>
      <div class="slick-basic slick-slider" data-items="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-items-xs="1">
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
  {{-- <script>
      var cost={!! json_encode($course->price) !!};
    paypal.Buttons({
      createOrder: function(data, actions) {
        // Set up the transaction
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: cost
            }
          }]
        });
      }
    }).render('#paypal-button-container');
  </script> --}}
@endsection