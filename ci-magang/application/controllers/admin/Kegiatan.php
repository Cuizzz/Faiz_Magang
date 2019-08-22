<?php
class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('admin/Kegiatan_model');
        $this->load->model('admin/Sub_model');
        $this->load->model('admin/Lokasi_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Kegiatan';
        $data['kegiatan'] = $this->Kegiatan_model->getAllKeg();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/kegiatan/index', $data);
        $this->load->view('tmplt/Footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kegiatan';
        $data['sub_kategori'] = $this->Sub_model->getAllSub();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $this->form_validation->set_rules('nama_keg', 'Nama kegiatan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/kegiatan/Tambah', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $this->Kegiatan_model->tambahDataKeg();
            $this->session->set_flashdata('keg', 'ditambahkan');
            redirect('admin/kegiatan');
        }
    }
    public function hapus($id_keg)
    {
        $this->Kegiatan_model->hapusDataKeg($id_keg);
        $this->session->set_flashdata('keg', 'dihapus');
        redirect('admin/kegiatan');
    }
    public function edit($id_keg)
    {
        $data['judul'] = 'Form Edit Data Kegiatan';
        $data['kegiatan'] = $this->Kegiatan_model->getKegById($id_keg);
        $data['sub_kategori'] = $this->Sub_model->getAllSub();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $this->form_validation->set_rules('nama_keg', 'Nama kegiatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/kegiatan/Edit', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $this->Kegiatan_model->editDataKeg();
            $this->session->set_flashdata('keg', 'diedit');
            redirect('admin/kegiatan');
        }
    }
}
