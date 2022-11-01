<?php 

class Penerima_model extends CI_Model{
    public function getPenerima(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('penerima')->result_array();
    }

    public function tambah_penerima(){
        $data = [
            'nama_penerima' => $this->input->post('nama_penerima', true),
            'alamat_penerima' => $this->input->post('alamat_penerima', true)
        ];

        $this->db->insert('penerima', $data);
    }

    public function edit_penerima($id){
        $data = [
            'nama_penerima' => $this->input->post('nama_penerima', true),
            'alamat_penerima' => $this->input->post('alamat_penerima', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('penerima', $data);
    }
}