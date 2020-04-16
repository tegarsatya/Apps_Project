<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('id_kategori') ?></label>
            
            <select class="form-control" name="id_kategori">
            <option value="<?php echo $id_kategori; ?>">
                <?php
                if ($id_kategori == '') {
                     # code...
                 } else { 
                $sql1=$this->db->query("select * from kategori where id_kategori='$id_kategori'")->row();
                echo $sql1->kategori;
                }
                 ?>
            </option>
            <?php 
            $sql = $this->db->query("SELECT * FROM kategori");
            foreach ($sql->result() as $row) {
             ?>
            <option value="<?php echo $row->id_kategori; ?>"><?php echo $row->kategori; ?></option>
            <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
        <div class="form-group">
            <label for="isi">Isi <?php echo form_error('isi') ?></label>
            <textarea class="ckeditor form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Gambar </label>
            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Gambar"  />
        </div>
        
        <input type="hidden" name="id_artikel" value="<?php echo $id_artikel; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('artikel') ?>" class="btn btn-default">Cancel</a>
    </form>