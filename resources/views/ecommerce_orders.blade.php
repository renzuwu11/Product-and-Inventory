<!DOCTYPE html>
<html>

<head>  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>COMET.AL</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="ecommerce-page">

  <!-- Start: Theme Preview Pane -->
  <div id="skin-toolbox">
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
        <span class="panel-title"> Theme Options</span>
      </div>
      <div class="panel-body pn">
        <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
          <li class="active">
            <a href="{{url('/')}}#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
          </li>
          <li>
            <a href="{{url('/')}}#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
          </li>
          <li>
            <a href="{{url('/')}}#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
          </li>
        </ul>
        <div class="tab-content p20 ptn pb15">
          <div role="tabpanel" class="tab-pane active" id="toolbox-header">
            <form id="toolbox-header-skin">
              <h4 class="mv20">Header Skins</h4>
              <div class="skin-toolbox-swatches">
                <div class="checkbox-custom checkbox-disabled fill mb5">
                  <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                  <label for="headerSkin8">Light</label>
                </div>
                <div class="checkbox-custom fill checkbox-primary mb5">
                  <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                  <label for="headerSkin1">Primary</label>
                </div>
                <div class="checkbox-custom fill checkbox-info mb5">
                  <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                  <label for="headerSkin3">Info</label>
                </div>
                <div class="checkbox-custom fill checkbox-warning mb5">
                  <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                  <label for="headerSkin4">Warning</label>
                </div>
                <div class="checkbox-custom fill checkbox-danger mb5">
                  <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                  <label for="headerSkin5">Danger</label>
                </div>
                <div class="checkbox-custom fill checkbox-alert mb5">
                  <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                  <label for="headerSkin6">Alert</label>
                </div>
                <div class="checkbox-custom fill checkbox-system mb5">
                  <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                  <label for="headerSkin7">System</label>
                </div>
                <div class="checkbox-custom fill checkbox-success mb5">
                  <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                  <label for="headerSkin2">Success</label>
                </div>
                <div class="checkbox-custom fill mb5">
                  <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                  <label for="headerSkin9">Dark</label>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
            <form id="toolbox-sidebar-skin">
              <h4 class="mv20">Sidebar Skins</h4>
              <div class="skin-toolbox-swatches">
                <div class="checkbox-custom fill mb5">
                  <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                  <label for="sidebarSkin3">Dark</label>
                </div>
                <div class="checkbox-custom fill checkbox-disabled mb5">
                  <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                  <label for="sidebarSkin1">Light</label>
                </div>
                <div class="checkbox-custom fill checkbox-light mb5">
                  <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                  <label for="sidebarSkin2">Lighter</label>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="toolbox-settings">
            <form id="toolbox-settings-misc">
              <h4 class="mv20 mtn">Layout Options</h4>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" checked="" id="header-option">
                  <label for="header-option">Fixed Header</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" checked="" id="sidebar-option">
                  <label for="sidebar-option">Fixed Sidebar</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" id="breadcrumb-option">
                  <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" id="breadcrumb-hidden">
                  <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                </div>
              </div>
              <h4 class="mv20">Layout Options</h4>
              <div class="form-group">
                <div class="radio-custom mb5">
                  <input type="radio" id="fullwidth-option" checked name="layout-option">
                  <label for="fullwidth-option">Fullwidth Layout</label>
                </div>
              </div>
              <div class="form-group mb20">
                <div class="radio-custom radio-disabled mb5">
                  <input type="radio" id="boxed-option" name="layout-option" disabled>
                  <label for="boxed-option">Boxed Layout
                    <b class="text-muted">(Coming Soon)</b>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="form-group mn br-t p15">
          <a href="{{url('/')}}#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Theme Preview Pane -->

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="navbar-branding">
        <a class="navbar-brand" href="{{url('/')}}">          
          <img class="upperlogo" src="assets/img/logos/comet_al one.png" alt="COMET.AL">
          <b class="titlecometal">COMET</b>.al
      </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
<!--
        <li>
          <a class="sidebar-menu-toggle" href="{{url('/')}}#">
            <span class="ad ad-ruby fs18"></span>
          </a>
        </li>
-->
<!--
        <li>
          <a class="topbar-menu-toggle" href="{{url('/')}}#">
            <span class="ad ad-wand fs16"></span>
          </a>
        </li>
-->
        <!-- Full Screen -->
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="{{url('/')}}#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
  
      </ul>
      <form class="navbar-form navbar-left navbar-search" role="search">
        <div class="form-group">
<!--
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
-->
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/')}}#">
            <span class="ad ad-radio-tower fs18"></span>
          </a>
          <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
            <li class="dropdown-header">
              <span class="dropdown-title"> Notifications</span>
              <span class="label label-warning">4</span>
            </li>
            <li class="media">
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/Fababeir.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading"> <b>From:</b> Fababeir.Ruwu
                  <small class="text-muted">- 12/01/23</small>
                </h5> kumain k n b
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="{{url('/')}}"> <img src="assets/img/avatars/Cabral.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5"> <b>From:</b> Cabral.Loyd
                  <small> - 12/01/23</small>
                </h5> otw na po
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
                </div>
            </li>
            <li class="media">
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/Torres.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading"> <b>From:</b> Torres.Juli
                  <small class="text-muted">- 12/01/23</small>
                </h5> pabili po
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
              </div>
            </li>
<!--
            <li class="media">
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="{{url('/')}}#"> Max </a>
              </div>
            </li>
-->
          </ul>
        </li>
<!--
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/')}}#">
            <span class="flag-xs flag-us"></span> US
          </a>
          <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-in mr10"></span> Hindu </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-es mr10"></span> Spanish </a>
            </li>
          </ul>
        </li>
-->
        <li class="dropdown">
          <a href="{{url('ecommerce_orders')}}#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img src="assets/img/avatars/Kho.png" alt="avatar" class="mw30 br64 mr15"> <b class="surnamebold">Kho</b>.Kim
            <span class="caret caret-tp hidden-xs"></span>
          </a>
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
            <li class="list-group-item">
              <a href="{{url('ecommerce_orders')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('ecommerce_orders')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('ecommerce_orders')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Account Settings </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('ecommerce_orders')}}#" class="animated animated-short fadeInUp">
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

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Menu (Slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="{{url('/')}}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.blade.php" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.blade.php" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.blade.php" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.blade.php" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.blade.php" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Author (hidden)  -->
          <div class="sidebar-widget author-widget hidden">
            <div class="media">
              <a class="media-left" href="{{url('ecommerce_orders')}}#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="{{url('ecommerce_orders')}}#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).blade.php">Logout</a>
                </div>
                <div class="media-author">Michael Richards</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Menu</li>
          <li>
            <a href="pages_calendar.blade.php">
              <span class="fa fa-calendar"></span>
              <span class="sidebar-title">Calendar</span>
              <span class="sidebar-title-tray">
                <span class="label label-xs bg-primary">New</span>
              </span>
            </a>
          </li>
          <li>
            <a href="http://admindesigns.com/demos/admin/README/index.blade.php">
              <span class="glyphicon glyphicon-book"></span>
              <span class="sidebar-title">Documentation</span>
            </a>
          </li>
          <li class="active">
            <a href="{{url('/')}}">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-label pt15">Exclusive Tools</li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="fa fa-columns"></span>
              <span class="sidebar-title">Layout Templates</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa fa-arrows-h"></span>
                  Sidebars
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_sidebar-left-static.blade.php">
                      Left Static </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-fixed.blade.php">
                      Left Fixed </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-widgets.blade.php">
                      Left Widgets </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-minified.blade.php">
                      Left Minified </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-light.blade.php">
                      Left White </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-static.blade.php">
                      Right Static </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-fixed.blade.php">
                      Right Fixed </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-menu.blade.php">
                      Right w/Menu </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-arrows-v"></span>
                  Navbar
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_navbar-static.blade.php">
                      Navbar Static </a>
                  </li>
                  <li>
                    <a href="layout_navbar-fixed.blade.php">
                      Navbar Fixed </a>
                  </li>
                  <li>
                    <a href="layout_navbar-menus.blade.php">
                      Navbar Menus </a>
                  </li>
                  <li>
                    <a href="layout_navbar-contextual.blade.php">
                      Contextual Example </a>
                  </li>
                  <li>
                    <a href="layout_navbar-search-alt.blade.php">
                      Search Alt Style </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-hand-o-up"></span>
                  Topbar
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_topbar.blade.php">
                      Default Style </a>
                  </li> 
                  <li>
                    <a href="layout_topbar-menu.blade.php">
                      Default w/Menu </a>
                  </li>  
                  <li>
                    <a href="layout_topbar-alt.blade.php">
                      Alternate Style </a>
                  </li>  
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-arrows-v"></span>
                  Content Body
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_content-blank.blade.php">
                      Blank Starter </a>
                  </li>
                  <li>
                    <a href="layout_content-fixed.blade.php">
                      Fixed Window </a>
                  </li>
                  <li>
                    <a href="layout_content-heading.blade.php">
                      Content Heading </a>
                  </li>
                  <li>
                    <a href="layout_content-tabs.blade.php">
                      Content Tabs </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-pause"></span>
                  Content Trays
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_tray-left.blade.php">
                      Tray Left Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-left-fixed.blade.php">
                      Tray Left Fixed </a>
                  </li> 
                  <li>
                    <a href="layout_tray-right.blade.php">
                      Tray Right Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-right-fixed.blade.php">
                      Tray Right Fixed </a>
                  </li> 
                  <li>
                    <a href="layout_tray-both.blade.php">
                      Left + Right Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-both-fixed.blade.php">
                      Left + Right Fixed </a>
                  </li> 
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-plus-square-o"></span>
                  Boxed Layout
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_boxed.blade.php">
                      Default </a>
                  </li>
                  <li>
                    <a href="layout_boxed-horizontal.blade.php">
                      Horizontal Menu </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-arrow-circle-o-up"></span>
                  Horizontal Menu
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_horizontal-sm.blade.php">
                      Small Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-md.blade.php">
                      Medium Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-lg.blade.php">
                      Large Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-light.blade.php">
                      Light Skin</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-topbar.blade.php">
                      With Topbar</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-topbar-alt.blade.php">
                      With Alt Topbar</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-collapsed.blade.php">
                      Collapsed onLoad</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-boxed.blade.php">
                      In Boxed Layout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">Admin Plugins</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_plugins-panels.blade.php">
                  <span class="glyphicon glyphicon-book"></span> Admin Panels </a>
              </li>
              <li>
                <a href="admin_plugins-modals.blade.php">
                  <span class="glyphicon glyphicon-modal-window"></span> Admin Modals </a>
              </li>
              <li>
                <a href="admin_plugins-dock.blade.php">
                  <span class="glyphicon glyphicon-equalizer"></span> Admin Dock </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title">Admin Forms</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_forms-elements.blade.php">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Admin Elements </a>
              </li>
              <li>
                <a href="admin_forms-widgets.blade.php">
                  <span class="glyphicon glyphicon-calendar"></span> Admin Widgets </a>
              </li>
              <li>
                <a href="admin_forms-layouts.blade.php">
                  <span class="fa fa-desktop"></span> Admin Layouts </a>
              </li>
              <li>
                <a href="admin_forms-wizard.blade.php">
                  <span class="fa fa-clipboard"></span> Admin Wizard </a>
              </li>
              <li>
                <a href="admin_forms-validation.blade.php">
                  <span class="glyphicon glyphicon-check"></span> Admin Validation </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-label pt20">Systems</li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="fa fa-diamond"></span>
              <span class="sidebar-title">Widget Packages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="widgets_tile.blade.php">
                  <span class="fa fa-cube"></span> Tile Widgets</a>
              </li>
              <li>
                <a href="widgets_panel.blade.php">
                  <span class="fa fa-desktop"></span> Panel Widgets </a>
              </li>
              <li>
                <a href="widgets_scroller.blade.php">
                  <span class="fa fa-columns"></span> Scroller Widgets </a>
              </li>
              <li>
                <a href="widgets_data.blade.php">
                  <span class="fa fa-dot-circle-o"></span> Admin Widgets </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle menu-open" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="sidebar-title">Ecommerce</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="{{url('/')}}">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Dashboard
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="{{url('ecommerce_products')}}">
                  <span class="glyphicon glyphicon-tags"></span> Products </a>
              </li>
              <li class="active">
                <a href="{{url('ecommerce_orders')}}">
                  <span class="fa fa-money"></span> Orders </a>
              </li>
              <li>
                <a href="{{url('ecommerce_customers')}}">
                  <span class="fa fa-users"></span> Customers </a>
              </li>
              <li>
                <a href="{{url('ecommerce_settings')}}">
                  <span class="fa fa-gears"></span> Store Settings </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="email_templates.blade.php">
              <span class="fa fa-envelope-o"></span>
              <span class="sidebar-title">Email Templates</span>
            </a>
          </li>

          <!-- sidebar resources -->
          <li class="sidebar-label pt20">Elements</li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-bell"></span>
              <span class="sidebar-title">UI Elements</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="ui_alerts.blade.php">
                  <span class="fa fa-warning"></span> Alerts </a>
              </li>
              <li>
                <a href="ui_animations.blade.php">
                  <span class="fa fa-spinner"></span> Animations </a>
              </li>
              <li>
                <a href="ui_buttons.blade.php">
                  <span class="fa fa-plus-square-o"></span> Buttons </a>
              </li>
              <li>
                <a href="ui_typography.blade.php">
                  <span class="fa fa-text-width"></span> Typography </a>
              </li>
              <li>
                <a href="ui_portlets.blade.php">
                  <span class="fa fa-archive"></span> Portlets </a>
              </li>
              <li>
                <a href="ui_progress-bars.blade.php">
                  <span class="fa fa-bars"></span> Progress Bars </a>
              </li>
              <li>
                <a href="ui_tabs.blade.php">
                  <span class="fa fa-toggle-off"></span> Tabs </a>
              </li>
              <li>
                <a href="ui_icons.blade.php">
                  <span class="fa fa-hand-o-right"></span> Icons </a>
              </li>
              <li>
                <a href="ui_grid.blade.php">
                  <span class="fa fa-th-large"></span> Grid </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-hdd"></span>
              <span class="sidebar-title">Form Elements</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="form_inputs.blade.php">
                  <span class="fa fa-magic"></span> Basic Inputs </a>
              </li>
              <li>
                <a href="form_plugins.blade.php">
                  <span class="fa fa-bell-o"></span> Plugin Inputs
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="form_editors.blade.php">
                  <span class="fa fa-clipboard"></span> Editors </a>
              </li>
              <li>
                <a href="form_treeview.blade.php">
                  <span class="fa fa-tree"></span> Treeview </a>
              </li>
              <li>
                <a href="form_nestable.blade.php">
                  <span class="fa fa-tasks"></span> Nestable </a>
              </li>
              <li>
                <a href="form_image-tools.blade.php">
                  <span class="fa fa-cloud-upload"></span> Image Tools
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="form_uploaders.blade.php">
                  <span class="fa fa-cloud-upload"></span> Uploaders </a>
              </li>
              <li>
                <a href="form_notifications.blade.php">
                  <span class="fa fa-bell-o"></span> Notifications </a>
              </li>
              <li>
                <a href="form_content-sliders.blade.php">
                  <span class="fa fa-exchange"></span> Content Sliders </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-tower"></span>
              <span class="sidebar-title">Plugins</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="glyphicon glyphicon-globe"></span> Maps
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="maps_advanced.blade.php">Admin Maps</a>
                  </li>
                  <li>
                    <a href="maps_basic.blade.php">Basic Maps</a>
                  </li>
                  <li>
                    <a href="maps_vector.blade.php">Vector Maps</a>
                  </li>
                  <li>
                    <a href="maps_full.blade.php">Full Map</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-area-chart"></span> Charts
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="charts_highcharts.blade.php">Highcharts</a>
                  </li>
                  <li>
                    <a href="charts_d3.blade.php">D3 Charts</a>
                  </li>
                  <li>
                    <a href="charts_flot.blade.php">Flot Charts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-table"></span> Tables
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="tables_basic.blade.php"> Basic Tables</a>
                  </li>
                  <li>
                    <a href="tables_datatables.blade.php"> DataTables </a>
                  </li>
                  <li>
                    <a href="tables_datatables-editor.blade.php"> Editable Tables </a>
                  </li>
                  <li>
                    <a href="tables_footable.blade.php"> FooTables </a>
                  </li>
                  <li>
                    <a href="tables_pricing.blade.php"> Pricing Tables </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-flask"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="misc_tour.blade.php"> Site Tour</a>
                  </li>
                  <li>
                    <a href="misc_timeout.blade.php"> Session Timeout</a>
                  </li>
                  <li>
                    <a href="misc_nprogress.blade.php"> Page Progress Loader </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
              <span class="glyphicon glyphicon-duplicate"></span>
              <span class="sidebar-title">Pages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-gears"></span> Utility
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="landing-page/landing1/index.blade.php" target="_blank"> Landing Page </a>
                  </li>
                  <li>
                    <a href="pages_confirmation.blade.php" target="_blank"> Confirmation
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_login.blade.php" target="_blank"> Login </a>
                  </li>
                  <li>
                    <a href="pages_login(alt).blade.php" target="_blank"> Login Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_register.blade.php" target="_blank"> Register </a>
                  </li>
                  <li>
                    <a href="pages_register(alt).blade.php" target="_blank"> Register Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_screenlock.blade.php" target="_blank"> Screenlock </a>
                  </li>
                  <li>
                    <a href="pages_screenlock(alt).blade.php" target="_blank"> Screenlock Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw.blade.php" target="_blank"> Forgot Password </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw(alt).blade.php" target="_blank"> Forgot Password Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_coming-soon.blade.php" target="_blank"> Coming Soon
                    </a>
                  </li>
                  <li>
                    <a href="pages_404.blade.php"> 404 Error </a>
                  </li>
                  <li>
                    <a href="pages_500.blade.php"> 500 Error </a>
                  </li>
                  <li>
                    <a href="pages_404(alt).blade.php"> 404 Error Alt </a>
                  </li>
                  <li>
                    <a href="pages_500(alt).blade.php"> 500 Error Alt </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-desktop"></span> Basic
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_search-results.blade.php">Search Results
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_profile.blade.php"> Profile </a>
                  </li>
                  <li>
                    <a href="pages_timeline.blade.php"> Timeline Split </a>
                  </li>
                  <li>
                    <a href="pages_timeline-single.blade.php"> Timeline Single </a>
                  </li>
                  <li>
                    <a href="pages_faq.blade.php"> FAQ Page </a>
                  </li>
                  <li>
                    <a href="pages_calendar.blade.php"> Calendar </a>
                  </li>
                  <li>
                    <a href="pages_messages.blade.php"> Messages </a>
                  </li>
                  <li>
                    <a href="pages_messages(alt).blade.php"> Messages Alt </a>
                  </li>
                  <li>
                    <a href="pages_gallery.blade.php"> Gallery </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="{{url('ecommerce_orders')}}#">
                  <span class="fa fa-usd"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_invoice.blade.php"> Printable Invoice </a>
                  </li>
                  <li>
                    <a href="pages_blank.blade.php"> Blank </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- sidebar bullets -->
          <li class="sidebar-label pt20">Projects</li>
          <li class="sidebar-proj">
            <a href="{{url('ecommerce_orders')}}#projectOne">
              <span class="fa fa-dot-circle-o text-primary"></span>
              <span class="sidebar-title">Website Redesign</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="{{url('ecommerce_orders')}}#projectTwo">
              <span class="fa fa-dot-circle-o text-info"></span>
              <span class="sidebar-title">Ecommerce Panel</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="{{url('ecommerce_orders')}}#projectTwo">
              <span class="fa fa-dot-circle-o text-danger"></span>
              <span class="sidebar-title">Adobe Mockup</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="{{url('ecommerce_orders')}}#projectThree">
              <span class="fa fa-dot-circle-o text-warning"></span>
              <span class="sidebar-title">SSD Upgrades</span>
            </a>
          </li>

          <!-- sidebar progress bars -->
          <li class="sidebar-label pt25 pb10">User Stats</li>
          <li class="sidebar-stat">
            <a href="{{url('ecommerce_orders')}}#projectOne" class="fs11">
              <span class="fa fa-inbox text-info"></span>
              <span class="sidebar-title text-muted">Email Storage</span>
              <span class="pull-right mr20 text-muted">35%</span>
              <div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
            <a href="{{url('ecommerce_orders')}}#projectOne" class="fs11">
              <span class="fa fa-dropbox text-warning"></span>
              <span class="sidebar-title text-muted">Bandwidth</span>
              <span class="pull-right mr20 text-muted">58%</span>
              <div class="progress progress-bar-xs mh20">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                  <span class="sr-only">58% Complete</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="{{url('ecommerce_orders')}}#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      <div id="topbar-dropmenu">
        <div class="topbar-menu row">
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('ecommerce_orders')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-inbox"></span>
              <p class="metro-title">Messages</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('ecommerce_orders')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-user"></span>
              <p class="metro-title">Users</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('ecommerce_orders')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-headphones"></span>
              <p class="metro-title">Support</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('ecommerce_orders')}}#" class="metro-tile">
              <span class="metro-icon fa fa-gears"></span>
              <p class="metro-title">Settings</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('ecommerce_orders')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-facetime-video"></span>
              <p class="metro-title">Videos</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('ecommerce_orders')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-picture"></span>
              <p class="metro-title">Pictures</p>
            </a>
          </div>
        </div>
      </div>
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <header id="topbar" class="ph10">
        <div class="topbar-left">
          <ul class="nav nav-list nav-list-topbar pull-left">
            <li>
              <a href="{{url('/')}}">Dashboard</a>
            </li>
            <li>
              <a href="{{url('ecommerce_products')}}">Products</a>
            </li>
            <li class="active">
              <a href="{{url('ecommerce_orders')}}">Orders</a>
            </li>
            <li>
              <a href="{{url('ecommerce_customers')}}">Customers</a>
            </li>
            <li>
              <a href="{{url('ecommerce_settings')}}">Settings</a>
            </li>
          </ul>
        </div>
        <div class="topbar-right hidden-xs hidden-sm">
          <a href="{{url('ecommerce_orders')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> New Order</a>
          <a href="{{url('ecommerce_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> Add Product</a>
          <a href="{{url('ecommerce_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-user pr5"></span> Add Customer</a>
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
              <span class="panel-title hidden-xs">Create New Order</span>
              <ul class="nav panel-tabs-border panel-tabs">
                <li class="active">
                  <a href="{{url('ecommerce_orders')}}#tab1_1" data-toggle="tab">Customer</a>
                </li>
                <li>
                  <a href="{{url('ecommerce_orders')}}#tab1_2" data-toggle="tab">Payment</a>
                </li>
                <li>
                  <a href="{{url('ecommerce_orders')}}#tab1_3" data-toggle="tab">Shipping</a>
                </li>
              </ul>
            </div>
            <div class="panel-body p25 pb5">
              <div class="tab-content pn br-n admin-form">
                <div id="tab1_1" class="tab-pane active">

                  <div class="section row">
                    <div class="col-md-6">
                      <label for="firstname" class="field prepend-icon">
                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                        <label for="firstname" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="field prepend-icon">
                        <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                        <label for="email" class="field-icon">
                          <i class="fa fa-envelope"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <!-- end section -->

                  <div class="section row">
                    <div class="col-md-6">
                      <label for="lastname" class="field prepend-icon">
                        <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                        <label for="lastname" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>

                    </div>
                    <div class="col-md-6">
                      <label for="mobile" class="field prepend-icon">
                        <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone / moble number">
                        <label for="mobile" class="field-icon">
                          <i class="fa fa-phone-square"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <!-- end section -->

                </div>
                <div id="tab1_2" class="tab-pane">
                  <div class="section">
                    <label class="field option">
                      <input type="radio" name="payment" checked>
                      <span class="radio"></span>Credit Card</label>
                    <label class="field option">
                      <input type="radio" name="payment">
                      <span class="radio"></span>Paypal</label>
                    <label class="field option">
                      <input type="radio" name="payment">
                      <span class="radio"></span>Check</label>
                  </div>
                  <!-- end section -->

                  <div class="section">
                    <label for="cardname" class="field prepend-icon">
                      <input type="text" name="cardname" id="cardname" class="gui-input" placeholder="Name on card...">
                      <label for="cardname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="section">
                    <label for="cardno" class="field prepend-icon">
                      <input type="text" name="cardno" id="lastname" class="gui-input" placeholder="Card number...">
                      <label for="cardno" class="field-icon">
                        <i class="fa fa-credit-card"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="section row">
                    <div class="col-md-6">
                      <label for="cardmonth" class="field select">
                        <select id="cardmonth" name="cardmonth">
                          <option value="">Expiry month...</option>
                          <option value="01">01 - Jan</option>
                          <option value="02">02 - Feb</option>
                          <option value="03">03 - Mar</option>
                          <option value="04">04 - Apr</option>
                          <option value="05">05 - May</option>
                          <option value="06">06 - Jun</option>
                          <option value="07">07 - Jul</option>
                          <option value="08">08 - Aug</option>
                          <option value="09">09 - Sep</option>
                          <option value="10">10 - Oct</option>
                          <option value="11">11 - Nov</option>
                          <option value="12">12 - Dec</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-6">
                      <label class="field select">
                        <select id="cardyear" name="cardyear">
                          <option value="">Expiry year...</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end section -->

                  </div>
                  <!-- end section row section -->

                  <div class="section row">
                    <div class="col-md-6">
                      <label for="secno" class="field prepend-icon">
                        <input type="text" name="secno" id="secno" class="gui-input" placeholder="Security number...">
                        <b class="tooltip tip-left-top"><em> This is a four diigit number at the back of your card </em></b>
                        <label for="secno" class="field-icon">
                          <i class="fa fa-barcode"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-6">
                      <p class="field-align">
                        <a href="{{url('ecommerce_orders')}}#" class="theme-link"> What is this? </a>
                      </p>
                    </div>
                    <!-- end section -->

                  </div>
                  <!-- end section row section -->

                </div>
                <div id="tab1_3" class="tab-pane">

                  <div class="section">
                    <label for="lastaddr" class="field prepend-icon">
                      <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address">
                      <label for="lastaddr" class="field-icon">
                        <i class="fa fa-map-marker"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="section">
                    <label class="field select">
                      <select id="location" name="location">
                        <option value="">Select country...</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan Republic</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BB">Barbados</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="C2">China Worldwide</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatia</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="CD">Democratic Republic of the Congo</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="GA">Gabon Republic</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LS">Lesotho</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn Islands</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="QA">Qatar</option>
                        <option value="CG">Republic of the Congo</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis Anguilla</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">São Tomé and Príncipe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="KR">South Korea</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="LC">St. Lucia</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UY">Uruguay</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                      </select>
                      <i class="arrow double"></i>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="section row">
                    <div class="col-md-3">
                      <label for="zip" class="field prepend-icon">
                        <input type="text" name="zip" id="zip" class="gui-input" placeholder="Zip">
                        <label for="zip" class="field-icon">
                          <i class="fa fa-certificate"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-4">
                      <label for="city" class="field prepend-icon">
                        <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                        <label for="city" class="field-icon">
                          <i class="fa fa-building-o"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-5">
                      <label for="states" class="field select">
                        <select id="states" name="states">
                          <option value="">Choose state</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District Of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end .col8 section -->

                  </div>
                  <!-- end section row section -->

                  <div class="section row mbn">
                    <div class="col-sm-8">
                      <label class="field option mt10">
                        <input type="checkbox" name="info" checked>
                        <span class="checkbox"></span>Save Customer
                        <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <p class="text-right">
                        <button class="btn btn-primary" type="button">Save Order</button>
                      </p>
                    </div>
                  </div>
                  <!-- end section -->

                </div>
              </div>
            </div>
          </div>

          <!-- recent orders table -->
          <div class="panel">
            <div class="panel-menu admin-form theme-primary">
              <div class="row">
                <div class="col-md-4">
                  <label for="filter-datepicker" class="field prepend-picker-icon">
                    <input type="text" value="02/03/2015" id="filter-datepicker" name="filter-datepicker" class="gui-input" placeholder="Filter by Date">
                  </label>
                </div>
                <div class="col-md-4">
                  <label class="field select">
                    <select id="filter-status" name="filter-status">
                      <option value="0">Filter by Status</option>
                      <option value="1">Edit</option>
                      <option value="2">Delete</option>
                      <option value="3">Active</option>
                      <option value="4">Inactive</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
                <div class="col-md-4">
                  <label class="field select">
                    <select id="filter-customer" name="filter-customer">
                      <option value="0">Filter Customer</option>
                      <option value="1">Alan</option>
                      <option value="2">Susan</option>
                      <option value="3">Louis</option>
                      <option value="4">Randy</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
              </div>
            </div>
            <div class="panel-body pn">
              <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                  <thead>
                    <tr class="bg-light">
                      <th class="text-center">Select</th>
                      <th class="">Order Date</th>
                      <th class="">Order ID</th>
                      <th class="">Customer</th>
                      <th class="">Notes</th>
                      <th class="text-center">Order Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Louis Renold</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Louis Renold</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                        <span>Sara Loft</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/3.jpg">
                        <span>Frank Roles</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                        <span>Michael Runes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                        <span>Michael Runes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('ecommerce_orders')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_orders')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="ecommerce_orders#">Edit</a>
                            </li>
                            <li>
                              <a href="ecommerce_orders#">Delete</a>
                            </li>
                            <li>
                              <a href="ecommerce_orders#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="ecommerce_orders#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="ecommerce_orders#">Pending</a>
                            </li>
                            <li>
                              <a href="ecommerce_orders#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- end: .tray-center -->

        <!-- begin: .tray-right -->
        <aside class="tray tray-right tray290">

          <!-- menu quick links -->
          <div class="admin-form">

            <h4> Filter Orders</h4>

            <hr class="short">

            <div class="section mb15">
              <label for="order-id" class="field prepend-icon">
                <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="Order ID #">
                <label for="order-id" class="field-icon">
                  <i class="fa fa-tag"></i>
                </label>
              </label>
            </div>

            <h5><small>Price Range($)</small></h5>
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

            <h5><small>Sales Date</small></h5>
            <div class="section row">
              <div class="col-md-6">
                <label for="date1" class="field prepend-icon">
                  <input type="text" name="date1" id="date1" class="gui-input" placeholder="01/01/15">
                  <label for="date1" class="field-icon">
                    <i class="fa fa-calendar"></i>
                  </label>
                </label>
              </div>
              <div class="col-md-6">
                <label for="date2" class="field prepend-icon">
                  <input type="text" name="date2" id="date2" class="gui-input" placeholder="01/31/15">
                  <label for="date2" class="field-icon">
                    <i class="fa fa-calendar"></i>
                  </label>
                </label>
              </div>
            </div>

            <h5><small>Search Categories</small></h5>
            <div class="section mb15">
              <label class="field select">
                <select id="filter-categories" name="filter-categories">
                  <option value="0" selected="selected">Filter by Categories</option>
                  <option value="1">Electronics</option>
                  <option value="2">Software</option>
                </select>
                <i class="arrow double"></i>
              </label>
            </div>

            <h5><small>Search Customers</small></h5>
            <div class="section">
              <label class="field select">
                <select id="filter-customers" name="filter-customers">
                  <option value="0" selected="selected">Filter by Customer</option>
                  <option value="1">Michael</option>
                  <option value="2">David</option>
                  <option value="3">Sara</option>
                  <option value="4">Tasha</option>
                </select>
                <i class="arrow double"></i>
              </label>
            </div>

            <hr class="short">

            <div class="section">
                <button class="btn btn-default btn-sm ph25" type="button">Search</button>
                <label class="field option ml15">
                  <input type="checkbox" name="info">
                  <span class="checkbox"></span>
                  <span class="text-muted">Save Search</span>
                </label>
            </div>

          </div>

        </aside>
        <!-- end: .tray-right -->

      </section>
      <!-- End: Content -->

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

  <!-- Admin Forms JS -->
  <script src="assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

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

    // Init datepicker widget
    $('#filter-datepicker').datepicker({
      numberOfMonths: 1,
      showOn: 'both',
      buttonText: '<i class="fa fa-calendar-o"></i>',
      prevText: '<i class="fa fa-chevron-left"></i>',
      nextText: '<i class="fa fa-chevron-right"></i>',
      beforeShow: function(input, inst) {
        var newclass = 'admin-form';
        var themeClass = $(this).parents('.admin-form').attr('class');
        var smartpikr = inst.dpDiv.parent();
        if (!smartpikr.hasClass(themeClass)) {
          inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
        }
      }
    });

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>

</html>
