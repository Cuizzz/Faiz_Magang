<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata("role_id") != "3") {
            redirect(base_url("Auth/Blocked"));
        }
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';
        $data['judul'] = 'Home';
        $this->load->view('tmplt/Header', $data);
        $this->load->view('user/index');
        $this->load->view('tmplt/Footer');
    }
    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Profil';
        $this->form_validation->set_rules('username', 'Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('tmplt/Header', $data);
            $this->load->view('user/Edit', $data);
            $this->load->view('tmplt/Footer');
        } else {
            $username = $this->input->post('username');
            $jenis_kel = $this->input->post('jenis_kel');
            $telp = $this->input->post('telp');
            $email = $this->input->post('email');

            // cek gambar
            $upload_img = $_FILES['image']['username'];
            if ($upload_img) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '11048';
                $config['upload_path'] = './tmplt/assets/img/user/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('image', $new_img);
                } else {
                    $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">' . $this->upload->display_errors() . '</div>');
                    redirect('user/User/detail');
                }
            }

            $this->db->set('username', $username);
            $this->db->set('jenis_kel', $jenis_kel);
            $this->db->set('telp', $telp);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">Your profile has been updated<i class="close material-icons">close</i></div>');
            redirect('user/User/detail');
        }
    }
    public function detail()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Profile';
        $data['judul'] = 'Detail';
        $this->load->view('tmplt/Header', $data);
        $this->load->view('user/Detail');
        $this->load->view('tmplt/Footer');
    }
    public function keg()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Kegiatan saya';
        $data['judul'] = 'Kegiatan';
        $this->load->view('tmplt/Header', $data);
        $this->load->view('user/Kegiatan');
        $this->load->view('tmplt/Footer');
    }
}
