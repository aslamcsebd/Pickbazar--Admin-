@extends('front.layouts.app')
@section('main-body')
   <div class="main-body">
      
      <div class="top-banner">
         <img src="{{asset('assets2/img/tbanner.png')}}" alt="" class="img-fluid t-benner">
         <div class="ban-up text-center d-none d-md-none d-lg-block">
            <h1 class="text-dark">Bussiness Arround You</h1>
            <form>
               <div class="input-group ban-s mt-3 mx-auto input-group-lg">
                  
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                     <span class="input-group-text"><i class="fas fa-search mr-2"></i> Search</span>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="py-3 catcarousel d-block d-md-block d-lg-none">
         <div class="container-fluids py-2">
            <div class="owl-carousel owl-theme owl-carousel-0">
               <div class="item">
                  <h5 class="font-weight-bold text-dgreen">Groceries</h5>
               </div>
               <div class="item">
                  <h5 class="font-weight-bold text-dgreen">Groceries</h5>
               </div>
               <div class="item">
                  <h5 class="font-weight-bold text-dgreen">Groceries</h5>
               </div>
               <div class="item">
                  <h5 class="font-weight-bold text-dgreen">Groceries</h5>
               </div>
               <div class="item">
                  <h5 class="font-weight-bold text-dgreen">Groceries</h5>
               </div>
               <div class="item">
                  <h5 class="font-weight-bold text-dgreen">Groceries</h5>
               </div>
            </div>
         </div>
         <div class="categories-msc py-2">
            <div class="dropdown">
               <button type="button" class="btn btn-light btn-block  dropdown-toggle" data-toggle="dropdown">
               <i class="fas fa-box mr-2"></i>Select Categories
               </button>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Link 1</a>
                  <a class="dropdown-item" href="#">Link 2</a>
                  <a class="dropdown-item" href="#">Link 3</a>
               </div>
            </div>
         </div>
      </div>
      <div class="h-carousel-sec p-4">
         <div class="container-fluid">
            <div class="owl-carousel owl-theme owl-carousel-1">
               <div class="item"><img src="{{asset('assets2/img/cpic.png')}}" alt="" class="img-fluid img1c"></div>
               <div class="item"><img src="{{asset('assets2/img/cpic.png')}}" alt="" class="img-fluid img1c"></div>
               <div class="item"><img src="{{asset('assets2/img/cpic.png')}}" alt="" class="img-fluid img1c"></div>
               <div class="item"><img src="{{asset('assets2/img/cpic.png')}}" alt="" class="img-fluid img1c"></div>
               <div class="item"><img src="{{asset('assets2/img/cpic.png')}}" alt="" class="img-fluid img1c"></div>
               <div class="item"><img src="{{asset('assets2/img/cpic.png')}}" alt="" class="img-fluid img1c"></div>
            </div>
            
         </div>
      </div>
      <div class="content-body-section">
         <div class="row">
            <div class="col-lg-3 d-none d-md-none d-lg-block bg-white pr-5">
               <nav id="sidebarl">
                  
                  
                  <ul class="list-unstyled components pl-3">
                     <li class="">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggles">Fruits and Vegetables</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                           <li>
                              <a href="#">- fruits 1</a>
                           </li>
                           <li>
                              <a href="#">- fruits 2</a>
                           </li>
                           <li>
                              <a href="#">- fruits 3</a>
                           </li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggles">Meets</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                           <li>
                              <a href="#">- fruits 1</a>
                           </li>
                           <li>
                              <a href="#">- fruits 2</a>
                           </li>
                           <li>
                              <a href="#">- fruits 3</a>
                           </li>
                        </ul>
                     </li>
                     
                  </ul>
               </nav>
            </div>
            <div class="col-lg-9 col-md-12 col-12 bg-light px-0">
               <div class="products-area p-3 ">
                  @include('front.includes.product-card-box')
                  @include('front.includes.product-card-box')
                  @include('front.includes.product-card-box')
                  @include('front.includes.product-card-box')
                  @include('front.includes.product-card-box')
                  @include('front.includes.product-card-box')
                  @include('front.includes.product-card-box')
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection