<?php
class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('admin/Member_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Daftar Member';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Member';
        $dt['member'] = $this->Member_model->getAllMember();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/member/index', $dt);
        $this->load->view('tmplt/Footer');
    }
    public function hapus($id)
    {
        $this->Member_model->hapusDataMember($id);
        $this->session->set_flashdata('mem', 'dihapus');
        redirect('admin/Member');
    }
}
