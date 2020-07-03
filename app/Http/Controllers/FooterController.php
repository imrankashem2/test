<?php

namespace App\Http\Controllers;

use App\Footerinfos;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $footer = Footerinfos::latest()->limit(1)->first();
        return view('backend.footer',compact('footer'));
    }
    public function saveFooter(Request $request)
    {


            Footerinfos::create([

                'info'=>$request->get('info')

            ]);


        return redirect()->back()->with('message','Post created successfully');
}
}
