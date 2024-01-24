<!DOCTYPE html>
<html>

<style>
  #profile-picture {
    width: 100px;
    height: 100px; 
    border-radius: 50%; 
    object-fit: cover; 
  }
</style>

<!-- Start: Meta, title, CSS, favicons, etc. -->
  @include('theme')
<!-- End: Meta, title, CSS, favicons, etc. -->

<body class="ecommerce-page">

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
    <a class="request-fullscreen toggle-active" href="{{url('/ecommerce_settings')}}#">
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

  <!-- Begin: Content -->
  <section id="content" class="table-layout animated fadeIn">

  <!-- Inside the "Owner Details" panel -->
    <!-- begin: .tray-center -->
    <div class="tray tray-center">
                    
      <div class="mw1000 center-block">
        
      <!-- Store Owner Details -->
      <div class="panel panel-warning panel-border top mt20 mb35">
        <div class="panel-heading">
          <span class="panel-title">Owner Details</span>
        </div>
        <div class="panel-body bg-light dark">
          <div class="admin-form">
            <div class="section row mb10">
              <label for="account-picture" class="field-label col-md-3 text-center">Profile Picture:</label>
              <div class="col-md-9">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-preview thumbnail mb20">
                    @if(Auth::check() && Auth::user()->EmpImage)
                      <img id="profile-picture" src="{{ asset('employee_images/' . Auth::user()->EmpImage) }}" alt="Profile Picture">
                    @else
                      <!-- Default image or placeholder -->
                      <span class="glyphicon glyphicon-user" style="font-size: 100px;"></span>
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-xs-7 pr5">
                      <input type="file" name="account-picture" id="account-picture" accept="image/*" onchange="readURL(this);">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="section row mb10">
              <label for="account-name" class="field-label col-md-3 text-center">Account Name:</label>
              <div class="col-md-9">
                <label for="account-name" class="field prepend-icon">
                  <input type="text" name="account-name" id="account-name" class="gui-input" value="{{ Auth::user()->EmpFirstName }}.{{ Auth::user()->EmpLastName }}">
                  <label for="account-name" class="field-icon">
                    <i class="fa fa-home"></i>
                  </label>
                </label>
              </div>
            </div>
            <div class="section row mb10">
              <label for="account-email" class="field-label col-md-3 text-center">Account Email:</label>
              <div class="col-md-9">
                <label for="account-email" class="field prepend-icon">
                  <input type="email" name="account-email" id="account-email" class="gui-input" value="{{ Auth::user()->EmpEmail }}">
                  <label for="account-email" class="field-icon">
                    <i class="fa fa-envelope-o"></i>
                  </label>
                </label>
              </div>
            </div>
            <div class="section row mb10">
              <label for="account-phone" class="field-label col-md-3 text-center">Account Phone:</label>
              <div class="col-md-9">
                <label for="account-phone" class="field prepend-icon">
                  <input type="text" name="account-phone" id="account-phone" class="gui-input" value="{{ Auth::user()->EmpContactNumber }}" placeholder="">
                  <label for="account-phone" class="field-icon">
                    <i class="fa fa-phone"></i>
                  </label>
                </label>
              </div>
            </div>
            <div class="section row mb10">
              <label for="account-password" class="field-label col-md-3 text-center">Change Password:</label>
              <div class="col-md-9">
                  <div class="section row mb10">
                      <label for="current-password" class="field-label col-md-3 text-left">Current Password:</label>
                      <div class="col-md-6">
                          <input type="password" name="current-password" id="current-password" class="gui-input">
                      </div>
                  </div>
                  <div class="section row mb10">
                      <label for="new-password" class="field-label col-md-3 text-left">New Password:</label>
                      <div class="col-md-6">
                          <input type="password" name="new-password" id="new-password" class="gui-input">
                      </div>
                  </div>
                  <div class="section row mb10">
                      <label for="confirm-password" class="field-label col-md-3 text-left">Confirm Password:</label>
                      <div class="col-md-6">
                          <input type="password" name="confirm-password" id="confirm-password" class="gui-input">
                      </div>
                  </div>
                  <div class="section row mb10">
                      <label class="field-label col-md-3 text-left"></label>
                      <div class="col-md-6">
                          <input type="checkbox" id="show-passwords-checkbox" onclick="togglePasswords()"> Show Passwords
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- FileUpload JS -->
  <script src="vendor/plugins/fileupload/fileupload.js"></script>
  <script src="vendor/plugins/holder/holder.min.js"></script>

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

    // select dropdowns - placeholder like creation
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

  });
  </script>

  <!-- Your Password Toggle Script -->
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          var showPasswordsCheckbox = document.getElementById('show-passwords-checkbox');
          var passwords = document.querySelectorAll('input[type="password"]');

          showPasswordsCheckbox.addEventListener('change', function () {
              var isChecked = showPasswordsCheckbox.checked;

              passwords.forEach(function (password) {
                  password.type = isChecked ? 'text' : 'password';
              });
          });
      });
  </script>

  @include('profile_change')

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
