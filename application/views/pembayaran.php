<form action="<?php echo base_url()?>pendaftaran/simpan_pembayaran" method="post">
	<div class="form-group">
		<label>Jumlah Bayar</label>
		<input type="text" class="form-control" name="jumlah" required>
	</div>
	<div class="form-group">
		<label>Tanggal Pembayaran</label>
		<input type="date" class="form-control" name="tgl" required>
	</div>
	<div class="form-group">
		<label>Kode Pendaftaran</label>
		<input type="text" class="form-control" name="kode_pendaftaran" value="<?php echo $this->uri->segment(3); ?>" readonly>
	</div>
	<div class="form-group">
		<label>Jenis Pembayaran</label>
		<select class="form-control" name="jenis" required>
			<option value="baru">baru</option>
			<option value="perpanjang">perpanjang</option>
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Simpan</button>
	</div>
	
</form>
