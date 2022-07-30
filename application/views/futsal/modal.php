<div class="modal fade" id="kode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login Member</h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('futsal/pengunjung');?>" method="post">

          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-3 control-label'>Email</label>
            <div class='col-sm-9'>
              <div style='background:#fff;' class='input-group col-sm-10'>
                <input type='text' class='required form-control' placeholder='Username...' name='email' required value="<?= set_value('email');?>"><?= form_error('email','<small class="text-danger">','</small>');?>
                <br><br><br>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-3 control-label'>Password</label>
            <div class='col-sm-9'>
              <div style='background:#fff;' class='input-group col-sm-10'>
                <input type='password' class='required form-control' placeholder='Password...' name='password' required><?= form_error('password','<small class="text-danger">','</small>');?>
                <br><br><br>
              </div>
            </div>
          </div>

          <div style='clear:both' class="modal-footer">
            <button type="submit" name='submit' class="btn btn-primary btn-sm">Login</button>
            <a href='<?= base_url('futsal/pengunjung/daftar');?>' class="btn btn-warning btn-sm">Daftar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="kode2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Petunjuk Pemesanan</h4>
      </div>
      <div class="modal-body">
        <p>1. Registrasi <br> 2. Login <br> 3. Pilih Lapangan yang akan dipesan <br> 4. Isi Form Pemesanan <br> 5. Upload Bukti Pembayaran <br> 6. Cetak Bukti Pemesanan <br> 7. Selesai </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X
        </button>
        <h4 class="modal-title" id="myModalLabel">Upload Bukti Pembayaran</h4>        
      </div>
      <div class="modal-body">
        <form action="<?= base_url('futsal/member_futsal/selesai');?>" method="post">
          <div class="form-group">
            <label class="control-label">
            Upload Poto :</label>
            <input type="file" name="bukti">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
            Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="kode3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Login Member</h4>
      </div>
      <div class="modal-body">
        <form action='index.php?view=home&cek' method='POST'>

          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-3 control-label'>Username</label>
            <div class='col-sm-9'>
              <div style='background:#fff;' class='input-group col-sm-10'>
                <input type='text' class='required form-control' placeholder='Username...' name='username' required>
                <br><br><br>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-3 control-label'>Password</label>
            <div class='col-sm-9'>
              <div style='background:#fff;' class='input-group col-sm-10'>
                <input type='text' class='required form-control' placeholder='Password...' name='username' required>
                <br><br><br>
              </div>
            </div>
          </div>

          <div style='clear:both' class="modal-footer">
            <button type="submit" name='submit' class="btn btn-primary btn-sm">Login</button>
            <a href='?page=daftar' class="btn btn-warning btn-sm">Daftar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>