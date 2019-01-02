 <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/backend') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/backend') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/backend') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/backend') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/backend') ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('assets/backend') ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/backend') ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend') ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/backend') ?>/build/css/custom.min.css" rel="stylesheet">
  </head>
 <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" action="<?= base_url();?>admin/common/login/auth" method="post" enctype="multipart/form-data" class="form col-md-12 center-block">
              <h1> Sistem Laporan Terpadu</h1>
              <div>
                <input type="text" class="form-control" placeholder="Masukan username anda" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Masukan password anda" name="password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit">Masuk <i class="fa fa-sign-in"></i></button>
                <hr/>
                <p>Kamu lupa password? <font color="red"><b>Segera Hubungi Admin Utama! </b></font></p>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <img src="<?= base_url('assets/backend') ?>/production/images/logojabar.png" style="width:45px; height: 50px;" > 
                   <p>©2018 Biro Pemerintahan dan Kerja Sama </p>
                  <p>All Rights Reserved.</p><br>
                  <?php echo print_r($this->session->userdata);?>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

 