<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
        <div class="form-group">
            <label for="isi">Isi <?php echo form_error('isi') ?></label>
            <textarea class="ckeditor form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
        </div>
        <input type="hidden" name="id_statis" value="<?php echo $id_statis; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('statis') ?>" class="btn btn-default">Cancel</a>
    </form>