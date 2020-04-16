<div class="row">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Pendaftaran</th>
        		<th>Alamat BUJP</th>
        		<th>Polres</th>
        		<th>Tempat/Tgl Lahir</th>
        		<th>Alamat Rumah</th>
        		<th>Tinggi Badan</th>
        		<th>Berat Badan</th>
         		<th>Golongan Darah</th>
		        <th>No. Ktp</th>
		        <th>No. Npwp</th>
		        <th>Email</th>
		        <th>No.Hp</th>
		        <th>Sidik Jari</th>
		        <th>Nama Istri</th>
		        <th>Nama Suami</th>
		        <th>Jumlah Anak</th>
		        <th>Nama Orang Tua</th>
		        <th>Sd </th>
		        <th>Sltp</th>
		        <th>Slta</th>
		        <th>Diploma</th>
		        <th>Sarjana</th>
		        <th>Gada Pratama</th>
		        <th>Sertifikat</th>
		        <th>Gada Madya</th>
		        <th>Sertifikat</th>
		        <th>Gada Utama</th>
		        <th>Sertifikat</th>
		        <th>Spesialisasi</th>
		        <th>Sertifikat</th>
		        <th>Brivet</th>
		        <th>Pengalaman Tni/Polri</th>
		        <th>Security</th>
		        <th>tanda jasa </th>
		        <th>catatan</th>
		        <th>Tgl Kadaluarsa</th>
		        <th>Tanggal Pendaftaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		$this->db->order_by('id_pendaftaran','DESC');
		$data = $this->db->get('pendaftaran');
		foreach ($data->result() as $row) {
		 ?>
			<tr>
				<td><?php echo $no; ?></td>	
				<td><?php echo $pendaftaran->kode_pendaftaran?></td>
	            <td><?php echo $pendaftaran->instansi_bujp ?></td>
	            <td><?php echo $pendaftaran->alamat_bujp ?></td>
	            <td><?php echo $pendaftaran->polres ?></td>
	            <td><?php echo $pendaftaran->nama ?></td>
	            <td><?php echo $pendaftaran->tempat_tgl_lahir ?></td>
	            <td><?php echo $pendaftaran->alamat_rumah ?></td>
	            <td><?php echo $pendaftaran->tinggi_badan ?></td>
	            <td><?php echo $pendaftaran->berat_badan?></td>
	            <td><?php echo $pendaftaran->golongan_darah ?></td>
	            <td><?php echo $pendaftaran->no_ktp ?></td>
	            <td><?php echo $pendaftaran->no_npwp ?></td>
	            <td><?php echo $pendaftaran->email ?></td>
	            <td><?php echo $pendaftaran->no_hp ?></td>
	            <td><?php echo $pendaftaran->rumus_sidik_jari ?></td>
	            <td><?php echo $pendaftaran->nama_istri ?></td>
	            <td><?php echo $pendaftaran->nama_suami ?></td>
	            <td><?php echo $pendaftaran->jumlah_anak ?></td>
	            <td><?php echo $pendaftaran->nama_orang_tua ?></td>
	            <td><?php echo $pendaftaran->sd_tahun ?></td>
	            <td><?php echo $pendaftaran->sltp_tahun?></td>
	            <td><?php echo $pendaftaran->slta_tahun ?></td>
	            <td><?php echo $pendaftaran->diploma_tahun ?></td>
	            <td><?php echo $pendaftaran->sarjana ?></td>
	            <td><?php echo $pendaftaran->gada_pratama_tahun ?></td>
	            <td><?php echo $pendaftaran->no_ijazah_gada_pratama ?></td>
	            <td><?php echo $pendaftaran->gada_madya_tahun ?></td>
	            <td><?php echo $pendaftaran->no_ijazah_gada_madya ?></td>
	            <td><?php echo $pendaftaran->gada_utama ?></td>
	            <td><?php echo $pendaftaran->no_ijazah_gada_utama ?></td>
	            <td><?php echo $pendaftaran->spesialisasi ?></td>
	            <td><?php echo $pendaftaran->no_sertifikat_spesialisasi ?></td>
	            <td><?php echo $pendaftaran->brivet ?></td>
	            <td><?php echo $pendaftaran->pengalaman_kerja_tni_polri ?></td>
	            <td><?php echo $pendaftaran->security ?></td>
	            <td><?php echo $pendaftaran->tanda_jasa ?></td>
	            <td><?php echo $pendaftaran->chatan_khusus ?></td>
	   ]		 <td><?php echo $pendaftaran->tgl ?></td>

				<td></td>
			</tr>
		<?php $no++; } ?>
		</tbody>
	</table>
</div>