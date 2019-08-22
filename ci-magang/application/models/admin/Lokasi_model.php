<?php

class Lokasi_model extends CI_Model
{
    public function getAllLokasi()
    {
        return $this->db->get('lokasi')->result_array();
    }
    public function tambahDataLokasi()
    {
        $data = [
            "nama_lok" => $this->input->post('nama_lok', true)
        ];
        $this->db->insert('lokasi', $data);
    }
    public function hapusDataLokasi($id_lok)
    {
        $this->db->where('id_lok', $id_lok);
        $this->db->delete('lokasi');
    }
    public function getLokasiById($id_lok)
    {
        return $this->db->get_where('lokasi', ['id_lok' => $id_lok])->row_array();
    }
    public function editDataLokasi()
    {
        $data = [
            "nama_lok" => $this->input->post('nama_lok', true)
        ];
        $this->db->where('id_lok', $this->input->post('id_lok'));
        $this->db->update('lokasi', $data);
    }
}
