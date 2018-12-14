<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jadwal extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('JadwalModel');
  }
  
  public function index(){
    $data['jadwal'] = $this->JadwalModel->view();
    $this->load->view('jadwal/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ 
      if($this->JadwalModel->validation("save")){ 
        $this->JadwalModel->save();
        redirect('jadwal');
      }
    }
    
    $this->load->view('jadwal/tambah_data');
  }
  
  public function ubah($no){
    if($this->input->post('submit')){
      if($this->JadwalModel->validation("update")){
        $this->JadwalModel->edit($no);
        redirect('jadwal');
      }
    }
    
    $data['jadwal'] = $this->JadwalModel->view_by($no);
    $this->load->view('jadwal/edit_data', $data);
  }
  
  public function hapus($no){
    $this->JadwalModel->delete($no);
    redirect('jadwal');
  }
}