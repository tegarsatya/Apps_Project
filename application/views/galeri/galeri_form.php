<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Gambar </label>
            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Gambar" />
        </div>
        <div class="form-group">
            <label for="ket">Ket <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Ket"><?php echo $ket; ?></textarea>
        </div>
        <input type="hidden" name="id_galeri" value="<?php echo $id_galeri; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('galeri') ?>" class="btn btn-default">Cancel</a>
    </form>