<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
      @include('includes.head')
   </head>

   <body>
      
      <div class="page-wrapper">
         
         @include('includes.header')

         <div class="page-body-wrapper">

            @include('includes.left-sidebar')

            @include('includes.right-sidebar')

            @yield('content')

            @include('includes.footer')

         </div>
         
      </div>
      
   </body>
</html>