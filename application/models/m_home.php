<?php

class m_home extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('user', $data);
    }
}
