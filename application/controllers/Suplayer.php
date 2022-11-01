<?php

class Suplayer extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suplayer_model');
        is_active();
    }

    public function index(){
        $data['title'] = "Suplayer";
        $data['suplayer'] = $this->Suplayer_model->get();
        $this->load->view('partial/header', $data);
        $this->load->view('suplayer', $data);
        $this->load->view('partial/footer', $data);
    }

    public function tambah_suplayer(){
        $data['title'] = "Tambah Suplayer";
        $this->form_validation->set_rules('nama_suplayer','Nama Suplayer','required|trim');
        $this->form_validation->set_rules('alamat_suplayer','Nama Suplayer','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('partial/header', $data);
            $this->load->view('tambah_suplayer', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Suplayer_model->tambahSuplayer();
            redirect('Suplayer');
        }
    }

    public function edit_suplayer($id){

        $data['title'] = "Edit Suplayer";
        $data['suplayer'] = $this->db->get_where('suplayer', ['id_suplayer' => $id])->row();
        $this->form_validation->set_rules('nama_suplayer','Nama Suplayer','required|trim');
        $this->form_validation->set_rules('alamat_suplayer','Nama Suplayer','required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('partial/header', $data);
            $this->load->view('edit_suplayer', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Suplayer_model->editSuplayer($id);
            redirect('Suplayer');
        }
    }

    public function delet_suplayer($id){
        $this->db->where('id_suplayer',$id);
        $this->db->delete('suplayer');
        redirect('Suplayer');
    }

}