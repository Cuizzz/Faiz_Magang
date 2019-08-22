<?php

class Sub_model extends CI_Model
{
    public function getAllSub()
    {
        $result = $this->db->query("SELECT * FROM sub_kategori JOIN kategori ON sub_kategori.id_kat = kategori.id_kat");
        return $result->result_array();
    }
    public function tambahDataSub()
    {
        $data = [
            "nama_sub" => $this->input->post('nama_sub', true),
            "id_kat" => $this->input->post('id_kat', true)
        ];
        $this->db->insert('sub_kategori', $data);
    }
    public function hapusDataSub($id_sub)
    {
        $this->db->where('id_sub', $id_sub);
        $this->db->delete('sub_kategori');
    }
    public function getSubById($id_sub)
    {
        return $this->db->get_where('sub_kategori', ['id_sub' => $id_sub])->row_array();
    }
    public function editDataSub()
    {
        $data = [
            "nama_sub" => $this->input->post('nama_sub', true),
            "id_kat" => $this->input->post('id_kat', true)
        ];
        $this->db->where('id_sub', $this->input->post('id_sub'));
        $this->db->update('sub_kategori', $data);
    }
}
