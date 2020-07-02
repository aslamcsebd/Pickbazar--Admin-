<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Image;
use Carbon\Carbon;

class CategoryController extends Controller{

   public function categories(){
      return view('admin.category');
   }

   public function physical_category(Request $request) {
    
      // $request-> validate([
      //    'category_name'=> 'required|unique:categories,name',
      //    'category_image'=> 'required'
      // ]);

      if (Category::where('name', $request->category_name)->count() > 0) {
         return back()->with('fail', 'The category name has already been taken.');         
      }else{

         if ($request->hasFile('category_image')) {  //please link image upper... use Image;
            $image_upload=$request->category_image;
            $fileName=$request->category_name.".".$image_upload->getClientOriginalExtension();
            Image::make($image_upload)->resize(400,380)->save(base_path('public/category_image/'.$fileName));  
               //Image quality   save(base_path('url'), 50);   this 50% image quality will be save

            Category::insert([
               'name'=>$request->category_name,
               'image'=>$fileName,
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
            ]);
         }else{
            return back()->with('fail','The category image field is required.');
         }
      return back()->with('success','Insert successfully');   
      }
   }

   




   public function category_sub(){
      return view('admin.category-sub');
   }
    public function product_list(){
      return view('admin.product-list');
   }
   public function product_detail(){
      return view('admin.product-detail');
   } 
   public function add_product(){
      return view('admin.add-product');
   }



}
