<?php
class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "2") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->model('member/Lokasi_mem');
    }
    public function index()
    {
        $data['title'] = 'Lokasi Member';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Lokasi';
        $dt['member'] = $this->db->select('member.id_lok', 'lokasi.nama_lok')->from('member')->join('lokasi', 'member.id_lok = lokasi.id_lok')->where('member', $this->session->userdata('email'))->get();
        $this->load->view('tmplt/Header', $data);
        $this->load->view('member/lokasi/index', $dt);
        $this->load->view('tmplt/Footer');
    }
}
