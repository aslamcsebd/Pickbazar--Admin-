<!-- footer start-->
<footer class="footer">
<div class="container-fluid">
   <div class="row">
      <div class="col-md-6 footer-copyright">
         <p class="mb-0">Copyright 2019 © Bigdeal All rights reserved.</p>
      </div>
      <div class="col-md-6">
         <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
      </div>
   </div>
</div>
</footer>
<!-- footer end-->


{{-- All js --}}

   {{-- <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="{{ asset('js/jquery.min.js') }}" defer></script>
   <script src="{{ asset('js/bootstrap.js') }}" defer></script> --}}

<!-- Google chart js-->
<script src="{{ asset('assets/js/chart/google/google-chart-loader.js') }}"></script>

<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

<!--chartist js-->
<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>


<!-- lazyload js-->
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

<!--copycode js-->
<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>

<!--counter js-->
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>


<!--Customizer admin-->
<script src="{{ asset('assets/js/admin-customizer.js') }}"></script>

<!--map js-->
<script src="{{ asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>

<!--apex chart js-->
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>

<!--chartjs js-->
<script src="{{ asset('assets/js/chart/flot-chart/excanvas.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.pie.js') }}"></script>

<!--dashboard custom js-->
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>

<!-- Touchspin Js-->
<script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>

<!-- Rating Js-->
<script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>

<!-- Owlcarousel js-->
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/product-carousel.js') }}"></script>

<!-- Datatable js-->
<script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/custom-basic.js') }}"></script>

<!-- Jsgrid js-->
<script src="{{ asset('assets/js/jsgrid/jsgrid.min.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/griddata-manage-product.js') }}"></script>
<script src="{{ asset('assets/js/jsgrid/jsgrid-manage-product.js') }}"></script>

<!--Datepicker jquery-->
<script src="{{ asset('assets/js/datepicker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/datepicker/datepicker.custom.js') }}"></script>


<!--right sidebar js-->
<script src="{{ asset('assets/js/chat-menu.js') }}"></script>

<!--height equal js-->
<script src="{{ asset('assets/js/equal-height.js') }}"></script>


<!-- form validation js-->
<script src="{{ asset('assets/js/dashboard/form-validation-custom.js') }}"></script>

<!--dropzone js-->
<script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>

<!-- ckeditor js-->
<script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}"></script>
<script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>

<!-- Zoom js-->
<script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('assets/js/zoom-scripts.js') }}"></script>

<!--script admin-->
<script src="{{ asset('assets/js/admin-script.js') }}"></script>


{{-- For reports page --}}

<!-- Chartjs -->
<script src="{{ asset('assets/js/chart/chartjs/chart.min.js') }}"></script>


<!--Report chart-->
<script src="{{ asset('assets/js/admin-reports.js') }}"></script>


 <script type="text/javascript">
      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 5000);
   </script>

   <script type="text/javascript">
      $(".alert").each(function(){
        var txt =  $(this).text().replace(/\s+/g,' ').trim() ;
        $(this).text(txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase());
      });
   </script>











