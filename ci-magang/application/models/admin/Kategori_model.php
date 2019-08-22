<?php

class Kategori_model extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function tambahDataKategori()
    {
        $data = [
            "nama_kat" => $this->input->post('nama_kat', true)
        ];
        $this->db->insert('kategori', $data);
    }
    public function hapusDataKategori($id_kat)
    {
        $this->db->where('id_kat', $id_kat);
        $this->db->delete('kategori');
    }
    public function getKategoriById($id_kat)
    {
        return $this->db->get_where('kategori', ['id_kat' => $id_kat])->row_array();
    }
    public function editDataKategori()
    {
        $data = [
            "nama_kat" => $this->input->post('nama_kat', true)
        ];
        $this->db->where('id_kat', $this->input->post('id_kat'));
        $this->db->update('kategori', $data);
    }
}
