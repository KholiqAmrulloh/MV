<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("m_user", "", TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $data['User'] = $this->m_user->getAlluser();
            $this->load->view("dashboard", $data);
        } else {
            $this->load->view('login');
        }
    }

    public function hapus($id)
    {
        $this->m_user->hapus($id);
        redirect('dashboard');
    }

    public function balas($id)
    {
        if ($this->session->userdata('login')) {
            $data['User'] = $this->m_user->ambilData($id);
            $this->load->view('emailreply', $data);
        } else {
            $this->load->view('login');
        }
    }

    public function sendMail()
    {
        if (isset($_POST['submit'])) {
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $pesan = $this->input->post('pesan');

            if (!empty($email)) {
                $config = [
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_user' => 'kpraktik838@gmail.com',
                    'smtp_pass' => 'kerjapraktik21',
                    'smtp_crypto' => 'ssl',
                    'smtp_port' => 465,
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
                ];

                $this->load->library('email', $config);
                $this->email->initialize($config);

                $this->email->from('kpraktik838@gmail.com');
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($pesan);

                if ($this->email->send()) {
                    $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Pesan anda telah dikirim ke $email !<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button></div>");
                    redirect(site_url("dashboard"));
                } else {
                    $this->session->set_flashdata("success", "<div class='alert alert-warning' role='alert'>Pesan anda gagal dikirim ke $email !<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button></div>");
                    redirect(site_url("dashboard"));
                }
            }
        }
    }
}
