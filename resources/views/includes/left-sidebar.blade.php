<!-- Page Sidebar Start-->
<div class="page-sidebar">
   <div class="sidebar custom-scrollbar">
      <div class="sidebar-user text-center">
         <div>
            <img class="img-60 rounded-circle lazyloaded blur-up" src="{{ asset('assets/images/dashboard/man.png') }}" alt="#">
         </div>
         <h6 class="mt-3 f-14">JOHN</h6>
         <p>Ux Designer</p>
      </div>
      <ul class="sidebar-menu">
         <li>
            <a class="sidebar-header" href="/">
               <i data-feather="home"></i><span>Dashboard</span>
            </a>
         </li>
         <li>
            <a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i>
         </a>
         <ul class="sidebar-submenu">
            <li>
               <a href="#"><i class="fa fa-circle"></i>
                  <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="sidebar-submenu">
                  <li><a href="{{ url('categories') }}"><i class="fa fa-circle"></i>Category</a></li>
                  <li><a href="{{ url('category-sub') }}"><i class="fa fa-circle"></i>Sub Category</a></li>
                  <li><a href="{{ url('product-list') }}"><i class="fa fa-circle"></i>Product List</a></li>
                  <li><a href="{{ url('product-detail') }}"><i class="fa fa-circle"></i>Product Detail</a></li>
                  <li><a href="{{ url('add-product') }}"><i class="fa fa-circle"></i>Add Product</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><i class="fa fa-circle"></i>
                  <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="sidebar-submenu">
                  <li><a href="{{ url('category-digital') }}"><i class="fa fa-circle"></i>Category</a></li>
                  <li><a href="{{ url('category-digitalsub') }}"><i class="fa fa-circle"></i>Sub Category</a></li>
                  <li><a href="{{ url('product-listdigital') }}"><i class="fa fa-circle"></i>Product List</a></li>
                  <li><a href="{{ url('add-digital-product') }}"><i class="fa fa-circle"></i>Add Product</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
      <ul class="sidebar-submenu">
         <li><a href="{{ url('order') }}"><i class="fa fa-circle"></i>Orders</a></li>
         <li><a href="{{ url('transactions') }}"><i class="fa fa-circle"></i>Transactions</a></li>
      </ul>
   </li>
   <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
   <ul class="sidebar-submenu">
      <li><a href="{{ url('coupon-list') }}"><i class="fa fa-circle"></i>List Coupons</a></li>
      <li><a href="{{ url('coupon-create') }}"><i class="fa fa-circle"></i>Create Coupons </a></li>
   </ul>
</li>
<li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
<ul class="sidebar-submenu">
   <li><a href="{{ url('pages-list') }}"><i class="fa fa-circle"></i>List Page</a></li>
   <li><a href="{{ url('page-create') }}"><i class="fa fa-circle"></i>Create Page</a></li>
</ul>
</li>
<li><a class="sidebar-header" href="{{ url('media') }}"><i data-feather="camera"></i><span>Media</span></a></li>
<li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
<ul class="sidebar-submenu">
<li><a href="{{ url('menu-list') }}"><i class="fa fa-circle"></i>Menu Lists</a></li>
<li><a href="{{ url('create-menu') }}"><i class="fa fa-circle"></i>Create Menu</a></li>
</ul>
</li>
<li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
<ul class="sidebar-submenu">
<li><a href="{{ url('user-list') }}"><i class="fa fa-circle"></i>User List</a></li>
<li><a href="{{ url('create-user') }}"><i class="fa fa-circle"></i>Create User</a></li>
</ul>
</li>
<li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
<ul class="sidebar-submenu">
<li><a href="{{ url('list-vendor') }}"><i class="fa fa-circle"></i>Vendor List</a></li>
<li><a href="{{ url('create-vendors') }}"><i class="fa fa-circle"></i>Create Vendor</a></li>
</ul>
</li>
<li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
<ul class="sidebar-submenu">
<li><a href="{{ url('translations') }}"><i class="fa fa-circle"></i>Translations</a></li>
<li><a href="{{ url('currency-rates') }}"><i class="fa fa-circle"></i>Currency Rates</a></li>
<li><a href="{{ url('taxes') }}"><i class="fa fa-circle"></i>Taxes</a></li>
</ul>
</li>
<li><a class="sidebar-header" href="{{ url('reports') }}"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
<li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
<ul class="sidebar-submenu">
<li><a href="{{ url('profile') }}"><i class="fa fa-circle"></i>Profile</a></li>
</ul>
</li>
<li><a class="sidebar-header" href="{{ url('invoice') }}"><i data-feather="archive"></i><span>Invoice</span></a>
</li>
<li><a class="sidebar-header" href="{{ url('login') }}"><i data-feather="log-in"></i><span>Login</span></a>
</li>
</ul>
</div>
</div>
<!-- Page Sidebar Ends-->