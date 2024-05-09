<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admincontroller extends Controller
{
    public function Catagory(){

        $data= Category::all();

        return view('Admin.catagory',compact('data'));
    }

    // Add catagory ba Insert

    public function Add_category(Request $request){

        $obj = new Category();

        $obj->category_name = $request->category;

        $obj->save();

        toastr()
        ->persistent()
        ->closeButton()
        ->addSuccess('Your category has been success.');

        return redirect()->back();

    }  // delete category

        public function Delete_category($id){

           // $data = DB::table('categories')->where('id',$id)->delete();

            $data =Category::Find($id);
           $data->delete();
            
            return redirect()->back();
        }

        // Edite category

        public function edite_category($id){

            $data =Category::Find($id);

            return view('Admin.edite',compact('data'));
        }

        // Update category

        public function updata_category(Request $request ,$id){

            $data =Category::Find($id);

            $data->category_name = $request->category;

            $data->save();

            return redirect('/catagory');
    

        }   // Add Product


        public function add_product(){

            $category = Category::all();

            return view('Admin.add_product',compact('category'));
        }

        // uplode product

        public function uplode_product(Request $request){

            $data = new Product();
            
            $data->title=$request->title;
            $data->description=$request->description;
            $data->price=$request->price;
            $data->quantity=$request->quantity;
            $data->category=$request->category;


            $image = $request->image;

            if($image){

                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('products',$imagename);
            }




            $data->image=$imagename;

            $data->save();

            return redirect()->back();
        }

        // view product

        public function view_product(){

            //$product = Product::all();
            $product = Product::paginate(3);

            return view('Admin.view_product',compact('product'));
        }

        // delete product

        public function Delete_product($id){

            
            $data =Product::Find($id);

            $image_path = public_path('products/'.$data->image);
            if(file_exists($image_path)){

                unlink($image_path);
            }


           $data->delete();
            
            return redirect()->back();
        }

        // edite product

        public function edite_product($id){

            
            $data =Product::Find($id);

            return view('Admin.edite_product',compact('data'));


        }  

        // update product

        public function update_product(Request $request,$id){

            $data =Product::Find($id);

            $data->title=$request->title;
            $data->description=$request->description;
            $data->price=$request->price;
            $data->quantity=$request->quantity;
            $data->category=$request->category;


            $image = $request->image;

            if($image){

                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('products',$imagename);
            }




            $data->image=$imagename;



            $data->save();

            return redirect('/view_product');



        } // search bar


            public function search_product(Request $request){

                $search = $request->search;

                $product = Product::where('title','LIKE','%'.$search.'%')->paginate(2);

                return view('Admin.view_product',compact('product'));


            }

        }

