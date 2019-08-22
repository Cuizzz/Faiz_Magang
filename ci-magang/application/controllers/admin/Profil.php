<?php
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "1") {
            redirect(base_url("Auth/Blocked"));
        }
    }
    public function index()
    {
        $data['title'] = 'Detail Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Profil';
        $this->load->view('tmplt/Header', $data);
        $this->load->view('admin/profil/index');
        $this->load->view('tmplt/Footer');
    }
}
