<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class JadwalModel extends CI_Model {

  public function view(){
    return $this->db->get('jadwal')->result();
  }
  

  public function view_by($no){
    $this->db->where('no', $no);
    return $this->db->get('jadwal')->row();
  }
  
 
  public function validation($mode){
    $this->load->library('form_validation'); 
    

    if($mode == "save")
      $this->form_validation->set_rules('input_no', 'no', 'required|numeric|max_length[3]');
    
    $this->form_validation->set_rules('input_hari', 'hari', 'required|max_length[6]');
    $this->form_validation->set_rules('input_mk', 'mk', 'required|max_length[25]');
    $this->form_validation->set_rules('input_dosen', 'dosen', 'required|max_length[25]');
    $this->form_validation->set_rules('input_kode', 'kode', 'required|numeric|max_length[3]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  

  public function save(){
    $data = array(
      "no" => $this->input->post('input_no'),
      "hari" => $this->input->post('input_hari'),
      "mk" => $this->input->post('input_mk'),
      "dosen" => $this->input->post('input_dosen'),
      "kode" => $this->input->post('input_kode')
    );
    
    $this->db->insert('jadwal', $data);
  }
  
 
  public function edit($no){
    $data = array(
      "no" => $this->input->post('input_nohari'),
      "hari" => $this->input->post('input_hari'),
      "mk" => $this->input->post('input_mk'),
      "dosen" => $this->input->post('input_dosen'),
      "kode" => $this->input->post('input_kode')
    );
    
    $this->db->where('no', $no);
    $this->db->update('jadwal', $data); 
  }
  

  public function delete($no){
    $this->db->where('no', $no);
    $this->db->delete('jadwal');
  }
}