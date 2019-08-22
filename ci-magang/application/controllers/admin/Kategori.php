<?php
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('admin/Kategori_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Kategori';
        $data['kategori'] = $this->Kategori_model->getAllKategori();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/kategori/index', $data);
        $this->load->view('tmplt/Footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_kat', 'Nama kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/kategori/Tambah');
            $this->load->view('tmplt/Footer');
        } else {
            $this->Kategori_model->tambahDataKategori();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/kategori');
        }
    }
    public function hapus($id_kat)
    {
        $this->Kategori_model->hapusDataKategori($id_kat);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/kategori');
    }
    public function edit($id_kat)
    {
        $data['judul'] = 'Form Edit Data Kategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->getKategoriById($id_kat);
        $this->form_validation->set_rules('nama_kat', 'Nama kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/kategori/Edit', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $this->Kategori_model->editDataKategori();
            $this->session->set_flashdata('flash', 'diedit');
            redirect('admin/kategori');
        }
    }
}
