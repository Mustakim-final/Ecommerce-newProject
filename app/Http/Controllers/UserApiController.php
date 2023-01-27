<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    public function reg(Request $request)
    {
        if($request->isMethod('POST')){
            $data=$request->all();

            $validate=[
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|max:8'
            ];

            $custommessage=[
                'name.required'=>'Name is required',
                'email.required'=>'Email is required',
                'password.required'=>'Password is required',
            ];

            $validator=Validator::make($data,$validate,$custommessage);

            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }

            $user=new User();
            $user->name=$data['name'];
            $user->email=$data['email'];
            $user->password=bcrypt($data['password']);

            $user->save();

            $message="Regestration Successfully";

            return response()->json(['message'=>$message],201);

        }
    }

    public function multipulereg(Request $request)
    {
        if($request->isMethod('POSt')){
            $data=$request->all();

            $validate=[
                'users.*.name'=>'required',
                'users.*.email'=>'required|email',
                'users.*.password'=>'required|max:8',
            ];

            $custommessage=[
                'users.*.name'=>'Name is Required',
                'users.*.email'=>'Email is Required',
                'users.*.password'=>'Password is Required',
            ];

            $validator=Validator::make($data,$validate,$custommessage);

            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }

            foreach($data['users'] as $addusers){
                $user=new User();
                $user->name=$addusers['name'];
                $user->email=$addusers['email'];
                $user->password=bcrypt($addusers['password']);
                $user->save();

                $message="Regestration Successfully";
            }

            return response()->json(['message'=>$message],201);
        }
    }


    public function singleuser($id)
    {
        if($id==''){
            $user=User::all();
            return response()->json(['users'=>$user],200);
        }else{
            $user=User::find($id);
            return response()->json(['users'=>$user],200);
        }
    }

    public function multipleuser()
    {
        $users=User::all();
        return response()->json(['message'=>$users],201);
    }
}
