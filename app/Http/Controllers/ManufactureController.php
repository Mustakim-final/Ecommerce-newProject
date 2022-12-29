<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function addmanufacture()
    {
        return view('Admin.Manufacture.add');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'manufacture_name'=>'required'
        ]);

        $manufacture=array();
        $manufacture['manufacture_name']=$request->manufacture_name;
        $manufacture['manufacture_description']=$request->manufacture_description;
        $manufacture['manufacture_status']=$request->manufacture_status;

        DB::table('manufactures')->insert($manufacture);

        return redirect()->back()->with('success','manufacture insert');
    }

    public function index ()
    {
        $manufacture=DB::table('manufactures')->get();

        return view('Admin.Manufacture.show',compact('manufacture'));
    }

    public function unactive($id)
    {
        DB::table('manufactures')->where('id',$id)->update(['manufacture_status'=> 0]);
        return redirect()->back();
    }

    public function active($id)
    {
        DB::table('manufactures')->where('id',$id)->update(['manufacture_status'=> 1]);
        return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('manufactures')->where('id',$id)->delete();
        return redirect()->back();
    }
}
