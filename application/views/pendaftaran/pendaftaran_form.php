<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Kode Pendaftaran <?php echo form_error('kode_pendaftaran') ?></label>
            <input type="text" class="form-control" name="kode_pendaftaran" id="kode_pendaftaran" placeholder="kode_pendaftaran" value="<?php echo $kode_pendaftaran; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar"> Instansi BUJP <?php echo form_error('instansi_bujp') ?></label>
            <input type="text" class="form-control" name="instansi_bujp" id="instansi_bujp" placeholder="instansi_bujp" value="<?php echo $instansi_bujp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Alamat BUJP <?php echo form_error('alamat_bujp') ?></label>
            <input type="text" class="form-control" name="alamat_bujp" id="alamat_bujp" placeholder="alamat_bujp'" value="<?php echo $alamat_bujp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Polres <?php echo form_error('polres') ?></label>
            <input type="text" class="form-control" name="polres" id="polres" placeholder="polres" value="<?php echo $polres; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="<?php echo $nama; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tempat Tanggal Lahir <?php echo form_error('tempat_tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_tgl_lahir" id="tempat_tgl_lahir" placeholder="tempat_tgl_lahir'" value="<?php echo $tempat_tgl_lahir; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Alamat Rumah <?php echo form_error('alamat_rumah') ?></label>
            <input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder="alamat_rumah" value="<?php echo $alamat_rumah; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tinggi Badan <?php echo form_error('tinggi_badan') ?></label>
            <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="tinggi_badan" value="<?php echo $tinggi_badan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Berat Badan <?php echo form_error('berat_badan') ?></label>
            <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="berat_badan" value="<?php echo $berat_badan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Golongan Darah <?php echo form_error('golongan_darah') ?></label>
            <input type="text" class="form-control" name="golongan_darah" id="golongan_darah" placeholder="golongan_darah" value="<?php echo $golongan_darah; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nomor KTP <?php echo form_error('no_ktp') ?></label>
            <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="no_ktp" value="<?php echo $no_ktp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nomor NPWP <?php echo form_error('no_npwp') ?></label>
            <input type="text" class="form-control" name="no_npwp" id="no_npwp" placeholder="no_npwp" value="<?php echo $no_npwp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Gmail<?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $email; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nomor HP <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="no_hp" 
            value="<?php echo $no_hp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Rumus Sidik Jari <?php echo form_error('rumus_sidik_jari') ?></label>
            <input type="text" class="form-control" name="rumus_sidik_jari" id="rumus_sidik_jari" placeholder="rumus_sidik_jari" value="<?php echo $rumus_sidik_jari; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama_Istri <?php echo form_error('nama_istri') ?></label>
            <input type="text" class="form-control" name="nama_istri" id="nama_istri" placeholder="nama_istri" value="<?php echo $nama_istri; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Suami<?php echo form_error('nama_suami') ?></label>
            <input type="text" class="form-control" name="nama_suami" id="nama_suami" placeholder="nama_suami" value="<?php echo $nama_suami; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jumlah Anak <?php echo form_error('jumlah_anak') ?></label>
            <input type="text" class="form-control" name="jumlah_anak" id="jumlah_anak" placeholder="jumlah_anak" value="<?php echo $jumlah_anak; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Orang Tua <?php echo form_error('nama_orang_tua') ?></label>
            <input type="text" class="form-control" name="nama_orang_tua" id="nama_orang_tua" placeholder="nama_orang_tua" value="<?php echo $nama_orang_tua; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus SD Tahun <?php echo form_error('sd_tahun') ?></label>
            <input type="text" class="form-control" name="sd_tahun" id="sd_tahun" placeholder="sd_tahun" value="<?php echo $sd_tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus SLTP Tahum <?php echo form_error('sltp_tahun') ?></label>
            <input type="text" class="form-control" name="sltp_tahun" id="sltp_tahun" placeholder="sltp_tahun'" value="<?php echo $sltp_tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus SLTA Tahun <?php echo form_error('slta_tahun') ?></label>
            <input type="text" class="form-control" name="slta_tahun" id="slta_tahun" placeholder="slta_tahun" value="<?php echo $slta_tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus DIPLOMA Tahun<?php echo form_error('diploma_tahun') ?></label>
            <input type="text" class="form-control" name="diploma_tahun" id="diploma_tahun" placeholder="diploma_tahun" value="<?php echo $diploma_tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus SARJANA Tahun<?php echo form_error('sarjana') ?></label>
            <input type="text" class="form-control" name="sarjana" id="sarjana" placeholder="sarjana" value="<?php echo $sarjana; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus GADA PRATAMA Tahun<?php echo form_error('gada_pratama_tahun') ?></label>
            <input type="text" class="form-control" name="gada_pratama_tahun" id="gada_pratama_tahun" placeholder="gada_pratama_tahun" value="<?php echo $gada_pratama_tahun; ?>" />
        </div>

        <div class="form-group">
            <label for="varchar">Nomor IJAZAH GADA PRATAMA <?php echo form_error('no_ijazah_gada_pratama') ?></label>
            <input type="text" class="form-control" name="no_ijazah_gada_pratama" id="no_ijazah_gada_pratama" placeholder="no_ijazah_gada_pratama" value="<?php echo $no_ijazah_gada_pratama; ?>" />
        </div>

        <div class="form-group">
            <label for="varchar">Lulus GADA MADYA Tahun <?php echo form_error('gada_madya_tahun') ?></label>
            <input type="text" class="form-control" name="gada_madya_tahun" id="gada_madya_tahun" placeholder="gada_madya_tahun" value="<?php echo $gada_madya_tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nomor IJAZAH GADA MADYA <?php echo form_error('no_ijazah_gada_madya') ?></label>
            <input type="text" class="form-control" name="no_ijazah_gada_madya" id="no_ijazah_gada_madya" placeholder="no_ijazah_gada_madya" value="<?php echo $no_ijazah_gada_madya; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Lulus GADA UTAMA Tahun <?php echo form_error('gada_utama_tahun') ?></label>
            <input type="text" class="form-control" name="gada_utama_tahun" id="gada_utama_tahun" placeholder="gada_utama_tahun" value="<?php echo $gada_utama_tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nomor IJAZAH GADA UTAMA Tahun<?php echo form_error('no_ijazah_gada_utama') ?></label>
            <input type="text" class="form-control" name="no_ijazah_gada_utama" id="no_ijazah_gada_utama" placeholder="no_ijazah_gada_utama" value="<?php echo $no_ijazah_gada_utama; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Spesialisasi <?php echo form_error('spesialisasi') ?></label>
            <input type="text" class="form-control" name="spesialisasi" id="spesialisasi" placeholder="spesialisasi" value="<?php echo $spesialisasi; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nomor SERTIFIKAT Spesialisasi <?php echo form_error('no_sertifikat_spesialisasi') ?></label>
            <input type="text" class="form-control" name="no_sertifikat_spesialisasi" id="no_sertifikat_spesialisasi" placeholder="no_sertifikat_spesialisasi" value="<?php echo $no_sertifikat_spesialisasi; ?>" />
        </div>
         <div class="form-group">
            <label for="varchar">Brivet <?php echo form_error('brivet') ?></label>
            <input type="text" class="form-control" name="brivet" id="brivet" placeholder="brivet" value="<?php echo $brivet; ?>" />
        </div>

         <div class="form-group">
            <label for="varchar">Pengalaman Kerja TNI / POLRI <?php echo form_error('pengalaman_kerja_tni_polri') ?></label>
            <input type="text" class="form-control" name="pengalaman_kerja_tni_polri" id="pengalaman_kerja_tni_polri" placeholder="pengalaman_kerja_tni_polri" value="<?php echo $pengalaman_kerja_tni_polri; ?>" />
        </div>
         <div class="form-group">
            <label for="varchar">SECURITY <?php echo form_error('security') ?></label>
            <input type="text" class="form-control" name="security" id="security" placeholder="security" value="<?php echo $security; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Tanda Jasa<?php echo form_error('tanda_jasa') ?></label>
            <input type="text" class="form-control" name="tanda_jasa" id="tanda_jasa" placeholder="tanda_jasa" value="<?php echo $tanda_jasa; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Catatan Khusus<?php echo form_error('catatan_khusus') ?></label>
            <input type="text" class="form-control" name="catatan_khusus" id="catatan_khusus" placeholder="catatan_khusus" value="<?php echo $catatan_khusus; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Tgl <?php echo form_error('tgl') ?></label>
            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="tgl" value="<?php echo $tgl; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Tgl Kedaluarsa <?php echo form_error('tgl_kedaluarsa') ?></label>
            <input type="date" class="form-control" name="tgl_kedaluarsa" id="tgl_kedaluarsa" placeholder="tgl kedaluarsa" value="<?php echo $tgl_kedaluarsa; ?>" />
        </div>
        <input type="hidden" name="id_pendaftaran" value="<?php echo $id_pendaftaran; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('pendaftaran') ?>" class="btn btn-default">Cancel</a>
    </form>