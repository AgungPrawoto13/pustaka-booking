<?= $this->session->flashdata('pesan');?>
<div class="container">
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">

		<div class="modal-header">
	    	<h3>List Member</h3>
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
	            			<h5>Nama Lengkap</h5>
	            		</font>
	            	</td>

					<td width="5%">
						<font face="Comic Sans MS, cursive" class="text-error text-center">
							<h5>Jenis Kelamin</h5>
						</font>
					</td>

	            	<td width="10%">
	            		<font face="Comic Sans MS, cursive" class="text-error text-center">
	            			<h5>Email</h5>
	            		</font>
	            	</td>

					<td width="10%">
						<font face="Comic Sans MS, cursive" class="text-error text-center">
							<h5>No Hp</h5>
						</font>
					</td>

					<td width="10%">
						<font face="Comic Sans MS, cursive" class="text-error text-center">
							<h5>Alamat</h5>
						</font>
					</td>
	           
	           		<td width="5%" colspan="2">
	           			<font face="Comic Sans MS, cursive" class="text-error text-center">
	           				<h5><i class="fas fa-wrench"></i></h5>
	           			</font>
	           		</td>
	           	</tr>
	        </thead>
	        <?php 
			foreach($member as $member){
	        	?>
			        <tbody>
			        	<tr>
				        	<td>
				        		<font face="Comic Sans MS, cursive" class="text-info text-left">
				        			<h5><?php echo $member->id_user; ?></h5>
				        		</font>
				        	</td>
				            <td>
				            	<font face="Comic Sans MS, cursive" class="text-error text-left">
				            		<h5><?php echo $member->nama_lengkap;?></h5>
				            	</font>
				            </td>
							<td>
								<font face="Comic Sans MS, cursive" class="text-info text-left">
									<h5><?php echo $member->jenis_kelamin;?></h5>
								</font>
							</td>
				            <td>
				            	<font face="Comic Sans MS, cursive" class="text-info text-left">
				            		<h5><?php echo $member->email;?></h5>
				            	</font>
				            </td>
							<td>
								<font face="Comic Sans MS, cursive" class="text-info text-left">
									<h5><?php echo $member->hp;?></h5>
								</font>
							</td>
							<td>
								<font face="Comic Sans MS, cursive" class="text-info text-left">
									<h5><?php echo $member->alamat;?></h5>
								</font>
							</td>

				            <td>
				            	<font face="Comic Sans MS, cursive" class="text-info text-center">
				            		<h5>
					                    <a class="btn btn-small btn-info" href="<?= base_url('futsal/adm/admin_futsal/member_update?kode='.$member->id_user);?>" data-toggle="tooltip" data-placement="bottom" title="Edit"> Edit</a>

					                    <a ace="Comic Sans MS, cursive" class="text-info text-center"></a>
					                </h5>
					            </font>
					        </td>
					        <td>
					        	<font face="Comic Sans MS, cursive" class="text-info text-center">
					                <h5>
					                    <a class="btn btn-small btn-warning" href="<?= base_url('futsal/adm/admin_futsal/member_delete?kode='.$member->id_user);?>" data-toggle="tooltip" data-placement="bottom"
					                        title="Hapus">Hapus</a>
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