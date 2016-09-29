<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Power Tracking Services</title>

    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- favicon icon -->
    <link rel="icon" href="/favicon.png" type="image/png">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/Home.php" class="site_title"><i class="fa fa-bolt"></i> <span>TrackMyPower</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="/images/pardo.jpg" alt="..." class="img-circle profile_img">
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
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/images/pardo.jpg" alt="">Mauricio
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
                    <li><a href="/index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul> 
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                   <!-- <span class="badge bg-green">1</span> -->
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <!--
                    <li>
                      <a>
                        <span class="image"><img src="/images/diego.jpg" alt="Profile Image" /></span>
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
                    </li> -->
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!-- page title -->
            <div class="page-title">
              <div class="title_left">
                <h3>Export Data</h3>
              </div>
            </div>
            <!-- page title -->

            <!-- panel: Filter Results-->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tables <small>Filter Results</small></h2>
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
                  <div class="x_content">
                    Please choose the fields to be shown/exported: </br>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      </br>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                     <div id="calendar" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      </br>
                    </div>
                    <!-- JUST ANOTHER WAY TO ADD CHECKBOX IN BOOTSTRAP -->
                    <!--
                    <label>Fields:</label>
                    <p style="padding: 5px;">
                    <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                    <br />
                    <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                    <br />
                    <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                    <br />
                    <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                    <br />
                        <p>
                        -->
                                        
                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="ID" id="id"> ID
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Date/Time" id="date_time"> Date and Time
                        </label>
                      </div>
                    </div>         

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Temperature" id="temperature">  Temperature
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Humidity" id="humidity"> Humidity
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Wind Spd" id="wind_speed"> Wind Speed
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Voltage (M.1)" id="voltage_med1"> Voltage (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Current (M.1)" id="curr_med1"> Current (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Energy (M.1)" id="energy_med1"> Energy (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Power (M.1)" id="power_med1"> Power (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Latitude" id="latitude"> Latitude
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="Longitude" id="longitude"> Longitude
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="row">
                      <div class="col-md-6 col-xs-6">
                        </br>
                      </div>
                      <div class="col-md-6 col-xs-6">
                        <div class="text-right">
                          <label>
                            <button id="sel-all-btn" value="Select All" onclick="SelectAll()" type="button" class="btn btn-success">Select All</button>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="ln_solid"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div id="refreshTable">
                        <table id="datatable" class="table table-striped table-bordered bulk_action" style="opacity:0;">
                        </table>
                      </div> <!-- closing id="refreshTable"-->
                    </div> <!-- closing class="col-md-12 col-sm-12 col-xs-12" -->
                  </div> <!-- closing class="x_content"-->
                </div> <!-- closing class="x_panel"-->
              </div> <!-- closing class="col-md-12 col-sm-12 col-xs-12"-->
            </div> <!-- closing class="row"-->
          </div> <!--closing class=""--> 
        </div> <!-- closing class="right_col" role="main" --> 
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © Copyright 2016, Power Tracking Services GmbH
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div> <!-- closing class="main_container" --> 
    </div> <!-- closing class="container body" -->

    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/js/moment/moment.min.js"></script>
    <script src="/js/datepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="/vendors/starrr/dist/starrr.js"></script>
    <!-- Datatables -->
    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!--<script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script> -->
    <script src="/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/build/js/custom.min.js"></script>
    <!-- Custom User Scripts and Functions / CREATED BY: JoseGre1 -->
    <script src="js/manage_button.js"></script>
    <script src="js/refreshTable.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        //search and draw table function
        drawTable = function (){
          if (typeof (myTable) !== 'undefined') {
            $.fn.dataTable.ext.search.push(function( settings, data, dataIndex ) {
              
              if (typeof picker_obj === 'undefined'){
                startdate = moment().subtract(1, 'month').format('YYYY-MM-DD H:mm');
                enddate = moment().format('YYYY-MM-DD H:mm');
              }
              else{
                startdate = picker_obj.startDate.format('YYYY-MM-DD H:mm');
                enddate = picker_obj.endDate.format('YYYY-MM-DD H:mm');
              }

              dateMin = startdate.substring(0,4) + startdate.substring(5,7) + startdate.substring(8,10) + startdate.substring(11,12)+startdate.substring(13,15);
              dateMax = enddate.substring(0,4) + enddate.substring(5,7) + enddate.substring(8,10) + enddate.substring(11,12)+enddate.substring(13,15);
              
              if($("input#id").is(':checked')){
               var date_column = data[1] || 0; // use data for the date/time column
              }
              else
              {
                var date_column = data[0] || 0; // use data for the date/time column
              }

              date_column = date_column.substring(0,4) + date_column.substring(5,7) + date_column.substring(8,10) + date_column.substring(11,12)+date_column.substring(13,15);
              
              if ( dateMin === "" && dateMax === "" )
              {
                return true;
              }
              else if ( dateMin <= date_column && dateMax === "")
              {
                return true;
              }
              else if ( dateMax >= date_column && dateMin === "")
              {
                return true;
              }
              else if (dateMin <= date_column && dateMax >= date_column)
              {
                return true;
              }
              return false;
            });
            myTable.draw();
          }
        }
        
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#calendar span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        startdate = moment().subtract(1, 'month').format('YYYY-MM-DD H:mm');
        enddate = moment().format('YYYY-MM-DD H:mm');
        drawTable();

        var optionSet1 = {
          startDate: moment().subtract(1, 'month'),
          endDate: moment(),
          minDate: '07/01/2016',
          
          dateLimit: {
            days: 365
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: true,
          timePickerIncrement: 10,
          timePicker12Hour: false,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(7, 'days'), moment()],
            'Last 30 Days': [moment().subtract(1, 'month'), moment()],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'right',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };

        $('#calendar span').html(moment().subtract(1, 'month').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#calendar').daterangepicker(optionSet1, cb);

        $('#calendar').on('apply.daterangepicker', function(ev, picker) {
        });

        $('#calendar').on('hide.daterangepicker', function(ev, picker) {
          console.log("hide event fired");
          picker_obj = picker;
          //searching the date range insinde the table
          drawTable();
        });

        $('#options1').click(function() {
          $('#calendar').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#calendar').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#calendar').data('daterangepicker').remove();
        });

        // Event listener to the two range filtering inputs to redraw on input
        $('#calendar').on('show.daterangepicker', function() {
          console.log("show event fired");
          
        });
        
        $('#calendar').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
      });
    </script>
  </body>
</html>

