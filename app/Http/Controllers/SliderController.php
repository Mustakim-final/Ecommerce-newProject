<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function sliderpage()
    {
        return view('Admin.Slider.add');
    }

    public function slideradd(Request $request)
    {
        $data = array();
        $data['title']=$request->title;
        $data['discount']=$request->discount;
        $data['status'] = $request->slider_status;
        $image = $request->file('slider_image');
        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['slider_image'] = $image_url;
                DB::table('sliders')->insert($data);
                return redirect()->back()->with('success', 'slider insert with image');
            }
        }
        DB::table('sliders')->insert($data);
        return redirect()->back()->with('success', 'slider insert with out image');
    }

    public function slidershow()
    {
        $data=DB::table('sliders')->get();
        return view('Admin.Slider.show',compact('data'));
    }

    public function unactive($id)
    {
        DB::table('sliders')->where('id',$id)->update(['status'=> 0]);
        return redirect()->back();
    }

    public function active($id)
    {
        DB::table('sliders')->where('id',$id)->update(['status'=> 1]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $data=Slider::find($id);
        File::delete($data->slider_image);
        $data->delete();
        return redirect()->back();
    }
}
