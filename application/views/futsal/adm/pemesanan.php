<div class="container">
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
		<div>
        	<div class="modal-header">
            	<h3>List sewa</h3>
            </div>
        	
            <div style="margin-top:10px">
                <table class="table table-condensed table-bordered table-hover">
                	<thead>
	                	<td width="5%">
	                		<font face="Comic Sans MS, cursive" class="text-error text-center">
	                			<h5>No</h5>
	                		</font>
	                	</td>

	                    <td width="10%">
	                    	<font face="Comic Sans MS, cursive" class="text-error text-center">
	                    		<h5>ID Pesan</h5>
	                    	</font>
	                    </td>

						<td width="20%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>ID/Nama Pemesan</h5>
							</font>
						</td>	 

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Tanggal Pesan</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Tanggal Main</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Lama Main</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Jam Main</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Jam Selesai</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Total Harga</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
								<h5>Bukti</h5>
							</font>
						</td>

						<td width="10%">
							<font face="Comic Sans MS, cursive" class="text-error text-center">
							<h5>Konfirmasi</h5>
							</font>
						</td>  

	                    <td width="5%">
	                    	<font face="Comic Sans MS, cursive" class="text-error text-center">
	                    	<h5><span class="icon-wrench"></span></h5>
	                		</font>
	                	</td>
	                </thead>
	                <?php

	                foreach($pemesanan as $cek){
	                	?>
	                	<tr>
	                		<td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5>1</h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->id_keranjang;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->nama_lengkap;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->tgl_pesan;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->tgl_main;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->lama;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->jmulai;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->jhabis;?></h5>
		                    	</font>
		                    </td>
		                    <td>
	                			<font face="Comic Sans MS, cursive" class="text-error text-center">
		                    		<h5><?php echo $cek->tot;?></h5>
		                    	</font>
		                    </td>
		                </tr>
		                <?php
	                }
	                ?>
                </table>
            </div>    
        </div>
	</div>
</div>


<br><br><br><br>
