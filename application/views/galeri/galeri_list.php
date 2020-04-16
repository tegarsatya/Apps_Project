<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('galeri/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('galeri/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('galeri'); ?>" class="btn btn-default">Reset</a>
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
        <th>Gambar</th>
        <th>Ket</th>
        <th>Action</th>
            </tr><?php
            foreach ($galeri_data as $galeri)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><img src="<?php echo base_url()?>gambar/<?php echo $galeri->gambar ?>" style="width: 50px; height: 50px;"></td>
            <td><?php echo $galeri->ket ?></td>
            <td style="text-align:center" width="200px">
                <?php  
                echo anchor(site_url('galeri/update/'.$galeri->id_galeri),'Update'); 
                echo ' | '; 
                echo anchor(site_url('galeri/delete/'.$galeri->id_galeri),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>