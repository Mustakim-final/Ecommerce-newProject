<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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

    public function adminpage()
    {
        return view('Admin.home');
    }
}
