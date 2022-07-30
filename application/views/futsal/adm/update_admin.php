<div class="container">
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
		<div class="modal-header">
        	<h3>Tambah Admin</h3>
        </div>
        <div style="margin-top:10px;">
        	<form class="form-horizontal" method="post" action="<?= base_url('futsal/adm/admin_futsal/admin_update');?>">
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input name="username" type="text" id="username" class="form-control" value="<?php echo $admin[0]->username;?>">
                        <input name="id" type="hidden" id="id" class="form-control" value="<?php echo $admin[0]->id_user;?>">
                        
                        <br>
                        <?= form_error('username','<small class="text-danger">','</small>');?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input name="password" type="password" id="password" class="form-control" value="<?php echo $admin[0]->password;?>">
                        <br>
                        <?= form_error('password','<small class="text-danger">','</small>');?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="nama">Nama</label>
                    <div class="controls">
                    	<input name="nama" type="text" id="nama" class="form-control" value="<?php echo $admin[0]->nama;?>">
                        <br>
                        <?= form_error('nama','<small class="text-danger">','</small>');?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="phone">Phone</label>
                    <div class="controls">
                    	<input name="phone" type="text" id="phone" class="form-control" value="<?php echo $admin[0]->phone;?>">
                        <br>
                        <?= form_error('phone','<small class="text-danger">','</small>');?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email</label>
                    <div class="controls">
                    	<input name="email" type="text" id="email" class="form-control" value="<?php echo $admin[0]->email;?>">
                        <br>
                        <?= form_error('email','<small class="text-danger">','</small>');?>
                    </div>
                </div>
                <div class="control-group">
                	<label class="control-label" for="simpan"></label>
                    <div class="controls">
                    	<input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                        <input name="batal" type="submit" id="batal" value="Batal" class="btn btn-warning">
					</div>
                </div>
            </form>
		</div>
	</div>
</div>