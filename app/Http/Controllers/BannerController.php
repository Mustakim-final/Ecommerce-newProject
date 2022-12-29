<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function sliderpage()
    {
        $category=DB::table('categories')->where('status',1)->get();
        return view('Admin.Banner.add',compact('category'));
    }

    public function slideradd(Request $request)
    {

        //dd($request->all());

        $data = array();
        $data['title']=$request->title;
        $data['category_id']=$request->category_id;
        $data['status'] = $request->slider_status;
        $image = $request->file('banner_image');
        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['banner_image'] = $image_url;
                DB::table('banners')->insert($data);
                return redirect()->back()->with('success', 'slider insert with image');
            }
        }
        DB::table('banners')->insert($data);
        return redirect()->back()->with('success', 'slider insert with out image');
    }

    public function slidershow()
    {
        $data=DB::table('banners')->get();
        return view('Admin.Banner.banner',compact('data'));
    }

    public function unactive($id)
    {
        DB::table('banners')->where('id',$id)->update(['status'=> 0]);
        return redirect()->back();
    }

    public function active($id)
    {
        DB::table('banners')->where('id',$id)->update(['status'=> 1]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data=Banner::find($id);
        File::delete($data->banner_image);
        $data->delete();
        return redirect()->back();
    }
}
