<div class="about_trainer">
  <h3 class="m_2">Hubungi Kami</h3>
  <div class="row about_box">
  	<div class="col-md-12">
	  <div class="panel panel-info">
          
          <div class="panel-body">
             <form action="<?php echo base_url()?>app/simpan_kontak" method="post">
              
               <div class="form-group">
                 <label>Nama Lengkap</label>
                 <input type="text" name="nama" class="form-control">
               </div>
               <div class="form-group">
                 <label>Email</label>
                 <input type="text" name="email" class="form-control">
               </div>
               <div class="form-group">
                 <label>Pesan</label>
                 <textarea class="form-control" name="pesan" rows="3"></textarea>
               </div>
               <div class="form-group">
                 <button type="submit" class="btn btn-primary">Kirim</button>
               </div>
             </form>
          </div>
        </div>
	</div>
	
	<div class="clear"></div>
 </div>
</div>