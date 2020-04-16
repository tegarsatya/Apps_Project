<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('cleanurl_helper');
        $this->load->helper('tglindo_helper');
        $this->load->library('form_validation');
    }
	
	public function index()
	{
		$data = array(
            'content' => 'home',  
            );
		$this->load->view('v_index', $data);
	}

    public function about($id)
    {
        $data = array(
            'content' => 'statis',  
            );
        $this->load->view('v_index', $data);
    }

    public function jadwal($id)
    {
        $data = array(
            'content' => 'statis',  
            );
        $this->load->view('v_index', $data);
    }

    public function pendaftaran()
    {
        $data = array(
            'content' => 'pendaftaran',  
            );
        $this->load->view('v_index', $data);
    }

    public function galery()
    {
        $data = array(
            'content' => 'galery',  
            );
        $this->load->view('v_index', $data);
    }
    public function video()
    {
        $data = array(
            'content' => 'video',  
            );
        $this->load->view('v_index', $data);
    }

    public function forum()
    {
        $data = array(
            'content' => 'forum',  
            );
        $this->load->view('v_index', $data);
    }

    public function simpan_pendaftaran()
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

        if ($this->form_validation->run() == FALSE) {
            $this->pendaftaran();
        } else {

            $data = array(
                'kode_pendaftaran' => $this->input->post('kode_pendaftaran'),
        'instansi_bujp' => $this->input->post('instansi_bujp'),
        'alamat_bujp' => $this->input->post('alamat_bujp'),
        'polres' => $this->input->post('polres'),
        'nama' => $this->input->post('nama'),
        'tempat_tgl_lahir' => $this->input->post('tempat_tgl_lahir'),
        'alamat_rumah' => $this->input->post('alamat_rumah'),
        'tinggi_badan' => $this->input->post('tinggi_badan'),
        'berat_badan' => $this->input->post('berat_badan'),
        'golongan_darah' => $this->input->post('golongan_darah'),
        'no_ktp' => $this->input->post('no_ktp'),
        'no_npwp' => $this->input->post('no_npwp'),
        'email' => $this->input->post('email'),
        'no_hp' => $this->input->post('no_hp'),
        'rumus_sidik_jari' => $this->input->post('rumus_sidik_jari'),
        'nama_istri' => $this->input->post('nama_istri'),
        'nama_suami' => $this->input->post('nama_suami'),
        'jumlah_anak' => $this->input->post('jumlah_anak'),
        'nama_orang_tua' => $this->input->post('nama_orang_tua'),
        'sd_tahun' => $this->input->post('sd_tahun'),
        'sltp_tahun' => $this->input->post('sltp_tahun'),
        'slta_tahun' => $this->input->post('slta_tahun'),
        'diploma_tahun' => $this->input->post('diploma_tahun'),
        'sarjana' => $this->input->post('sarjana'),
        'gada_pratama_tahun' => $this->input->post('gada_pratama_tahun'),
        'no_ijazah_gada_pratama' => $this->input->post('no_ijazah_gada_pratama'),
        'gada_madya_tahun' => $this->input->post('gada_madya_tahun'),
        'no_ijazah_gada_madya' => $this->input->post('no_ijazah_gada_madya'),
        'gada_utama_tahun' => $this->input->post('gada_utama_tahun'),
        'no_ijazah_gada_utama' => $this->input->post('no_ijazah_gada_utama'),
        'spesialisasi' => $this->input->post('spesialisasi'),
        'no_sertifikat_spesialisasi' => $this->input->post('no_sertifikat_spesialisasi'),
        'brivet' => $this->input->post('brivet'),
        'pengalaman_kerja_tni_polri' => $this->input->post('pengalaman_kerja_tni_polri'),
        'security' => $this->input->post('security'),
        'tanda_jasa' => $this->input->post('tanda_jasa'),
        'catatan_khusus' => $this->input->post('catatan_khusus'),
        'tgl' => $this->input->post('tgl'),
                );
            $simpan = $this->db->insert('pendaftaran', $data);
            if ($simpan) {
                ?>
                <script type="text/javascript">
                    alert('Terima Kasih telah mendaftar !');
                    window.location='<?php echo base_url('app/cetak_pendaftaran'); ?>'
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert('Ada kesalahan, silahkan ulangi !');
                    window.location='<?php echo base_url('app/cetak_pendaftaran'); ?>'
                </script>
                <?php
            }
        }
    }

    public function cetak_pendaftaran()
    {
        $data = array(
            'content' => 'cetak_pendaftaran',  
            );
        $this->load->view('v_index', $data);
    }

    public function kontak()
    {
        $data = array(
            'content' => 'kontak',  
            );
        $this->load->view('v_index', $data);
    }

    public function simpan_kontak()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
            );
        $simpan = $this->db->insert('hubungi', $data);
        if ($simpan) {
            ?>
            <script type="text/javascript">
                alert('Terima Kasih telah menghubungi kamu !');
                window.location='<?php echo base_url('app/kontak'); ?>'
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert('Ada kesalahan, silahkan ulangi !');
                window.location='<?php echo base_url('app/kontak'); ?>'
            </script>
            <?php
        }
    }

    public function kelas($id)
    {
        $data = array(
            'content' => 'statis',  
            );
        $this->load->view('v_index', $data);
    }

    public function blog()
    {
        
        $config['base_url']=base_url()."app/blog";
            $config['total_rows']= $this->db->query("SELECT * FROM artikel;")->num_rows();
            $config['per_page']=3;
            $config['num_links'] = 2;
            $config['uri_segment']=3;


            //Tambahan untuk styling
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";
     
            $config['first_link']='< Pertama ';
            $config['last_link']='Terakhir > ';
            $config['next_link']='&raquo;';
            $config['prev_link']='&laquo;';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
        $this->load->model('m_artikel');
        $data['d_artikel']=$this->m_artikel->getAll($config);
        $this->load->view('blog', $data);
        
        //$this->load->view('blog');
    }

    public function detail_artikel($id, $nilai=0)
    {
        $this->db->where('id_artikel', $id);
        $data['data'] = $this->db->get('artikel')->row();

        $this->load->view('detail_blog', $data);
    }



}
