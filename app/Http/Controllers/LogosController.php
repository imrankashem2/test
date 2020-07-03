<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;

class LogosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $logo = Logo::latest()->limit(1)->first();

        return view('backend.logo',compact('logo'));
    }

    public function saveLogo(Request $request)
    {

    	if($request->hasFile('logoImage')){
            $file = $request->file('logoImage');
            $path = $file->store('Image/Ads/','public');
            Logo::create([

                'logoImage'=>$path

            ]);
        }

        return redirect()->back()->with('message','Post created successfully');
}
}
