<?php
class Sub extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('admin/Sub_model');
        $this->load->model('admin/Kategori_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Subkategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sub_kategori'] = $this->Sub_model->getAllSub();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/sub/index', $data);
        $this->load->view('tmplt/Footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Subkategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->getAllKategori();
        $this->form_validation->set_rules('nama_sub', 'Nama sub', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/sub/Tambah', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $this->Sub_model->tambahDataSub();
            $this->session->set_flashdata('sub', 'ditambahkan');
            redirect('admin/sub');
        }
    }
    public function hapus($id_sub)
    {
        $this->Sub_model->hapusDataSub($id_sub);
        $this->session->set_flashdata('sub', 'dihapus');
        redirect('admin/sub');
    }
    public function edit($id_sub)
    {
        $data['judul'] = 'Form Edit Data Subkategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sub_kategori'] = $this->Sub_model->getSubById($id_sub);
        $data['kategori'] = $this->Kategori_model->getAllKategori();
        $this->form_validation->set_rules('nama_sub', 'Nama sub', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/sub/Edit', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $this->Sub_model->editDataSub();
            $this->session->set_flashdata('sub', 'diedit');
            redirect('admin/sub');
        }
    }
}
