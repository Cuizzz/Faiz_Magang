<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('admin/User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Daftar User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'User';
        $dt['user'] = $this->User_model->getAllUser();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/user/index', $dt);
        $this->load->view('tmplt/Footer');
    }
    public function hapus($id)
    {
        $this->User_model->hapusDataUser($id);
        $this->session->set_flashdata('us', 'dihapus');
        redirect('admin/User');
    }
}
