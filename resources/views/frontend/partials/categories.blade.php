<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">


      <div class="fashion_technology_area">

            @foreach (App\Categories::latest()->limit(10)->get() as $item)



        <div class="fashion">
            <div class="single_post_content">



              <h2><span>{{$item->categoryName}}</span></h2>

@php
    $itm=$item->id;
@endphp

            <ul class="spost_nav">

                @foreach (App\News::latest()->where('category',$itm)->where('publicationStatus',1)->limit(4)->get() as $news)


               <li>
                <div class="media wow fadeInDown"> <a href="" class="media-left"> <img alt="" src="{{asset('storage/'.$news->img)}}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> {{$news->title}}</a> </div>
                </div>

              </li>

              @endforeach
             </ul>
            </div>
          </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@endforeach

      </div>
      <div class="single_post_content">
        <h2><span>Photography</span></h2>
        <ul class="photograph_nav  wow fadeInDown">
      @foreach (App\News::latest()->where('publicationStatus',1)->limit(6)->get() as $item)


          <li>
            <div class="photo_grid">
              <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="{{asset('storage/'.$news->img)}}" alt=""/> </a> </figure>
            </div>
          </li>
          @endforeach
        </ul>
      </div>

    </div>
  </div>
