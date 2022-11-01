<?php 

class Penerima extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penerima_model');
        is_active();
    }
    public function index(){
        $data['title'] = "Penerima";
        $data['penerima'] = $this->Penerima_model->getPenerima();
        $this->load->view('partial/header', $data);
        $this->load->view('penerima', $data);
        $this->load->view('partial/footer', $data);
    }

    public function tambah_penerima(){
        $data['title'] = "Tambah Penerima";

        $this->form_validation->set_rules('nama_penerima','Nama Penerima','required|trim');
        $this->form_validation->set_rules('alamat_penerima','Alamat Penerima','required|trim');

        if($this->form_validation->run() == false ){
            $this->load->view('partial/header', $data);
            $this->load->view('tambah_penerima', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Penerima_model->tambah_penerima();
            redirect('Penerima');
        }
    }

    public function edit_penerima($id){
        $data['title'] = "Edit Penerima";
        $data['penerima'] = $this->db->get_where('penerima',['id' => $id])->row_array();
        $this->form_validation->set_rules('nama_penerima','Nama Penerima','required|trim');
        $this->form_validation->set_rules('alamat_penerima','Alamat Penerima','required|trim');

        if($this->form_validation->run() == false ){
            $this->load->view('partial/header', $data);
            $this->load->view('edit_penerima', $data);
            $this->load->view('partial/footer', $data);
        }else{
            $this->Penerima_model->edit_penerima($id);
            redirect('Penerima');
        }
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('penerima');
        redirect('Penerima');
    }
}