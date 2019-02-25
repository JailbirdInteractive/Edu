<div class="item">
    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
      <div class="panel-body">
        <div class="media media-clearfix-xs">
          <div class="media-left">
            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
              <span class="img icon-block s90 bg-default"></span>
              <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                  <span class="v-center">
                  <i class="{{$icon}}"></i>
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
          <h4 class="media-heading margin-v-5-3"><a href="website-course.html">{{$lessonName}}</a></h4>
            <p class="small margin-none">
                @for ($i = 0; $i < $stars; $i++)
                <span class="fa fa-fw fa-star text-yellow-800"></span>
            @endfor
            @for ($i = 0; $i < 5-$stars; $i++)
            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    @endfor
                {{-- <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star-o text-yellow-800"></span>
              <span class="fa fa-fw fa-star-o text-yellow-800"></span> --}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>