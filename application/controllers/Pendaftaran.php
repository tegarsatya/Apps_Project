<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendaftaran');
        $this->load->library('form_validation');
    }

    public function cetak()
    {
        $this->load->view('pendaftaran/cetak');
    }

    public function cetak_semua()
    {
        $this->load->view('pendaftaran/cetak_semua');
    }
    public function cetak_member()
    {
        $this->load->view('pendaftaran/cetak_member');
    }

    public function ubah_status()
    {
        $y = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        
        redirect('pendaftaran/pembayaran/'.$id);
    }

    public function pembayaran()
    {
        $data = array(
            'content' => 'pembayaran', 
            'lokasi' => 'Pembayaran',
            );
        $this->load->view('admin', $data);
    }

    public function simpan_pembayaran()
    {
        $jumlah = $this->input->post('jumlah');
        $tgl = $this->input->post('tgl');
        $kode_pendaftaran = $this->input->post('kode_pendaftaran');
        $jenis = $this->input->post('jenis');

        $data1 = array(
            'jumlah_bayar' => $jumlah,
            'tgl_bayar' => $tgl,
            'kode_pendaftaran' => $kode_pendaftaran,
            'jenis_pembayaran' => $jenis,
            );

        $data2 = array('status_bayar' => 'y');
        $this->db->where('kode_pendaftaran', $kode_pendaftaran);
        $this->db->update('pendaftaran', $data2);
        $this->db->insert('pembayaran', $data1);
        redirect('pendaftaran');
    }

    public function index()
    {

        //cek tanggal kadaluarsa
        $cek = $this->db->get('pendaftaran');
        

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pendaftaran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pendaftaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pendaftaran/index.html';
            $config['first_url'] = base_url() . 'pendaftaran/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_pendaftaran->total_rows($q);
        $pendaftaran = $this->M_pendaftaran->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pendaftaran_data' => $pendaftaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'content' => 'pendaftaran/pendaftaran_list', 
            'lokasi' => 'Pendaftaran',
        );
        $this->load->view('admin', $data);
        
    }

    public function read($id) 
    {
        $row = $this->M_pendaftaran->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pendaftaran' => $row->id_pendaftaran,
		'kode_pendaftaran' => $row->kode_pendaftaran,
        'instansi_bujp' => $row->instansi_bujp,
        'alamat_bujp' => $row->alamat_bujp,
        'polres' => $row->polres,
        'nama' => $row->nama,
        'tempat_tgl_lahir' => $row->tempat_tgl_lahir,
        'alamat_rumah' => $row->alamat_rumah,
        'tinggi_badan' => $row->tinggi_badan,
        'berat_badan' => $row->berat_badan,
        'golongan_darah' => $row->golongan_darah,
        'no_ktp' => $row->no_ktp,
        'no_npwp' => $row->no_npwp,
        'email' => $row->email,
        'no_hp' => $row->no_hp,
        'rumus_sidik_jari' => $row->rumus_sidik_jari,
		'nama_istri' => $row->nama_istri,
        'nama_suami' => $row->nama_suami,
        'jumlah_anak' => $row->jumlah_anak,
        'nama_orang_tua' => $row->nama_orang_tua,
        'sd_tahun' => $row->sd_tahun,
        'sltp_tahun' => $row->sltp_tahun,
        'slta_tahun' => $row->slta_tahun,
        'diploma_tahun' => $row->diploma_tahun,
        'sarjana' => $row->sarjana,
        'gada_pratama_tahun' => $row->gada_pratama_tahun,
        'no_ijazah_gada_pratama' => $row->no_ijazah_gada_pratama,
        'gada_madya_tahun' => $row->gada_madya_tahun,
        'no_ijazah_gada_madya' => $row->no_ijazah_gada_madya,
        'gada_utama_tahun' => $row->gada_utama_tahun,
        'no_ijazah_gada_utama' => $row->no_ijazah_gada_utama,
        'spesialisasi' => $row->spesialisasi,
        'no_sertifikat_spesialisasi' => $row->no_sertifikat_spesialisasi,
        'brivet' => $row->brivet,
        'pengalaman_kerja_tni_polri' => $row->pengalaman_kerja_tni_polri,
        'security' => $row->security,
        'tanda_jasa' => $row->tanda_jasa,
        'catatan_khusus' => $row->tgl,
        'tgl' => $row->tanda_jasa,
        'tgl_kedaluarsa' => $row->tgl_kedaluarsa,
	    );
            $this->load->view('pendaftaran/pendaftaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendaftaran/create_action'),
	    'id_pendaftaran' => set_value('id_pendaftaran'),
	    'kode_pendaftaran' => set_value('kode_pendaftaran'),
	    'instansi_bujp' => set_value('instansi_bujp'),
        'alamat_bujp' => set_value('alamat_bujp'),
        'polres' => set_value('polres'),
        'nama' => set_value('nama'),
        'tempat_tgl_lahir' => set_value('tempat_tgl_lahir'),
        'alamat_rumah' => set_value('alamat_rumah'),
        'tinggi_badan' => set_value('tinggi_badan'),
        'berat_badan' => set_value('berat_badan'),
        'golongan_darah' => set_value('golongan_darah'),
        'no_ktp' => set_value('no_ktp'),
        'no_npwp' => set_value('no_npwp'),
        'email' => set_value('email'),
        'no_hp' => set_value('no_hp'),
        'rumus_sidik_jari' => set_value('rumus_sidik_jari'),
        'nama_istri' => set_value('nama_istri'),
        'nama_suami' => set_value('nama_suami'),
        'jumlah_anak' => set_value('jumlah_anak'),
        'nama_orang_tua' => set_value('nama_orang_tua'),
        'sd_tahun' => set_value('sd_tahun'),
        'sltp_tahun' => set_value('sltp_tahun'),
        'slta_tahun' => set_value('slta_tahun'),
        'diploma_tahun' => set_value('diploma_tahun'),
        'sarjana' => set_value('sarjana'),
        'gada_pratama_tahun' => set_value('gada_pratama_tahun'),
        'no_ijazah_gada_pratama' => set_value('no_ijazah_gada_pratama'),
        'gada_madya_tahun' => set_value('gada_madya_tahun'),
        'no_ijazah_gada_madya' => set_value('no_ijazah_gada_madya'),
        'gada_utama_tahun' => set_value('gada_utama_tahun'),
        'no_ijazah_gada_utama' => set_value('no_ijazah_gada_utama'),
        'spesialisasi' => set_value('spesialisasi'),
        'no_sertifikat_spesialisasi' => set_value('no_sertifikat_spesialisasi'),
        'brivet' => set_value('brivet'),
        'pengalaman_kerja_tni_polri' => set_value('pengalaman_kerja_tni_polri'),
        'security' => set_value('security'),
        'tanda_jasa' => set_value('tanda_jasa'),
        'catatan_khusus' => set_value('catatan_khusus'),
        'tgl' => set_value('tgl'),
        'tgl_kedaluarsa' => set_value('tgl_kedaluarsa'),
	);
        $this->load->view('pendaftaran/pendaftaran_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_pendaftaran' => $this->input->post('kode_pendaftaran',TRUE),
		'instansi_bujp' => $this->input->post('instansi_bujp',TRUE),
        'alamat_bujp' => $this->input->post('alamat_bujp',TRUE),
        'polres' => $this->input->post('polres',TRUE),
        'nama' => $this->input->post('nama',TRUE),
        'tempat_tgl_lahir' => $this->input->post('tempat_tgl_lahir',TRUE),
        'alamat_rumah' => $this->input->post('alamat_rumah',TRUE),
        'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
        'berat_badan' => $this->input->post('berat_badan',TRUE),
        'golongan_darah' => $this->input->post('golongan_darah',TRUE),
        'no_ktp' => $this->input->post('no_ktp',TRUE),
        'no_npwp' => $this->input->post('no_npwp',TRUE),
        'email' => $this->input->post('email',TRUE),
        'no_hp' => $this->input->post('no_hp',TRUE),
        'rumus_sidik_jari' => $this->input->post('rumus_sidik_jari',TRUE),
        'nama_istri' => $this->input->post('nama_istri',TRUE),
        'nama_suami' => $this->input->post('nama_suami',TRUE),
        'jumlah_anak' => $this->input->post('jumlah_anak',TRUE),
        'nama_orang_tua' => $this->input->post('nama_orang_tua',TRUE),
        'sd_tahun' => $this->input->post('sd_tahun',TRUE),
        'sltp_tahun' => $this->input->post('sltp_tahun',TRUE),
        'slta_tahun' => $this->input->post('slta_tahun',TRUE),
        'diploma_tahun' => $this->input->post('diploma_tahun',TRUE),
        'sarjana' => $this->input->post('sarjana',TRUE),
        'gada_pratama_tahun' => $this->input->post('gada_pratama_tahun',TRUE),
        'no_ijazah_gada_pratama' => $this->input->post('no_ijazah_gada_pratama',TRUE),
        'gada_madya_tahun' => $this->input->post('gada_madya_tahun',TRUE),
        'no_ijazah_gada_madya' => $this->input->post('no_ijazah_gada_madya',TRUE),
        'gada_utama_tahun' => $this->input->post('gada_utama_tahun',TRUE),
        'no_ijazah_gada_utama' => $this->input->post('no_ijazah_gada_utama',TRUE),
        'spesialisasi' => $this->input->post('spesialisasi',TRUE),
        'no_sertifikat_spesialisasi' => $this->input->post('no_sertifikat_spesialisasi',TRUE),
        'brivet' => $this->input->post('brivet',TRUE),
        'pengalaman_kerja_tni_polri' => $this->input->post('pengalaman_kerja_tni_polri',TRUE),
        'security' => $this->input->post('security',TRUE),
        'tanda_jasa' => $this->input->post('tanda_jasa',TRUE),
        'catatan_khusus' => $this->input->post('catatan_khusus',TRUE),
        'tgl' => $this->input->post('tgl',TRUE),
        'tgl_kedaluarsa' => $this->input->post('tgl_kedaluarsa',TRUE),
	    );

            $this->M_pendaftaran->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_pendaftaran->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendaftaran/update_action'),
		'id_pendaftaran' => set_value('id_pendaftaran'),
        'kode_pendaftaran' => set_value('kode_pendaftaran'),
        'instansi_bujp' => set_value('instansi_bujp'),
        'alamat_bujp' => set_value('alamat_bujp'),
        'polres' => set_value('polres'),
        'nama' => set_value('nama'),
        'tempat_tgl_lahir' => set_value('tempat_tgl_lahir'),
        'alamat_rumah' => set_value('alamat_rumah'),
        'tinggi_badan' => set_value('tinggi_badan'),
        'berat_badan' => set_value('berat_badan'),
        'golongan_darah' => set_value('golongan_darah'),
        'no_ktp' => set_value('no_ktp'),
        'no_npwp' => set_value('no_npwp'),
        'email' => set_value('email'),
        'no_hp' => set_value('no_hp'),
        'rumus_sidik_jari' => set_value('rumus_sidik_jari'),
        'nama_istri' => set_value('nama_istri'),
        'nama_suami' => set_value('nama_suami'),
        'jumlah_anak' => set_value('jumlah_anak'),
        'nama_orang_tua' => set_value('nama_orang_tua'),
        'sd_tahun' => set_value('sd_tahun'),
        'sltp_tahun' => set_value('sltp_tahun'),
        'slta_tahun' => set_value('slta_tahun'),
        'diploma_tahun' => set_value('diploma_tahun'),
        'sarjana' => set_value('sarjana'),
        'gada_pratama_tahun' => set_value('gada_pratama_tahun'),
        'no_ijazah_gada_pratama' => set_value('no_ijazah_gada_pratama'),
        'gada_madya_tahun' => set_value('gada_madya_tahun'),
        'no_ijazah_gada_madya' => set_value('no_ijazah_gada_madya'),
        'gada_utama_tahun' => set_value('gada_utama_tahun'),
        'no_ijazah_gada_utama' => set_value('no_ijazah_gada_utama'),
        'spesialisasi' => set_value('spesialisasi'),
        'no_sertifikat_spesialisasi' => set_value('no_sertifikat_spesialisasi'),
        'brivet' => set_value('brivet'),
        'pengalaman_kerja_tni_polri' => set_value('pengalaman_kerja_tni_polri'),
        'security' => set_value('security'),
        'tanda_jasa' => set_value('tanda_jasa'),
        'catatan_khusus' => set_value('catatan_khusus'),
        'tgl' => set_value('tgl'),
        'tgl_kedaluarsa' => set_value('tgl_kedaluarsa'),
        'content' => 'pendaftaran/pendaftaran_form', 
            'lokasi' => 'Pendaftaran',
	    );
            $this->load->view('admin', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pendaftaran', TRUE));
        } else {
            $data = array(
		'kode_pendaftaran' => $this->input->post('kode_pendaftaran',TRUE),
        'instansi_bujp' => $this->input->post('instansi_bujp',TRUE),
        'alamat_bujp' => $this->input->post('alamat_bujp',TRUE),
        'polres' => $this->input->post('polres',TRUE),
        'nama' => $this->input->post('nama',TRUE),
        'tempat_tgl_lahir' => $this->input->post('tempat_tgl_lahir',TRUE),
        'alamat_rumah' => $this->input->post('alamat_rumah',TRUE),
        'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
        'berat_badan' => $this->input->post('berat_badan',TRUE),
        'golongan_darah' => $this->input->post('golongan_darah',TRUE),
        'no_ktp' => $this->input->post('no_ktp',TRUE),
        'no_npwp' => $this->input->post('no_npwp',TRUE),
        'email' => $this->input->post('email',TRUE),
        'no_hp' => $this->input->post('no_hp',TRUE),
        'rumus_sidik_jari' => $this->input->post('rumus_sidik_jari',TRUE),
        'nama_istri' => $this->input->post('nama_istri',TRUE),
        'nama_suami' => $this->input->post('nama_suami',TRUE),
        'jumlah_anak' => $this->input->post('jumlah_anak',TRUE),
        'nama_orang_tua' => $this->input->post('nama_orang_tua',TRUE),
        'sd_tahun' => $this->input->post('sd_tahun',TRUE),
        'sltp_tahun' => $this->input->post('sltp_tahun',TRUE),
        'slta_tahun' => $this->input->post('slta_tahun',TRUE),
        'diploma_tahun' => $this->input->post('diploma_tahun',TRUE),
        'sarjana' => $this->input->post('sarjana',TRUE),
        'gada_pratama_tahun' => $this->input->post('gada_pratama_tahun',TRUE),
        'no_ijazah_gada_pratama' => $this->input->post('no_ijazah_gada_pratama',TRUE),
        'gada_madya_tahun' => $this->input->post('gada_madya_tahun',TRUE),
        'no_ijazah_gada_madya' => $this->input->post('no_ijazah_gada_madya',TRUE),
        'gada_utama_tahun' => $this->input->post('gada_utama_tahun',TRUE),
        'no_ijazah_gada_utama' => $this->input->post('no_ijazah_gada_utama',TRUE),
        'spesialisasi' => $this->input->post('spesialisasi',TRUE),
        'no_sertifikat_spesialisasi' => $this->input->post('no_sertifikat_spesialisasi',TRUE),
        'brivet' => $this->input->post('brivet',TRUE),
        'pengalaman_kerja_tni_polri' => $this->input->post('pengalaman_kerja_tni_polri',TRUE),
        'security' => $this->input->post('security',TRUE),
        'tanda_jasa' => $this->input->post('tanda_jasa',TRUE),
        'catatan_khusus' => $this->input->post('catatan_khusus',TRUE),
        'tgl' => $this->input->post('tgl',TRUE),
        'tgl_kedaluarsa' => $this->input->post('tgl_kedaluarsa',TRUE),
	    );

            $this->M_pendaftaran->update($this->input->post('id_pendaftaran', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_pendaftaran->get_by_id($id);

        if ($row) {
            $this->M_pendaftaran->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendaftaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_pendaftaran', 'kode_pendaftaran', 'trim|required');
	$this->form_validation->set_rules('instansi_bujp', 'instansi_bujp', 'trim|required');
	$this->form_validation->set_rules('alamat_bujp', 'alamat_bujp', 'trim|required');
	$this->form_validation->set_rules('polres', 'polres', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('tempat_tgl_lahir', 'tempat_tgl_lahir', 'trim|required');
    $this->form_validation->set_rules('alamat_rumah', 'alamat_rumah', 'trim|required');
    $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan', 'trim|required');
    $this->form_validation->set_rules('berat_badan', 'berat_badan', 'trim|required');
    $this->form_validation->set_rules('golongan_darah', 'golongan_darah', 'trim|required');
    $this->form_validation->set_rules('no_ktp', 'no_ktp', 'trim|required');
    $this->form_validation->set_rules('no_npwp', 'no_npwp', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
    $this->form_validation->set_rules('rumus_sidik_jari', 'rumus_sidik_jari', 'trim|required');
    $this->form_validation->set_rules('nama_istri', 'nama_istri', 'trim|required');
    $this->form_validation->set_rules('nama_suami', 'nama_suami', 'trim|required');
    $this->form_validation->set_rules('jumlah_anak', 'jumlah_anak', 'trim|required');
    $this->form_validation->set_rules('nama_orang_tua', 'nama_orang_tua', 'trim|required');
    $this->form_validation->set_rules('sd_tahun', 'sd_tahun', 'trim|required');
    $this->form_validation->set_rules('sltp_tahun', 'slta_tahun', 'trim|required');
    $this->form_validation->set_rules('slta_tahun', 'slta_tahun', 'trim|required');
    $this->form_validation->set_rules('diploma_tahun', 'diploma_tahun', 'trim|required');
    $this->form_validation->set_rules('sarjana', 'sarjana', 'trim|required');
    $this->form_validation->set_rules('gada_pratama_tahun', 'gada_pratama_tahun', 'trim|required');
    $this->form_validation->set_rules('no_ijazah_gada_pratama', 'no_ijazah_gada_pratama', 'trim|required');
    $this->form_validation->set_rules('gada_madya_tahun', 'gada_madya_tahun', 'trim|required');
    $this->form_validation->set_rules('no_ijazah_gada_madya', 'no_ijazah_gada_madya', 'trim|required');
    $this->form_validation->set_rules('gada_utama_tahun', 'gada_utama_tahun', 'trim|required');
    $this->form_validation->set_rules('no_ijazah_gada_utama', 'no_ijazah_gada_utama', 'trim|required');
    $this->form_validation->set_rules('spesialisasi', 'spesialisasi', 'trim|required');
    $this->form_validation->set_rules('no_sertifikat_spesialisasi', 'no_sertifikat_spesialisasi', 'trim|required');
    $this->form_validation->set_rules('brivet', 'brivet', 'trim|required');
    $this->form_validation->set_rules('pengalaman_kerja_tni_polri', 'pengalaman_kerja_tni_polri', 'trim|required');
    $this->form_validation->set_rules('security', 'security', 'trim|required');
    $this->form_validation->set_rules('tanda_jasa', 'tanda_jasa', 'trim|required');
    $this->form_validation->set_rules('catatan_khusus', 'catatan_khusus', 'trim|required');
    $this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
    $this->form_validation->set_rules('tgl_kedaluarsa', 'tgl_kedaluarsa', 'trim|required');
	$this->form_validation->set_rules('id_pendaftaran', 'id_pendaftaran', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    
    }

}

