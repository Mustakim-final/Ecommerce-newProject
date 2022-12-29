<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function homepage()
    {
        $slider=DB::table('sliders')->where('status',1)->get();
        $category=DB::table('categories')->where('status',1)->get();
        $product=DB::table('products')
                      ->join('categories','products.category_id','categories.id')
                      ->join('manufactures','products.manufacture_id','manufactures.id')
                      ->select('categories.category_name','manufactures.manufacture_name','products.*')
                      ->get();


        $banner=DB::table('banners')
                      ->join('categories','banners.category_id','categories.id')
                      ->select('categories.category_name','banners.*')
                      ->get();

        //$banner=DB::table('banners')->get();

        return view('layouts.User.featurearea',compact('slider','category','product','banner'));

    }


    public function categorybypage($id)
    {
        $slider=DB::table('sliders')->where('status',1)->get();
        $product=DB::table('products')->where('category_id',$id)->get();
        $category=DB::table('categories')->where('status',1)->get();
        $banner=DB::table('banners')
                      ->join('categories','banners.category_id','categories.id')
                      ->select('categories.category_name','banners.*')
                      ->get();
        return view('layouts.User.uniqcategory',compact('slider','category','product','banner'));

    }


    public function brandby($id)
    {
        $slider=DB::table('sliders')->where('status',1)->get();
        $product=DB::table('products')->where('manufacture_id',$id)->get();
        $category=DB::table('categories')->where('status',1)->get();

        $banner=DB::table('banners')
                      ->join('categories','banners.category_id','categories.id')
                      ->select('categories.category_name','banners.*')
                      ->get();

        return view('layouts.User.productareastart',compact('slider','category','product','banner'));


    }


    public function viewproduct($id)
    {
        $slider=DB::table('sliders')->where('status',1)->get();
        $product=DB::table('products')->where('id',$id)->get();
        $category=DB::table('categories')->where('status',1)->get();
        $banner=DB::table('banners')
                      ->join('categories','banners.category_id','categories.id')
                      ->select('categories.category_name','banners.*')
                      ->get();
        return view('layouts.User.productdetails',compact('slider','category','product','banner'));
    }
}
