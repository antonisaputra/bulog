<?php

class Barang_masuk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_masuk_model');
        is_active();
    }

    public function index(){
        $data['title']='barang_masuk';
        $data['barang_masuk'] = $this->Barang_masuk_model->get();
        $this->load->view('partial/header', $data);
        $this->load->view('barang_masuk', $data);
        $this->load->view('partial/footer', $data);
    }

    public function tambah_barang_masuk(){
        $data['title'] = "Tambah Barang Masuk";
        $data['suplayer'] = $this->db->get('suplayer')->result();
        $this->form_validation->set_rules('nama_barang','Nama Barang','required|trim');
        $this->form_validation->set_rules('jenis','Jenis Barang','required|trim');
        $this->form_validation->set_rules('stok','Stok Barang','required|trim');
        $this->form_validation->set_rules('harga','Harga Barang','required|trim');

        if($this->form_validation->run() == false){
            $this->load->view('partial/header', $data);
            $this->load->view('tambah_barang_masuk', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Barang_masuk_model->tambah_barang_masuk();
            redirect('Barang_masuk');
        }
    }

    public function edit_barang_masuk($id)
    {
        $data['title'] = "Tambah Barang Masuk";
        $data['barang_masuk'] = $this->db->get_where('barang_masuk',['id'=> $id])->row_array();
        $data['suplayer'] = $this->db->get('suplayer')->result_array();
        $data['jenis'] = [
            ['jenis' => 'Beras Merah'],
            ['jenis' => 'Beras Putih']
        ];
        $this->form_validation->set_rules('nama_barang','Nama Barang','required|trim');
        $this->form_validation->set_rules('jenis','Jenis Barang','required|trim');
        $this->form_validation->set_rules('stok','Stok Barang','required|trim');
        $this->form_validation->set_rules('harga','Harga Barang','required|trim');

        if($this->form_validation->run() == false){
            $this->load->view('partial/header', $data);
            $this->load->view('edit_barang_masuk', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Barang_masuk_model->edit_barang_masuk($id);
            redirect('Barang_masuk');
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('barang_masuk');
        redirect('Barang_masuk');
    }
}