<div class="row">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>Email</th>
				<th>Pesan</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$no = 1;
		$this->db->order_by('id_hubungi','DESC');
		$data = $this->db->get('hubungi');
		foreach ($data->result() as $row) {
		 ?>
			<tr>
				<td><?php echo $no; ?></td>	
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->email; ?></td>
				<td><?php echo $row->pesan; ?></td>
			</tr>
		<?php $no++; } ?>
		</tbody>
	</table>
</div>