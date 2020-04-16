<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hubungi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        $this->load->model('M_hubungi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'hubungi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'hubungi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'hubungi/index.html';
            $config['first_url'] = base_url() . 'hubungi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_hubungi->total_rows($q);
        $hubungi = $this->M_hubungi->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'hubungi_data' => $hubungi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'hubungi/hubungi_list', 
            'lokasi' => 'Hubungi',
        );
        $this->load->view('admin', $data);
    }

    public function read($id) 
    {
        $row = $this->M_hubungi->get_by_id($id);
        if ($row) {
            $data = array(
		'id_hubungi' => $row->id_hubungi,
		'nama' => $row->nama,
		'email' => $row->email,
		'pesan' => $row->pesan,
	    );
            $this->load->view('hubungi/hubungi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hubungi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('hubungi/create_action'),
	    'id_hubungi' => set_value('id_hubungi'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	    'pesan' => set_value('pesan'),
	);
        $this->load->view('hubungi/hubungi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->M_hubungi->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('hubungi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_hubungi->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hubungi/update_action'),
		'id_hubungi' => set_value('id_hubungi', $row->id_hubungi),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
		'pesan' => set_value('pesan', $row->pesan),
	    );
            $this->load->view('hubungi/hubungi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hubungi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_hubungi', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->M_hubungi->update($this->input->post('id_hubungi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('hubungi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_hubungi->get_by_id($id);

        if ($row) {
            $this->M_hubungi->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('hubungi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hubungi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');

	$this->form_validation->set_rules('id_hubungi', 'id_hubungi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

