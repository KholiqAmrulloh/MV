<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_home", "", TRUE);
        $this->load->model("m_port", "", TRUE);
        $this->load->model("m_about", "", TRUE);
    }

    public function index()
    {
        $this->load->view('WSpeech');
    }

    public function MV()
    {
        $data['Port'] = $this->m_port->getAllport();
        $data['About'] = $this->m_about->getAllabout();
        $this->load->view('home', $data);
    }

    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'pesan' => $this->input->post('message'),
            'tanggal' => $this->input->post('tanggal')
        );
        $this->m_home->tambah($data, 'user');
    }
}
