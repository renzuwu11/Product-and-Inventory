<!DOCTYPE html>
<html>

<!-- Start: Meta, title, CSS, favicons, etc. -->
  @include('theme')
<!-- End: Meta, title, CSS, favicons, etc. -->

<body class="ecommerce-page">

<!-- Start: Main -->
<div id="main">

<!-- Start: Header -->
  @include('header')
<!-- End: Header -->

<!-- Start: Sidebar -->
<aside id="sidebar_left" class="nano nano-primary affix">
<!-- Start: Sidebar Left Content -->
  <div class="sidebar-left-content nano-content">
<!-- Start: Sidebar Menu -->
    <ul class="nav sidebar-menu">
      <li class="sidebar-label pt20">ADMIN</li>
      <li class="active">
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
          <li>
            <a href="{{url('ecommerce_request')}}">
              <span class="glyphicon glyphicon-envelope"></span> Request Products </a>
          </li>
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
        <li class="active">
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

  <!-- dashboard tiles -->
  <div class="row">
    <div class="col-xl-4">
        <div class="panel panel-tile text-center br-a br-grey">
            <div class="panel-body">
                <h1 class="fs30 mt5 mbn">{{ $totalItems }}</h1>
                <h6 class="text-system">TOTAL ITEMS IN INVENTORY</h6>
            </div>
            <div class="panel-footer br-t p12"></div>
        </div>
    </div>
    <!-- <div class="col-sm-4 col-xl-3">
        <div class="panel panel-tile text-center br-a br-grey">
            <div class="panel-body">
                <h1 class="fs30 mt5 mbn">4</h1>
                <h6 class="text-primary">RETURNED PRODUCTS</h6>
            </div>
            <div class="panel-footer br-t p12"></div>
        </div>
    </div> -->
    <div class="col-xl-4">
        <div class="panel panel-tile text-center br-a br-grey">
            <div class="panel-body">
                <h1 class="fs30 mt5 mbn">{{ $lowStockProducts }}</h1>
                <h6 class="text-warning">LOW STOCK PRODUCTS</h6>
            </div>
            <div class="panel-footer br-t p12"></div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="panel panel-tile text-center br-a br-grey">
            <div class="panel-body">
                <h1 class="fs30 mt5 mbn">{{ $zeroStockProducts }}</h1>
                <h6 class="text-danger">ZERO STOCK PRODUCTS</h6>
            </div>
            <div class="panel-footer br-t p12"></div>
        </div>
    </div>
</div>

  <!-- dashboard metric chart -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-6">
        <!-- dashboard metric chart -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Number of Sales per Category</span>
            </div>
            <div class="panel-body pn">
                <div id="ecommerce_bar1" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Total Stocks per Category</span>
            </div>
            <div class="panel-body pn">
                <div id="ecommerce_pie1" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>
</div>

  <!-- recent activity table -->
  <div class="panel">
    <div class="panel-heading">
        Top 5 Best Selling Products
    </div>
    <div class="panel-body pn">
      <div class="table-responsive">
        <table class="table admin-form theme-warning tc-checkbox-1 fs13">
          <thead>
            <tr class="bg-light">
              <th class="">Image</th>
              <th class="">Product Name</th>
              <th class="">ID</th>
              <th class="">Price</th>
              <th class="">Stock</th>
              <th class=""></th>
              <!-- <th class="text-right">Status</th> -->

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="w100">
                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/bracelet/Bracelet_noctus.png">
              </td>
              <td class="">Noctus Bracelet</td>
              <td class="">#21363</td>
              <td class="">₱1,299</td>
              <td class="">25</td>
              </td>
            </tr>
            <tr>
              <td class="w100">
                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/necklace/Necklace_astra.png">
              </td>
              <td class="">Astra Necklace</td>
              <td class="">#21362</td>
              <td class="">₱2,150</td>
              <td class="">30</td>
              <td class="text-right">
              </td>
            </tr>
            <tr>
              <td class="w100">
                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/necklace/Necklace_caelum.png">
              </td>
              <td class="">Caelum Necklace</td>
              <td class="">#15262</td>
              <td class="">₱4,550</td>
              <td class="">30</td>
              <td class="text-right">
              </td>
            </tr>
            <tr>
              <td class="w100">
                <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/ring/Ring_sol.png">
              </td>
              <td class="">Sol Ring</td>
              <td class="">#15262</td>
              <td class="">₱14,550</td>
              <td class="">30</td>
              <td class="text-right">
              </td>
            </tr>
            <td class="w100">
              <img class="img-responsive mw40 ib mr10" title="user" src="assets/img/products/ring/ring_caelum.png">
            </td>
              <td class="">Caelum Necklace</td>
              <td class="">#15262</td>
              <td class="">₱14,550</td>
              <td class="">30</td>
            <td class="text-right">
            </td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
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
      <a href="ecommerce_dashboard.html#">Ipod</a>
    </div>
    <div class="timeline-date">1:25am</div>
  </li>
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

// PieChart data
var seriesData = [{
name: 'Bracelets',
y: 5, // quantity
color: bgSystem
}, {
name: 'Necklaces',
y: 5, 
color: '#ff6961'
}, {
name: 'Rings',
y: 5, 
color: bgWarning
}, {
name: 'Sets',
y: 5, 
color: bgPrimary
}];

var ecomChart = $('#ecommerce_pie1');

if (ecomChart.length) {
      ecomChart.highcharts({
        credits: false,
        colors: [bgSystem, '#ff6961', bgWarning, bgPrimary],
        chart: {
          backgroundColor: 'transparent',
          className: 'br-r',
          type: 'pie',
          marginTop: 45,
          marginRight: 1,
        },
        title: {
          text: null
        }, //This part idk kung need pero baka pwede kaya diyan lang siya
        // plotOptions: {
        //     pie: {
        //         allowPointSelect: true,
        //         cursor: 'pointer',
        //         dataLabels: {
        //             enabled: true,
        //             format: '<b>{point.name}</b>: {point.y} items'
        //         }
        //     }
        // },
        series: [{
          name: 'Items',
          data: seriesData
        }]
      });
    }

//BarGraph data
var seriesData = [{
name: 'Bracelets',
y: 5, // quantity
color: bgSystem
}, {
name: 'Necklaces',
y: 15, 
color: '#ff6961'
}, {
name: 'Rings',
y: 20, 
color: bgWarning
}, {
name: 'Sets',
y: 10, 
color: bgPrimary
}];

//BarGraph data
var ecomChart = $('#ecommerce_bar1');

if (ecomChart.length) {
ecomChart.highcharts({
credits: false,
colors: [bgSystem, '#ff6961', bgWarning, bgPrimary],
chart: {
  backgroundColor: 'transparent',
  className: 'br-r',
  type: 'column', // Use 'column' for a bar graph
  marginTop: 45,
  marginRight: 1,
},
title: {
  text: null
},
xAxis: {
  categories: seriesData.map(item => item.name) // Use category names from seriesData
},
yAxis: {
  min: 0,
  title: {
    text: 'Quantity' // Update y-axis title
  }
},
legend: {
  enabled: false // Disable legend for a cleaner appearance
},
series: [{
  name: 'Items',
  data: seriesData.map(item => ({
  y: item.y,
  color: item.color
  })) // Use quantity values from seriesData
}]
});
}
});

</script>

@include('profile_change')

<!-- END: PAGE SCRIPTS -->

</body>

</html>