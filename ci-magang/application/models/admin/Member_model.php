<?php

class Member_model extends CI_Model
{
    public function id_mem()
    {
        $this->db->select('RIGHT(member.id_mem,2) as id_mem', FALSE);
        $this->db->order_by('id_mem', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('member');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $id_mem = intval($data->id_mem) + 1;
        } else {
            $id_mem = 1;
        }
        $tgl = date('dmY');
        $batas = str_pad($id_mem, 3, "0", STR_PAD_LEFT);
        $kodetampil = "BR" . "5" . $tgl . $batas;
        return $kodetampil;
    }
    public function getAllMember()
    {
        $result = $this->db->query("SELECT * FROM member JOIN kategori ON member.id_kat = kategori.id_kat JOIN lokasi ON member.id_lok = lokasi.id_lok");
        return $result->result_array();
    }
    public function hapusDataMember($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('member');
    }
    public function getMemberById($id)
    {
        return $this->db->get_where('member', ['id' => $id])->row_array();
    }
}
