<!DOCTYPE html>
<html>
  <head>
    <?php echo $_header;?>
  </head>
 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php echo $_menu;?>
        </div>
       <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <?php echo $_navigasi;?>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <?php echo $_content;?>
        </div>
        <!-- /page content -->
         <!-- footer content -->
        <footer>
          <?php echo $_footer;?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <?php echo $_js;?>
  </body>
</html>