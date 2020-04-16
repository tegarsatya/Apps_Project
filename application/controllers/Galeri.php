<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        $this->load->model('M_galeri');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'galeri/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'galeri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'galeri/index.html';
            $config['first_url'] = base_url() . 'galeri/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_galeri->total_rows($q);
        $galeri = $this->M_galeri->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'galeri_data' => $galeri,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'galeri/galeri_list', 
            'lokasi' => 'Galeri',
        );
        $this->load->view('admin', $data);
    }

    public function read($id) 
    {
        $row = $this->M_galeri->get_by_id($id);
        if ($row) {
            $data = array(
		'id_galeri' => $row->id_galeri,
		'gambar' => $row->gambar,
		'ket' => $row->ket,
	    );
            $this->load->view('galeri/galeri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('galeri/create_action'),
	    'id_galeri' => set_value('id_galeri'),
	    'gambar' => set_value('gambar'),
	    'ket' => set_value('ket'),
        'content' => 'galeri/galeri_form', 
            'lokasi' => 'Galeri',
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
            $nmfile = "galeri_".time();
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $nmfile;
            // load library upload
            $this->load->library('upload', $config);
            // upload gambar 1
            $this->upload->do_upload('gambar');
            $result1 = $this->upload->data();
            $result = array('gambar'=>$result1);

            $data = array(
		'gambar' => $result['gambar']['file_name'],
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->M_galeri->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('galeri'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_galeri->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('galeri/update_action'),
		'id_galeri' => set_value('id_galeri', $row->id_galeri),
		'gambar' => set_value('gambar', $row->gambar),
		'ket' => set_value('ket', $row->ket),
        'content' => 'galeri/galeri_form', 
            'lokasi' => 'Galeri',
	    );
            $this->load->view('admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_galeri', TRUE));
        } else {
            $data = array(
		'gambar' => $this->input->post('gambar',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->M_galeri->update($this->input->post('id_galeri', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('galeri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_galeri->get_by_id($id);

        if ($row) {
            $this->M_galeri->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('galeri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('galeri'));
        }
    }

    public function _rules() 
    {
	//$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_galeri', 'id_galeri', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
