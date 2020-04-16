<div class="about_trainer">
  <h3 class="m_2">Form Pendaftaran Pelatihan Satpam Gada Pratama</h3>
  <div class="row about_box">
  	<div class="col-md-12">
	  <div class="panel panel-info">
          <div class="panel-body">
             <form action="<?php echo base_url()?>app/simpan_pendaftaran" method="post">
              <div class="form-group">
                 <h3 class="m_2">I. KETERANGAN UMUM </h3>
                 <label>Kode Pendaftaran</label>
                 <?php 
                 $cek = $this->db->get('pendaftaran')->num_rows();
                 if ($cek == 0) {
                   $data = 'ID001';
                 } else {
                   $this->db->order_by('id_pendaftaran', 'DESC');
                   $cekdb = $this->db->get('pendaftaran')->row();
                   $data = $cekdb->kode_pendaftaran;
                   $no_urut = (int)substr($data, 3, 3);
                    $no_urut++;

                    $char = "ID";
                    $data = $char . sprintf("%03s", $no_urut);
                 }
                  ?>
                 <input type="text" name="kode_pendaftaran" class="form-control" value="<?php echo $data; ?>" readonly>
               </div>
               <div class="form-group">
                 <label>INSTANSI / BUJP <?php echo form_error('instansi_bujp') ?></label>
                 <input type="text" name="instansi_bujp" class="form-control">
               </div>
               <div class="form-group">
                 <label>Alamat BUJP <?php echo form_error('alamat_bujp') ?></label>
                 <textarea class="form-control" name="alamat_bujp" rows="5"></textarea>
               </div>
               <div class="form-group">
                 <label>Polres <?php echo form_error('polres') ?></label>
                 <input type="text" name="polres" class="form-control">
               </div>
               <div class="form-group">
                 <label>Nama Lengkap <?php echo form_error('nama') ?></label>
                 <input type="text" name="nama" class="form-control">
               </div>
               <div class="form-group">
                 <label>Tempat Tanggal Lahir <?php echo form_error('tempat_tgl_lahir') ?></label>
                 <input type="text" name="tempat_tgl_lahir" class="form-control">
               </div>
               <div class="form-group">
                 <label>Alamat Rumah <?php echo form_error('alamat_rumah') ?></label>
                 <textarea class="form-control" name="alamat_rumah" rows="5"></textarea>
               </div>
               <div class="form-group">
                 <label>Tinggi Badan <?php echo form_error('tinggi_badan') ?></label>
                 <input type="text" name="tinggi_badan" class="form-control">
               </div>
               <div class="form-group">
                 <label>Berat Badan <?php echo form_error('berat_badan') ?></label>
                 <input type="text" name="berat_badan" class="form-control">
               </div>
               <div class="form-group">
                 <label>Golongan Darah <?php echo form_error('golongan_darah') ?></label>
                 <input type="text" name="golongan_darah" class="form-control">
               </div>
               <div class="form-group">
                 <label>Nomor KTP/NIK<?php echo form_error('no_ktp') ?></label>
                 <input type="text" name="no_ktp" class="form-control">
               </div>
               <div class="form-group">
                 <label>Nomor NPWP <?php echo form_error('no_npwp') ?></label>
                 <input type="text" name="no_npwp" class="form-control">
               </div>
               <div class="form-group">
                 <label>Gmail <?php echo form_error('email') ?></label>
                 <input type="text" name="email" class="form-control">
               </div>
               <div class="form-group">
                 <label>Nomor HP <?php echo form_error('no_hp') ?></label>
                 <input type="text" name="no_hp" class="form-control">
               </div>
               <div class="form-group">
                 <label>Rumus Sidik Jari <?php echo form_error('rumus_sidik_jari') ?></label>
                 <input type="text" name="rumus_sidik_jari" class="form-control">
               </div>
                <div class="form-group">
                 <label>Nama Istri <?php echo form_error('nama_istri') ?></label>
                 <input type="text" name="nama_istri" class="form-control">
               </div>
                <div class="form-group">
                 <label>Nama Suami <?php echo form_error('nama_suami') ?></label>
                 <input type="text" name="nama_suami" class="form-control">
               </div>
                <div class="form-group">
                 <label>Jumlah Anak<?php echo form_error('jumlah_anak') ?></label>
                 <input type="text" name="jumlah_anak" class="form-control">
               </div>
                <div class="form-group">
                 <label>Nama Orang TUA  <?php echo form_error('nama_orang_tua') ?></label>
                 <input type="text" name="nama_orang_tua" class="form-control">
               </div>
                      <h3 class="m_2">II. PENDIDIKAN UMUM </h3>
                <div class="form-group">
                 <label>Lulus SD Tahun <?php echo form_error('sd_tahun') ?></label>
                 <input type="text" name="sd_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Lulus SLTP Tahun <?php echo form_error('sltp_tahun') ?></label>
                 <input type="text" name="sltp_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Lulus SLTA Tahun <?php echo form_error('slta_tahun') ?></label>
                 <input type="text" name="slta_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Lulus Diploma Tahun<?php echo form_error('diploma_tahun') ?></label>
                 <input type="text" name="diploma_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Lulus Sarjana Tahun <?php echo form_error('sarjana') ?></label>
                 <input type="text" name="sarjana" class="form-control">
               </div>
                      <h3 class="m_2">III. KEPOLISIAN TERBATAS </h3>
                <div class="form-group">
                 <label>Lulusan GADA PRATAMA Tahun <?php echo form_error('gada_pratama_tahun') ?></label>
                 <input type="text" name="gada_pratama_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Nomor IJAZAH GADA PRATAMA <?php echo form_error('no_ijazah_gada_pratama') ?></label>
                 <input type="text" name="no_ijazah_gada_pratama" class="form-control">
               </div>
                <div class="form-group">
                 <label>Lulusan GADA MADYA Tahun <?php echo form_error('gada_madya_tahun') ?></label>
                 <input type="text" name="gada_madya_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Nomor IJAZAH GADA MADYA <?php echo form_error('no_ijazah_gada_madya') ?></label>
                 <input type="text" name="no_ijazah_gada_madya" class="form-control">
               </div>
                <div class="form-group">
                 <label>Lulusan GADA UTAMA Tahun <?php echo form_error('gada_utama_tahun') ?></label>
                 <input type="text" name="gada_utama_tahun" class="form-control">
               </div>
                <div class="form-group">
                 <label>Nomor IJAZAH GADA UTAMA <?php echo form_error('no_ijazah_gada_utama') ?></label>
                 <input type="text" name="no_ijazah_gada_utama" class="form-control">
               </div>
                      <h3 class="m_2">IV. SPESIALISASI </h3>
                <div class="form-group">
                 <label>SPESIALISASI <?php echo form_error('spesialisasi') ?></label>
                 <textarea class="form-control" name="spesialisasi" rows="5"></textarea>
               </div>
               <div class="form-group">
                 <label>Nomor  SERTIFIKAT Spesialisasi <?php echo form_error('no_sertifikat_spesialisasi') ?></label>
                 <input type="text" name="no_sertifikat_spesialisasi" class="form-control">
               </div>
                      <h3 class="m_2">V. BRIVET  </h3>
               <div class="form-group">
                 <label>BRIVET <?php echo form_error('brivet') ?></label>
                 <textarea class="form-control" name="brivet" rows="5"></textarea>
               </div>
                     <h3 class="m_2">VI. PENGALAMAN KERJA TNI/POLRI  </h3>
               <div class="form-group">
                 <label>PENGALAMAN KERJA TNI/POLRI <?php echo form_error('pengalaman_kerja_tni_polri') ?></label>
                 <textarea class="form-control" name="pengalaman_kerja_tni_polri" rows="5"></textarea>
               </div>
               <h3 class="m_2">VII. SECURITY  </h3>
               <div class="form-group">
                 <label>SECURITY <?php echo form_error('security') ?></label>
                 <textarea class="form-control" name="security" rows="5"></textarea>
               </div>
               <h3 class="m_2">VIII. TANDA JASA / PENGHARGAAN   </h3>
               <div class="form-group">
                 <label>TANDA JASA / PENGHARGAAN<?php echo form_error('tanda_jasa') ?></label>
                 <textarea class="form-control" name="tanda_jasa" rows="5"></textarea>
               </div>
               <h3 class="m_2">IX. CATATAN KHUSUS  </h3>
               <div class="form-group">
                 <label>CATATAN KHUSUS <?php echo form_error('catatan_khusus') ?></label>
                 <textarea class="form-control" name="catatan_khusus" rows="5"></textarea>
               </div>
               <div class="form-group">
                 <label>Tanggal Pendaftaran <?php echo form_error('tgl') ?></label>
                 <input type="date" name="tgl" class="form-control" value="<?php echo date('d-m-y') ?>">
               </div>
               <div class="form-group">
                 <button type="submit" class="btn btn-primary">Kirim</button>
               </div>
               
             </form>
          </div>
        </div>
	</div>	
	<div class="clear"></div>
 </div>
</div>