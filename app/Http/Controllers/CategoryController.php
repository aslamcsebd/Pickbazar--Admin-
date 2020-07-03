<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\ProductImage;
use App\Product;
use App\ProductExtraFeatures;

use Image;
use Carbon\Carbon;

class CategoryController extends Controller{

// categories
   public function categories(){
      return view('admin.category');
   }

   public function physical_category(Request $request) {
    
      $request-> validate([
         'category_name'=> 'required|unique:categories,name',
         'description'=> 'required',
         'category_image'=> 'required'
      ]);

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
               'description'=>$request->description,
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

// sub_category
   public function category_sub(){

      $categories = Category::all();
      return view('admin/category-sub', compact('categories'));
   }

   public function physical_sub_category(Request $request) {
 
      $request-> validate([
         'category_id'=> 'required',
         'sub_category_name'=> 'required|unique:sub_categories,name',
         'sub_category_image'=> 'required'
      ]);

      if (SubCategory::where('name', $request->sub_category_name)->count() > 0) {
         return back()->with('fail', 'The Sub category name has already been taken.');         
      }else{

         if ($request->hasFile('sub_category_image')) {  //please link image upper... use Image;
            $image_upload=$request->sub_category_image;
            $fileName=$request->sub_category_name.".".$image_upload->getClientOriginalExtension();
            Image::make($image_upload)->resize(400,380)->save(base_path('public/sub_category_image/'.$fileName));  
               //Image quality   save(base_path('url'), 50);   this 50% image quality will be save

            SubCategory::insert([
               'category_id'=>$request->category_id,
               'name'=>$request->sub_category_name,
               'image'=>$fileName,
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
            ]);
         }else{
            return back()->with('fail','The Sub category image field is required.');
         }
      return back()->with('success','Insert successfully'); 
      }
   }

   public function product_list(){
      return view('admin.product-list');
   }
   public function product_detail(){
      return view('admin.product-detail');
   } 


// Add product
   public function add_product(){
      $categories = Category::all();      
      $subCategories = SubCategory::all();
      return view('admin/add-product', compact('categories','subCategories'));
   } 

   public function add_product_item(Request $request){
     
      // $request-> validate([
      //    'imageFile[]'=> 'required',
      //    'category_id'=> 'required',
      //    'sub_category_id'=> 'required',
      //    'title'=> 'required',
      //    'price'=> 'required',
      //    'product_code'=> 'required',
      //    'total_product'=> 'required',
      //    'slug'=> 'required',
      //    'isPublished'=> 'required',
      //    'description'=> 'required'
      // ]);

      $sub_category_id= $request->sub_category_id;
      $sub_category_name = SubCategory::find($sub_category_id)->name;
      $images = $request->file('imageFile');
      if ($request->hasFile('imageFile')){
            foreach ($images as $image) {
               $random = substr(sha1(mt_rand()),17,10);
               $imageName=$random.".".$image->getClientOriginalExtension();
               Image::make($image)->resize(400,380)->save(base_path('public/product_image/'.$imageName));

               // ProductImage::insert([
               //    'image'=>$imageName,
               //    'imageable_type'=>$sub_category_name,
               //    // 'imageable_id'=>$sub_category_id,
               //    // 'created_at'=>date('Y-m-d H:i:s'),
               //    // 'updated_at'=>date('Y-m-d H:i:s')
               // ]);
            }
      }else{
         return back()->with('fail','The Image field is required.');
      }

      // Product::insert([
      //    'sub_category_id'=>$sub_category_id,
      //    'title'=>$request->title,
      //    'price'=>$request->price,
      //    'product_code'=>$request->product_code,
      //    'total_product'=>$request->total_product,
      //    'slug'=>$request->slug,
      //    'discount'=>$request->discount,
      //    'isPublished'=>$request->isPublished,
      //    'description'=>$request->description
      // ]);


       ProductExtraFeatures::insert([
         'sub_category_id'=>$sub_category_id,
         'size'=>$request->size,
         'color'=>$request->color,
         'quantity'=>$request->quantity
      ]);

      $categories = Category::all();      
      $subCategories = SubCategory::all();
      return view('admin/add-product', compact('categories','subCategories'));

   }

}
