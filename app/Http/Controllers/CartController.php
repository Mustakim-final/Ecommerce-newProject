<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{
    public function addcart(Request $request,$id)
    {

        if(Auth::guest()){
            return redirect()->back()->with('success','Please login fast');
        }else{
            $users=Auth::user()->id;
            $product=DB::table('products')->where('products.id',$id)->first();
            $cart=DB::table('carts')->where('product_id',$id)->first();




            $cart1=DB::table('carts')->where('users',$users)->sum('total');
            $subtotaltb=DB::table('sub_totals')->where('users',$users)->first();

            $item=$request->qty;
            $price=$product->product_price;
            $multiplication=$item*$price;

            if($subtotaltb && $subtotaltb->users==$users){
                $value=array();
                $value['subtotal']=$cart1+$multiplication;
                DB::table('sub_totals')->where('users',$users)->update($value);
            }else{
                $value=array();
                $value['users']=$users;
                $value['subtotal']=$cart1+$multiplication;
                DB::table('sub_totals')->insert($value);
            }



            if($cart && $users==$cart->users){

                $number=$cart->qty;
                $number1= 0+$number;
                $item=$request->qty;
                $res=$number1+$item;

                $tk=$cart->qty+$item=$request->qty;;
                $tk1=$cart->product_price;
                $total=$tk*$tk1;

                $data=array();
                $data['qty']=$res;
                $data['product_id']=$product->id;
                $data['users']=Auth::user()->id;
                $data['product_name']=$product->product_name;
                $data['product_price']=$product->product_price;
                $data['total']=$total;

                $data['product_image']=$product->product_image;


                DB::table('carts')->where('product_id',$id)->update($data);

            }else{
                $item=$request->qty;
                    $price=$product->product_price;
                    $multi=$item*$price;



                    $data=array();
                    $data['qty']=$request->qty;
                    $data['product_id']=$product->id;
                    $data['users']=Auth::user()->id;
                    $data['product_name']=$product->product_name;
                    $data['product_price']=$product->product_price;
                    $data['total']=$multi;

                    $data['product_image']=$product->product_image;
                    DB::table('carts')->insert($data);
            }
            return redirect()->route('chart.new');
        }
    }

    public function newchart()
    {

        $slider=DB::table('sliders')->where('status',1)->get();
        $product=DB::table('products')->where('publication_status',1)->get();
        $category=DB::table('categories')->where('status',1)->get();
        $user=Auth::user()->id;
        $cart=DB::table('carts')->where('users',$user)->get();
        $subtotal=DB::table('sub_totals')->where('users',$user)->get();
        $banner=DB::table('banners')
                      ->join('categories','banners.category_id','categories.id')
                      ->select('categories.category_name','banners.*')
                      ->get();
        return view('layouts.User.cart',compact('slider','product','category','cart','subtotal','banner'));
    }

    public function delete($id)
    {
        $cart=Cart::find($id);


        $users=Auth::user()->id;
        $cart1=DB::table('carts')->where('id',$id)->first();
        $subtotaltb=DB::table('sub_totals')->where('users',$users)->first();
        $num1=$subtotaltb->subtotal;
        $num2=$cart1->total;

        $res=$num1-$num2;

        if($subtotaltb){
            $value=array();
            $value['users']=$users;
            $value['subtotal']=$res;
            DB::table('sub_totals')->update($value);
            $cart->delete();
        }

        return redirect()->back();
    }


    public function showpayment()
    {
        return view('Payment.exampleEasycheckout');
    }
}
