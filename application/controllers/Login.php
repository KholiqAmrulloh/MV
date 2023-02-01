<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_admin", "", TRUE);
        $this->load->model("m_login", "", TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $this->load->view('dashboard');
        } else {
            $this->load->view('login');
        }
    }

    function proseslogin()
    {
        $this->load->model("m_login");
        if ($this->m_login->login()->num_rows() > 0) {
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username")
            );
            $this->session->set_userdata($session_data);
            redirect(site_url("dashboard"));
        } else {
            $this->session->set_flashdata("error", "<div style='font-size: 15px; color: red;'>Username atau Password Salah !</div>");
            redirect(site_url("login"));
        }
    }

    public function lupaPW()
    {
        $this->load->view('forgot-password');
    }

    public function resetPassword()
    {
        if ($this->m_login->resetPw()->num_rows() > 0) {
            $session_data = [
                "Reset Password" => true,
                "email" => $this->input->post('email')
            ];
            $this->session->set_userdata($session_data);
            redirect(site_url('login/change'));
        } else {
            $this->session->set_flashdata("salah", "<div style='font-size: 15px; color: red;'>Email anda tidak terdaftar !</div>");
            redirect(site_url('login/lupaPW'));
        }
    }

    public function change()
    {
        $data['Email'] = $this->m_admin->getAlladmin();
        $this->load->view('changepassword', $data);
    }

    public function reset()
    {
        $id = $this->input->post('id');
        $this->m_login->reset($id);
        redirect('login/successreset');
    }

    public function successreset()
    {
        $this->load->view('successreset');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("Login"));
    }
}
