<div class="row" style="margin-bottom: 10px">
            
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pendaftaran/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pendaftaran'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Kode Pendaftaran</th>
        <th>Instansi bujp</th>
        <th>Alamat BUJP</th>
        <th>Polres</th>
        <th> Nama </th>
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
        <th>Tgl Kedaluarsa</th>
        <th>Tanggal Pendaftaran</th>
        <th>Status Bayar</th>
        <th>Action</th>
            </tr><?php
            foreach ($pendaftaran_data as $pendaftaran)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
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
            <td><?php echo $pendaftaran->gada_utama_tahun ?></td>
            <td><?php echo $pendaftaran->no_ijazah_gada_utama ?></td>
            <td><?php echo $pendaftaran->spesialisasi ?></td>
            <td><?php echo $pendaftaran->no_sertifikat_spesialisasi ?></td>
            <td><?php echo $pendaftaran->brivet ?></td>
            <td><?php echo $pendaftaran->pengalaman_kerja_tni_polri ?></td>
            <td><?php echo $pendaftaran->security ?></td>
            <td><?php echo $pendaftaran->tanda_jasa ?></td>
            <td><?php echo $pendaftaran->catatan_khusus ?></td>
            <td><?php echo $pendaftaran->tgl_kedaluarsa ?></td>
            <td>
              <?php $tgl =$pendaftaran->tgl; echo date('d-m-Y',strtotime($tgl)); ?>
            </td>
            <td>
                <?php 
                if ($pendaftaran->status_bayar == 'y') {
                    ?> 
                    <a class="btn btn-info btn-xs">Lunas</a>
                    <?php
                } elseif ($pendaftaran->status_bayar == 't') {
                    ?> 
                    <a href="<?php echo base_url()?>pendaftaran/ubah_status/y/<?php echo $pendaftaran->kode_pendaftaran; ?>" class="btn btn-danger btn-xs">Belum Lunas</a>
                    <?php
                }

                 ?>
                 
            </td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('pendaftaran/cetak_member/'.$pendaftaran->kode_pendaftaran),'Cetak'); 
                echo ' | ';
                echo anchor(site_url('pendaftaran/update/'.$pendaftaran->id_pendaftaran),'Update'); 
                echo ' | '; 
                echo anchor(site_url('pendaftaran/delete/'.$pendaftaran->id_pendaftaran),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                <a href="<?php echo base_url()?>pendaftaran/cetak_semua" class="btn btn-primary">Cetak Semua</a>
                <a href="<?php echo base_url()?>pendaftaran/cetak/y" class="btn btn-primary">Cetak Pendaftar Lunas</a>
                <a href="<?php echo base_url()?>pendaftaran/cetak/t" class="btn btn-primary">Cetak Pendaftar Belum Lunas</a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>