<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>DJstore Jakarta | Admin</title>

  <link rel="apple-touch-icon" href="{{('/assets/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{('/assets/images/favicon.ico')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/css/site.min.css')}}">

  <link rel="stylesheet" href="{{url('/assets/vendor/animsition/animsition.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendor/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendor/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendor/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendor/flag-icon-css/flag-icon.css')}}">

  <!-- Plugin -->
  <link rel="stylesheet" href="{{url('/assets/vendor/chartist-js/chartist.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendor/jvectormap/jquery-jvectormap.css')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{url('/assets/css/../fonts/weather-icons/weather-icons.css')}}">
  <link rel="stylesheet" href="{{url('/assets/css/dashboard/v1.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{url('/assets/fonts/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <script src="{{url('/assets/vendor/modernizr/modernizr.js')}}"></script>
  <script src="{{url('/assets/vendor/breakpoints/breakpoints.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="dashboard">
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

        <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
    <!--   <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button> -->
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
      <!--   <img class="navbar-brand-logo" src="{{url('/assets/images/logo.png" title="Remark')}}"> -->
        <span class="navbar-brand-text"> DJStore Admin</span>
      </div>
    </div>


    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <!-- <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li> -->
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="icon wb-power" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button" >Logout
            
               <!--  <img src="{{url('/assets/portraits/5.jpg" alt="...')}}"> -->
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="{{url('auth/logout')}}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
     <!--  <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div> -->
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">Clothing</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Master Produk</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{ url('masterproduk/add')}}">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add</span>
                  </a>
                </li> 
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Produk</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{ url('produk/add')}}">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add</span>
                  </a>
                </li>
              </ul>
            </li>
                        <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="structure">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Promosi</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{ url('promosi/add')}}">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Elements</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Stok</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{ url('stok/add')}}">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="tables">
                <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                <span class="site-menu-title">Pemesanan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{ url('pembelian/add')}}">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Custom</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="tables/bootstrap.html" data-slug="tables-bootstrap">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Clothing</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>


  <!-- Page -->
  <div class="page">
    <div class="page-content padding-30 container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
      <div class="panel">
          @yield('content')
      </div>
    </div>
  </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Remark</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by Indah Nur Alifah</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="{{url('/assets/vendor/jquery/jquery.js')}}"></script>
  <script src="{{url('/assets/vendor/bootstrap/bootstrap.js')}}"></script>
  <script src="{{url('/assets/vendor/animsition/jquery.animsition.js')}}"></script>
  <script src="{{url('/assets/vendor/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{url('/assets/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{url('/assets/vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{url('/assets/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

  <!-- Plugins -->
  <script src="{{url('/assets/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{url('/assets/vendor/intro-js/intro.js')}}"></script>
  <script src="{{url('/assets/vendor/screenfull/screenfull.js')}}"></script>
  <script src="{{url('/assets/vendor/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{url('/assets/vendor/skycons/skycons.js')}}"></script>
  <script src="{{url('/assets/vendor/chartist-js/chartist.min.js')}}"></script>
  <script src="{{url('/assets/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
  <script src="{{url('/assets/vendor/jvectormap/jquery-jvectormap.min.js')}}"></script>
  <script src="{{url('/assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js')}}"></script>
  <script src="{{url('/assets/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

  <!-- Scripts -->
  <script src="{{url('/assets/js/core.js')}}"></script>
  <script src="{{url('/assets/js/site.js')}}"></script>

  <script src="{{url('/assets/js/sections/menu.js')}}"></script>
  <script src="{{url('/assets/js/sections/menubar.js')}}"></script>
  <script src="{{url('/assets/js/sections/sidebar.js')}}"></script>

  <script src="{{url('/assets/js/configs/config-colors.js')}}"></script>
  <script src="{{url('/assets/js/configs/config-tour.js')}}"></script>

  <script src="{{url('/assets/js/components/asscrollable.js')}}"></script>
  <script src="{{url('/assets/js/components/animsition.js')}}"></script>
  <script src="{{url('/assets/js/components/slidepanel.js')}}"></script>
  <script src="{{url('/assets/js/components/switchery.js')}}"></script>
  <script src="{{url('/assets/js/components/matchheight.js')}}"></script>
  <script src="{{url('/assets/js/components/jvectormap.js')}}"></script>

  <script>
    $(document).ready(function($) {
      Site.run();

      (function() {
        var snow = new Skycons({
          "color": $.colors("blue-grey", 500)
        });
        snow.set(document.getElementById("widgetSnow"), "snow");
        snow.play();

        var sunny = new Skycons({
          "color": $.colors("blue-grey", 700)
        });
        sunny.set(document.getElementById("widgetSunny"), "clear-day");
        sunny.play();
      })();

      (function() {
        var lineareaColor = new Chartist.Line(
          '#widgetLineareaColor .ct-chart', {
            labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
            series: [
              [4, 4.5, 4.3, 4, 5, 6, 5.5],
              [3, 2.5, 3, 3.5, 4.2, 4, 5],
              [1, 2, 2.5, 2, 3, 2.8, 4]
            ]
          }, {
            low: 0,
            showArea: true,
            showPoint: false,
            showLine: false,
            fullWidth: true,
            chartPadding: {
              top: 0,
              right: 0,
              bottom: 0,
              left: 0
            },
            axisX: {
              showLabel: false,
              showGrid: false,
              offset: 0
            },
            axisY: {
              showLabel: false,
              showGrid: false,
              offset: 0
            }
          });
      })();

      (function() {
        var stacked_bar = new Chartist.Bar(
          '#widgetStackedBar .ct-chart', {
            labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
              'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
              'V', 'W', 'X', 'Y', 'Z'
            ],
            series: [
              [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                100, 140, 130, 120, 135, 110, 120, 105, 100, 105,
                90, 110, 100, 60
              ],
              [150, 190, 200, 190, 210, 200, 220, 230, 215, 195,
                180, 185, 200, 240, 230, 220, 235, 210, 220, 205,
                200, 205, 190, 210, 200, 160
              ]
            ]
          }, {
            stackBars: true,
            fullWidth: true,
            seriesBarDistance: 0,
            chartPadding: {
              top: 0,
              right: 30,
              bottom: 30,
              left: 20
            },
            axisX: {
              showLabel: false,
              showGrid: false,
              offset: 0
            },
            axisY: {
              showLabel: false,
              showGrid: false,
              offset: 0
            }
          });
      })();

      // timeline
      // --------
      (function() {
        var timeline_labels = [];
        var timeline_data1 = [];
        var timeline_data2 = [];
        var totalPoints = 20;
        var updateInterval = 1000;
        var now = new Date().getTime();

        function GetData() {
          timeline_labels.shift();
          timeline_data1.shift();
          timeline_data2.shift();

          while (timeline_data1.length < totalPoints) {
            var x = Math.random() * 100 + 800;
            var y = Math.random() * 100 + 400;
            timeline_labels.push(now += updateInterval);
            timeline_data1.push(x);
            timeline_data2.push(y);
          }
        }

        var timlelineData = {
          labels: timeline_labels,
          series: [
            timeline_data1,
            timeline_data2
          ]
        };

        var timelineOptions = {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        };
        new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
          timelineOptions);

        function update() {
          GetData();

          new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
            timelineOptions);
          setTimeout(update, updateInterval);
        }

        update();

      })();

      (function() {
        new Chartist.Line("#widgetLinepoint .ct-chart", {
          labels: ['1', '2', '3', '4', '5', '6'],
          series: [
            [1, 1.5, 0.5, 2, 2.5, 1.5]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: true,
          showLine: true,
          fullWidth: true,
          lineSmooth: false,
          chartPadding: {
            top: -10,
            right: -4,
            bottom: 10,
            left: -4
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });
      })();

      (function() {
        new Chartist.Bar("#widgetSaleBar .ct-chart", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K',
            'L', 'M', 'N', 'O', 'P', 'Q'
          ],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
              100, 140, 130, 120
            ]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 20,
            bottom: 30,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });
      })();

      (function() {
        new Chartist.Bar("#widgetWatchList .small-bar-one", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 130]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 0,
            bottom: 0,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

        new Chartist.Bar("#widgetWatchList .small-bar-two", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 120]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 0,
            bottom: 0,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

        new Chartist.Line("#widgetWatchList .line-chart", {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
            [20, 50, 70, 110, 100, 200, 230],
            [50, 80, 140, 130, 150, 110, 160]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: false,
          showLine: true,
          lineSmooth: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 10
          },
          axisX: {
            showLabel: true,
            showGrid: false,
            offset: 30
          },
          axisY: {
            showLabel: true,
            showGrid: true,
            offset: 30
          }
        });
      })();

      (function() {
        new Chartist.Line("#widgetLinepointDate .ct-chart", {
          labels: ['1', '2', '3', '4', '5', '6'],
          series: [
            [1, 1.5, 0.5, 2, 2.5, 1.5]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: true,
          showLine: true,
          fullWidth: true,
          lineSmooth: false,
          chartPadding: {
            top: 0,
            right: -4,
            bottom: 10,
            left: -4
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

      })();

    });
  </script>

</body>

</html>