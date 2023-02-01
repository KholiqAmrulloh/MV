<?php

class m_user extends CI_Model
{
    public function getAlluser()
    {
        return $this->db->get('user')->result_array();
    }

    function hapus($id)
    {
        $this->db->delete('user', ['number' => $id]);
    }

    public function ambilData($id)
    {
        $this->db->where('number', $id);
        $query = $this->db->get('user');
        return $query->result_array();
    }
}
