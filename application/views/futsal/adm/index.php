<?= $this->session->flashdata('pesan');?>
<div class="container">
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
		<div>
        	<div class="modal-header">
            	<h3>List Admin</h3>
            </div>
        	<div style="margin-top:10px" class="text-right">
        		<a href="<?= base_url('futsal/autentifikasi/tambah_admin');?>" class="btn btn-danger">
                    Tambah Data     
                </a>
            </div>
            <div style="margin-top:10px">
                <table class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                    	<td width="5%">
                            <font face="Comic Sans MS, cursive" class="text-error text-center">
                                <h5>No</h5>
                            </font>
                        </td>
                        <td width="20%">
                            <font face="Comic Sans MS, cursive" class="text-error text-center">
                                <h5>Username</h5>
                            </font>
                        </td>
                        <td width="20%">
                            <font face="Comic Sans MS, cursive" class="text-error text-center">
                                <h5>Nama</h5>
                            </font>
                        </td>
                        <td width="20%">
                            <font face="Comic Sans MS, cursive" class="text-error text-center">
                                <h5>Phone</h5>
                            </font>
                        </td>
                        <td width="30%">
                            <font face="Comic Sans MS, cursive" class="text-error text-center">
                                <h5>Email</h5>
                            </font>
                        </td>
                        <td width="5%" colspan="2">
                            <font face="Comic Sans MS, cursive" class="text-error text-center">
                                <h5>
                                    <i class="fas fa-wrench"></i>
                                </h5>
                            </font>
                        </td>
                    </tr>
                </thead>
                <?php
                foreach($admin as $admin)
                {
                    ?>
                    <tbody>
                        <tr>
                            <td><font face="Comic Sans MS, cursive" class="text-info text-center"><h5><?php echo $admin->id_user; ?></h5></font></td>
                            <td><font face="Comic Sans MS, cursive" class="text-error text-center"><h5><?php echo $admin->username;?></h5></font></td>
                            <td><font face="Comic Sans MS, cursive" class="text-info text-left"><h5><?php echo $admin->nama;?></h5></font></td>
                            <td><font face="Comic Sans MS, cursive" class="text-info text-center"><h5><?php echo $admin->phone;?></h5></font></td>
                            <td><font face="Comic Sans MS, cursive" class="text-info text-center"><h5><?php echo $admin->email;?></h5></font></td>
                            <td>
                                <font face="Comic Sans MS, cursive" class="text-info text-center">
                                    <h5>
                                        <a class="tip" href="<?= base_url('futsal/adm/admin_futsal/admin_update?id='.$admin->id_user);?>" data-toggle="tooltip" data-placement="bottom"
                                            title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </h5>
                                </font>
                            </td>
                            <td>
                                <font face="Comic Sans MS, cursive" class="text-info text-center">
                                    <h5>
                                        <a class="tip" href="<?= base_url('futsal/adm/admin_futsal/admin_delete?id='.$admin->id_user);?>" data-toggle="tooltip" data-placement="bottom"
                                            title="Hapus">
                                            <i class="fas fa-remove-format"></i>
                                        </a>
                                    </h5>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                }
                ?>
        
                </table>
            </div>           
        </div>
	</div>
</div>