<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        //login
        
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        
    }
	
	public function index()
	{
		$data = array(
			'content' => 'home/home', 
			'lokasi' => 'Dashboard', 
			);
		$this->load->view('admin', $data);
		//memanggil tanggal kadaluarsa;
		$this->cek_tgl_kadaluarsa();
	}

	public function pendaftaran()
	{
		$data = array(
			'content' => 'admin_pendaftaran', 
			'lokasi' => 'List Pendaftaran', 
			);
		$this->load->view('admin', $data);
	}

	public function hubungi()
	{
		$data = array(
			'content' => 'admin_hubungi', 
			'lokasi' => 'List Hubungi', 
			);
		$this->load->view('admin', $data);
	}

	public function cek_tgl_kadaluarsa()
	{
		$sql="SELECT id_pendaftaran, tgl, CURRENT_DATE() AS tgl_sekarang, DATEDIFF(tgl, CURRENT_DATE()) AS selisih FROM pendaftaran WHERE DATEDIFF(tgl, CURRENT_DATE()) = '-30'";
		$query = $this->db->query($sql);
		foreach ($query->result() as $data) {
		 	$id = $data->id_pendaftaran;
		 	$tgl = $data->tgl_sekarang;
		 	$data = array('tgl_kadaluarsa' => $tgl);
		 	$this->db->where('id_pendaftaran', $id);
		 	$this->db->update('pendaftaran', $data);
		 	
		 } 
	}

	

}
