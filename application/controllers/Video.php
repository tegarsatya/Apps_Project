<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Video extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == "") {
            redirect('login');
        } 
        $this->load->model('M_video');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'video/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'video/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'video/index.html';
            $config['first_url'] = base_url() . 'video/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_video->total_rows($q);
        $video = $this->M_video->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'video_data' => $video,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'video/video_list', 
            'lokasi' => 'Video',
        );
        $this->load->view('admin', $data);
    }

    public function read($id) 
    {
        $row = $this->M_video->get_by_id($id);
        if ($row) {
            $data = array(
		'id_video' => $row->id_video,
		'link_video' => $row->link_video,
		'ket' => $row->ket,
	    );
            $this->load->view('video/video_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('video'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('video/create_action'),
	    'id_video' => set_value('id_video'),
	    'link_video' => set_value('link_video'),
	    'ket' => set_value('ket'),
        'content' => 'video/video_form', 
            'lokasi' => 'Video',

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
		'link_video' => $this->input->post('link_video',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->M_video->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('video'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_video->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('video/update_action'),
		'id_video' => set_value('id_video', $row->id_video),
		'link_video' => set_value('link_video', $row->link_video),
		'ket' => set_value('ket', $row->ket),
        'content' => 'video/video_form', 
            'lokasi' => 'Video',
	    );
            $this->load->view('admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('video'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_video', TRUE));
        } else {
            $data = array(
		'link_video' => $this->input->post('link_video',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->M_video->update($this->input->post('id_video', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('video'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_video->get_by_id($id);

        if ($row) {
            $this->M_video->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('video'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('video'));
        }
    }

    public function _rules() 
    {
	//$this->form_validation->set_rules('link_video', 'link video', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_video', 'id_video', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
