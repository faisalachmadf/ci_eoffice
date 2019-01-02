<!-- page content -->
<div role="main">
<div class="page-title">
  <div class="title_left">
    <h3>Data <small>Profile Admin</small></h3>
  </div>

  <!-- {F} menambahkan Flash Message-->
  <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');?>"></div>
  
</div>
<br>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Profile</h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3> <?php echo $this->session->nama;?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-briefcase user-profile-icon"></i> Jabatan : <?php echo $this->session->jabatan;?>
                        </li>
                        <li><i class="fa fa-user"></i> Bagian : <?php echo $this->session->bagian;?>
                        </li>
                      </ul>

                      <a class="btn btn-success" href="<?php echo base_url();?>admin/user/profile/ubah/"><i class="fa fa-edit m-right-xs"></i> Ubah Profile</a>
                      <br />
                      

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Biodata</h2>
                        </div>
                        <div class="col-md-6">
                          
                        </div>
                      </div>
                   	<br>
                   	disini diisi Field User lainnya
                    </div>
                  
      
      
      

    </div>
  </div>
</div>
</div>
<!-- /page content -->

