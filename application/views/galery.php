<div class="about_trainer">
  <h3 class="m_2">Gallery Foto</h3>
  <div class="row about_box">
  	<div class="col-md-12">
	  <div class="panel panel-info">
          
          <div class="panel-body">
          <div class="row">
           <?php 
          $this->db->order_by('id_galeri', 'DESC');
          $sqlgalery = $this->db->get('galeri');
          foreach ($sqlgalery->result() as $row) {

           ?>
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="<?php echo base_url()?>gambar/<?php echo $row->gambar; ?>" target="_blank">
                  <img src="<?php echo base_url()?>gambar/<?php echo $row->gambar; ?>" alt="Lights" style="width:100%">
                  <div class="caption">
                    <p><?php echo $row->ket; ?></p>
                  </div>
                </a>
              </div>
            </div>
            <?php }
            ?>
          </div>

          </div>
        </div>
	</div>
	
	<div class="clear"></div>
 </div>
</div>