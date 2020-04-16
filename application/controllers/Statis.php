<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Statis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        $this->load->model('M_statis');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'statis/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'statis/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'statis/index.html';
            $config['first_url'] = base_url() . 'statis/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_statis->total_rows($q);
        $statis = $this->M_statis->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'statis_data' => $statis,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'statis/statis_list', 
            'lokasi' => 'Halaman Statis', 
        );
        $this->load->view('admin', $data);
    }

    public function read($id) 
    {
        $row = $this->M_statis->get_by_id($id);
        if ($row) {
            $data = array(
		'id_statis' => $row->id_statis,
		'judul' => $row->judul,
		'isi' => $row->isi,
	    );
            $this->load->view('statis/statis_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('statis'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('statis/create_action'),
	    'id_statis' => set_value('id_statis'),
	    'judul' => set_value('judul'),
	    'isi' => set_value('isi'),
        'content' => 'statis/statis_form', 
        'lokasi' => 'Halaman Statis', 
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
		'judul' => $this->input->post('judul',TRUE),
		'isi' => $this->input->post('isi',TRUE),
	    );

            $this->M_statis->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('statis'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_statis->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('statis/update_action'),
		'id_statis' => set_value('id_statis', $row->id_statis),
		'judul' => set_value('judul', $row->judul),
		'isi' => set_value('isi', $row->isi),
        'content' => 'statis/statis_form', 
            'lokasi' => 'Halaman Statis', 
	    );
            $this->load->view('admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('statis'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_statis', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi' => $this->input->post('isi',TRUE),
	    );

            $this->M_statis->update($this->input->post('id_statis', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('statis'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_statis->get_by_id($id);

        if ($row) {
            $this->M_statis->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('statis'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('statis'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('isi', 'isi', 'trim|required');

	$this->form_validation->set_rules('id_statis', 'id_statis', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
