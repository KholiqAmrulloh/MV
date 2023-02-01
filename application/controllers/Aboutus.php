<?php
class Aboutus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_about", "", TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $data['About'] = $this->m_about->getAllabout();
            $this->load->view("aboutus", $data);
        } else {
            $this->load->view('login');
        }
    }

    public function formTambahAboutUs()
    {
        if ($this->session->userdata('login')) {
            $this->load->view('tambahaboutus');
        } else {
            $this->load->view('login');
        }
    }

    public function tambah()
    {
        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|gif';
        $this->load->library('upload', $config);

        $kontengambar = "";
        if ($this->upload->do_upload('kontengambar')) {
            $this->upload->do_upload('kontengambar');
            $kontengambar = $this->upload->data('file_name');
        }

        $data = array(
            'judul' => $this->input->post('judul'),
            'konten_text' => $this->input->post('kontentext'),
            'konten_gambar' => $kontengambar
        );

        $this->m_about->tambah($data, 'aboutus');
        redirect('aboutus');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $this->m_about->edit($id);
        redirect('aboutus');
    }

    public function hapus($id)
    {
        $this->m_about->hapus($id);
        redirect('aboutus');
    }

    public function hapusImage($number, $index)
    {
        if ($index == '1') {
            $data = [
                'konten_gambar' => ''
            ];
        }
        $this->m_about->hapusImage($number, $data);
        redirect('aboutus');
    }
}
