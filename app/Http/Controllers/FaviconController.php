<?php

namespace App\Http\Controllers;

use App\Favicons;
use Illuminate\Http\Request;

class FaviconController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $favicon = Favicons::latest()->limit(1)->first();

        return view('backend.favicon',compact('favicon'));
    }
    public function saveFavicon(Request $request)
    {


              $favicon = $request->file('faviconImage')->store('public/image/Faviconn');
                Favicons::create([
                  'faviconImage'=>$favicon
                ]);
            return redirect()->back()->with('message','Resume Sucessfully Updated!');




}
}
