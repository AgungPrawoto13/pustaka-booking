<div class="modal fade" id="tambahlapangan" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    			<h4 class="modal-title" id="myModalLabel">Tambah Lapangan</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('futsal/adm/admin_futsal/lapangan?kode=1');?>" method="post">
					<div class="form-group">
						<label class="control-label" for="judullapangan">Nama Lapangan :</label>
						<input type="text" name="judullapangan" value="<?= set_value('judullapangan');?>" class="form-control" placeholder="Nama Lapangan">
						<?= form_error('judullapangan','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Keterangan :</label>
						<input type="text" name="ket" value="<?= set_value('ket');?>" class="form-control" placeholder="Keterangan">
						<?= form_error('ket','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Harga Siang:</label>
						<input type="text" name="harga1" value="<?= set_value('harga1');?>" class="form-control" placeholder="Harga Siang">
						<?= form_error('harga1','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Harga Malam:</label>
						<input type="text" name="harga2" value="<?= set_value('harga2');?>" class="form-control" placeholder="Harga Malam">
						<?= form_error('harga2','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Foto :</label>
						<input type="file" name="gambar">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary" name="input-lapangan">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editlapangan" tab-index="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    			<h4 class="modal-title" id="myModalLabel">Edit Lapangan</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('futsal/adm/admin_futsal/lapangan?kode=2');?>" method="post">
					<div class="form-group">
						<label class="control-label" for="judullapangan">Nama Lapangan :</label>
						<input type="text" name="judullapangan" value="<?php echo $lapangan[0]->nm;?>" class="form-control">
						<input type="hidden" name="id" value="<?php echo $lapangan[0]->idlapangan;?>">
						<?= form_error('judullapangan','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Keterangan :</label>
						<input type="text" name="ket" value="<?php echo $lapangan[0]->ket;?>" class="form-control">
						<?= form_error('ket','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Harga Siang:</label>
						<input type="text" name="harga1" value="<?php echo $lapangan[0]->harga1;?>" class="form-control">
						<?= form_error('harga1','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Harga Malam:</label>
						<input type="text" name="harga2" value="<?php echo $lapangan[0]->harga2;?>" class="form-control">
						<?= form_error('harga2','<small class="text-danger">','</small>');?>
					</div>
					<div class="form-group">
						<label class="control-label" for="judullapangan">Foto :</label>
						<img src="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $lapangan[0]->f1;?>"><input type="file" name="f1">
						<img src="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $lapangan[0]->f2;?>"><input type="file" name="f2">
						<img src="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $lapangan[0]->f3;?>"><input type="file" name="f3">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary" name="input-lapangan">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> 

<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<script type="text/javascript">
			$(document).on("click", ".delete", function () {
		    	var id = $(this).data('id');
		    	$("#deletelapangan #idlapangan").html(id);
		    	$(".modal-footer #lanjut").attr("href", "?mod=managelapangan&delete="+id);
				});
			</script>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title" id="myModalLabel">Delete lapangan</h4>
			</div>
			<div class="modal-body" id="deletelapangan">
				<p>Anda Yakin Akan Menghapus Data Dengan ID: <strong id="idlapangan"></strong></p>
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-default" data-dismiss="modal">BATAL</a>
				<a type="button" class="btn btn-primary" id="lanjut" href="">LANJUT</a>
			</div>
		</div>
	</div>
</div>