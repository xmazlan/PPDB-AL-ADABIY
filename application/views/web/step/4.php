<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">
        <center>Data Orangtua/Wali</center>
      </strong></h2>
  </div>
  <div class="panel-body">
    <h2><strong class="text-success" style="color:#000000;">
        <center>Data Wali</center>
      </strong></h2>
    <hr />

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">KK <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="file" class="form-control" id="kk" name="userfile[]" placeholder="kk" required>
        <i class="fa fa-phone" style="margin-left:15px;"></i>
        <div id="error-userfile[0]" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">KTP <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="file" class="form-control" id="ktp" name="userfile[]" placeholder="ktp" required>
        <i class="fa fa-phone" style="margin-left:15px;"></i>
        <div id="error-userfile[1]" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone Ortu/Wali <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
        <input type="text" name="no_hp_ortu" class="form-control bg-blue class" maxlength="14" onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Orangtua/Wali" data-parsley-group="block3" data-parsley-errors-container='div[id="error-no_hp_ortu"]'>
        <i class="fa fa-phone" style="margin-left:15px;"></i>
        <div id="error-no_hp_ortu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>
  </div>
</div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
  <div>