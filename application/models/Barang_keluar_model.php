<?php

class Barang_keluar_model extends CI_Model{
    public function getBarangKeluar(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('detail_barang_keluar')->result_array();
    }

    public function tambah_barang($idPenerima){
        $idBarang = $this->session->userdata('id Barang');
        $barang = $this->db->get_where('barang_masuk',['id' => $idBarang])->row_array();
        $data = [
            'id_barang' => $idBarang,
            'id_penerima' => $idPenerima,
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('jumlah')*$barang['harga']
        ];

        $this->db->insert('barang_keluar', $data);

        $updateStok = $barang['stok_barang']-$this->input->post('jumlah');


        $this->db->where('id', $idBarang);
        $this->db->update('barang_masuk',['stok_barang' => $updateStok]);
    }
}