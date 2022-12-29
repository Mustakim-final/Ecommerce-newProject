<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function addcategorypage()
    {
        return view('Admin.Categoris.addcategoris');
    }

    public function addcategory(Request $request)
    {
        $request->validate([
            'category_name'=>'required'
        ]);

        $category=array();
        $category['category_name']=$request->category_name;
        $category['category_description']=$request->description;
        $category['status']=$request->status;

        DB::table('categories')->insert($category);

        return redirect()->back()->with('success','categoris insert');
    }

    public function showcategory()
    {
        $data=Category::all();
        return view('Admin.Categoris.show',compact('data'));
    }


    public function unactive(Request $request, $id)
    {

        DB::table('categories')->where('id',$id)->update(['status'=> 0]);

        return redirect()->back();
    }

    public function active($id)
    {
        // $category=Categori::find($id);
        // $category->update([
        //     'status'=>0
        // ]);

        DB::table('categories')->where('id',$id)->update(['status'=> 1]);

        return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        return redirect()->back();
    }
}
