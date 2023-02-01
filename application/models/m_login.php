<?php

class m_login extends CI_Model
{
    function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));
        return $this->db->get("admin");
    }

    public function resetPw()
    {
        $email = $this->input->post("email");
        $this->db->where("email", $email);
        return $this->db->get("admin");
    }

    public function reset($id)
    {
        $data = [
            "password" => md5($this->input->post('password'))
        ];
        $this->db->where('number', $id);
        $this->db->update('admin', $data);
    }
}
