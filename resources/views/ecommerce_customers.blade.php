<!DOCTYPE html>
<html>

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
    <a class="request-fullscreen toggle-active" href="{{url('/ecommerce_customers')}}#">
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
    <a href="{{url('/ecommerce_dashboard')}}#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
      <img id="profile-picture-dropdown" src="" alt="avatar" class="mw30 br64 mr15"> <b class="surnamebold">Kho</b>.Kim
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
        <a class="accordion-toggle menu-open" href="{{url('/ecommerce_dashboard')}}#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
          <span class="sidebar-title">Ecommerce</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="{{url('ecommerce_dashboard')}}">
              <span class="glyphicon glyphicon-shopping-cart"></span> Dashboard
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
          <li class="active">
            <a href="{{url('ecommerce_customers')}}">
              <span class="fa fa-users"></span> Customers </a>
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
        <li>
          <a href="{{url('ecommerce_orders')}}">Orders</a>
        </li>
        <li class="active">
          <a href="{{url('ecommerce_customers')}}">Customers</a>
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

          <!-- create new order panel -->
          <div class="panel mb25 mt5">
            <div class="panel-heading">
              <span class="panel-title hidden-xs"> Add New Customer</span>
              <ul class="nav panel-tabs-border panel-tabs">
                <li class="active">
                  <a href="{{url('ecommerce_customers')}}#tab1_1" data-toggle="tab">General</a>
                </li>
                <li>
                  <a href="{{url('ecommerce_customers')}}#tab1_2" data-toggle="tab">Settings</a>
                </li>
                <li>
                  <a href="{{url('ecommerce_customers')}}#tab1_3" data-toggle="tab">Billing</a>
                </li>
              </ul>
            </div>
            <div class="panel-body p20 pb10">
              <div class="tab-content pn br-n admin-form">
                <div id="tab1_1" class="tab-pane active">

                  <div class="section row mbn">
                    <div class="col-md-9 pl15">
                      <div class="section row mb15">
                        <div class="col-xs-6">
                          <label for="name1" class="field prepend-icon">
                            <input type="text" name="name1" id="name1" class="event-name gui-input br-light light" placeholder="First Name">
                            <label for="name1" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                        <div class="col-xs-6">
                          <label for="name2" class="field prepend-icon">
                            <input type="text" name="name2" id="name2" class="event-name gui-input br-light light" placeholder="Last Name">
                            <label for="name2" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="section row mb15">
                        <div class="col-xs-6">
                          <label for="password" class="field prepend-icon">
                            <input type="password" name="password" id="password" class="event-name gui-input br-light light" placeholder="Password">
                            <label for="name2" class="field-icon">
                              <i class="fa fa-lock"></i>
                            </label>
                          </label>
                        </div>
                        <div class="col-xs-6">
                          <label for="password2" class="field prepend-icon">
                            <input type="password2" name="password2" id="password2" class="event-name gui-input br-light light" placeholder="Confirm Password">
                            <label for="password2" class="field-icon">
                              <i class="fa fa-unlock"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="section mb15">
                        <label for="email" class="field prepend-icon">
                          <input type="text" name="email" id="email" class="event-name gui-input br-light bg-light" placeholder="Customer Email Address">
                          <label for="email" class="field-icon">
                            <i class="fa fa-envelope-o"></i>
                          </label>
                        </label>
                      </div>
                      <div class="section mb10">
                        <input id="tagsinput" class="bg-light" type="text" value="IBM, Software, Friend">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb15">
                          <img data-src="holder.js/100%x147" alt="holder">
                        </div>
                        <span class="button btn-system btn-file btn-block ph5">
                          <span class="fileupload-new">Change</span>
                          <span class="fileupload-exists">Change</span>
                          <input type="file">
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- end section row -->

                </div>
                <div id="tab1_2" class="tab-pane">

                  <div class="section row mbn">
                    <div class="col-xs-6 pr15">
                      <div class="section mb10">
                        <label for="cust-phone" class="field prepend-icon">
                          <input type="text" name="cust-phone" id="cust-phone" class="event-name gui-input bg-light br-light" placeholder="Customer Phone Number...">
                          <label for="cust-phone" class="field-icon">
                            <i class="fa fa-phone"></i>
                          </label>
                        </label>
                      </div>
                      <div class="section mb10">
                        <label for="customer-group" class="field select">
                          <select id="customer-group" name="customer-group">
                            <option value="0" selected="selected">Customer Group...</option>
                            <option value="1">Vendor</option>
                            <option value="2">Supplier</option>
                            <option value="3">Distributor</option>
                          </select>
                          <i class="arrow double"></i>
                        </label>
                      </div>
                      <div class="section">
                        <label for="customer-language" class="field select">
                          <select id="customer-language" name="customer-language">
                            <option value="0" selected="selected">Customer Language...</option>
                            <option value="1">English</option>
                            <option value="2">Spanish</option>
                            <option value="3">German</option>
                          </select>
                          <i class="arrow double"></i>
                        </label>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <label class="field option">
                        <input type="checkbox" name="info">
                        <span class="checkbox mr10"></span> Customer is Tax Exempt
                      </label>
                      <br>
                      <label class="field option mt15">
                        <input type="checkbox" name="info">
                        <span class="checkbox mr10"></span> Customer Accepts Marketing
                      </label>
                      <br>
                      <label class="field option mt15">
                        <input type="checkbox" name="info">
                        <span class="checkbox mr10"></span> Activate/Enable Account?
                      </label>
                      <hr class="alt short mv15">
                      <p class="text-muted">
                        <span class="fa fa-exclamation-circle text-warning fs15 pr5"></span> Grants the customer limited store access.</p>
                    </div>
                  </div>

                  <hr class="short alt mtn">

                  <div class="section mb15">
                    <label class="field prepend-icon">
                      <textarea class="gui-textarea br-light bg-light" id="cust-note" name="cust-note" placeholder="Customer Notes"></textarea>
                      <label for="cust-note" class="field-icon">
                        <i class="fa fa-edit"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

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
                  <label class="field select">
                    <select id="filter-purchases" name="filter-purchases">
                      <option value="0">Filter by Purchases</option>
                      <option value="1">1-49</option>
                      <option value="2">50-499</option>
                      <option value="1">500-999</option>
                      <option value="2">1000+</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
                <div class="col-md-4">
                  <label class="field select">
                    <select id="filter-group" name="filter-group">
                      <option value="0">Filter by Group</option>
                      <option value="1">Customers</option>
                      <option value="2">Vendors</option>
                      <option value="3">Distributors</option>
                      <option value="4">Employees</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
                <div class="col-md-4">
                  <label class="field select">
                    <select id="filter-status" name="filter-status">
                      <option value="0">Filter by Status</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                      <option value="3">Suspended</option>
                      <option value="4">Online</option>
                      <option value="5">Offline</option>
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
                      <th class="">Avatar</th>
                      <th class="">Name</th>
                      <th class="">Email</th>
                      <th class="">Registered</th>
                      <th class="">Purchases</th>
                      <th class="">Total Spent</th>
                      <th class="text-right">Status</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                      </td>
                      <td class="">Dave Robert</td>
                      <td class="">dave@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">222</td>
                      <td class="">$3,600</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                      </td>
                      <td class="">Sara Marshall</td>
                      <td class="">sara@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">16</td>
                      <td class="">$4,200</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/3.jpg">
                      </td>
                      <td class="">Larry Kingster</td>
                      <td class="">larry@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">46</td>
                      <td class="">$16,200</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                      </td>
                      <td class="">Emily Roundwheel</td>
                      <td class="">emily@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">06</td>
                      <td class="">$1,400</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                      </td>
                      <td class="">Nick Cannoneer</td>
                      <td class="">sara@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">43</td>
                      <td class="">$13,600</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/6.jpg">
                      </td>
                      <td class="">Morgan Lunar</td>
                      <td class="">morgan@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">11</td>
                      <td class="">$3,200</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                      </td>
                      <td class="">Emily Roundwheel</td>
                      <td class="">emily@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">06</td>
                      <td class="">$1,400</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                      </td>
                      <td class="">Sara Marshall</td>
                      <td class="">sara@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">16</td>
                      <td class="">$4,200</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                      </td>
                      <td class="">Roger Rover</td>
                      <td class="">roger@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">33</td>
                      <td class="">$17,100</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                      </td>
                      <td class="">Laura Smileton</td>
                      <td class="">laura@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">12</td>
                      <td class="">$3,100</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="w50">
                        <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                      </td>
                      <td class="">Dave Robert</td>
                      <td class="">dave@company.com</td>
                      <td class="">12/03/2014</td>
                      <td class="">222</td>
                      <td class="">$3,600</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Edit</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Contact</a>
                            </li>
                            <li class="divider"></li>
                            <li class="active">
                              <a href="{{url('ecommerce_customers')}}#">Active</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Suspend</a>
                            </li>
                            <li>
                              <a href="{{url('ecommerce_customers')}}#">Remove</a>
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

            <h4> Find Customer</h4>

            <hr class="short">

            <div class="section mb10">
              <label for="customer-id" class="field prepend-icon">
                <input type="text" name="customer-id" id="customer-id" class="gui-input" placeholder="Customer ID #">
                <label for="customer-id" class="field-icon">
                  <i class="fa fa-user"></i>
                </label>
              </label>
            </div>
            <div class="section mb10">
              <label for="customer-name" class="field prepend-icon">
                <input type="text" name="customer-name" id="customer-name" class="gui-input" placeholder="Customer Name">
                <label for="customer-name" class="field-icon">
                  <i class="fa fa-user"></i>
                </label>
              </label>
            </div>
            <div class="section mb25">
              <label for="customer-email" class="field prepend-icon">
                <input type="text" name="customer-email" id="customer-email" class="gui-input" placeholder="Customer Email">
                <label for="customer-email" class="field-icon">
                  <i class="fa fa-envelope-o"></i>
                </label>
              </label>
            </div>

            <h5><small>Search Country</small></h5>
            <div class="section mb15">
              <label class="field select">
                <select id="customer-location" name="customer-location">
                  <option value="0" selected="selected">Filter by Location</option>
                  <option value="1">United States</option>
                  <option value="2">Europe</option>
                  <option value="3">Asia</option>
                  <option value="4">India</option>
                </select>
                <i class="arrow double"></i>
              </label>
            </div>

            <h5><small>Search Company</small></h5>
            <div class="section mb15">
              <label class="field select">
                <select id="customer-company" name="customer-company">
                  <option value="0" selected="selected">Filter by Company</option>
                  <option value="1">Apple</option>
                  <option value="2">Sony</option>
                  <option value="3">Envato</option>
                  <option value="4">Microsoft</option>
                  <option value="5">Google</option>
                </select>
                <i class="arrow double"></i>
              </label>
            </div>

            <h5><small>Registration Date</small></h5>
            <div class="section row">
              <div class="col-md-6">
                <label for="date1" class="field prepend-icon">
                  <input type="text" name="date1" id="date1" class="gui-input" placeholder="01/01/14">
                  <label for="date1" class="field-icon">
                    <i class="fa fa-calendar"></i>
                  </label>
                </label>
              </div>
              <div class="col-md-6">
                <label for="date2" class="field prepend-icon">
                  <input type="text" name="date2" id="date2" class="gui-input" placeholder="06/01/15">
                  <label for="date2" class="field-icon">
                    <i class="fa fa-calendar"></i>
                  </label>
                </label>
              </div>
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

    // Init tagsinput plugin
    $("input#tagsinput").tagsinput({
      tagClass: function(item) {
        return 'label label-default';
      }
    });

  });
  </script>
  
  @include('profile_change')

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
