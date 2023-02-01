<?php

class m_admin extends CI_Model
{
    public function getAlladmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert('admin', $data);
    }

    public function edit($id)
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password')
        ];
        $this->db->where('number', $id);
        $this->db->update('admin', $data);
    }

    function hapus($id)
    {
        $this->db->delete('admin', ['number' => $id]);
    }
}
