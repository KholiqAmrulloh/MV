<?php

class Portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_port", "", TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $data['Port'] = $this->m_port->getAllport();
            $this->load->view("portofolio", $data);
        } else {
            $this->load->view('login');
        }
    }

    public function formTambahPortofolio()
    {
        if ($this->session->userdata('login')) {
            $this->load->view('tambahPortofolio');
        } else {
            $this->load->view('login');
        }
    }

    public function tambah()
    {
        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|gif';
        $this->load->library('upload', $config);

        $img1 = "";
        if ($this->upload->do_upload('image1')) {
            $this->upload->do_upload('image1');
            $img1 = $this->upload->data('file_name');
        }

        $img2 = "";
        if ($this->upload->do_upload('image2')) {
            $this->upload->do_upload('image2');
            $img2 = $this->upload->data('file_name');
        }

        $img3 = "";
        if ($this->upload->do_upload('image3')) {
            $this->upload->do_upload('image3');
            $img3 = $this->upload->data('file_name');
        }

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'judul' => $this->input->post('judul'),
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'capt1' => $this->input->post('caption1')
        );

        $this->m_port->tambah($data, 'portofolio');
        redirect('portofolio');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $this->m_port->edit($id);
        redirect('portofolio');
    }

    public function hapus($id)
    {
        $this->m_port->hapus($id);
        redirect('portofolio');
    }

    public function hapusImage($number, $index)
    {
        if($index == '1'){
            $data = [
                'img1' => ''
            ];
        }else if($index == '2'){
            $data = [
                'img2' => ''
            ];
        }else if($index == '3'){
            $data = [
                'img3' => ''
            ];
        }
        $this->m_port->hapusImage($number, $data);
        redirect('portofolio');
    }
}
