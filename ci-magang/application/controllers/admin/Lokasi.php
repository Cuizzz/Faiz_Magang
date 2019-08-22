<?php
class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('admin/Lokasi_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Lokasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/lokasi/index', $data);
        $this->load->view('tmplt/Footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Lokasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_lok', 'Nama lokasi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/lokasi/Tambah');
            $this->load->view('tmplt/Footer');
        } else {
            $this->Lokasi_model->tambahDataLokasi();
            $this->session->set_flashdata('lok', 'ditambahkan');
            redirect('admin/lokasi');
        }
    }
    public function hapus($id_lok)
    {
        $this->Lokasi_model->hapusDataLokasi($id_lok);
        $this->session->set_flashdata('lok', 'dihapus');
        redirect('admin/lokasi');
    }
    public function detail($id_lok)
    {
        $data['judul'] = 'Detail Data Lokasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getLokasiById($id_lok);
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/lokasi/Detail', $data);
        $this->load->view('tmplt/Maps');
        $this->load->view('tmplt/Footer');
    }
    public function edit($id_lok)
    {
        $data['judul'] = 'Form Edit Data Lokasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getLokasiById($id_lok);
        $this->form_validation->set_rules('nama_lok', 'Nama lokasi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('admin/lokasi/Edit', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $this->Lokasi_model->editDataLokasi();
            $this->session->set_flashdata('lok', 'diedit');
            redirect('admin/lokasi');
        }
    }
}
