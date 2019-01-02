<!-- page content -->
<div role="main">
<div class="page-title">
  <div class="title_left">
    <h3>Ubah <small>Sub Bagian</small></h3>
  </div>
  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 pull-right text-right">
      <a href="<?php echo base_url();?>admin/user/subbagian/" class="btn btn-defailt" role="button">Kembali</a>
    </div>
  </div>
</div>
<br>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Ubah Sub Bagian</h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form role="form" action="<?php base_url('admin/user/subbagian/ubah') ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
        <input type="hidden" name="id" value="<?php echo $subbagian->subbagian_id?>" />
        
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Bagian</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="bagian_id" class="form-control">
              <option value="0">Silahkan Pilih</option>
              <?php foreach ($bagians as $bagian) { ?>
                <?php if ($bagian->bagian_id == $subbagian->bagian_id) { ?>
                <option value="<?php echo $subbagian->bagian_id;?>" selected="selected"><?php echo $bagian->nama;?></option>
                <?php } else { ?>
                <option value="<?php echo $bagian->bagian_id;?>"><?php echo $bagian->nama;?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-subbagian">Nama Bagian <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="nama" value="<?php echo $subbagian->nama; ?>" class="form-control col-md-7 col-xs-12"/>
            <?php echo form_error('nama'); ?>
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- /page content -->

       
