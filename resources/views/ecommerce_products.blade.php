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
@if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" arita-hidden="true">x</button>
            {{session()->get('message')}}
          </div>
        @endif
<section id="content" class="table-layout animated fadeIn">

        <!-- recent orders table -->
          <div class="panel">
            <div class="panel-menu p12 admin-form theme-primary">
              <div class="row">
              <form id="filter-form" action="{{ url('/filterproducts') }}" method="GET">
                @csrf
                <div class="col-md-5">
                  <h5><small>Filter by Category</small></h5>
                  <label class="field select">
                    <select id="filter-category" name="Category">
                      <option value="0">Select Product Category</option>
                      <option value="1">Ring</option>
                      <option value="2">Necklace</option>
                      <option value="3">Bracelet</option>
                      <option value="4">Set</option>
                    </select>
                    <i class="arrow"></i>
                  </label>
                </div>
                <!-- <div class="col-md-5">
                  <h5><small>Filter by Price Range ($)</small></h5>
                  <div class="section row mb15">
                    <div class="col-md-6">
                      <label for="price1" class="field prepend-icon">
                        <input type="text" name="UnitPriceMin" id="price1" class="gui-input" placeholder="0">
                        <label for="price1" class="field-icon">
                          <i class="fa fa-usd"></i>
                        </label>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label for="price2" class="field prepend-icon">
                        <input type="text" name="UnitPriceMax" id="price2" class="gui-input" placeholder="1000">
                        <label for="price2" class="field-icon">
                          <i class="fa fa-usd"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                </div> -->
                <div class="col-md-2" style="padding-top: 35px;">
                  <button type="submit" class="btn btn-success mb-2" id="filter-button">Filter</button>
                </div>
              </form>
              </div>
            </div>
            <div class="panel-body pn">
              <div class="table-responsive">
                <table id="products-table" class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                        <tr class="bg-light">
                            <th class="">ID</th>
                            <th class="" style="padding-left: 20px;">Image</th>
                            <th class="">Product Name</th>
                            <th class="" style="width: 350px;">Description</th>
                            <th class="">Price</th>
                            <th class="">Category</th>
                            <th class="" style="width: 200px;">Material</th>
                            <th class="">Weight</th>
                            <th class="">Size</th>
                            <th class="">Stock</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($products && count($products) > 0)
                        @foreach($products as $product)
                            <tr>
                                <td class="">{{ $product->ProductID }}</td>
                                <td class="w100">
                                    <img class="img-responsive mw40 ib mr10" style="margin-left: 15px;" title="{{ $product->ProdName }}" src="{{ asset($product->ProdImage) }}">
                                </td>
                                <td class="">{{ $product->ProdName }}</td>
                                <td class="text-justify" style="width: 350px;">{{ $product->ProdDescription }}</td>
                                <td class="">₱{{ number_format($product->UnitPrice, 2) }}</td>
                                <td class="">{{ optional($product->category)->CategoryName }}</td>
                                <td class="text-justify">{{ $product->ProdMaterial }}</td>
                                <td class="">{{ $product->ProdWeight }}</td>
                                <td class="">{{ $product->ProdSize }}</td>
                                <td class="">{{ $product->Stock }}</td>
                                <td>
                                    <form id="edit-form-{{ $product->ProductID }}" method="POST" action="{{ url('/ecommerce_updateproducts/' . $product->ProductID) }}" style="display: none;">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" class="btn btn-primary mb-2">Edit</button>
                                    </form>
                                    <a href="#" class="btn btn-primary mb-2" onclick="submitEditForm({{ $product->ProductID }})">Edit</a>
                                </td>
                                <td>
                                  <a href="#" class="btn btn-danger"
                                      onclick="event.preventDefault(); 
                                      if(confirm('Are you sure you want to delete the selected row?')) { 
                                          document.getElementById('delete-form-{{ $product->ProductID }}').submit(); 
                                      }">
                                      Delete
                                  </a>

                                <!-- Hidden form to handle the DELETE request -->
                                <form id="delete-form-{{ $product->ProductID }}" method="POST" action="{{ url('delete_product/' . $product->ProductID) }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                            </tr>
                        @endforeach
                      @elseif ($filterproducts && count($filterproducts) > 0)
                      @foreach($filterproducts as $filteredProduct)
                      <tr>
                          <td class="">{{ $filteredProduct->ProductID }}</td>
                          <td class="w100">
                               <img class="img-responsive mw40 ib mr10" style="margin-left: 15px;" title="{{ $product->ProdName }}" src="{{ asset($product->ProdImage) }}">
                          </td>
                          <td class="">{{ $filteredProduct->ProdName }}</td>
                          <td class="text-justify" style="width: 350px;">{{ $filteredProduct->ProdDescription }}</td>
                          <td class="">₱{{ number_format($filteredProduct->UnitPrice, 2) }}</td>
                          <td class="">{{ optional($filteredProduct->category)->CategoryName }}</td>
                          <td class="text-justify">{{ $filteredProduct->ProdMaterial }}</td>
                          <td class="">{{ $filteredProduct->ProdWeight }}</td>
                          <td class="">{{ $filteredProduct->ProdSize }}</td>
                          <td class="">{{ $filteredProduct->Stock }}</td>
                          <td>
                              <a href="{{ url('ecommerce_addproducts/' . $filteredProduct->ProductID) }}" class="btn btn-primary mb-2">Edit</a>
                          </td>
                          <td>
                              <a href="#" class="btn btn-danger"
                                  onclick="event.preventDefault(); 
                                  if(confirm('Are you sure you want to delete the selected row?')) { 
                                      document.getElementById('delete-form-{{ $filteredProduct->ProductID }}').submit(); 
                                  }">
                                  Delete
                              </a>

                              Hidden form to handle the DELETE request//
                             <form id="delete-form-{{ $filteredProduct->ProductID }}" method="POST" action="{{ url('delete_product/' . $filteredProduct->ProductID) }}" style="display: none;">
                              @csrf
                              @method('DELETE')
                             </form>
                          </td>
                        </tr>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                      <td colspan="12" class="text-center">No products found based on the given criteria.</td>
                      </tr>
                    @endif
                </tbody>
            </table>
            <div class="pagination">
            @if(isset($products))
              {{ $products->links() }}
            @elseif(isset($filterproducts))
              {{ $filterproducts->links() }}
            @endif
            </div>
        </div>
    </div>
</section>

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

//         // Init Theme Core    
//         Core.init();

// // Init Demo JS  
// Demo.init();

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

</script>

<script>
    function submitEditForm(productId) {
        // Redirect to the edit_product URL with the product ID
        window.location.href = "{{ url('ecommerce_updateproducts') }}/" + productId;
    }
</script>

<script>
    function deleteProduct(productId) {
        if (confirm('Are you sure you want to delete the selected row?')) {
            // Redirect to the delete_product URL with the product ID
            window.location.href = "{{ url('delete_product') }}/" + productId;
        }
    }
</script>

<!-- END: PAGE SCRIPTS -->

@include('profile_change')

</body>

</html>