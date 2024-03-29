<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>COMET.al</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/logos/comet_al logo.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

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
    <a class="request-fullscreen toggle-active" href="{{url('/ecommerce_request')}}#">
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
        <a class="accordion-toggle menu-open">
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
          <!-- <li>
            <a href="{{url('ecommerce_returneditem')}}">
              <span class="glyphicon glyphicon-remove"></span> Returned Products </a>
          </li> -->
          <li class="active">
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
          <a href="{{url('ecommerce_products')}}">View Products</a>
        </li>
        <!-- <li>
          <a href="{{url('ecommerce_returneditem')}}">Returned Products</a>
        </li> -->
      </ul>
    </div>
    <div class="topbar-right hidden-xs hidden-sm">
      <a href="{{url('ecommerce_addproducts')}}" class="btn btn-default btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Add Product</a>
      <a href="ecommerce_request" class="btn btn-default btn-sm light fw600 ml10">
        <span class="glyphicon glyphicon-envelope"></span> Request Product</a>
    </div>
  </header>
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <!-- create new order panel -->
        <div class="panel mb25 mt5">
            <div class="panel-heading">
                <span class="panel-title hidden-xs"> Request Product</span>
            </div>
            <div class="panel-body p20 pb10">
                <!-- ito yung form juli, paiba nlng ng csrf feeling ko mali yung pwesto -->
                @csrf
                <form id="productForm" method="post" action="your_server_endpoint.php">
                    <!-- kim changed this -->
                    <div class="tab-content pn br-n admin-form">
                        <div id="tab1_1" class="tab-pane active">
                            <div class="section row">
                                <div class="col-md-3">
                                    <label for="product-category" class="field select">
                                        <select id="product-category" name="product-category" required>
                                            <option value="" selected disabled>Select Category</option>
                                            <option value="category1">Bracelet</option>
                                            <option value="category2">Necklace</option>
                                            <option value="category3">Ring</option>
                                            <option value="category4">Set</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <!-- juli for product name -->
                                <div class="col-md-3">
                                    <label for="product-name" class="field select">
                                        <select id="product-name" name="product-name" required>
                                            <option value="" selected disabled>Select Product</option>
                                            <option value="name1">ProdName1</option>
                                            <option value="name2">ProdName2</option>
                                            <option value="name3">RProdName3</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label for="product-quant" class="field prepend-icon">
                                        <div class="input-group">
                                            <label for="product-quant" class="control-label">Request Quantity</label>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="product-quant">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="product-quant" id="product-quant" class="form-control input-number text-center" placeholder="Quantity" value="1" required>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="product-quant">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                        <label for="product-stock" class="field-icon"></label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <!-- Move the button section here -->
                                <div class="col-md-3">
                                    <p class="text-center">
                                        <button class="btn btn-success" type="submit">Send</button>
                                    </p>
                                </div>
                            </div>
                            <!-- end section -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Start: Right Sidebar -->
<aside id="sidebar_right" class="nano affix">

  <!-- Start: Sidebar Right Content -->
  <div class="sidebar-right-content nano-content p15">
      <h5 class="title-divider text-muted mb20"> Server Statistics
        <span class="pull-right"> 2013
          <i class="fa fa-caret-down ml5"></i>
        </span>
      </h5>
      <div class="progress mh5">
        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
          <span class="fs11">DB Request</span>
        </div>
      </div>
      <div class="progress mh5">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
          <span class="fs11 text-left">Server Load</span>
        </div>
      </div>
      <div class="progress mh5">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
          <span class="fs11 text-left">Server Connections</span>
        </div>
      </div>
      <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
      <div class="row">
        <div class="col-xs-5">
          <h3 class="text-primary mn pl5">132</h3>
        </div>
        <div class="col-xs-7 text-right">
          <h3 class="text-success-dark mn">
            <i class="fa fa-caret-up"></i> 13.2% </h3>
        </div>
      </div>
      <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
      <div class="row">
        <div class="col-xs-5">
          <h3 class="text-primary mn pl5">212</h3>
        </div>
        <div class="col-xs-7 text-right">
          <h3 class="text-success-dark mn">
            <i class="fa fa-caret-up"></i> 25.6% </h3>
        </div>
      </div>
      <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
      <div class="row">
        <div class="col-xs-5">
          <h3 class="text-primary mn pl5">82.5</h3>
        </div>
        <div class="col-xs-7 text-right">
          <h3 class="text-danger mn">
            <i class="fa fa-caret-down"></i> 17.9% </h3>
        </div>
      </div>
      <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
        <span class="pull-right text-primary fw600">USA</span>
      </h5>
    </div>
    
</aside>
<!-- End: Right Sidebar -->

</div>
<!-- End: Main -->

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

// kim chaned this to quantity 1 and above
$(document).ready(function() {
$('.btn-number').click(function(e) {
  e.preventDefault();

  var fieldName = $(this).attr('data-field');
  var type = $(this).attr('data-type');
  var input = $("input[name='" + fieldName + "']");
  var currentVal = parseInt(input.val());

  if (!isNaN(currentVal)) {
    if (type === 'minus') {
      if (currentVal > 1) {
        input.val(currentVal - 1);
      }
    } else if (type === 'plus') {
      input.val(currentVal + 1);
    }
  } else {
    input.val(1);
  }
});
});
</script>
<!-- END: PAGE SCRIPTS -->

@include('profile_change')

</body>

</html>