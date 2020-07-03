<?php

namespace App\Http\Controllers;
use App\Live;
 use Facade\Ignition\Context\LaravelConsoleContext;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index( )
    {

       $live= Live::latest()->limit(1)->first();
        return view('backend.live',compact('live'));
    }
    public function saveLive(Request $request)
    {


            Live::create([

                'title'=>$request->get('title'),
                'youtube'=>$request->get('youtube')

            ]);


        return redirect()->back()->with('message','Post created successfully');
}
}
