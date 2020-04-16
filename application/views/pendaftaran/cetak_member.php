<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url()?>">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<body onload="window.print()">
<?php 
            $id = $this->uri->segment(3);
             $row = $this->db->query("SELECT * from pendaftaran where kode_member = '$id' ")->row();
              ?>
              <center>
              <div style="padding: 20px; border: 1px solid #c3c71c; background: url('<?php echo base_url()?>gambar/card.jpg'); width: 400px; height: 250px;">
                <h2>KARTU MEMBER</h2>
                <br><br><br><br>
                <h3 style="text-align: left;">ID MEMBER </h3>
                <h3 style="text-align: left;"><?php echo $id; ?> </h3>
              </div>
              </center>
<br><br>
<center>
<div style="padding: 20px; border: 1px solid #c3c71c; background: url('<?php echo base_url()?>gambar/card.jpg'); width: 400px; height: 250px;">
                <center>
                <h1>ABGym</h1>
                <h5>Jl. Suryahadi No 27 Rt 09 RW 04 Telanaipura Jambi No HP 085277889910 </h5>
              </center>
              
             <table class="table">
           
             <tr>
                 <td>Kode Pendaftaran</td>
                 <td>:</td>
                 <td><?php echo $row->kode_pendaftaran; ?></td>
               </tr>
               <tr>
                 <td>Nama Lengkap</td>
                 <td>:</td>
                 <td><?php echo $row->nama; ?></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td>:</td>
                 <td><?php echo $row->alamat_rumah; ?></td>
               </tr>
               <tr>
                 <td>Nomor Hp</td>
                 <td>:</td>
                 <td><?php echo $row->no_hp; ?></td>
               </tr>
               <tr>
                 <td>Tempat Tanggal Lahir</td>
                 <td>:</td>
                 <td><?php echo $row->tempat_tgl_lahir; ?></td>
               </tr>
               <tr>
                 <td>Tinggi Badan</td>
                 <td>:</td>
                 <td><?php echo $row->tinggi_badan; ?></td>
               </tr>
               <tr>
                 <td>Berat Badan</td>
                 <td>:</td>
                 <td><?php echo $row->berat_badan; ?></td>
               </tr>
               <tr>
                 <td>Nomor KTP</td>
                 <td>:</td>
                 <td><?php echo $row->no_ktp; ?></td>
               </tr>
               <tr>
                 <td>Nomor NPWP</td>
                 <td>:</td>
                 <td><?php echo $row->no_npwp; ?></td>
               </tr>
               <tr>
                 <td>Email</td>
                 <td>:</td>
                 <td><?php echo $row->email; ?></td>
               </tr>
               <tr>
                 <td>Rumus Sidik Jari</td>
                 <td>:</td>
                 <td><?php echo $row->rumus_sidik_jari; ?></td>
               </tr>
               <tr>
                 <td>Nama Istri</td>
                 <td>:</td>
                 <td><?php echo $row->nama_istri; ?></td>
               </tr>
               <tr>
                 <td>Nama Suami</td>
                 <td>:</td>
                 <td><?php echo $row->nama_suami; ?></td>
               </tr>
               <tr>
                 <td>Jumlah Anak</td>
                 <td>:</td>
                 <td><?php echo $row->jumlah_anak; ?></td>
               </tr>
               <tr>
                 <td>Nama Orang Tua</td>
                 <td>:</td>
                 <td><?php echo $row->nama_orang_tua; ?></td>
               </tr>
               <tr>
                 <td>Sd Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->sd_tahun; ?></td>
               </tr>
               <tr>
                 <td>SLTP Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->sltp_tahun; ?></td>
               </tr>
               <tr>
                 <td>SLTA Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->slta_tahun; ?></td>
               </tr>
               <tr>
                 <td>Diploma Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->diploma_tahun; ?></td>
               </tr>
               <tr>
                 <td>Sarjana Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->sajana; ?></td>
               </tr>
               <tr>
                 <td>Gada Pratama Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->gada_pratama_tahun; ?></td>
               </tr>
               <tr>
                 <td>Nomor Ijazah Gada Pratama</td>
                 <td>:</td>
                 <td><?php echo $row->no_ijazah_gada_pratama; ?></td>
               </tr>
               <tr>
                 <td>Gada Madya Tahun </td>
                 <td>:</td>
                 <td><?php echo $row->gada_madya_tahun; ?></td>
               </tr>
               <tr>
                 <td>Nomor Ijazah Gada Madya </td>
                 <td>:</td>
                 <td><?php echo $row->no_ijazah_gada_madya; ?></td>
               </tr>
               <tr>
                 <td>Gada Utama Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->gada_utama_tahun; ?></td>
               </tr>
               <tr>
                 <td>Nomor Ijazah Gada Utama</td>
                 <td>:</td>
                 <td><?php echo $row->no_ijazah_gada_utama; ?></td>
               </tr>

               <tr>
                 <td>Spesialisasi</td>
                 <td>:</td>
                 <td><?php echo $row->spesialisasi; ?></td>
               </tr>

               <tr>
                 <td>Nomor Sertifikat Spesialisasi</td>
                 <td>:</td>
                 <td><?php echo $row->no_sertifikat_spesialisasi; ?></td>
               </tr>

               <tr>
                 <td>Gada Utama Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->gada_utama_tahun; ?></td>
               </tr>

               <tr>
                 <td>Gada Utama Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->gada_utama_tahun; ?></td>
               </tr>

               <tr>
                 <td>Gada Utama Tahun</td>
                 <td>:</td>
                 <td><?php echo $row->gada_utama_tahun; ?></td>
               </tr>

               <tr>
                 <td>Brivet</td>
                 <td>:</td>
                 <td><?php echo $row->brivet; ?></td>
               </tr>

               <tr>
                 <td>Pengalaman Kerja TNI/POLRI</td>
                 <td>:</td>
                 <td><?php echo $row->pengalaman_kerja_tni_polri; ?></td>
               </tr>

               <tr>
                 <td> Security</td>
                 <td>:</td>
                 <td><?php echo $row->security; ?></td>
               </tr>
               <tr>
                 <td>Tanda Jasa</td>
                 <td>:</td>
                 <td><?php echo $row->tanda_jasa; ?></td>
               </tr>
               <tr>
                 <td>Catatan Khusus</td>
                 <td>:</td>
                 <td><?php echo $row->catatan_khusus; ?></td>
               </tr>
               <tr>
                 <td>Tanggal Pendaftaran</td>
                 <td>:</td>
                 <td><?php 
                 $tgl = $row->tgl;
                 echo date('d-m-Y',strtotime($tgl)); ?></td>
               </tr>
               <tr>
                 <td>Status Bayar</td>
                 <td>:</td>
                 <td>
                <?php 
                if ($row->status_bayar == 'y') {
                    ?> 
                    <b>Lunas</b>
                    <?php
                } elseif ($row->status_bayar == 't') {
                    ?> 
                    <b>Belum lunas</b>
                    <?php
                }

                 ?>
            </td>
               </tr>
             </table>
             </div>
             </center>

</body>
</html>