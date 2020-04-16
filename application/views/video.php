<div class="about_trainer">
  <h3 class="m_2">Gallery Video</h3>
  <div class="row about_box">
  	<div class="col-md-12">
	  <div class="panel panel-info">
          
          <div class="panel-body">
          <div class="row">
           <?php 

           function youtube($url){
            $link=str_replace('http://www.youtube.com/watch?v=', '', $url);
            $link=str_replace('https://www.youtube.com/watch?v=', '', $link);
            $data='<object width="300" height="300" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
            <param name="src" value="http://www.youtube.com/v/'.$link.'" />
            </object>';
            return $data;
          }

          $this->db->order_by('id_video', 'DESC');
          $sqlgalery = $this->db->get('video');
          foreach ($sqlgalery->result() as $row) {

           ?>
            <div class="col-md-4">
              <div class="thumbnail">
                <?php echo youtube($row->link_video); ?> 
                <p><?php echo $row->ket; ?></p>
              </div>
            </div>
            <?php } ?>
          </div>

          </div>
        </div>
	</div>
	
	<div class="clear"></div>
 </div>
</div>