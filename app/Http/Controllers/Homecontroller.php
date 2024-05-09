<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\user;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function Index(){

        return view('Admin.index');
    }

    // Home

    public function Home(){

         $product = Product::all();

         if(Auth::id()){

            $user = Auth::user();

            $userid = $user->id;

            $count = Cart:: where('user_id',$userid)->count();
        }

        else{

            $count ='';
        }

        return view('Home.index',compact('product','count'));
    }

    // home login


    public function home_login(){

        $product = Product::all();

        if(Auth::id()){

            $user = Auth::user();

            $userid = $user->id;

            $count = Cart:: where('user_id',$userid)->count();
        }

        else{

            $count ='';
        }


        return view('Home.index',compact('product','count'));

        }

       

    

    // product details

    
    public function product_details($id){

        $data = Product::find($id);

        if(Auth::id()){

            $user = Auth::user();

            $userid = $user->id;

            $count = Cart:: where('user_id',$userid)->count();
        }

        else{

            $count ='';
        }

        return view('Home.product_details',compact('data','count'));

    }

    // Add Cart

    public function add_cart($id){

        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id = $user_id;
        $data->product_id = $product_id;

        toastr()
        ->persistent()
        ->closeButton()
        ->addSuccess('Your Add_Cart has been success.');

        $data->save();

        return redirect()->back();


    } // mycart


    public function mycart(){


        if(Auth::id()){

            $user = Auth::user();

            $userid = $user->id;

            $count = Cart:: where('user_id',$userid)->count();
            $cart = Cart:: where('user_id',$userid)->get();
        }

   

        return view('Home.mycart',compact('count','cart'));

    }

    // Remove mycart

    public function Delete_mycart($id){



      
            $cart =Cart::Find($id);


            $cart->delete();


            toastr()
            ->persistent()
            ->closeButton()
            ->addSuccess('Your mycart has been delete success.');
            
            return redirect()->back();
                

        
       


      


    }



    }

