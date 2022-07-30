<div class="container">
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
		<div class="modal-header">
        	<h3>Edit Member</h3>
        </div>
        <div style="margin-top:10px;">
        	<form class="form-horizontal" name="form1" method="post" action="<?= base_url('futsal/adm/admin_futsal/member_update?kode='.$member[0]->id_user);?>">
                <div class="control-group">
                    <label class="control-label" for="kode">Nama Lengkap</label>
                    <div class="controls">
                        <input name="nama" type="text" id="nama" class="form-control" value='<?php echo $member[0]->nama_lengkap;?>'>
						 <input name="kode" type="hidden" id="kode" class="input-small" value='<?php echo $member[0]->id_user;?>'>
						 <br>
						 <?= form_error('nama','<small class="text-danger">','</small>');?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="nama">Jenis Kelamin</label>
                    <div class="controls">
                    	<input name="jk" type="text" id="jk" class="form-control" value='<?php echo $member[0]->jenis_kelamin;?>'>
                    	<br>
                    	<?= form_error('jk','<small class="text-danger">','</small>');?>
                    </div>
                </div>
				<div class="control-group">
                    <label class="control-label" for="nama">Email</label>
                    <div class="controls">
                    	<input name="email" type="text" id="email" class="form-control" value='<?php echo $member[0]->email;?>'>
                    	<br>
                    	<?= form_error('email','<small class="text-danger">','</small>');?>
                    </div>
                </div>
				<div class="control-group">
                    <label class="control-label" for="nama">No Hp</label>
                    <div class="controls">
                    	<input name="nohp" type="text" id="nohp" class="form-control" value='<?php echo $member[0]->hp;?>'>
                    	<br>
                    	<?= form_error('nohp','<small class="text-danger">','</small>');?>
                    </div>
                </div>
               
                <div class="control-group">
                	<label class="control-label" for="update"></label>
                    <div class="controls">
                    	<input name="update" type="submit" id="update" value="Update" class="btn btn-success">
                        <input name="batal" type="submit" id="batal" value="Batal" class="btn btn-warning">
					</div>
                </div>
            </form>
		</div>
	</div>
</div>