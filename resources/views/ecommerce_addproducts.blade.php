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
@if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" arita-hidden="true">x</button>
      {{session()->get('message')}}
    </div>
  @endif
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
                <form id="productForm" method="post" action="{{ route('ecommerce.addproducts') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="tab-content pn br-n admin-form">
                            <div id="tab1_1" class="tab-pane active">

                                <div class="section row mbn">
                                     <div class="col-md-4">
                                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb20">
                                                <img data-src="holder.js/100%x140" alt="holder">
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <span class="button btn-system btn-file btn-block">
                                                        <span class="fileupload-new">Select</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file" name="ProdImage" id="product-image" accept="image/png, image/jpeg, image/jpg" required>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 pl15">
                                        <div class="section mb10">
                                            <label for="name2" class="field prepend-icon">
                                                <input type="text" name="ProdName" id="name2" class="event-name gui-input br-light light" placeholder="Product Name" required>
                                                <label for="name2" class="field-icon">
                                                    <i class="fa fa-tag"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <div class="section mb10">
                                            <label class="field prepend-icon">
                                                <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="ProdDescription" placeholder="Product Description" required></textarea>
                                                <label for="comment" class="field-icon">
                                                    <i class="fa fa-comments"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="section row">
                                <div class="col-md-3">
                                    <label for="product-category" class="field select">
                                        <select id="product-category" name="CategoryID" required>
                                            <option value="" selected disabled>Select Product Category</option>
                                            <option value="1">Ring</option>
                                            <option value="2">Necklace</option>
                                            <option value="3">Bracelet</option>
                                            <option value="4">Set</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="col-md-3">
                                    <label for="product-sku" class="field prepend-icon">
                                        <input type="text" name="ProdWeight" id="product-sku" class="gui-input" placeholder="Product Weight..." title="Enter a valid number" required>
                                        <label for="product-sku" class="field-icon">
                                            <i class="fa fa-clipboard"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <label for="product-material" class="field prepend-icon">
                                        <input type="text" name="ProdMaterial" id="product-material" class="gui-input" placeholder="Product Material..." required>
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
                                              <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="ProdStock">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                              </button>
                                          </span>
                                          <input type="text" name="ProdStock" id="product-stock" class="form-control input-number text-center" placeholder="Quantity" value="0" required>
                                          <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="ProdStock">
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
                                        <input type="text" name="UnitPrice" id="product-price" class="gui-input" placeholder="Product Price..." pattern="[0-9]+(\.[0-9]+)?" title="Enter a valid number" required>
                                        <label for="product-price" class="field-icon">
                                            <i class="fa fa-usd"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="col-md-4">
                                    <label for="product-size" class="field prepend-icon">
                                        <input type="text" name="ProdSize" id="product-size" class="gui-input" placeholder="Product Size..." title="Enter a valid number" required>
                                        <label for="product-size" class="field-icon">
                                            <i class="fa fa-circle"></i>
                                        </label>
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <label for="product-discount" class="field prepend-icon">
                                        <input type="text" name="ProdDiscount" id="product-discount" class="gui-input" placeholder="Product Discount..." pattern="[0-9]+(\.[0-9]+)?" title="Enter a valid number">
                                        <label for="product-discout" class="field-icon">
                                            <i class="fa fa-tags"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- end section -->

                            </div>
                            <!-- end section row section -->

                            <!-- <div class="section">
                                <input id="tagsinput" type="text" name="tags" value="Software, Adobe, Photoshop, Editor, Commercial">
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
                                      <button class="btn btn-success" type="submit">Save</button>
                                    </p>
                                </div>
                            </div>
                            <!-- end section -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("productForm");

  form.addEventListener("submit", function (event) {
      var fields = form.querySelectorAll("input, textarea, select");
      var isValid = true;

      fields.forEach(function (field) {
          if (
              field.type !== "checkbox" &&
              field.name !== "product-discount" && //optional
              (field.required && (field.value.trim() === "" || field.value === null))
          ) {
              isValid = false;
          }
      });
      if (!isValid) {
          event.preventDefault();
          alert("Please fill in all required fields.");
      } else {
          //show success message
          alert("Product Successfully Added!");
      }
  });
});
</script>
<!-- END: PAGE SCRIPTS -->

@include('profile_change')

</body>

</html>