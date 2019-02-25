@extends('layouts.layout',['name'=>$user->name])
@section('content')
@include('layouts.bluehead',['fname'=>$user->fname,'lname'=>$user->lname,'account'=>$user->account_type])
<div class="container">

        <div class="page-section">
          <div class="row">
    
            <div class="col-md-9">
    
              <div class="row" data-toggle="isotope">
                <div class="item col-xs-12 col-lg-6">
                  <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                      <div class="media v-middle">
                        <div class="media-body">
                          <h4 class="text-headline margin-none">Earnings</h4>
                          <p class="text-subhead text-light">This Month</p>
                        </div>
                        <div class="media-right">
                          <a class="btn btn-white btn-flat" href="website-instructor-earnings.html">Reports</a>
                        </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      {{-- <div id="line-holder" data-toggle="flot-chart-earnings" class="flotchart-holder height-200">
                          
                      </div> --}}
                      <div id="curve_chart" ></div>
                    </div>
                    <hr/>
                    <div class="panel-body">
                      <div class="row text-center">
                        <div class="col-md-6">
                          <h4 class="margin-none">Gross Revenue</h4>
                          <p class="text-display-1 text-warning margin-none">10.4k</p>
                        </div>
                        <div class="col-md-6">
                          <h4 class="margin-none">Net Revenue</h4>
                          <p class="text-display-1 text-success margin-none">55k</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                  <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                      <h4 class="text-headline margin-none">My Courses</h4>
                      <p class="text-subhead text-light">Your recent courses</p>
                    </div>
                    <ul class="list-group">
                      @foreach($courses as $course)
                          @include('layouts.instructor_course_item',['id'=>$course->id,'title'=>$course->title,'value'=>50])



                      @endforeach
                      
                    </ul>
                    <div class="panel-footer text-right">
                      <a href="website-instructor-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                      <a href="/courses/create" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                  <div class="s-container">
                    <h4 class="text-headline margin-none">Comments</h4>
                    <p class="text-subhead text-light">Latest student comments </p>
                  </div>
                  <div class="panel panel-default">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                          <div class="media-body">
                            <p class="text-subhead">
                              <a href="#">
                                <img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle" />
                              </a> &nbsp;
                              <a href="#">mosaicpro</a>
                              <span class="text-caption text-light">30 min ago</span>
                            </p>
                          </div>
                          <div class="media-right">
                            <div class="width-50 text-right">
                              <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                            </div>
                          </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                      </li>
                      <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                          <div class="media-body">
                            <p class="text-subhead">
                              <a href="#">
                                <img src="images/people/110/guy-2.jpg" alt="person" class="width-30 img-circle" />
                              </a> &nbsp;
                              <a href="#">mosaicpro</a>
                              <span class="text-caption text-light">38 min ago</span>
                            </p>
                          </div>
                          <div class="media-right">
                            <div class="width-50 text-right">
                              <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                            </div>
                          </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                      </li>
                      <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                          <div class="media-body">
                            <p class="text-subhead">
                              <a href="#">
                                <img src="images/people/110/guy-3.jpg" alt="person" class="width-30 img-circle" />
                              </a> &nbsp;
                              <a href="#">mosaicpro</a>
                              <span class="text-caption text-light">26 min ago</span>
                            </p>
                          </div>
                          <div class="media-right">
                            <div class="width-50 text-right">
                              <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                            </div>
                          </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                      </li>
                      <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                          <div class="media-body">
                            <p class="text-subhead">
                              <a href="#">
                                <img src="images/people/110/guy-2.jpg" alt="person" class="width-30 img-circle" />
                              </a> &nbsp;
                              <a href="#">mosaicpro</a>
                              <span class="text-caption text-light">52 min ago</span>
                            </p>
                          </div>
                          <div class="media-right">
                            <div class="width-50 text-right">
                              <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                            </div>
                          </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                      </li>
                      <li class="list-group-item">
                        <div class="media v-middle margin-v-0-10">
                          <div class="media-body">
                            <p class="text-subhead">
                              <a href="#">
                                <img src="images/people/110/guy-5.jpg" alt="person" class="width-30 img-circle" />
                              </a> &nbsp;
                              <a href="#">mosaicpro</a>
                              <span class="text-caption text-light">49 min ago</span>
                            </p>
                          </div>
                          <div class="media-right">
                            <div class="width-50 text-right">
                              <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                            </div>
                          </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                        <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                      </li>
                    </ul>
    
                  </div>
                </div>
                <div class="item col-xs-12 col-lg-6">
                  <div class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                      <div class="media v-middle">
                        <div class="media-body">
                          <h4 class="text-headline margin-none">Transactions</h4>
                          <p class="text-subhead text-light">Latest from statement</p>
                        </div>
                        <div class="media-right">
                          <a class="btn btn-white btn-flat" href="website-instructor-statement.html">Statement</a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table text-subhead v-middle">
                        <tbody>
                         @foreach($earnings as $earning)

                         <tr>
                          <td class="width-100 text-caption">
                          <div class="label label-grey-200 label-xs">{{$earning->created_at->format('d M Y')}}</div>
                          </td>
                        <td>{{$earning->student_name}}</td>
                        <td class="width-80 text-center"><a href="#">#{{$earning->id}}</a></td>
                        <td class="width-50 text-center">&dollar;{{$earning->earnings}}</td>
                        </tr>
                        <tr>

                         @endforeach
                           
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    
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
                    <li class="list-group-item active"><a class="link-text-color" href="website-instructor-dashboard.html">Dashboard</a></li>
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
    </body>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
     
          var data = new google.visualization.DataTable();
      data.addColumn('string', 'Month');
      data.addColumn('number','Earnings');
      data.addColumn('number','Gross Earnings')

      // data.addRows([
      //   ['Jan',200.00,300.00],
      // ])
      // data.addRows([
      //   ['February',5000.00,3500.25],

      // ])
      @foreach($earnings as $earning)
      var money = {!! json_encode($earning->earnings) !!};
      var g_money = {!! json_encode($earning->net_earnings) !!};
       var month={!!json_encode($earning->created_at->format('M'))!!};
       data.addRows([
        [month,money,g_money],

       ])


       @endforeach
          // var data = google.visualization.arrayToDataTable([
          //   ['Year', 'Sales', 'Expenses'],
          //   ['2004',  money,      400.00],
          //   ['2005',  1170.00,      460.00],
          //   ['2006',  660.00,       1120.00],
          //   ['2007',  1030.00,      540.00]
          // ]);
          var name = {!! json_encode($user->fname) !!};
          var options = {
            title: 'Earnings',
            legend:{position: 'in', textStyle: {color: 'blue', fontSize: 8}},
            axisTitlesPosition:'in',
            width: 350,
            height: 250
          };
      
          
      var chart = new google.charts.Line(document.getElementById('curve_chart'));

chart.draw(data, google.charts.Line.convertOptions(options));
        }
      </script>

     
    @endsection