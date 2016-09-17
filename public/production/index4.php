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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- favicon icon -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index4.php" class="site_title"><i class="fa fa-bolt"></i> <span>TrackMyPower</span></a>
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
                    <li><a href="index4.php">Home</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index4.php">Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Charts and Stats<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Data Charts</a></li>
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
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul> 
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
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
                <h3>Export to file</h3>
              </div>
            </div>
            <!-- page title -->

            <!-- panel: Filter Results-->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Filter results</h2>
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
                    </br>
                      Please choose the fields to be shown. </br>
                    <div class="col-md-12 col-sm-12 col-xs-12"></div>
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
                          <input type="checkbox" class="flat" name="toShow" value="id"> ID
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Date and Time
                        </label>
                      </div>
                    </div>         

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Temperature
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Wind Speed
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Voltage (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Current (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Energy (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Power (Meter 1)
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Latitude
                        </label>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" name="toShow" value="id"> Longitude
                        </label>
                      </div>
                    </div>
                  </div>
                  <label>
                    <button onclick="SelectAll()" name="export_excel" id="submit" class="btn btn-success" >Select All</button>
                  </label>
                  <div class="ln_solid"></div>
                  
                  <form method="post" action="">
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" ><a href="index.html"></a>Cancel
                        </button>
                        <button onclick="conta()" name="export_excel" id="submit" class="btn btn-success" value="Descargar excel" >Submit
                        </button>
                      </div>
                    </div>
                  </form>

              <!-- Tablaa-->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabla<small>metcentraldata</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <!-- Crear la tabla con el phpe  -->
                         <?php
                         $connect = mysqli_connect("127.5.177.130:3306","mpardo","pardo1234","trackmypower");    
                         $output = '';  
                         $a=1;

                              if(isset($_POST["export_excel"]))  {

                              $sql = "SELECT * FROM metcentraldata ORDER BY id DESC";  
                              $result = mysqli_query($connect, $sql);  
                              if(mysqli_num_rows($result) > 0)  
                              {     

                               $output .= '                    <table id="datatable-buttons" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid">                               <thead>  
                                             <tr role="row"> ';
                                  for($i=1;$i<11;$i++){
                                    if($_POST['para'.$i]!='0'){
                                        
                                        $output .='<th  class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">'.$_POST['para'.$i].'</th>';
                                    }
                                  }        
                                   $output .='</tr>
                                   </thead>
                                   <tbody>';  


                                   while($row = mysqli_fetch_array($result))  
                                   {         $output.='<tr>
                                          ';
                                              for($i=1;$i<11;$i++){
                                                  if($_POST['para'.$i]!='0'){
                                                      
                                                      $output .='<td>'.$row[$_POST['para'.$i]].'</td>';
                                                  }
                                              }    
                                                $output.='</tr>';
                                   }  
                                   $output .= '</tbody> 
                                   </table> ';   
                                   echo $output;  
                              }  
                            }

                           
                        ?>  
                      <!-- Fin del phpe -->
                        </div>
                      </div>
                    </div>
                    <!-- Fin de la tabla -->             
                </div>
              </div>
            </div>
          </div>
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
      </div>
    </div>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- Custom User Scripts and Functions / CREATED BY: JoseGre1 -->
    <script src="../build/js/table_management.js"></script>

  </  body>
</html>