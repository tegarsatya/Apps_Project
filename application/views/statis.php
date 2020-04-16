<?php 
$id = $this->uri->segment(3);
$this->db->where('id_statis', $id);
$data = $this->db->get('statis')->row();
 ?>
<div class="about_trainer">
  <h3 class="m_2"><?php echo $data->judul; ?></h3>
  <div class="row about_box">
  	<div class="col-md-12">
	  <div class="panel panel-info">
          
          <div class="panel-body">
             <?php echo $data->isi; ?>
          </div>
        </div>
	</div>
	
	<div class="clear"></div>
 </div>
</div>