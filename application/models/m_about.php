<?php

class m_about extends CI_Model
{
    public function getAllabout()
    {
        return $this->db->get('aboutus')->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert('aboutus', $data);
    }

    public function edit($id)
    {
        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|gif';
        $this->load->library('upload', $config);

        $data = [
            'judul' => $this->input->post('judul'),
            'konten_text' => $this->input->post('kontentext')
        ];

        if ($this->upload->do_upload('kontengambar')) {
            $data['konten_gambar'] = $this->upload->data('file_name');
        }

        $this->db->where('number', $id);
        $this->db->update('aboutus', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('aboutus', ['number' => $id]);
    }

    public function hapusImage($number, $data)
    {
        $this->db->where('number', $number);
        $this->db->update('aboutus', $data);
    }
}
