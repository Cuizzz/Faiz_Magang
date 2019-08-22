<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        $result = $this->db->query("SELECT * FROM user WHERE role_id='3'");
        return $result->result_array();
    }
    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
}
