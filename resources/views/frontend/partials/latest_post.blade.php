<div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
                @foreach ($latestnews as $lnews)


              <li>
              <div class="media"> <a href="{{route('newsshow',$lnews->id)}}" class="media-left"> <img alt="latest" src="{{asset('storage/'.$lnews->img)}}"> </a>
                  <div class="media-body"> <a href="{{route('newsshow',$lnews->id)}} " class="catg_title">{{$lnews->title}}</a> </div>
                </div>
              </li>
              @endforeach
            </ul>
        <div id="next-button"><i class="fa  fa-chevron-down"> </i></div>
          </div>
        </div>
      </div>
