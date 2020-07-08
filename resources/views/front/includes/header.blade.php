<!DOCTYPE html>
<html lang="en">
   <head>
      <title>pickbazar</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
      <link rel="stylesheet" href="{{asset('assets2/css/fontawesome.css')}}">
      <link rel="stylesheet" href="{{asset('assets2/css/brands.css')}}">
      <link rel="stylesheet" href="{{asset('assets2/css/solid.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('assets2/css/responsive.css')}}">
   </head>
   <body class="text-dark">
      <div id="wraper">
         <nav class="navbar navbar-expand-md navbar-light p-lg-4 p-md-2 p-1 pt-5 pt-md-0 pt-lg-0 bg-light sticky-top">
            
            <div class="d-block d-md-block d-lg-none w-100 mbs">
               <div class="d-flex flex-wrap justify-content-between">
                  <div class="sbcli">
                     <button class="btn bg-light" id="sd"><i class="fas fa-bars"></i></button>
                  </div>
                  <div class="nav-brand">
                     <a href="#" class="navbar-brand font-weight-bold"><span class="text-dark">Pick</span> <span class="text-success"> Bazar</span></a>
                  </div>
                  <div class="ltn">
                     <a href="#" class="text-dgreen font-weight-bold btn bg-white">English</a>
                  </div>
                  <div class="sbtn">
                     <i class="fas fa-search"></i>
                  </div>
               </div>
               
            </div>
            <div class=" d-none d-md-none d-lg-block w-100">
               <div class="container-fluid  d-flex flex-wrap justify-content-between ">
                  <div class="nav-brand">
                     <a href="#" class="navbar-brand font-weight-bold"><span class="text-dark">Pick</span> <span class="text-success"> Bazar</span></a>
                  </div>
                  <div class="grp m-1">
                     <ul class="nav navbar-nav">
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle p-1 mb-1" data-toggle="dropdown">Grocery<span class="ml-2 glyphicon glyphicon-user pull-right"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">Messages</a></li>
                              <li><a href="#">Shirt</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <form>
                     <div class="input-group sb">
                        <div class="input-group-prepend">
                           <span class="input-group-text bg-light sbi pl-3"><i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control py-2 px-2 bg-light" placeholder="Search Your Products from here">
                     </div>
                  </form>
                  <div class="nav-items r8"><a href="#" class="text-dark">Offers</a></div>
                  <div class="nav-items r8"><a href="#" class="text-dark">Need help</a></div>
                  <div class="nav-items r8"><a href="#" class="text-dgreen font-weight-bold btn bg-white">English</a></div>
                  <div class="nav-items r8"><a href="#" class="text-dark btn bg-dgreen p-2 text-light" data-toggle="modal" data-target="#regModal">Join</a></div>
               </div>
            </div>
         </nav>
         @include('front.includes.sidebarl')
         @include('front.includes.sidebarr')