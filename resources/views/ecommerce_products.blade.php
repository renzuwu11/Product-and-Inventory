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

<!-- Start: Theme Preview -->
@include('themepreview')
<!-- End: Theme Preview -->

<!-- Start: Main -->
<div id="main">

<!-- Start: Header -->
<header class="navbar navbar-fixed-top">
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
    <a class="request-fullscreen toggle-active" href="{{url('/ecommerce_products')}}#">
      <span class="ad ad-screen-full fs18"></span>
    </a>
  </li>
</ul>

<ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/ecommerce_dashboard')}}#">
      <span class="ad ad-radio-tower fs18"></span>
    </a>
    <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
      <li class="dropdown-header">
        <span class="dropdown-title"> Notifications</span>
        <span class="label label-warning">3</span>
      </li>
<!-- CHANGED THIS -->
      <li class="media">
        <a class="media-left" href="{{url('/ecommerce_dashboard')}}#"> <img src="assets/img/avatars/Fababeir.png" class="mw40" alt="avatar"> </a>
        <div class="media-body">
          <h5 class="media-heading"> <b>From:</b> Fababeir.Ruwu
            <small class="text-muted">- 12/01/23</small>
          </h5> kumain k n b
        </div>
      </li>
<!-- CHANGED THIS -->
      <li class="media">
        <a class="media-left" href="{{url('/ecommerce_dashboard')}}"> <img src="assets/img/avatars/Cabral.png" class="mw40" alt="avatar"> </a>
        <div class="media-body">
          <h5 class="media-heading mv5"> <b>From:</b> Cabral.Loyd
            <small> - 12/01/23</small>
          </h5> otw na po
        </div>
      </li>
<!-- CHANGED THIS -->
      <li class="media">
        <a class="media-left" href="{{url('/ecommerce_dashboard')}}#"> <img src="assets/img/avatars/Torres.png" class="mw40" alt="avatar"> </a>
        <div class="media-body">
          <h5 class="media-heading"> <b>From:</b> Torres.Juli
            <small class="text-muted">- 12/01/23</small>
          </h5> pabili po
        </div>
      </li>
    </ul>
  </li>
  <li class="menu-divider hidden-xs">
    <i class="fa fa-circle"></i>
  </li>          
<!-- CHANGED THIS -->
  <li class="dropdown">
    @auth
        <a href="{{ url('/ecommerce_dashboard') }}" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img id="profile-picture-dropdown" src="{{ asset('employee_images/' . Auth::user()->EmpImage) }}" alt="avatar" class="mw30 br64 mr15">
            <b class="surnamebold">{{ Auth::user()->EmpFirstName }}.{{ Auth::user()->EmpLastName }}</b>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
    @else
        <a href="{{ url('/') }}" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img id="profile-picture-dropdown" src="{{ asset('path-to-default-image.jpg') }}" alt="default-avatar" class="mw30 br64 mr15">
            <b class="surnamebold">Guest</b>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
    @endauth
    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
      <li class="dropdown-header clearfix">
        <div class="pull-left ml10">
          <select id="user-status">
            <optgroup label="Current Status:">
              <option value="1-1">Away</option>
              <option value="1-2">Offline</option>
              <option value="1-3" selected="selected">Online</option>
            </optgroup>
          </select>
        </div>
        <div class="pull-right mr10">
          <select id="user-role">
            <optgroup label="Logged in As:">
              <option value="1-1">Client</option>
              <option value="1-2">Editor</option>
              <option value="1-3" selected="selected">Admin</option>
            </optgroup>
          </select>
        </div>
      </li>
<!-- hrefs to be changed -->
      <li class="list-group-item">
        <a href="{{url('/ecommerce_dashboard')}}#" class="animated animated-short fadeInUp">
          <span class="fa fa-envelope"></span> Messages
          <span class="label label-warning">2</span>
        </a>
      </li>
      <li class="list-group-item">
        <a href="{{url('/ecommerce_dashboard')}}#" class="animated animated-short fadeInUp">
          <span class="fa fa-user"></span> Friends
          <span class="label label-warning">6</span>
        </a>
      </li>
      <li class="list-group-item">
        <a href="{{url('/ecommerce_settings')}}#" class="animated animated-short fadeInUp">
          <span class="fa fa-gear"></span> Account Settings </a>
      </li>
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
          <li class="active">
            <a href="{{url('ecommerce_products')}}">
              <span class="glyphicon glyphicon-star"></span> View Products </a>
          </li>
          <li>
            <a href="{{url('ecommerce_addproducts')}}">
              <span class="glyphicon glyphicon-plus"></span> Add Products </a>
          </li>
          <li>
            <a href="{{url('ecommerce_returneditem')}}">
              <span class="glyphicon glyphicon-remove"></span> Returned Products </a>
          </li>
        </ul>
      </li>
    </ul>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br>
<!-- End: Sidebar Menu -->

<!-- Start: Sidebar Collapse Button -->
	  <div class="sidebar-toggle-mini">
	    <a href="{{url('/ecommerce_products')}}">
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
        <li class="active">
          <a href="{{url('ecommerce_products')}}">Products</a>
        </li>
        <li>
          <a href="{{url('ecommerce_returneditem')}}">Returned Items</a>
        </li>
      </ul>
    </div>
    <div class="topbar-right hidden-xs hidden-sm">
      <a href="ecommerce_addproducts" class="btn btn-default btn-sm light fw600 ml10">
        <span class="fa fa-plus pr5"></span> Add Product</a>
    </div>
  </header>
<!-- End: Topbar -->
<section id="content" class="table-layout animated fadeIn">

        <!-- recent orders table -->
          <div class="panel">
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
                <div class="col-md-5">
                  <!-- <label class="field select">
                    <select id="filter-status" name="filter-status">
                      <option value="0">Filter by Status</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                      <option value="3">Low Stock</option>
                      <option value="4">Out of Stock</option>
                    </select>
                    <i class="arrow"></i>
                  </label> -->
                  <h5><small>Filter by Price Range ($)</small></h5>
                  <div class="section row mb15">
                    <div class="col-md-6">
                      <label for="price1" class="field prepend-icon">
                        <input type="text" name="price1" id="price1" class="gui-input" placeholder="0">
                        <label for="price1" class="field-icon">
                          <i class="fa fa-usd"></i>
                        </label>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label for="price2" class="field prepend-icon">
                        <input type="text" name="price2" id="price2" class="gui-input" placeholder="1000">
                        <label for="price2" class="field-icon">
                          <i class="fa fa-usd"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-2">
                  <label class="field select">
                    <select id="bulk-action" name="bulk-action">
                      <option value="0">Actions</option>
                      <option value="1">Edit</option>
                      <option value="2">Delete</option>
                      <option value="3">Active</option>
                      <option value="4">Inactive</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div> -->
                <div class="col-md-2" style="padding-top: 35px;">
                  <button type="button" class="btn btn-primary mb-2" id="edit-button">Edit</button>
                  <!-- <button type="button" class="btn btn-warning mb-2" id="archive-button">Archive</button> -->
                  <button type="button" class="btn btn-danger" id="delete-button">Delete</button>
                </div>

              </div>
            </div>
            <div class="panel-body pn">
              <div class="table-responsive">
              <table id="products-table" class="table admin-form theme-warning tc-checkbox-1 fs13">
                  <thead>
                    <tr class="bg-light">
                      <th class="text-center">Select</th>
                      <th class="">Image</th>
                      <th class="">Product Name</th>
                      <th class="">Description</th>
                      <th class="">Price</th>
                      <th class="">Stock</th>
                      <!-- <th class="text-right">Status</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $product)
                        <tr>
                          <td class="text-center">
                              <label class="option block mn">
                                <input type="checkbox" name="selected-products[]" value="{{ $product->id }}">
                                <span class="checkbox mn"></span>
                              </label>
                          </td>
                          <td class="w100">
                            <img class="img-responsive mw40 ib mr10" title="{{ $product->ProdName }}" src="{{ asset($product->ProdImage) }}">
                          </td>
                          <td class="">{{ $product->ProdName }}</td>
                          <td class="">{{ $product->ProdDescription }}</td>
                          <td class="">₱{{ number_format($product->UnitPrice, 2) }}</td>
                          <td class="">{{ $product->Stock }}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
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

  $(document).ready(function() {
    // Event listener for category filter change
    $('#filter-category').change(function() {
        var selectedCategory = $(this).val();

        // Make an AJAX request to fetch products based on the selected category
        $.ajax({
            url: "{{ route('ecommerce.products') }}",
            type: 'GET',
            data: { 'filter-category': selectedCategory },
            success: function(response) {
                // Update the products table with the fetched products
                $('#products-table tbody').html(response);
            },
            error: function(error) {
                console.error('Error fetching products:', error);
            }
        });
    });
});

</script>
<!-- END: PAGE SCRIPTS -->

@include('profile_change')

</body>

</html>