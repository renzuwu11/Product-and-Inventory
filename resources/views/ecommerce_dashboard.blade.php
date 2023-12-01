<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
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
<!-- CHANGED THIS -->
        <a class="navbar-brand" href="{{url('/')}}">          
          <img class="upperlogo" src="assets/img/logos/comet_al one.png" alt="COMET.AL">
          <b class="titlecometal">COMET</b>.al
      </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
<!-- REMOVED THIS
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
<!-- CHANGED THIS -->
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/Fababeir.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading"> <b>From:</b> Fababeir.Ruwu
                  <small class="text-muted">- 12/01/23</small>
                </h5> kumain k n b
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
              </div>
            </li>
<!-- CHANGED THIS -->
            <li class="media">
              <a class="media-left" href="{{url('/')}}"> <img src="assets/img/avatars/Cabral.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5"> <b>From:</b> Cabral.Loyd
                  <small> - 12/01/23</small>
                </h5> otw na po
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
                </div>
            </li>
<!-- CHANGED THIS -->
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
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown">
<!-- CHANGED THIS -->
          <a href="{{url('/')}}#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
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

<!-- hrefs to be changed -->
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
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
              <a class="media-left" href="{{url('/')}}#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="{{url('/')}}#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).blade.php">Logout</a>
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
<!--
          <li class="sidebar-label pt20">Menu</li>
          <li>
-->
<!--
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
-->
<!--
          <li class="sidebar-label pt15">Exclusive Tools</li>
          <li>
            <a class="accordion-toggle" href="{{url('/')}}#">
              <span class="fa fa-columns"></span>
              <span class="sidebar-title">Layout Templates</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
            <a class="accordion-toggle" href="{{url('/')}}#">
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
            <a class="accordion-toggle" href="{{url('/')}}#">
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
-->
          <li class="sidebar-label pt20">ADMIN</li>
          <li>
<!--
            <a class="accordion-toggle" href="{{url('/')}}#">
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
-->
            <a class="accordion-toggle menu-open" href="{{url('/')}}#">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="sidebar-title">Ecommerce</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li class="active">
                <a href="{{url('/')}}">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Dashboard
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="{{url('ecommerce_products')}}">
                  <span class="glyphicon glyphicon-tags"></span> Products </a>
              </li>
              <li>
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
<!--
          <li>
            <a href="email_templates.blade.php">
              <span class="fa fa-envelope-o"></span>
              <span class="sidebar-title">Email Templates</span>
            </a>
          </li>
-->
<!-- CHANGED THIS -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br>
<!--
          <!-- sidebar resources
          <li class="sidebar-label pt20">Elements</li>
          <li>
            <a class="accordion-toggle" href="{{url('/')}}#">
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
            <a class="accordion-toggle" href="{{url('/')}}#">
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
            <a class="accordion-toggle" href="{{url('/')}}#">
              <span class="glyphicon glyphicon-tower"></span>
              <span class="sidebar-title">Plugins</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
            <a class="accordion-toggle" href="{{url('/')}}#">
              <span class="glyphicon glyphicon-duplicate"></span>
              <span class="sidebar-title">Pages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
                <a class="accordion-toggle" href="{{url('/')}}#">
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
-->

<!--
          <!-- sidebar bullets --
          <li class="sidebar-label pt20">Projects</li>
          <li class="sidebar-proj">
            <a href="{{url('/')}}#projectOne">
              <span class="fa fa-dot-circle-o text-primary"></span>
              <span class="sidebar-title">Website Redesign</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="{{url('/')}}#projectTwo">
              <span class="fa fa-dot-circle-o text-info"></span>
              <span class="sidebar-title">Ecommerce Panel</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="{{url('/')}}#projectTwo">
              <span class="fa fa-dot-circle-o text-danger"></span>
              <span class="sidebar-title">Adobe Mockup</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="{{url('/')}}#projectThree">
              <span class="fa fa-dot-circle-o text-warning"></span>
              <span class="sidebar-title">SSD Upgrades</span>
            </a>
          </li>
-->
<!--
          <!-- sidebar progress bars --
          <li class="sidebar-label pt25 pb10">User Stats</li>
          <li class="sidebar-stat">
            <a href="{{url('/')}}#projectOne" class="fs11">
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
            <a href="{{url('/')}}#projectOne" class="fs11">
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
-->
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="{{url('/')}}#">
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
            <a href="{{url('/')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-inbox"></span>
              <p class="metro-title">Messages</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('/')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-user"></span>
              <p class="metro-title">Users</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('/')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-headphones"></span>
              <p class="metro-title">Support</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('/')}}#" class="metro-tile">
              <span class="metro-icon fa fa-gears"></span>
              <p class="metro-title">Settings</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('/')}}#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-facetime-video"></span>
              <p class="metro-title">Videos</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="{{url('/')}}#" class="metro-tile">
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
            <li class="active">
              <a href="{{url('/')}}">Dashboard</a>
            </li>
            <li>
              <a href="{{url('ecommerce_products')}}">Products</a>
            </li>
            <li>
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
          <a href="{{url('ecommerce_products')}}" class="btn btn-default btn-sm light fw600 ml10">
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

          <!-- dashboard tiles -->
          <div class="row">
            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                  <h1 class="fs30 mt5 mbn">1,426</h1>
                  <h6 class="text-system">NEW ORDERS</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-up pr5"></i> 3% INCREASE
                    <b>1W AGO</b>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                  <h1 class="fs30 mt5 mbn">63,262</h1>
                  <h6 class="text-success">TOTAL SALES GROSS</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-up pr5"></i> 2.7% INCREASE
                    <b>1W AGO</b>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                  <h1 class="fs30 mt5 mbn">248</h1>
                  <h6 class="text-warning">PENDING SHIPMENTS</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-up pr5 text-success"></i> 1% INCREASE
                    <b>1W AGO</b>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xl-3 visible-xl">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                  <h1 class="fs30 mt5 mbn">6,718</h1>
                  <h6 class="text-danger">UNIQUE VISITS</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-down pr5 text-danger"></i> 6% DECREASE
                    <b>1W AGO</b>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- dashboard metric chart -->
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title"> Revenue</span>
            </div>
            <div class="panel-body pn">
              <div id="ecommerce_chart1" style="height: 300px;"></div>
            </div>
          </div>

          <!-- recent activity table -->
          <div class="panel">
            <div class="panel-heading">
              <span class="panel-title hidden-xs"> Recent Activity</span>
              <ul class="nav panel-tabs panel-tabs-merge">
                <li class="active">
                  <a href="{{url('/')}}#tab1_1" data-toggle="tab"> Top Sellers</a>
                </li>
                <li>
                  <a href="{{url('/')}}#tab1_2" data-toggle="tab"> Most Viewed</a>
                </li>
                <li>
                  <a href="{{url('/')}}#tab1_3" class="hidden-xs" data-toggle="tab"> New Customers</a>
                </li>
              </ul>
            </div>
            <div class="panel-body pn">
              <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                  <thead>
                    <tr class="bg-light">
                      <th class="">Image</th>
                      <th class="">Product Title</th>
                      <th class="">SKU</th>
                      <th class="">Price</th>
                      <th class="">Stock</th>
                      <th class="text-right">Status</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_1.jpg">
                      </td>
                      <td class="">Apple Ipod 4G - Silver</td>
                      <td class="">#21362</td>
                      <td class="">$215</td>
                      <td class="">1,400</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('/')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('/')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('/')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_2.jpg">
                      </td>
                      <td class="">Apple Smart Watch - 1G</td>
                      <td class="">#15262</td>
                      <td class="">$455</td>
                      <td class="">2,100</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('/')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('/')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('/')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_6.jpg">
                      </td>
                      <td class="">Apple Macbook 4th Gen - Silver</td>
                      <td class="">#66362</td>
                      <td class="">$1699</td>
                      <td class="">6,100</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('/')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('/')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('/')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="w100">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_7.jpg">
                      </td>
                      <td class="">Apple Iphone 16GB - Silver</td>
                      <td class="">#51362</td>
                      <td class="">$1299</td>
                      <td class="">5,200</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('/')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Delete</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="{{url('/')}}#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="{{url('/')}}#">Pending</a>
                            </li>
                            <li>
                              <a href="{{url('/')}}#">Canceled</a>
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

          <!-- info traffic panels -->
          <div class="row">
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-title">Top Geographic Sources</span>
                </div>
                <div class="panel-body pn">
                  <table class="table mbn tc-med-1 tc-bold-last">
                    <thead>
                      <tr class="hidden">
                        <th>#</th>
                        <th>First Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                        <td>28%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="flag-xs flag-de mr5 va-b"></span>Germany</td>
                        <td>25%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="flag-xs flag-fr mr5 va-b"></span>France</td>
                        <td>21%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="flag-xs flag-tr mr5 va-b"></span>Spain</td>
                        <td>18%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="flag-xs flag-es mr5 va-b"></span>Turkey</td>
                        <td>10%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Search List -->
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-title">Top Referals</span>
                </div>
                <div class="panel-body pn">
                  <table class="table mbn tc-med-1 tc-bold-last">
                    <thead>
                      <tr class="hidden">
                        <th>#</th>
                        <th>First Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="favicons google va-t mr10"></span>http://madeupurl.com/pictures/doors</td>
                        <td>28%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="favicons google va-t mr10"></span>http://secondulr.com/article/14</td>
                        <td>25%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="favicons yahoo va-t mr10"></span>http://urlthird.com/infogram/ten</td>
                        <td>21%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="favicons google va-t mr10"></span>http://fourthlink.com/boats/glass</td>
                        <td>18%</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="favicons bing va-t mr10"></span>http://lastlink.com/thebest/ever</td>
                        <td>10%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- end: .tray-center -->

        <!-- begin: .tray-right -->
        <aside class="tray tray-right tray290 pn">

          <!-- store activity timeline -->
          <ol class="timeline-list pl5 mt5">
            <li class="timeline-item">
              <div class="timeline-icon bg-dark light">
                <span class="fa fa-tags"></span>
              </div>
              <div class="timeline-desc">
                <b>Michael</b> Added a new item to his store:
                <a href="{{url('/')}}#">Ipod</a>
              </div>
              <div class="timeline-date">1:25am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-dark light">
                <span class="fa fa-tags"></span>
              </div>
              <div class="timeline-desc">
                <b>Sara</b> Added a new item to his store:
                <a href="{{url('/')}}#">Notebook</a>
              </div>
              <div class="timeline-date">3:05am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-success">
                <span class="fa fa-usd"></span>
              </div>
              <div class="timeline-desc">
                <b>Admin</b> created a new invoice for:
                <a href="{{url('/')}}#">Software</a>
              </div>
              <div class="timeline-date">4:15am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-warning">
                <span class="fa fa-pencil"></span>
              </div>
              <div class="timeline-desc">
                <b>Laura</b> edited her work experience</div>
              <div class="timeline-date">5:25am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-success">
                <span class="fa fa-usd"></span>
              </div>
              <div class="timeline-desc">
                <b>Admin</b> created a new invoice for:
                <a href="{{url('/')}}#">Apple Inc.</a>
              </div>
              <div class="timeline-date">7:45am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-dark light">
                <span class="fa fa-tags"></span>
              </div>
              <div class="timeline-desc">
                <b>Michael</b> Added a new item to his store:
                <a href="{{url('/')}}#">Ipod</a>
              </div>
              <div class="timeline-date">8:25am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-dark light">
                <span class="fa fa-tags"></span>
              </div>
              <div class="timeline-desc">
                <b>Sara</b> Added a new item to his store:
                <a href="{{url('/')}}#">Watch</a>
              </div>
              <div class="timeline-date">9:35am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-system">
                <span class="fa fa-fire"></span>
              </div>
              <div class="timeline-desc">
                <b>Admin</b> created a new invoice for:
                <a href="{{url('/')}}#">Software</a>
              </div>
              <div class="timeline-date">4:15am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-warning">
                <span class="fa fa-pencil"></span>
              </div>
              <div class="timeline-desc">
                <b>Laura</b> edited her work experience</div>
              <div class="timeline-date">5:25am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-success">
                <span class="fa fa-usd"></span>
              </div>
              <div class="timeline-desc">
                <b>Admin</b> created a new invoice for:
                <a href="{{url('/')}}#">Software</a>
              </div>
              <div class="timeline-date">4:15am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-warning">
                <span class="fa fa-pencil"></span>
              </div>
              <div class="timeline-desc">
                <b>Laura</b> edited her work experience</div>
              <div class="timeline-date">5:25am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-success">
                <span class="fa fa-usd"></span>
              </div>
              <div class="timeline-desc">
                <b>Admin</b> created a new invoice for:
                <a href="{{url('/')}}#">Apple Inc.</a>
              </div>
              <div class="timeline-date">7:45am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-dark light">
                <span class="fa fa-tags"></span>
              </div>
              <div class="timeline-desc">
                <b>Michael</b> Added a new item to his store:
                <a href="{{url('/')}}#">Ipod</a>
              </div>
              <div class="timeline-date">8:25am</div>
            </li>
            <li class="timeline-item">
              <div class="timeline-icon bg-dark light">
                <span class="fa fa-tags"></span>
              </div>
              <div class="timeline-desc">
                <b>Sara</b> Added a new item to his store:
                <a href="{{url('/')}}#">Watch</a>
              </div>
              <div class="timeline-date">9:35am</div>
            </li>
          </ol>

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

  <!-- HighCharts Plugin -->
  <script src="vendor/plugins/highcharts/highcharts.js"></script>

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

    var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];

    // Chart data
    var seriesData = [{
      name: 'Phones',
      data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]
    }, {
      name: 'Notebooks',
      data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }, {
      name: 'Desktops',
      data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]
    }, {
      name: 'Music Players',
      data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]
    }];

    var ecomChart = $('#ecommerce_chart1');

    if (ecomChart.length) {
      ecomChart.highcharts({
        credits: false,
        colors: highColors,
        chart: {
          backgroundColor: 'transparent',
          className: 'br-r',
          type: 'line',
          zoomType: 'x',
          panning: true,
          panKey: 'shift',
          marginTop: 45,
          marginRight: 1,
        },
        title: {
          text: null
        },
        xAxis: {
          gridLineColor: '#EEE',
          lineColor: '#EEE',
          tickColor: '#EEE',
          categories: ['Jan', 'Feb', 'Mar', 'Apr',
            'May', 'Jun', 'Jul', 'Aug',
            'Sep', 'Oct', 'Nov', 'Dec'
          ]
        },
        yAxis: {
          min: 0,
          tickInterval: 5,
          gridLineColor: '#EEE',
          title: {
            text: null,
          }
        },
        plotOptions: {
          spline: {
            lineWidth: 3,
          },
          area: {
            fillOpacity: 0.2
          }
        },
        legend: {
          enabled: true,
          floating: false,
          align: 'right',
          verticalAlign: 'top',
        },
        series: seriesData
      });
    }


  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
