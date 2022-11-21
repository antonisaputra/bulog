<?php

class Barang_keluar extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_keluar_model');
        $this->load->model('Barang_masuk_model');
        $this->load->model('Penerima_model');
        is_active();
    }

    public function index(){
        $data['title'] = "Barang Keluar";
        $data['barang_keluar'] =  $this->Barang_keluar_model->getBarangKeluar();
        $this->load->view('partial/header', $data);
        $this->load->view('barang_keluar', $data);
        $this->load->view('partial/footer', $data);
    }

    public function pilih_barang(){
        $data['title'] = "Pilih Barang Masuk";
        $data['barang_masuk'] = $this->Barang_masuk_model->get();
        $this->load->view('partial/header', $data);
        $this->load->view('pilih_barang', $data);
        $this->load->view('partial/footer', $data);
    }

    public function pilih_penerima($idBarang){
        $data['title'] = "Pilih Pemesan";
        $this->session->set_userdata('id Barang', $idBarang);
        $data['penerima'] = $this->Penerima_model->getPenerima();
        $this->load->view('partial/header', $data);
        $this->load->view('pilih_penerima', $data);
        $this->load->view('partial/footer', $data);
    }

    public function tambah_barang_keluar($idPenerima){
        $data['title'] = "Tambah Barang Keluar";
        $this->form_validation->set_rules('jumlah','Jumlah','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('partial/header', $data);
            $this->load->view('tambah_barang_keluar', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Barang_keluar_model->tambah_barang($idPenerima);
            $this->session->unset_userdata('id Barang');
            redirect('Barang_keluar');
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('barang_keluar');
        redirect('Barang_keluar');
    }

    public function print(){
        $data['title'] = "Barang Keluar";
        $data['barang_keluar'] =  $this->Barang_keluar_model->getBarangKeluar();
        $this->load->view('print_barang_keluar', $data);
    }
}