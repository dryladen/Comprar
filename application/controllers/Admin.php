<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function index(){
    $data["title"] = "Management Data";
    $user['nama'] = 'User';
    $data['user'] = $user;
    if($this->session->userdata('email')){
      $data['user'] = $this->db->get_where('akun',[
        'email' => $this->session->userdata('email')
      ]);
    }
    // $data['user'] = $this->db->get_where('akun',[
    //   'email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header',$data);
    $this->load->view('admin');
    $this->load->view('templates/footer');
  }
}
