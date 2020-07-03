<?php

namespace App\Http\Controllers;
use File;

use App\Categories;
use App\News;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $news = News::latest()->paginate(5);

        // return view('backend.newsindex', compact('news'));
        $news = DB::table('news')
        ->join('categories','news.category', '=', 'categories.id')
        ->select('news.*','categories.categoryName')
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('backend.newsindex',['news'=>$news]);
    }
    // public function index( )
    // {
    //     return view('backend.newsindex');
    // }
    public function addNews()
    {
        $categories = Categories::get();

        return view('backend.newscreate', compact('categories'));
    }
    public function saveNews(Request $request)
    {


        if ($request->hasFile('img')) {
            //   $destinationPath='Image/NewsImage/';
            $file = $request->file('img');
            $path = $file->store('Image/NewsImage/', 'public');
            News::create([
                'title' => $request->title,
                'category' => $request->category,
                'headlines' => $request->headlines,
                'latestNews' => $request->latestNews,
                'primeNews' => $request->primeNews,
                'popularNews' => $request->popularNews,
                'none' => $request->none,
                'information' => $request->information,
                'imgTitle' => $request->imgTitle,
                'publicationStatus' => $request->publicationStatus,
                'img' => $path
            ]);
        }

        return redirect()->route('news')->with('message', 'Information Save Successfully');
    }

    public function editNews($id)
    {
        $newsById = News::where('id', $id)->first();
        $categories = Categories::get();
        return view('backend.newsedit', ['newsById' => $newsById, 'categories' => $categories]);
    }


    public function updateNews(Request $request, $id)
    {



    	if($request->hasFile('img')){
   			$file = $request->file('img');
   			$path = $file->store('Image/NewsImage','public');
   			News::where('id',$id)->update([
                'title' => $request->title,
                'category' => $request->category,
                'headlines' => $request->headlines,
                'latestNews' => $request->latestNews,
                'primeNews' => $request->primeNews,
                'popularNews' => $request->popularNews,
                'none' => $request->none,
                'information' => $request->information,
                'imgTitle' => $request->imgTitle,
                'publicationStatus'=>$request->publicationStatus,
                'img' => $path

   			]);
   		}

   		$this->updateAllExceptImage($request,$id);
   		return redirect()->route('news')->with('message','Post updated successfully');

    }
    public function updateAllExceptImage(Request $request,$id){
    	return News::where('id',$id)->update([
            'title' => $request->title,
            'category' => $request->category,
            'headlines' => $request->headlines,
            'latestNews' => $request->latestNews,
            'primeNews' => $request->primeNews,
            'popularNews' => $request->popularNews,
            'none' => $request->none,
            'information' => $request->information,
            'imgTitle' => $request->imgTitle,
            'publicationStatus'=>$request->publicationStatus,

   			]);
    }

    public function viewNews($id)
    {
        $newsd= News::find($id);
        return view('backend.newsdetails', compact('newsd'));
    }

    public function deleteNews($id)
    {
        $oldimage=News::findOrFail($id);
        $oldimage->delete();
        return redirect()->route('news')->with('message', 'Successfully Deleted');
    }


    /***=====End News Section=====***/
}
