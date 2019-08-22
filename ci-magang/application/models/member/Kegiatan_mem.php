<?php

class Kegiatan_mem extends CI_Model
{
    public function getKeg()
    {
        $result = $this->db->query("SELECT * FROM kegiatan JOIN sub_kategori ON kegiatan.id_sub = sub_kategori.id_sub JOIN lokasi ON kegiatan.id_lok = lokasi.id_lok");
        return $result->result_array();
    }
    public function tambahKeg()
    {
        $data = [
            "nama_keg" => $this->input->post('nama_keg', true),
            "id_sub" => $this->input->post('id_sub', true),
            "id_lok" => $this->input->post('id_lok', true)
        ];
        $this->db->insert('kegiatan', $data);
    }
    public function hapusKeg($id_keg)
    {
        $this->db->where('id_keg', $id_keg);
        $this->db->delete('kegiatan');
    }
    public function getKegId($id_keg)
    {
        return $this->db->get_where('kegiatan', ['id_keg' => $id_keg])->row_array();
    }
    public function editKeg()
    {
        $data = [
            "nama_keg" => $this->input->post('nama_keg', true),
            "id_sub" => $this->input->post('id_sub', true),
            "id_lok" => $this->input->post('id_lok', true)
        ];
        $this->db->where('id_keg', $this->input->post('id_keg'));
        $this->db->update('kegiatan', $data);
    }
}
