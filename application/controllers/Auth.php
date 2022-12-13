<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Auth extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->library('form_validation');
    }
    
    public function index(){
      $this->form_validation->set_rules('email','Email','required|trim|valid_email');
      $this->form_validation->set_rules('password','Password','required|trim|min_length[3]',[
        'matches' => 'Password not matches',
        'min_length' => 'Password too short'
      ]);
      if($this->form_validation->run() == false){
        $data["title"] = "Login";
        $this->load->view('/templates/header',$data);
        $this->load->view('/auth/login');
        $this->load->view('/templates/footer');
      } else {
        $this->_login();
      }
    }

    private function _login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $user = $this->db->get_where('akun',['email' => $email])->row_array();
      if($user){
        if(password_verify($password,$user['password'])){
          $data = [
            'email' => $user['email'],
            'level' => $user['level'],
            'id' => $user['id']
          ];
          $this->session->set_userdata($data);
          redirect('landingPage');
        } else {
          $this->session->set_flashdata('message', 
          '<div class="alert alert-danger" role="alert">Password Salah ! </div>');
          redirect('auth'); 
        }
      } else {
        $this->session->set_flashdata('message', 
        '<div class="alert alert-danger" role="alert">Email tidak terdaftar ! </div>');
        redirect('auth');
      }
    }
    
    public function logout(){
      $dataUnset = ['email','level','id'];
      $this->session->unset_userdata($dataUnset);
      $this->session->set_flashdata('message', 
      '<div class="alert alert-success" role="alert">Anda sudah logout ! </div>');
      redirect('auth');
    }
    public function register(){
      // Membuat rules
      $this->form_validation->set_rules('nama','Name','required|trim');
      $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[akun.email]');
      $this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[konfirmasiPwd]',[
        'matches' => 'Password not matches',
        'min_length' => 'Password too short'
      ]);
      $this->form_validation->set_rules('konfirmasiPwd','Konfirmasi Password','required|trim|matches[password]');
      if($this->form_validation->run() == false){
        $data["title"] = "Register";
        $this->load->view('/templates/header',$data);
        $this->load->view('/auth/register');
        $this->load->view('/templates/footer');
      } else {
        $data = [
          'nama' => htmlspecialchars($this->input->post('nama',true)),
          'email' => htmlspecialchars($this->input->post('email',true)),
          'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT) ,
        ];
        $this->db->insert('akun',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Register Berhasil !
      </div>');
        redirect('auth');
      }
    }
  }
