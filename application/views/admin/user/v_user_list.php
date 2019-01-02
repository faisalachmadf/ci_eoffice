<!-- page content -->
<div role="main">
<div class="page-title">
  <div class="title_left">
    <h3>Daftar <small>User</small></h3>
  </div>
  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 pull-right text-right">
      <a href="<?php echo base_url();?>admin/user/user/tambah/" class="btn btn-primary" role="button">Tambah</a>
    </div>
  </div>
</div>
<br>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Daftar User</h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatables" class="table-responsive table table-striped table-bordered">
        <thead>
          <tr>
            <th style="width: 1px;" class="text-center">&nbsp;</th>
            <th>Nama User</th>
            <td>&nbsp;</td>
          </tr>
        </thead>
        <tbody>
          <?php if ($users) { ?>
            <?php foreach ($users as $user) { ?>
            <tr>
              <td class="text-center">
                <input type="checkbox" name="selected[]" value="<?php echo $user->user_id;?>" />
              </td>
              <td><?php echo $user->nama;?></td>
              <td class="text-right">
                <a class="btn btn-info btn-xs" href="<?php echo base_url();?>admin/user/user/ubah/<?php echo $user->user_id;?>">Ubah</a>
                <?php if ($sesi_role == 'root') { ?>
                  <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>admin/user/user/hapus/<?php echo $user->user_id;?>">Hapus</a>
                <?php } ?>
              </td>
            </tr>
            <?php } ?>
          <?php } else { ?>
            <tr>
              <td class="text-center" colspan="3">Tidak ada data!</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="col-lg-5">
        &nbsp;
      </div>
      <div class="col-lg-7">
        <div class="dataTables_paginate paging_simple_numbers" id="datatable-checkbox_paginate">
          <ul class="pagination">
            <li><?php echo $paging; ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->