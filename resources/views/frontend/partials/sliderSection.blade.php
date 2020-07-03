<div class="col-lg-8 col-md-8 col-sm-8">



    <div class="slick_slider">
        <div class="single_iteam"> <a href="{{route('newsshow',$slide->id)}}"> <img src="{{asset('storage/'.$slide->img)}}" alt=""></a>
            <div class="slider_article">
            <h2><a class="slider_tittle" href="{{route('newsshow',$slide->id)}}"> {{$slide->title}}</a></h2>
            <p>{{Str::limit($slide->information,500)}}</p>
            </div>

          </div>

    </div>


  </div>
