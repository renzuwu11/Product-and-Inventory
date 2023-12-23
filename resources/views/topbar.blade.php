<header id="topbar" class="ph10">
        <div class="topbar-left">
          <ul class="nav nav-list nav-list-topbar pull-left">
            <li>
              <a href="{{url('/')}}">Dashboard</a>
            </li>
            <li>
              <a href="{{url('ecommerce_products')}}">Products</a>
            </li>
            <!-- <li>
              <a href="{{url('ecommerce_orders')}}">Orders</a>
            </li>
            <li class="active">
              <a href="{{url('ecommerce_vustomers')}}">Customers</a>
            </li> -->
            <li>
              <a href="{{url('ecommerce_settings')}}">Settings</a>
            </li>
          </ul>
        </div>
        <div class="topbar-right hidden-xs hidden-sm">
          <!-- <a href="{{url('ecommerce_orders')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> New Order</a> -->
          <a href="{{url('ecommerce_products')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-plus pr5"></span> Add Product</a>
          <!-- <a href="{{url('ecommerce_customers')}}" class="btn btn-default btn-sm light fw600 ml10">
            <span class="fa fa-user pr5"></span> Add Customer</a> -->
        </div>
      </header>