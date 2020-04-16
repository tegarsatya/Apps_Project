<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        $this->load->model('M_kategori');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kategori/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kategori/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kategori/index.html';
            $config['first_url'] = base_url() . 'kategori/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_kategori->total_rows($q);
        $kategori = $this->M_kategori->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kategori_data' => $kategori,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'kategori/kategori_list', 
            'lokasi' => 'Kategori Artikel', 
        );
        $this->load->view('admin', $data);
    }

    public function read($id) 
    {
        $row = $this->M_kategori->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kategori' => $row->id_kategori,
		'kategori' => $row->kategori,
	    );
            $this->load->view('kategori/kategori_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kategori'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kategori/create_action'),
	    'id_kategori' => set_value('id_kategori'),
	    'kategori' => set_value('kategori'),
        'content' => 'kategori/kategori_form', 
        'lokasi' => 'Kategori Artikel',
	);
        $this->load->view('admin', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kategori' => $this->input->post('kategori',TRUE),
	    );

            $this->M_kategori->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kategori'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_kategori->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kategori/update_action'),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'kategori' => set_value('kategori', $row->kategori),
        'content' => 'kategori/kategori_form', 
            'lokasi' => 'Kategori Artikel',
	    );
            $this->load->view('admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kategori'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kategori', TRUE));
        } else {
            $data = array(
		'kategori' => $this->input->post('kategori',TRUE),
	    );

            $this->M_kategori->update($this->input->post('id_kategori', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kategori'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_kategori->get_by_id($id);

        if ($row) {
            $this->M_kategori->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kategori'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kategori'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');

	$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
