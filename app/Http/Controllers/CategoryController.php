<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Console\Scheduling\CacheAware;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( )
    {
        $categories = Categories::latest()->paginate(5);
        return view('backend.categories',compact('categories'));
    }

    public function saveCategory(Request $request)
    {
        $this->validate($request,[
            'categoryName'=>'required|min:3'

        ]);

            Categories::create([
                'categoryName' => $request->get('categoryName')
            ]);

        return redirect()->back()->with('message','Post created successfully');
}

public function updateCategory(Request $request,$id)
{
     $this->validate($request,[
        'categoryName'=>'required|min:3'
    ]);

           Categories::where('id',$id)->update([
            'categoryName' => $request->get('categoryName')
           ]);



       return redirect()->back()->with('message','Post updated successfully');

}
public function deleteCategory($id)
{
        $category= Categories::find($id);
        $category->delete();

        return redirect()->back()->with('message','Information Delete Successfully');
}


}
