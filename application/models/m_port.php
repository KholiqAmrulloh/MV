<?php

class m_port extends CI_Model
{
    public function getAllport()
    {
        $this->db->order_by('portofolio.number', 'desc');
        return $this->db->get('portofolio')->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert('portofolio', $data);
    }

    public function edit($id)
    {
        $config['upload_path'] = './assets/img/upload';
        $config['allowed_types'] = 'jpg|png|gif';
        $this->load->library('upload', $config);

        $data = [
            'judul' => $this->input->post('judul'),
            'capt1' => $this->input->post('caption1')
        ];

        if ($this->upload->do_upload('image1')) {
            $data['img1'] = $this->upload->data('file_name');
        }

        if ($this->upload->do_upload('image2')) {
            $data['img2'] = $this->upload->data('file_name');
        }

        if ($this->upload->do_upload('image3')) {
            $data['img3'] = $this->upload->data('file_name');
        }

        $this->db->where('number', $id);
        $this->db->update('portofolio', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('portofolio', ['number' => $id]);
    }

    public function hapusImage($number, $data)
    {
        $this->db->where('number', $number);
        $this->db->update('portofolio', $data);
    }
}
