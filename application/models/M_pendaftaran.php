<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_pendaftaran extends CI_Model
{

    public $table = 'pendaftaran';
    public $id = 'id_pendaftaran';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_pendaftaran', $q);
	$this->db->or_like('kode_pendaftaran', $q);
	$this->db->or_like('instansi_bujp', $q);
	$this->db->or_like('alamat_bujp', $q);
	$this->db->or_like('polres', $q);
	$this->db->or_like('nama', $q);
    $this->db->or_like('tempat_tgl_lahir', $q);
    $this->db->or_like('alamat_rumah', $q);
    $this->db->or_like('tinggi_badan', $q);
    $this->db->or_like('alamat_rumah', $q);
    $this->db->or_like('tinggi_badan', $q);
    $this->db->or_like('berat_badan', $q);
    $this->db->or_like('golongan_darah', $q);
    $this->db->or_like('no_ktp', $q);
    $this->db->or_like('no_npwp', $q);
    $this->db->or_like('email', $q);
    $this->db->or_like('no_hp', $q);
    $this->db->or_like('rumus_sidik_jari', $q);
    $this->db->or_like('nama_istri', $q);
    $this->db->or_like('nama_suami', $q);
    $this->db->or_like('nama_istri', $q);
    $this->db->or_like('jumlah_anak', $q);
    $this->db->or_like('nama_orang_tua', $q);
    $this->db->or_like('sd_tahun', $q);
    $this->db->or_like('sltp_tahun', $q);
    $this->db->or_like('slta_tahun', $q);
    $this->db->or_like('diploma_tahun', $q);
    $this->db->or_like('sarjana', $q);
    $this->db->or_like('gada_pratama_tahun', $q);
    $this->db->or_like('no_ijazah_gada_pratama', $q);
    $this->db->or_like('gada_madya_tahun', $q);
    $this->db->or_like('no_ijazah_gada_madya', $q);
    $this->db->or_like('gada_utama_tahun', $q);
    $this->db->or_like('no_ijazah_gada_utama', $q);
    $this->db->or_like('spesialisasi', $q);
    $this->db->or_like('no_sertifikat_spesialisasi', $q);
    $this->db->or_like('brivet', $q);
    $this->db->or_like('pengalaman_kerja_tni_polri', $q);
    $this->db->or_like('security', $q);
    $this->db->or_like('tanda_jasa', $q);
    $this->db->or_like('catatan_khusus', $q);
    $this->db->or_like('status_bayar', $q);
    $this->db->or_like('tgl', $q);
    $this->db->or_like('tgl_kedaluarsa', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
         $this->db->like('id_pendaftaran', $q);
    $this->db->or_like('kode_pendaftaran', $q);
    $this->db->or_like('instansi_bujp', $q);
    $this->db->or_like('alamat_bujp', $q);
    $this->db->or_like('polres', $q);
    $this->db->or_like('nama', $q);
    $this->db->or_like('tempat_tgl_lahir', $q);
    $this->db->or_like('alamat_rumah', $q);
    $this->db->or_like('tinggi_badan', $q);
    $this->db->or_like('alamat_rumah', $q);
    $this->db->or_like('tinggi_badan', $q);
    $this->db->or_like('berat_badan', $q);
    $this->db->or_like('golongan_darah', $q);
    $this->db->or_like('no_ktp', $q);
    $this->db->or_like('no_npwp', $q);
    $this->db->or_like('email', $q);
    $this->db->or_like('no_hp', $q);
    $this->db->or_like('rumus_sidik_jari', $q);
    $this->db->or_like('nama_istri', $q);
    $this->db->or_like('nama_suami', $q);
    $this->db->or_like('nama_istri', $q);
    $this->db->or_like('jumlah_anak', $q);
    $this->db->or_like('nama_orang_tua', $q);
    $this->db->or_like('sd_tahun', $q);
    $this->db->or_like('sltp_tahun', $q);
    $this->db->or_like('slta_tahun', $q);
    $this->db->or_like('diploma_tahun', $q);
    $this->db->or_like('sarjana', $q);
    $this->db->or_like('gada_pratama_tahun', $q);
    $this->db->or_like('no_ijazah_gada_pratama', $q);
    $this->db->or_like('gada_madya_tahun', $q);
    $this->db->or_like('no_ijazah_gada_madya', $q);
    $this->db->or_like('gada_utama_tahun', $q);
    $this->db->or_like('no_ijazah_gada_utama', $q);
    $this->db->or_like('spesialisasi', $q);
    $this->db->or_like('no_sertifikat_spesialisasi', $q);
    $this->db->or_like('brivet', $q);
    $this->db->or_like('pengalaman_kerja_tni_polri', $q);
    $this->db->or_like('security', $q);
    $this->db->or_like('catatan_khusus', $q);
    $this->db->or_like('tanda_jasa', $q);
    $this->db->or_like('status_bayar', $q);
    $this->db->or_like('tgl', $q);
    $this->db->or_like('tgl_kedaluarsa', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
