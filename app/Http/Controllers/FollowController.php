<?php

namespace App\Http\Controllers;

use App\Followuses;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $follow = Followuses::latest()->limit(1)->first();
        return view('backend.follow',compact('follow'));
    }
    public function saveLink(Request $request)
    {


            Followuses::create([

                'facebook'=>$request->get('facebook'),
                'twitter'=>$request->get('twitter'),

                'linkedin'=>$request->get('linkedin'),

                'youtube'=>$request->get('youtube'),


            ]);


        return redirect()->back()->with('message','Post created successfully');
}
}
