<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    public function list()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->order_by('id_jadwal', 'asc');
        return $this->db->get()->result_array();
    }
    public function get_id($id_jadwal)
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $query = $this->db->get('jadwal');
        return $query->row();
    }
    public function simpan_data($dataku)
    {
        $this->db->insert('jadwal', $dataku);
    }
    public function editjadwal($dataku)
    {
        $this->db->update('jadwal', $dataku);
    }
}
