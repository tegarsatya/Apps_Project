<!doctype html>
<html>
    <head>
        <title>PT. PRIMA HANDANU BHAKTI</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pendaftaran Read</h2>
        <table class="table">
	    <tr><td>Kode Member</td><td><?php echo $kode_member; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Nohp</td><td><?php echo $nohp; ?></td></tr>
	    <tr><td>Tgl</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>Tgl Kadaluarsa</td><td><?php echo $tgl_kadaluarsa; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pendaftaran') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>