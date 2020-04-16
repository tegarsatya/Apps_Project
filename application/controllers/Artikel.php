<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        $this->load->helper('tglindo_helper');
        $this->load->model('M_artikel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'artikel/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'artikel/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'artikel/index.html';
            $config['first_url'] = base_url() . 'artikel/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_artikel->total_rows($q);
        $artikel = $this->M_artikel->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'artikel_data' => $artikel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'artikel/artikel_list', 
            'lokasi' => 'Artikel',
        );
        $this->load->view('admin', $data);
    }

    public function read($id) 
    {
        $row = $this->M_artikel->get_by_id($id);
        if ($row) {
            $data = array(
		'id_artikel' => $row->id_artikel,
		'judul' => $row->judul,
		'isi' => $row->isi,
		'gambar' => $row->gambar,
		'id_kategori' => $row->id_kategori,
	    );
            $this->load->view('artikel/artikel_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('artikel/create_action'),
	    'id_artikel' => set_value('id_artikel'),
	    'judul' => set_value('judul'),
	    'isi' => set_value('isi'),
	    'gambar' => set_value('gambar'),
	    'id_kategori' => set_value('id_kategori'),
        'content' => 'artikel/artikel_form', 
            'lokasi' => 'Artikel',
	);
        $this->load->view('admin', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

            // setting konfigurasi upload
            $nmfile = "berita_".time();
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
            $config['file_name'] = $nmfile;
            // load library upload
            $this->load->library('upload', $config);
            // upload gambar 1
            $this->upload->do_upload('gambar');
            $result1 = $this->upload->data();
            $result = array('gambar'=>$result1);
            $tgl = date('Y-m-d');
            $hari = nama_hari();
            date_default_timezone_set('Asia/Jakarta');
            $jam = date('H:i:s');
            $created = 'administrator';

            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi' => $this->input->post('isi',TRUE),
		'gambar' => $result['gambar']['file_name'],
		'id_kategori' => $this->input->post('id_kategori',TRUE),
        'tgl' => $tgl,
        'jam' => $jam,
        'hari' => $hari,
        'posting' => $created,
	    );

            $this->M_artikel->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('artikel'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_artikel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('artikel/update_action'),
		'id_artikel' => set_value('id_artikel', $row->id_artikel),
		'judul' => set_value('judul', $row->judul),
		'isi' => set_value('isi', $row->isi),
		'gambar' => set_value('gambar', $row->gambar),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
        'content' => 'artikel/artikel_form', 
            'lokasi' => 'Artikel',
	    );
            $this->load->view('admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_artikel', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi' => $this->input->post('isi',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
	    );

            $this->M_artikel->update($this->input->post('id_artikel', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('artikel'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_artikel->get_by_id($id);

        if ($row) {
            $this->M_artikel->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('artikel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('isi', 'isi', 'trim|required');
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');

	$this->form_validation->set_rules('id_artikel', 'id_artikel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
