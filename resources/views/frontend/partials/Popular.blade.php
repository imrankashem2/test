<div class="single_sidebar">
    <h2><span>Popular Post</span></h2><br>
    <ul class="spost_nav">
      @foreach (App\News::where('publicationStatus',1)->orderBy('none','DESC')->limit(4)->get() as $pops)


      <li>
        <div class="media wow fadeInDown"> <a href="{{route('newsshow',$pops->id)}}" class="media-left"> <img alt="" src="{{asset('storage/'.$pops->img)}}"> </a>
          <div class="media-body"> <a href="{{route('newsshow',$pops->id)}}" class="catg_title"> {{$pops->title}}</a> </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
