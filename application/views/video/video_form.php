<form action="<?php echo $action; ?>" method="post" ecntype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Link Video </label>
            <input type="text" class="form-control" name="link_video" id="link_video" placeholder="Link Video"  />
        </div>
        <div class="form-group">
            <label for="ket">Ket <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Ket"><?php echo $ket; ?></textarea>
        </div>
        <input type="hidden" name="id_video" value="<?php echo $id_video; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('video') ?>" class="btn btn-default">Cancel</a>
    </form>