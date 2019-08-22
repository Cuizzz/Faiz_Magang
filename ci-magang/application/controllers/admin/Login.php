<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login/In');
        } else {
            //validasinya success
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();
        // Jika usernya ada
        if ($admin) {
            // Jika usernya aktif
            if ($admin['is_active'] == 1) {
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'email' => $admin['email'],
                        'role_id' => $admin['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/Home');
                } else {
                    $this->session->set_flashdata('message', '<div class="chip" style="background-color: #ffb8b8;">Password salah!<i class="close material-icons">close</i></div>');
                    redirect('admin/Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="chip" style="background-color: #ffb8b8;">Email belum di aktivasi!<i class="close material-icons">close</i></div>');
                redirect('admin/Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="chip" style="background-color: #ffb8b8;">Email belum di registrasi!<i class="close material-icons">close</i></div>');
            redirect('admin/Login');
        }
    }
    public function Up()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'Email sudah pernah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login/Up');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">Congratulation! Please login..<i class="close material-icons">close</i></div>');
            redirect('admin/Login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">You have been logout..<i class="close material-icons">close</i></div>');
        redirect('admin/Login');
    }
}
