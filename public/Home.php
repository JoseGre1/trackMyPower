<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">-

    <title>Power Tracking Services</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- Weather Incons -->
    <link href="vendors/weather-icons/css/weather-icons.min.css" rel="stylesheet">
    <!-- favicon icon -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <style>
      .iframe-container{
        position: relative;
        width: 100%;
        padding-bottom: 35%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
      }
      .iframe-container > *{
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
      }
      .iframe-container{
        margin-bottom: 25px;
        background: #eee;
      }
      .centered-canvas{
        padding-left: 0;
        padding-right: 0;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      .centered-ico{
        text-align: center;
        display: block;  
      }
      [data-icon]:before {
        font-family: icons; /* BYO icon font, mapped smartly */
        content: attr(data-icon);
        speak: none; /* Not to be trusted, but hey. */
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="Home.php" class="site_title"><i class="fa fa-bolt"></i> <span>TrackMyPower</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/pardo.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Mauricio</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="/Home.php">Home</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Charts and Stats<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/charts/data/">Data Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-download"></i> Export <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/export/tables/">Tables</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Play">
                <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="container">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/pardo.jpg" alt="">Mauricio
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="javascript:;"> Profile</a></li>
                      <li>
                        <a href="javascript:;">
                          <span>Settings</span>
                        </a>
                      </li>
                      <li><a href="javascript:;">Help</a></li>
                      <li><a href="index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul> 
                  </li>

                  <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <!--
                      <span class="badge bg-green">1</span> -->
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <!--
                      <li>
                        <a>
                          <span class="image"><img src="images/diego.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Diego Gómez</span>
                            <span class="time">1 hour ago</span>
                          </span>
                          <span class="message">
                            <br>
                            Hola Mauro, <br>
                            ¿Te satisface esta página? <br>
                            S2 <br>
                            DG<br>
                            PD: Gracias por venir<br>
                          </span>
                        </a>
                      </li>

                      <li>
                        <div class="text-center">
                          <a>
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                      -->
                    </ul>
                  </li>
                </ul>
              </div>  
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count" style="margin-bottom: 0px;">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px;">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="wi wi-thermometer"></i> Internal Temperature</span>
              <div id="intemperature" class="count" style="text-align:center"></div>
              <span id="in_last_refresh" class="count_bottom" style="display: block; text-align: center;"></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right" style="padding-bottom: 0px;">
              <span class="count_top" style="text-align:center; display:block;margin: 0 auto;"><i class="wi wi-humidity"></i> Internal Humidity</span>
              <div id="inhumidity" class="count" style="text-align:center"></div>
              <span id="in_last_refresh2" class="count_bottom" style="display: block; text-align: center;"></span>
            </div>
          </div>
          <!-- /top tiles -->

          <!-- first row -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <!-- Electrical widget-->
              <div class="col-md-4 col-sm-6 col-xs-12">
                <!--Panel -->
                <div id="panel_electrical" class="x_panel tile">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Electrical Variables</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-power-off"></i>Voltage: </br><span id="voltage_med1"></span></li></br>
                        <li><i class="fa fa-flash"></i> Power: </br><span id="power_med1"></span></li></br>
                        <li><!--<span aria-hidden="true" data-icon="Φ" style="padding-right:10px;color:#757679;font-size: 18px;font-weight: 400;"></span>-->
                          <i class="fa fa-tachometer"></i> PF: </br><span id="fp_med1">1.0</span>
                        </li></br>
                      </ul>
                      <div class="sidebar-widget" style="margin-top:0; width=100%; height=100%">
                        <h4>Energy</h4>
                        <canvas id="foo2"></canvas>
                        <div class="goal-wrapper">
                          <span class="gauge-value pull-left"></span>
                          <span id="gauge-text" class="gauge-value pull-left"></span>
                          <span id="goal-text" class="goal-value pull-right" style="float: left;">170</span>
                          </br>
                          <span style="font-weight: bold;text-align: center;display: block;">kWh</span>
                        </div>
                      </div>
                    </div>
                  </div> <!-- /Content -->
                </div> <!--/Panel -->
              </div>
              <!-- /Electrical widget -->

              <!-- Map widget -->
              <div class="col-md-8 col-sm-6 col-xs-12">
                <!--Panel -->
                <div id="panel_map" class="x_panel tile">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Location<small>Uninorte km5 - Bloque K - Mapuka</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content" style="height:100%;width:100%;"> 
                    <div class="dashboard-widget-content">
                      <div class="iframe-container" id="map" style="position: relative;overflow: hidden;margin-bottom: 0px;f">
                      </div>
                      <script type="text/javascript">
                        var map;
                        function initMap() {
                          var myLatLng = {lat: 11.020121, lng: -74.851302};
                          map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: 11.020121, lng: -74.851302},
                            zoom: 12
                          });

                          var iconBase = '/images/icons/markers/';
                          
                          var station = {
                            url: iconBase + 'marker.png',
                            scaledSize: new google.maps.Size(32, 32),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(16, 16)
                          };

                          var marker = new google.maps.Marker({
                            position: myLatLng,
                            icon: station,
                            map: map,
                            title: 'Uninorte km5 - Bloque K - Mapuka'
                          });
                          marker.setMap(map);
                        }
                      </script>
                      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBemXPT9yR9ExhHqV3ZxpNdUbEjRuLctPo&callback=initMap">
                      </script>
                    </div>
                  </div> <!--/Content -->
                </div> <!--/Panel -->
              </div> <!-- /Map widget -->
            </div>
          </div> 
          <!-- /first row -->
          <div class="clearfix"></div>
          <!-- second row -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <!-- Weather widget -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <!--Panel -->
                <div class="x_panel tile">
                  <!--Title -->
                  <div class="x_title">
                    <h2>Weather Report</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>                   
                  <!--/Title -->
                  <!--Content -->
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature">
                          <a id="fahrenheit" onclick="unitsTemperature(this)" href="javascript:void(0);"><span id="spanF">F</span></a>
                          <a id="celsius" onclick="" href="javascript:void(0);"><span id="spanC" style="font-weight: bold">C</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h1 id="temperature" style="text-align: right;"></h1>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row weather-days">
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>UV</b><br><small>[ Index ]</small></h2>
                          <h3 class=" " id="uv_index" style="text-align: center;"></h3>
                          <h2 style="font-size: 32px;"><i class="wi wi-hot centered-ico"></i></h2>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>Solar</b> <br><small>[ W/m<sup>2</sup> ]</small></h2>
                          <h3 class=" " id="solar_radiation" style="text-align: center;"></h3>
                          <canvas class="centered-canvas" id="clear-day" width="32" height="32"></canvas>                           
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>Humidity</b> <br><small>[ % ]</small></h2>
                          <h3 class=" " id="humidity" style="text-align: center;"></h3>
                          <h2 style="font-size: 32px;"><i class="wi wi-raindrops centered-ico"></i></h2>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="daily-weather">
                          <h2 class="day"><b>Wind</b> <br><small>[ km/h ]</small></h2>
                          <h3 class="" id=wind_speed style="text-align: center"></h3>
                          <canvas class="centered-canvas" height="32" width="32" id="wind"></canvas>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div> <!--/Content -->
                </div> <!--/Panel-->
              </div>
              <!-- /Weather Widget -->

            </div>
          </div>
          <!-- /second row -->

          <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
          <script>
            function auto_load(variable) {
              //var variable = "temperature";
              $.ajax({
                url: "loaddata.php",
                method: "POST",
                data: {
                  variable: variable
                },
                cache: false,
                success: function(data) {
                  var element = "#".concat(variable);
                  var putthis = data;
                  if (variable == "temperature"){
                    putthis = data + '°';
                  }
                  document.getElementById(variable).innerHTML = putthis;
                  //alert(element);
                }
              });
            }

            function ShowWheather() {
              auto_load("temperature"); //Call auto_load() function when DOM is Ready
              auto_load("humidity");
              auto_load("wind_speed");
              auto_load("uv_index");
              auto_load("solar_radiation");
            }
            // Electrical data refresh

            function auto_loadmed(variable) {
              //var variable = "temperature";
              $.ajax({
                url: "centraldata.php",
                method: "POST",
                data: {
                  variable: variable
                },
                cache: false,
                success: function(data) {
                  if (variable == "gauge-text") {
                    gauge.set(parseFloat(data));
                  } 
                  else {
                    var append_element;
                    switch(variable){
                      case 'voltage_med1':
                        append_element= data + ' V';
                        break;
                      case 'power_med1':
                        append_element= data + ' W';
                        break;
                      case 'energy_med1':
                        append_element= data + ' kWh';
                        break;
                      case 'fp_med1':
                        append_element= data;
                        break;
                      case 'date_time':              // obtener fecha
                        append_element= data;
                        variable = "in_last_refresh";
                        break;
                      case 'humidity':               // obtener humedad interna
                        append_element= data + '%';
                        variable="inhumidity";
                        break;
                      case 'temperature':            // obtener temperatura interna
                        append_element= data + '°C';
                        variable="intemperature";
                        break;  
                    }
                    //Para colocar las dos fechas en intemperature y inhumiditu
                    if (variable=="in_last_refresh"){  
                        //var element = "#".concat(variable);
                        // para inhum date_time
                        document.getElementById(variable).innerHTML = append_element;
                        //var element = "#".concat(variable+"2");
                        // para intemp date_time2
                        document.getElementById(variable+"2").innerHTML = append_element;
                    }
                    else{
                        // para las otras variables queda igual
                        //var element = "#".concat(variable); 
                        document.getElementById(variable).innerHTML = append_element; 
                    }
                  }
                }
              });
            }

            function ShowElectrical() {
              auto_loadmed("voltage_med1"); //Call auto_load() function when DOM is Ready
              auto_loadmed("power_med1");
              auto_loadmed("gauge-text");
              auto_loadmed("date_time");    // pide 
              auto_loadmed("humidity");     // los datos  
              auto_loadmed("temperature");  // internos 
              //auto_loadmed("goal-text");
              //auto_loadmed("fp_med1");
            }

            $(document).ready(function() {
              ShowElectrical();
              ShowWheather();
              setInterval(function() {
                  ShowWheather();
                  ShowElectrical();
              }, 10000);
              //Refresh auto_load() function after 10000 milliseconds
            });
          </script>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © Copyright 2016, Power Tracking Services GmbH
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>  <!-- /container body -->
    </div> <!-- /main_container -->

    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/vendors/Flot/jquery.flot.js"></script>
    <script src="/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/build/js/custom.min.js"></script>

    <!--Custom User Scripts By: JoseGre1 -->
    <!-- Temperature Units Change -->
    <script>
    current_unit = "celsius";
    var temp_before, temp_after;
    function unitsTemperature(element){
      if(element.id == "celsius")
      {
        if(current_unit == "fahrenheit")
        {
          temp_before = parseFloat(($("h1#temperature").text()).split("°")[0]);
          temp_after = (temp_before - 32) * 5/9;
          var newtext = "".concat(temp_after.toFixed(2),"°");
          document.getElementById("temperature").innerHTML = newtext;
          $("#".concat(element.id)).attr("onclick","");
          $("#fahrenheit").attr("onclick","unitsTemperature(this)");
          $("#spanC").css("font-weight","bold");
          $("#spanF").css("font-weight","normal");
          current_unit = "celsius";
        }
      }
      else if (element.id == "fahrenheit")
      {
        if(current_unit == "celsius")
        {
          temp_before = parseFloat(($("h1#temperature").text()).split("°")[0]);
          temp_after = temp_before*9/5 + 32;
          var newtext = "".concat(temp_after.toFixed(2),"°");
          document.getElementById("temperature").innerHTML = newtext;
          $("#".concat(element.id)).attr("onclick","");
          $("#celsius").attr("onclick","unitsTemperature(this)");
          $("#spanC").css("font-weight","normal");
          $("#spanF").css("font-weight","bold");
          current_unit = "fahrenheit";
        }
      }
      else
      {
        return;
      }
    }
    </script>
    <!--/Temperature Units Change -->
    
    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo2'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 170;
      gauge.animationSpeed = 32;
      //gauge.set(120);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->
    
    <!-- Responsive size of panels -->
    <script>
      $(document).ready(function() {
        $("canvas#foo2").css("height","100%");
        $("canvas#foo2").css("width","100%");
        var map_height = parseFloat($("div#panel_map").css("height"));
        var electrical_height = parseFloat($("div#panel_electrical").css("height"));
        if (electrical_height>map_height){
          $("div#panel_map").css("height",electrical_height);
        }
        else
        {
          $("div#panel_electrical").css("height",map_height);
        }
      });
      
      $(window).resize(function() {
        var map_height = parseFloat($("div#panel_map").css("height"));
        var electrical_height = parseFloat($("div#panel_electrical").css("height"));
        if (electrical_height>map_height){
          $("div#panel_map").css("height",electrical_height);
        }
        else
        {
          $("div#panel_electrical").css("height",map_height);
        }
      });
    </script>
  </body>
</html>
