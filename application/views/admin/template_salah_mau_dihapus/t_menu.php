<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="<?= base_url() ?>admin/menu/Dashboard" class="site_title"> <img src="<?= base_url('assets/backend') ?>/production/images/logojabar.png" style="width:35px; height: 40px;" > <span> Admin</span></a>
  </div>
  <div class="clearfix"></div>
  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="<?= base_url('assets/backend') ?>/production/images/img.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Selamat Datang,</span>
      <h2>Faisal Achmad</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->
  <br />
  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>Menu</h3>
      <ul class="nav side-menu">
        <li title="Dashboard"><a href="<?= base_url() ?>admin/common/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
        <li title="Kegiatan"><a href="<?= base_url() ?>admin/menu/Kegiatan"><i class="fa fa-edit"></i> Kegiatan </a></li>
      </ul>
    </div>
    <div class="menu_section">
      <h3>Laporan</h3>
      <ul class="nav side-menu">
        <li title="Rekapan Kegiatan"><a href="<?= base_url() ?>admin/laporan/Rekapankegiatan"><i class="fa fa-folder"></i> Rekapan Kegiatan</a></li>
      </ul>
    </div>
    <div class="menu_section">
      <h3>Pengaturan</h3>
      <ul class="nav side-menu">
        <li><a href="<?= base_url() ?>admin/pengaturan/Profile"><i class="fa fa-user"></i> Data Profile</a></li>
        <li><a><i class="fa fa-windows"></i> Data Master <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="#">Data Bagian</a></li>
            <li><a href="#">Data Subbagian</a></li>
            <li><a href="#">500 Error</a></li>
            <li><a href="#">Plain Page</a></li>
            <li><a href="#">Login Page</a></li>
            <li><a href="#">Pricing Tables</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-group"></i> Pengguna <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?php echo base_url();?>admin/user/bagian">Bagian</a></li>
            <li><a href="<?php echo base_url();?>admin/user/subbagian">Sub Bagian</a></li>
            <li><a href="<?php echo base_url();?>admin/user/user">User</a></li>
          </ul>
        </li>
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