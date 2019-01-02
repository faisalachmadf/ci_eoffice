<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico" type="image/ico" />
<title><?= $title; ?> </title>
<link href="<?= base_url('assets/backend') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
<link href="<?= base_url('assets/backend') ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url('assets/backend') ?>/build/css/custom.min.css" rel="stylesheet">
<?php
foreach($css as $file){
  echo "\n\t\t";
  ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
} echo "\n\t";
foreach($js as $file){
    echo "\n\t\t";
    ?><script src="<?php echo $file; ?>"></script><?php
} echo "\n\t";
?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url() ?>admin/common/Dashboard" class="site_title"> <img src="<?= base_url('assets/backend') ?>/production/images/logojabar.png" style="width:35px; height: 40px;" ></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?= base_url('assets/backend') ?>/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <h2><?php echo $this->session->nama;?></h2>
              <span><?php echo $this->session->username;?></span>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->

          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <!-- {F} penambahan Menu Input Surat Keluar -->
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li title="Dashboard"><a href="<?= base_url() ?>admin/common/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <li title="Kegiatan"><a href="#"><i class="fa fa-edit"></i> Kegiatan </a></li>
                <li title="Input Surat Keluar"><a href="#"><i class="fa fa-send"></i> Input Surat Keluar </a></li>
              </ul>
              <!-- END -->
            </div>

            <!-- {F} penambahan Menu Monitoring Surat Keluar -->
            <div class="menu_section">
              <h3>Monitoring</h3>
              <ul class="nav side-menu">
                <li title="Monitoring Surat Keluar"><a href="#"><i class="fa fa-eye"></i> Monitoring Surat Keluar</a></li>
              </ul>
            </div>
            <!--  -->

            <div class="menu_section">
              <h3>Laporan</h3>
              <ul class="nav side-menu">
                <li title="Rekapan Kegiatan"><a href="<?= base_url() ?>admin/laporan/Rekapankegiatan"><i class="fa fa-folder"></i> Rekapan Kegiatan</a></li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Pengaturan</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url();?>admin/user/profile"><i class="fa fa-user"></i> Data Profile</a></li>
                
                 
                <li><a><i class="fa fa-windows"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url();?>admin/user/bagian">Bagian</a></li>
                    <li><a href="<?php echo base_url();?>admin/user/subbagian">Sub Bagian</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-group"></i> Pengguna <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    
                    <li><a href="<?php echo base_url();?>admin/user/user">User</a></li>
                  </ul>
                </li>
              
              <!-- end -->
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top">
              <span class="glyphicon glyphicon-" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top">
              <span class="glyphicon glyphicon-" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top">
              <span class="glyphicon glyphicon" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" class="tombol_logout" href="<?= base_url() ?>admin/common/logout" title="logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
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
                  <img src="images/img.jpg" alt=""><?php echo $this->session->nama;?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                 
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  
                  <li><a class="tombol_logout" href="<?= base_url() ?>admin/common/logout"> <i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
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
        <?php echo $output;?>
      </div>
      <!-- /page content -->
       <!-- footer content -->
      <footer>
     
        <div class="pull-right">
        <?php echo print_r($this->session->userdata);?>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
    <!-- jQuery -->
  <script src="<?= base_url('assets/backend') ?>/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('assets/backend') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('assets/backend') ?>/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url('assets/backend') ?>/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="<?= base_url('assets/backend') ?>/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="<?= base_url('assets/backend') ?>/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?= base_url('assets/backend') ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url('assets/backend') ?>/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="<?= base_url('assets/backend') ?>/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="<?= base_url('assets/backend') ?>/vendors/Flot/jquery.flot.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="<?= base_url('assets/backend') ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="<?= base_url('assets/backend') ?>/vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/backend') ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?= base_url('assets/backend') ?>/vendors/moment/min/moment.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="<?= base_url('assets/backend') ?>/build/js/custom.min.js"></script>
  <!-- Datatables -->
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url('assets/backend') ?>/vendors/pdfmake/build/vfs_fonts.js"></script>
  <!-- Sweet Alert Scripts -->
  <script src="<?= base_url('assets/') ?>/sweetalert/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets/') ?>/sweetalert/myscript.js"></script>

  <!-- {F} Script Disni tentang Logout dipindahkan ke Assets/Sweetalert/myscript.js agar dijadikan Global -->
</body>
</html>