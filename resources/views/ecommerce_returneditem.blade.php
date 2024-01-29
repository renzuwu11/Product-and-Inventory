<!DOCTYPE html>
<html>

<!-- Start: Theme  -->
@include('theme')
<!-- End: Theme  -->

<body class="ecom-products-page">

<!-- Start: Main -->
<div id="main">

<!-- Start: Header -->
<header class="navbar navbar-fixed-top bg-dark">
  <div class="navbar-branding">
    <a class="navbar-brand" href="{{url('/ecommerce_dashboard')}}">          
      <img class="upperlogo" src="assets/img/logos/comet_al one.png" alt="COMET.AL">
      <b class="titlecometal">COMET</b>.al
    </a>
    <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
  </div>
  
<ul class="nav navbar-nav navbar-left">
<!-- Full Screen -->
<li class="hidden-xs">
    <a class="request-fullscreen toggle-active" href="{{url('/ecommerce_returneditem')}}#">
      <span class="ad ad-screen-full fs18"></span>
    </a>
  </li>
</ul>

<ul class="nav navbar-nav navbar-right">  
<!-- CHANGED THIS -->
  <li class="dropdown">
    @auth
        <a href="{{ url('/ecommerce_dashboard') }}" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img id="profile-picture-dropdown" src="{{ asset('assets/img/avatars/' . Auth::user()->EmpImage) }}" alt="avatar" class="mw30 br64 mr15">
            <b class="surnamebold">{{ Auth::user()->EmpFirstName }}.{{ Auth::user()->EmpLastName }}</b>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
    @else
        <a href="{{ url('/') }}" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img id="profile-picture-dropdown" src="{{ asset('assets/img/avatars/Admin.png') }}" alt="default-avatar" class="mw30 br64 mr15">
            <b class="surnamebold">Admin</b>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
    @endauth
    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">      
      <!-- <li class="list-group-item">
        <a href="{{url('/ecommerce_settings')}}#" class="animated animated-short fadeInUp">
          <span class="fa fa-gear"></span> Account Settings </a>
      </li> -->
      <li class="list-group-item">
        <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
          <span class="fa fa-power-off"></span> Logout </a>
      </li>
    </ul>
  </li>
</ul>
</header>
<!-- End: Header -->

<!-- Start: Sidebar -->
<aside id="sidebar_left" class="nano nano-primary affix">
<!-- Start: Sidebar Left Content -->
  <div class="sidebar-left-content nano-content">
<!-- Start: Sidebar Menu -->
<ul class="nav sidebar-menu">
      <li class="sidebar-label pt20">ADMIN</li>
      <li>
        <a href="{{url('ecommerce_dashboard')}}">
          <span class="glyphicon glyphicon-home"></span>
          <span class="sidebar-title">Dashboard</span>
        </a>
      </li>
      </li>
      <li>
        <a class="accordion-toggle menu-open" href="{{url('/ecommerce_dashboard')}}#">
          <span class="glyphicon glyphicon-heart"></span>
          <span class="sidebar-title">Product & Inventory</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="{{url('ecommerce_products')}}">
              <span class="glyphicon glyphicon-star"></span> View Products </a>
          </li>
          <li>
            <a href="{{url('ecommerce_addproducts')}}">
              <span class="glyphicon glyphicon-plus"></span> Add Products </a>
          </li>
          <li class="active">
            <a href="{{url('ecommerce_returneditem')}}">
              <span class="glyphicon glyphicon-remove"></span> Returned Products </a>
          </li>
          <li>
            <a href="{{url('ecommerce_request')}}">
              <span class="glyphicon glyphicon-envelope"></span> Request Products </a>
          </li>
        </ul>
      </li>
    </ul>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br>
<!-- End: Sidebar Menu -->

<!-- Start: Sidebar Collapse Button -->
	  <div class="sidebar-toggle-mini">
	    <a href="{{url('/ecommerce_dashboard')}}#">
	      <span class="fa fa-sign-out"></span>
	    </a>
	  </div>
<!-- End: Sidebar Collapse Button -->
  </div>
<!-- End: Sidebar Left Content -->
</aside>

<!-- Start: Content-Wrapper -->
<section id="content_wrapper">
  <!-- Start: Topbar -->
  <header id="topbar" class="ph10">
    <div class="topbar-left">
      <ul class="nav nav-list nav-list-topbar pull-left">
        <li>
          <a href="{{url('/ecommerce_dashboard')}}">Dashboard</a>
        </li>
        <li>
          <a href="{{url('ecommerce_products')}}">Products</a>
        </li>
        <li class="active">
          <a href="{{url('ecommerce_returneditem')}}">Returned Products</a>
        </li>
      </ul>
    </div>
    <div class="topbar-right hidden-xs hidden-sm">
      <a href="ecommerce_addproducts" class="btn btn-default btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Add Product</a>
    </div>
  </header>
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="tray tray-center">

      <!-- Filter by Category Section -->
      <div class="panel-menu p12 admin-form theme-primary">
          <div class="row">
              <div class="col-md-5">
                  <h5><small>Filter by Category</small></h5>
                  <label class="field select">
                      <select id="filter-category" name="filter-category">
                          <option value="0">Select Product Category</option>
                          <option value="1">Bracelet</option>
                          <option value="2">Necklace</option>
                          <option value="3">Ring</option>
                          <option value="4">Set</option>
                      </select>
                      <i class="arrow"></i>
                  </label>
              </div>

              <!-- Filter by Reason Section -->
              <div class="col-md-5">
                  <h5><small>Filter by Reason</small></h5>
                  <label class="field select">
                      <select id="filter-reason" name="filter-reason">
                          <option value="0">Select Reason for Return</option>
                          <option value="1">Wrong Product Delivered</option>
                          <option value="2">Wrong Size Delivered</option>
                          <option value="3">Product Damaged or Defective</option>
                      </select>
                      <i class="arrow"></i>
                  </label>
              </div>

              <!-- Filter Button -->
              <div class="col-md-2" style="padding-top: 35px;">
                  <button type="button" class="btn btn-success mb-2" id="filter-button">Filter</button>
              </div>
          </div>
      </div>

      <!-- recent activity table -->
      <div class="panel">
          <div class="panel-heading">
              <span class="panel-title hidden-xs"> Returned Products</span>
            </div>
              <div class="panel-body pn">
                <div class="table-responsive">
                  <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                      <tr class="bg-light">
                        <th class="text-center">Select</th>
                            <th class="">Image</th>
                            <th class="">Return ID</th>
                            <th class="">Product</th>
                            <th class="">Return Date</th>
                            <th class="">Reason for Return</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="w100">
                          <input type="checkbox" name="selectProduct" class="select-checkbox">
                        </td>
                        <td class="w100">
                          <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/bracelet/Bracelet_noctus.png">
                        </td>
                          <td class="">#21363</td>
                          <td class="">Noctus Bracelet</td>
                          <td class="">2024-01-25</td>
                          <td class=""></td>
                        <td class="text-center">
                          <button class="btn btn-primary">Send Back</button>
                        </td>
                      </tr>
                        <tr>
                          <td class="w100">
                            <input type="checkbox" name="selectProduct" class="select-checkbox">
                          </td>
                          <td class="w100">
                            <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/bracelet/Bracelet_noctus.png">
                          </td>
                            <td class="">#21363</td>
                            <td class="">Noctus Bracelet</td>
                            <td class="">2024-01-25</td>
                            <td class=""></td>
                          <td class="text-center">
                            <button class="btn btn-primary">Send Back</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="w100">
                            <input type="checkbox" name="selectProduct" class="select-checkbox">
                          </td>
                          <td class="w100">
                            <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/bracelet/Bracelet_noctus.png">
                          </td>
                            <td class="">#21363</td>
                            <td class="">Noctus Bracelet</td>
                            <td class="">2024-01-25</td>
                            <td class=""></td>
                          <td class="text-center">
                            <button class="btn btn-primary">Send Back</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="w100">
                            <input type="checkbox" name="selectProduct" class="select-checkbox">
                          </td>
                          <td class="w100">
                            <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/bracelet/Bracelet_noctus.png">
                          </td>
                            <td class="">#21363</td>
                            <td class="">Noctus Bracelet</td>
                            <td class="">2024-01-25</td>
                            <td class=""></td>
                          <td class="text-center">
                            <button class="btn btn-primary">Send Back</button>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
      </div>
</section>

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="vendor/jquery/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- FileUpload JS -->
<script src="vendor/plugins/fileupload/fileupload.js"></script>
<script src="vendor/plugins/holder/holder.min.js"></script>

<!-- Tagmanager JS -->
<script src="vendor/plugins/tagsinput/tagsinput.min.js"></script>

<!-- Theme Javascript -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {

"use strict";

// Init Theme Core    
Core.init();

// Init Demo JS  
Demo.init();

// select list dropdowns - placeholder like creation
var selectList = $('.admin-form select');
selectList.each(function(i, e) {
  $(e).on('change', function() {
    if ($(e).val() == "0") $(e).addClass("empty");
    else $(e).removeClass("empty")
  });
});
selectList.each(function(i, e) {
  $(e).change();
});

// Init TagsInput plugin
$("input#tagsinput").tagsinput({
  tagClass: function(item) {
    return 'label bg-primary light';
  }
});

});

$(document).ready(function() {
$('.btn-number').click(function(e) {
  e.preventDefault();

  var fieldName = $(this).attr('data-field');
  var type = $(this).attr('data-type');
  var input = $("input[name='" + fieldName + "']");
  var currentVal = parseInt(input.val());

  if (!isNaN(currentVal)) {
    if (type === 'minus') {
      if (currentVal > 0) {
        input.val(currentVal - 1);
      }
    } else if (type === 'plus') {
      input.val(currentVal + 1);
    }
  } else {
    input.val(0);
  }
});
});

</script>

@include('profile_change')

</body>

</html>