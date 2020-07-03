<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">

              <li> @if(!empty($adsPrice->faviconImage))
                <a href="{{Storage::url($adsPrice->faviconImage)}}" target="_blank">AdsPrice</a>
            @else
            <a href="/">AdsPrice</a>
            @endif</li>
              <li><a href="https://epaper.shomoyeralo.com/2020/04/09/index.php">Epaper</a></li>

            </ul>
          </div>
          <div class="social_area" style=" margin-right: 510px; margin-top:10px">
            <ul class="social_nav">
              <li class="facebook"><a href="{{  url($links->facebook) }}" target="_blank"></a></li>
              <li class="twitter"><a href="{{  url($links->twitter) }}" target="_blank"></a></li>
              <li class="youtube"><a href="{{  url($links->youtube) }}" target="_blank"></a></li>
              <li class="mail"><a href="{{  url($links->linkedin) }}" target="_blank"></a></li>
            </ul>
          </div>
          <div class="header_top_right">
          <p>{{$ldate}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="/" class="logo"><img src="{{asset('storage/'.$logo->logoImage)}}" alt="logo"></a></div>
          <div class="add_banner"> <a target="_blank" href="{{url('storage/'.$topAd->img)}}"> <img class="card-img-top" src="{{asset('storage/'.$topAd->img)}}"
            alt="Card image cap">
         </a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

          @foreach(\App\Categories::orderBy('categoryName')->limit(9)->get() as $cat)
        <li><a href="">{{$cat->categoryName}}</a></li>

            @endforeach
            <li    ><a href="">All categories</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            @foreach(\App\News::latest()->limit(8)->get() as $news)
          <li><a href=""><img src="{{asset('storage/'.$news->img)}}" alt="">{{$news->title}}</a></li>
            @endforeach
          </ul>

        </div>
    </div>
        <div >
            <form action="{{route('allnews')}}">
               <input type="text" name="search"placeholder="search.... " required="">
               <input type="submit" class="btn btn-search btn-danger btn-sm" value="Search">
           </form>
        </div>

    </div>
  </section>
