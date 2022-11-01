<?php

class Suplayer_model extends CI_Model{
    public function get(){
        $this->db->order_by('id_suplayer','DESC');
        return $this->db->get('suplayer')->result_array();
    }

    public function tambahSuplayer(){
        $data = [
            'nama_suplayer' => $this->input->post('nama_suplayer', true),
            'alamat_suplayer' => $this->input->post('alamat_suplayer', true)
        ];

        $this->db->insert('suplayer', $data);
    }

    public function editSuplayer($id){
        $data = [
            'nama_suplayer' => $this->input->post('nama_suplayer', true),
            'alamat_suplayer' => $this->input->post('alamat_suplayer', true)
        ];

        $this->db->where('id_suplayer',$id);
        $this->db->update('suplayer', $data);
    }
}