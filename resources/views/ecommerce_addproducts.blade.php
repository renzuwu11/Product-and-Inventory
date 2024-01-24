<!DOCTYPE html>
<html>

<!-- Start: Theme  -->
@include('theme')
<!-- End: Theme  -->

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
    <a class="request-fullscreen toggle-active" href="{{url('/ecommerce_addproducts')}}#">
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
          <li class="active">
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

      <!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="tray tray-center">

          <!-- create new order panel -->
          <div class="panel mb25 mt5">
            <div class="panel-heading">
              <span class="panel-title hidden-xs"> Add New Product</span>
            </div>
            <div class="panel-body p20 pb10">
              <div class="tab-content pn br-n admin-form">
                <div id="tab1_1" class="tab-pane active">

                  <div class="section row mbn">
                    <div class="col-md-4">
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="holder.js/100%x140" alt="holder">
                        </div>
                        <div class="row">
                          <!-- <div class="col-xs-7 pr5"> -->
                            <!-- <input type="text" name="name2" id="name2" class="text-center event-name gui-input br-light bg-light" placeholder="Img Keywords">
                            <label for="name2" class="field-icon"></label> -->
                          <!-- </div> -->
                          <div class="col-xs-5">
                            <span class="button btn-system btn-file btn-block">
                              <span class="fileupload-new">Select</span>
                              <span class="fileupload-exists">Change</span>
                              <input type="file">
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 pl15">
                      <div class="section mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="name2" id="name2" class="event-name gui-input br-light light" placeholder="Product Name">
                          <label for="name2" class="field-icon">
                            <i class="fa fa-tag"></i>
                          </label>
                        </label>
                      </div>
                      <div class="section mb10">
                        <label class="field prepend-icon">
                          <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="comment" placeholder="Product Description"></textarea>
                          <label for="comment" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                          <span class="input-footer hidden">
                            <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                        </label>
                      </div>
                    </div>
                  </div>


                </div>
                  <br>
                  <div class="section row">
                    <div class="col-md-3">
                      <label for="product-category" class="field select">
                        <select id="product-category" name="product-category">
                          <option value="" selected disabled>Select Product Category</option>
                          <option value="category1">Bracelet</option>
                          <option value="category2">Necklace</option>
                          <option value="category3">Ring</option>
                          <option value="category4">Set</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-3">
                      <label for="product-weight" class="field prepend-icon">
                        <input type="text" name="product-sku" id="product-sku" class="gui-input" placeholder="Product Weight...">
                        <label for="product-weight" class="field-icon">
                          <i class="fa fa-clipboard"></i>
                        </label>
                      </label>
                    </div>

                    <div class="col-md-3">
                      <label for="product-material" class="field prepend-icon">
                        <input type="text" name="product-sku" id="product-sku" class="gui-input" placeholder="Product Material...">
                        <label for="product-material" class="field-icon">
                          <i class="fa fa-cube"></i>
                        </label>
                      </label>
                    </div>

                    <div class="col-md-3">
                      <label for="product-stock" class="field prepend-icon">
                        <div class="input-group">
                          <label for="product-stock" class="control-label">Product Stock</label>
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="product-stock">
                              <span class="glyphicon glyphicon-minus"></span>
                            </button>
                          </span>
                          <input type="text" name="product-stock" id="product-stock" class="form-control input-number text-center" placeholder="Quantity" value=0>
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="product-stock">
                              <span class="glyphicon glyphicon-plus"></span>
                            </button>
                          </span>
                        </div>
                        <label for="product-stock" class="field-icon"></label>
                      </label>
                    </div>


                    <!-- end section -->

                  </div>
                  <!-- end section row section -->

                  <div class="section row">
                    <div class="col-md-4">
                      <label for="product-price" class="field prepend-icon">
                        <input type="text" name="product-price" id="product-price" class="gui-input" placeholder="Product Price...">
                        <label for="product-price" class="field-icon">
                          <i class="fa fa-usd"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                   <!-- <div class="col-md-3">
                    <label for="product-supplier" class="field select">
                      <select name="product-vendor" id="product-vendor" class="gui-input">
                        <option value="" selected disabled>Select Supplier Source</option>
                        <option value="supplier1">Supplier 1</option>
                        <option value="supplier2">Supplier 2</option>
                        <option value="supplier3">Supplier 3</option>
                      </select>
                      <i class="arrow double"></i>
                    </label>
                  </div> -->

                    <!-- end section -->

                    <div class="col-md-4">
                      <label for="product-size" class="field prepend-icon">
                        <input type="text" name="product-sku" id="product-sku" class="gui-input" placeholder="Product Size...">
                        <label for="product-size" class="field-icon">
                          <i class="fa fa-circle"></i>
                        </label>
                      </label>
                    </div>

                    <div class="col-md-4">
                      <label for="product-discount" class="field prepend-icon">
                        <input type="text" name="product-discount" id="product-discount" class="gui-input" placeholder="Product Discount...">
                        <label for="product-discout" class="field-icon">
                          <i class="fa fa-tags"></i>
                        </label>
                      </label>
                    </div>

                    <!-- end section -->

                  </div>
                  <!-- end section row section -->

                  <!-- <div class="section">
                    <input id="tagsinput" type="text" value="Software, Adobe, Photoshop, Editor, Commercial">
                  </div> -->
                  <!-- end section row section -->

                  <hr class="short alt">

                  <div class="section row mbn">
                    <div class="col-sm-8">
                      <!-- <label class="field option mt10">
                        <input type="checkbox" name="info" checked>
                        <span class="checkbox"></span>Save Product
                        <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                      </label> -->
                    </div>
                    <div class="col-sm-4">
                      <p class="text-right">
                        <button class="btn btn-success" type="button">Save</button>
                      </p>
                    </div>
                  </div>
                  <!-- end section -->

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
<!-- END: PAGE SCRIPTS -->

@include('profile_change')

</body>

</html>