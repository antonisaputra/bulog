<?php

class Auth extends CI_Controller
{
    public function registrasi()
    {
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT)
        ];

        $this->db->insert('login', $data);
    }

    public function index()
    {
        $data['title'] = "Login";

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('partial/header', $data);
            $this->load->view('login', $data);
            $this->load->view('partial/footer', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('login', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->session->set_userdata('username', $user['username']);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('pesan', 'Password Salah!');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username Salah!');
            redirect('Auth');
        }
    }
}
