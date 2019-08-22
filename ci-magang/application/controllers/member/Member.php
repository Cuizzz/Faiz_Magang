<?php
class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "2") {
            redirect(base_url("Auth/Blocked"));
        }
    }
    public function index()
    {
        $data['title'] = 'Profile Member';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Home';
        $this->load->view('tmplt/Header', $data);
        $this->load->view('member/index');
        $this->load->view('tmplt/Footer');
    }
    public function detail()
    {
        $data['title'] = 'Profile Member';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Detail';
        $this->load->view('tmplt/Header', $data);
        $this->load->view('member/detail/index');
        $this->load->view('tmplt/Footer');
    }
}
