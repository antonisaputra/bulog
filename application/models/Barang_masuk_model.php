<?php
class Barang_masuk_model extends CI_Model{
    public function get(){
        $this->db->order_by('id','DESC');

        return $this->db->get('detail_barang_masuk')->result_array();
    }

    public function tambah_barang_masuk(){
        $data = [
            'id_suplayer' => $this->input->post('suplayer'),
            'nama_barang' => $this->input->post('nama_barang', true),
            'jenis_barang' => $this->input->post('jenis', true),
            'stok_barang' => $this->input->post('stok'),
            'harga' => $this->input->post('harga')
        ];

        $this->db->insert('barang_masuk', $data);
    }

    public function edit_barang_masuk($id){
        $data = [
            'id_suplayer' => $this->input->post('suplayer'),
            'nama_barang' => $this->input->post('nama_barang', true),
            'jenis_barang' => $this->input->post('jenis', true),
            'stok_barang' => $this->input->post('stok'),
            'harga' => $this->input->post('harga')
        ];

        $this->db->where('id',$id);
        $this->db->update('barang_masuk', $data);
    }
}