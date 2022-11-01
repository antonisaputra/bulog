<?php

class Dashboard extends CI_Controller{
    public function index(){
        is_active();
        $data['title'] = "Dashboard";
        $data['barang_masuk'] = $this->db->get('barang_masuk')->num_rows();
        $data['barang_keluar'] = $this->db->get('barang_keluar')->num_rows();
        $data['suplayer'] = $this->db->get('suplayer')->num_rows();
        $data['penerima'] = $this->db->get('penerima')->num_rows();
        $this->load->view('partial/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('partial/footer', $data);
    }
}