<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function addpage()
    {

        $category=DB::table('categories')->where('status',1)->get();
        $manufacture=DB::table('manufactures')->where('manufacture_status',1)->get();
        return view('Admin.Product.add',compact('category','manufacture'));
    }

    public function upload(Request $request)
    {

        $request->validate([
            'category_id'=> 'required',
            'manufacture_id' => 'required',
        ]);

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['manufacture_id'] = $request->manufacture_id;
        $data['product_short_description'] = $request->description_short;
        $data['product_long_description'] = $request->description_long;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['publication_status'] = $request->product_status;

        $image = $request->file('product_image');

        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                DB::table('products')->insert($data);

                return redirect()->back()->with('success', "post insert");
            }
        }
        $data['product_image'] = '';
        DB::table('products')->insert($data);
        return redirect()->back()->with('success', "post insert without image");
    }
    //
    public function showData()
    {
        $data=DB::table('products')
                    ->leftJoin('categories','products.category_id','categories.id')
                    ->join('manufactures','products.manufacture_id','manufactures.id')
                    ->select('categories.category_name','manufactures.manufacture_name','products.*')
                    ->get();


        return view('Admin.Product.show',compact('data'));
    }

    public function unactive($id)
    {
        DB::table('products')->where('id',$id)->update(['publication_status'=> 0]);
        return redirect()->back();
    }

    public function active($id)
    {
        DB::table('products')->where('id',$id)->update(['publication_status'=> 1]);
        return redirect()->back();
    }

    public function updatePage($id)
    {
        $data=DB::table('products')
                    ->where('id',$id)
                    ->first();
        $category=DB::table('categories')->where('status',1)->get();
        $manufacture=DB::table('manufactures')->where('manufacture_status',1)->get();




        return view('Admin.Product.eidt',compact('data','category','manufacture'));
    }

    public function edit(Request $request,$id)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['manufacture_id'] = $request->manufacture_id;
        $data['product_short_description'] = $request->description_short;
        $data['product_long_description'] = $request->description_long;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['publication_status'] = $request->product_status;

        $image = $request->file('product_image');

        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                DB::table('products')->where('id',$id)->update($data);
                return redirect()->back()->with('success', "post insert");
            }
        }
        DB::table('products')->where('id',$id)->update($data);
        return redirect()->route('product.show');
    }

    public function delete($id)
    {
        
        $data=Product::find($id);
        File::delete($data->product_image);
        $data->delete();

        return redirect()->back()->with('success','data delete');
    }
}
