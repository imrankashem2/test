<?php

namespace App\Http\Controllers;

use App\Advertises;
use App\Categories;
use App\Favicons;
use App\Followuses;
use App\Footerinfos;
use App\Live;
use App\Logo;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $adsPrice=Favicons::latest()->limit(1)->first();
        $links=Followuses::latest()->limit(1)->first();
        $ldate = date('Y-m-d H:i:s');
        $logo = Logo::latest()->limit(1)->first();
        $topAd = Advertises::latest()->limit(1)->where('singleTopAd',1)->first();
         $footer=Footerinfos::latest()->limit(1)->first();
         $latestnews=News::latest()->where('publicationStatus',1)->limit(5)->get();
         $live= Live::latest()->limit(1)->first();
         $spons= Advertises::latest()->where('singleTopAd',2)->limit(1)->first();
         $Archive = News::all()->where('publicationStatus',1)->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        });
        $pop = News::where('publicationStatus',1)->orderBy('none','DESC')->limit(4)->get();
        $hotnews = News::where('publicationStatus',1)->orderBy('none','DESC')->limit(1)->first();
        $slide=News::where('publicationStatus',1)->latest()->first();
        $catss=Categories::latest()->get();

        return view('frontend.home',compact('adsPrice','links','ldate','logo','topAd',
        'footer','latestnews','live','spons','Archive',
        'catss','pop','hotnews','slide' ));

    }


//search Jobs
public function catshow( )
{
    # code...
    $adsPrice=Favicons::latest()->limit(1)->first();
    $links=Followuses::latest()->limit(1)->first();
    $ldate = date('Y-m-d H:i:s');
    $logo = Logo::latest()->limit(1)->first();
    $topAd = Advertises::latest()->limit(1)->where('singleTopAd',1)->first();
     $footer=Footerinfos::latest()->limit(1)->first();
     $latestnews=News::latest()->where('publicationStatus',1)->limit(5)->get();
     $live= Live::latest()->limit(1)->first();
     $spons= Advertises::latest()->where('singleTopAd',2)->limit(1)->first();
     $Archive = News::all()->where('publicationStatus',1)->groupBy(function($date) {
        return Carbon::parse($date->created_at)->format('Y-m-d');
    });
    $pop = News::where('publicationStatus',1)->orderBy('none','DESC')->limit(4)->get();
    $hotnews = News::where('publicationStatus',1)->orderBy('none','DESC')->limit(1)->first();
    $slide=News::where('publicationStatus',1)->latest()->first();
    $catss=Categories::latest()->get();
    return view('frontend.categoryby',compact('adsPrice','links','ldate','logo','topAd',
    'footer','latestnews','live','spons','Archive',
    'catss','pop','hotnews','slide' ));

}
            public function allNews(Request $request)
            {

    //front search
       $search = $request->get('search');
       $adsPrice=Favicons::latest()->limit(1)->first();
       $links=Followuses::latest()->limit(1)->first();
       $ldate = date('Y-m-d H:i:s');
       $logo = Logo::latest()->limit(1)->first();
       $topAd = Advertises::latest()->limit(1)->where('singleTopAd',1)->first();
        $footer=Footerinfos::latest()->limit(1)->first();

       if($search ){
          $news = News::where('publicationStatus',1)
                   ->where('title','LIKE','%'.$search.'%')
                   ->orWhere('imgTitle','LIKE','%'.$search.'%')
                   ->orWhere('information','LIKE','%'.$search.'%')

                   ->paginate(5);

           return view('frontend.allnews',compact('news','adsPrice','links','ldate','logo','topAd','footer'));

       }



           $news = news::latest()->paginate(5);
           return view('frontend.allnews',compact('news','adsPrice','links','ldate','logo','topAd','footer'));



}
//    public function searchJobs(Request $request){

//        $keyword = $request->get('keyword');
//        $users = Job::where('title','like','%'.$keyword.'%')
//                ->orWhere('position','like','%'.$keyword.'%')
//                ->limit(5)->get();
//        return response()->json($users);

//    }

                public function newsShow( $id)
                {
                    $adsPrice=Favicons::latest()->limit(1)->first();
                    $links=Followuses::latest()->limit(1)->first();
                    $ldate = date('Y-m-d H:i:s');
                    $logo = Logo::latest()->limit(1)->first();
                    $topAd = Advertises::latest()->limit(1)->where('singleTopAd',1)->first();
                     $footer=Footerinfos::latest()->limit(1)->first();
                     $latestnews=News::latest()->where('publicationStatus',1)->limit(5)->get();
                     $live= Live::latest()->limit(1)->first();
                     $spons= Advertises::latest()->where('singleTopAd',2)->limit(1)->first();
                     $Archive = News::all()->where('publicationStatus',1)->groupBy(function($date) {
                    return Carbon::parse($date->created_at)->format('Y-m-d');
                    });

                    $news = News::find($id)->where('publicationStatus',1)->first();
                    $news->none = $news->none+1;

                //    $related_news = Post::with(['creator','category','comments'])->where('status',1)->where('id','!=',$post->id)->where('category_id',$post->category_id)->orderBy('id','DESC')->limit(4)->get();

                    $news->save();

                         return view('frontend.details',compact('news','adsPrice','links','ldate','logo','topAd','footer','latestnews','live','spons','Archive'));

                }




}
