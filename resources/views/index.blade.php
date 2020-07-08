<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
      @include('includes.head')
      <style type="text/css">
         .center { 
            text-align: center;
            margin-top: 200px;
         }
      </style>
   </head>

   <body>
      
      <section class="landing-home-main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 p-0">
                  <div class="landing-home">
                     <div class="landing-contain">
                        
                        <div class="center">
                           <a href="{{ url('front') }}" class="btn-rounded mr-3">front-end</a>
                           <a href="{{ url('index') }}" class="btn-rounded btn-black mr-3">
                           back-end</a>
                           <br>
                           <br>
                           <h4>This page will be delete</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

   </body>
</html>
