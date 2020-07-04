<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SiteImage;
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
    
      $validated = $request->validate([
         'name'=> 'required|unique:categories,name',
         'description'=> 'nullable|string',
         'category_image'=> 'nullable|image|mimes:jpeg,jpg,png'
      ]);

      $category = Category::create($validated);
         // dd($category);
         if ($request->hasFile('category_image')) {  //please link image upper... use Image;
            $image_upload=$request->category_image;
            $fileName= $request->name.".".$image_upload->getClientOriginalExtension();
            Image::make($image_upload)->resize(400,380)->save(base_path('public/category_image/'.$fileName));  
               //Image quality   save(base_path('url'), 50);   this 50% image quality will be save
               
               $image = new SiteImage;
               $image->image = $fileName;
            $category->image()->save($image);
         }
      return back()->with('success','Insert successfully');   
      
   }

// sub_category
   public function category_sub(){

      $categories = Category::all();
      return view('admin/category-sub', compact('categories'));
   }

   public function physical_sub_category(Request $request) {
 
      $validated = $request-> validate([
         'category_id'=> 'required',
         'name'=> 'required|string',
         'sub_category_image'=> 'nullable|image|mimes:mimes:jpeg,jpg,png'
      ]);

      
      $subCategories = SubCategory::create($validated);
      if ($request->hasFile('sub_category_image')) {  //please link image upper... use Image;
         $image_upload=$request->sub_category_image;
         $fileName=$request->name.".".$image_upload->getClientOriginalExtension();
         Image::make($image_upload)->resize(400,380)->save(base_path('public/sub_category_image/'.$fileName));  
            //Image quality   save(base_path('url'), 50);   this 50% image quality will be save
         $image = new SiteImage;
         $image->image = $fileName;
         $subCategories->image()->save($image);
      }
   return back()->with('success','Insert successfully'); 
      
   }

   public function product_list(){
      return view('admin.product-list');
   }
   public function product_detail(){
      return view('admin.product-detail');
   } 


// Add product
   public function add_product(){
      $subCategories = SubCategory::all();
      return view('admin/add-product', compact('subCategories'));
   } 

   public function add_product_item(Request $request){
   //   dd($request->all());
      $validated = $request-> validate([
         'imageFile'=> 'required',
         'imageFile.*'=> 'image|mimes:jpeg,jpg,png',
         // 'category_id'=> 'required',
         'sub_category_id'=> 'required',
         'title'=> 'required',
         'price'=> 'required',
         'product_code'=> 'required',
         'total_product'=> 'nullable',
         'slug'=> 'required',
         'isPublished'=> 'required',
         'description'=> 'required'
      ]);
         // dd($validated);
      $product = Product::create($validated);
      $images = $request->file('imageFile');
      if ($request->hasFile('imageFile')){
            foreach ($images as $image) {
               $random = substr(sha1(mt_rand()),17,10);
               $imageName = $random.".".$image->getClientOriginalExtension();
               Image::make($image)->resize(400,380)->save(base_path('public/product_image/'.$imageName));

               $image = new SiteImage();
               $image->image = $imageName;

               $product->images()->save($image);
            }
      }

       if (is_array($request->size)) {
         for($i = 0; $i <= count($request->size) - 1; $i++){
            ProductExtraFeatures::create([
               'product_id' => $product->id,
               'size' => $request->size[$i],
               'color' => $request->color[$i],
               'quantity' => $request->quantity[$i],
            ]);
         }
       }
      

      $categories = Category::all();      
      $subCategories = SubCategory::all();
      return view('admin/add-product', compact('categories','subCategories'));

   }

}
