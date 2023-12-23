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
                  <!-- <span class="label label-xs bg-primary">New</span> -->
                </a>
              </li>
              <li>
                <a href="{{url('ecommerce_products')}}">
                  <span class="glyphicon glyphicon-tags"></span> Products </a>
              </li>
              <!-- <li>
                <a href="{{url('ecommerce_orders')}}">
                  <span class="fa fa-money"></span> Orders </a>
              </li> -->
              <!-- <li>
                <a href="{{url('ecommerce_customers')}}">
                  <span class="fa fa-users"></span> Customers </a>
              </li> -->
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