<?php

namespace App\Http\Controllers;

use App\Advertises;
use App\Categories;
use App\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $category = Categories::count();
        $news = News::count();
        $ads= Advertises::count();
        return view('backend.dashboard',compact('category','news','ads'));
    }
}
