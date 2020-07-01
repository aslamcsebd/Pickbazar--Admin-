<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Admin_Controller extends Controller
{
   public function category(){
      return view('admin/category');
   }
   
   public function category_sub(){
      return view('admin/category-sub');
   }

   public function product_list(){
      return view('admin/product-list');
   }

   public function product_detail(){
      return view('admin/product-detail');
   }

   public function add_product(){
      return view('admin/add-product');
   }

   public function category_digital(){
      return view('admin/category-digital');
   }

   public function category_digitalsub(){
      return view('admin/category-digitalsub');
   }

   public function product_listdigital(){
      return view('admin/product-listdigital');
   }
    

   public function add_digital_product(){
      return view('admin/add-digital-product');
   }

   public function order(){
      return view('admin/order');
   }

   public function transactions(){
      return view('admin/transactions');
   }

   public function coupon_list(){
      return view('admin/coupon-list');
   }
   public function coupon_create(){
      return view('admin/coupon-create');
   }
   
   public function pages_list(){
      return view('admin/pages-list');
   }

   public function page_create(){
      return view('admin/page-create');
   }
   public function media(){
      return view('admin/media');
   }

   public function menu_list(){
      return view('admin/menu-list');
   }

   public function create_menu(){
      return view('admin/create-menu');
   }
   public function user_list(){
      return view('admin/user-list');
   }

   public function create_user(){
      return view('admin/create-user');
   }

   public function list_vendor(){
      return view('admin/list-vendor');
   }
   public function create_vendors(){
      return view('admin/create-vendors');
   }

   public function translations(){
      return view('admin/translations');
   }

   public function currency_rates(){
      return view('admin/currency-rates');
   }

 
   public function taxes(){
      return view('admin/taxes');
   }

   public function reports(){
      return view('admin/reports');
   }

 
   public function profile(){
      return view('admin/profile');
   }

   public function invoice(){
      return view('admin/invoice');
   }

 
   public function login(){
      return view('admin/login');
   }

   // public function (){
   //    return view('admin/');
   // }

 




























}