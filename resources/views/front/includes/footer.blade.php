</div>
<!--Wraper--->
@include('front.includes.log-modal')
<button class="btn btn-lg bg-dgreen cbtn text-white d-none d-md-none d-lg-block cartop" id="cartop"><span class="citems p-1">5</span> items <br><br> <span class="c-price bg-white text-dgreen p-1">20.70$</span></button>
<div class="mscbtn w-100 text-center d-block d-md-block d-lg-none">
<button class="mbs cbtn w-100 mx-2 bg-dgreen p-2 mx-2 cartop" id="cartop">
    <span class="float-left text-white"><span class="citems p-1">5</span> items</span>
    <span class="float-right"><span class="c-price bg-white text-dgreen p-1 mr-1">20.70$</span></span>
</button>
</div>
   <!--js link aria goes here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-4-autocomplete/dist/bootstrap-4-autocomplete.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('assets2/js/app.js') }}"></script>
</body>
</html>