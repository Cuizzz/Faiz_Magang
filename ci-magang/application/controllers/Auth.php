<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin/Lokasi_model');
        $this->load->model('admin/Kategori_model');
        $this->load->model('admin/Sub_model');
        $this->load->model('admin/Member_model');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user/User');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/In');
        } else {
            //validasinya success
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // Jika usernya ada
        if ($user) {
            // Jika usernya aktif
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/Home');
                    } elseif ($user['role_id'] == 2) {
                        redirect('member/Member');
                    } else {
                        redirect('user/User');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="chip" style="background-color: #ffb8b8;">Password salah!<i class="close material-icons">close</i></div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="chip" style="background-color: #ffb8b8;">Email belum di aktivasi!<i class="close material-icons">close</i></div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="chip" style="background-color: #ffb8b8;">Email belum di registrasi!<i class="close material-icons">close</i></div>');
            redirect('Auth');
        }
    }
    public function Up()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('jenis_kel', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('telp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah pernah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/Up');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'jenis_kel' => htmlspecialchars($this->input->post('jenis_kel', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            /* $dx = [
                'id' => "",
                'id_user' => htmlspecialchars($this->input->post('username', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'jenis_kel' => "Laki-Laki",
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'telp' => "08564",
                'is_active' => 1
            ];
            $this->db->insert('peserta', $dx); */
            $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">Congratulation! Please login..<i class="close material-icons">close</i></div>');
            redirect('Auth');
        }
    }

    public function Remem()
    {
        $data['id_mem'] = $this->Member_model->id_mem();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();
        $data['kategori'] = $this->Kategori_model->getAllKategori();
        $data['sub_kategori'] = $this->Sub_model->getAllSub();
        $this->form_validation->set_rules('id_mem', 'ID Member', 'required|trim');
        $this->form_validation->set_rules('username', 'Business Name', 'required|trim');
        $this->form_validation->set_rules('telp', 'No Telp', 'required|trim');
        $this->form_validation->set_rules('id_kat', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('id_sub', 'Subkategori', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('id_lok', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah pernah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/Remem', $data);
        } else {
            $dt = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'jenis_kel' => "",
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $dt);
            $dx = [
                'id_mem' => htmlspecialchars($this->input->post('id_mem', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'id_kat' => htmlspecialchars($this->input->post('id_kat', true)),
                'id_sub' => htmlspecialchars($this->input->post('id_sub', true)),
                'id_lok' => htmlspecialchars($this->input->post('id_lok', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'is_active' => 1,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'date_created' => time()
            ];
            $this->db->insert('member', $dx);
            $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">Congratulation! Please login..<i class="close material-icons">close</i></div>');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="chip" style="background-color: #c5ffc5;">You have been logout..<i class="close material-icons">close</i></div>');
        redirect('Auth');
    }
    public function Blocked()
    {
        $this->load->view('auth/Blocked');
    }
}
