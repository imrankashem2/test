<?php

namespace App\Http\Controllers;

use App\Advertises;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $topAd = Advertises::latest()->limit(1)->where('singleTopAd',1)->first();
        $sideAd = Advertises::latest()->limit(1)->where('singleTopAd',2)->first();
        return view('backend.ads',compact('topAd','sideAd'));
    }
    public function saveAds(Request $request)
    {

    	if($request->hasFile('img')){
            $file = $request->file('img');
            $path = $file->store('Image/Ads/','public');
            Advertises::create([
                'title'=>$request->get('title'),

                'singleTopAd'=>$request->get('category'),
                'img'=>$path,
                'description'=>$request->get('description')
            ]);
        }

        return redirect()->back()->with('message','Post created successfully');
}

}
