<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class LandingPage extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('email')){
      redirect('auth');
    }
  }
  public function index(){
    $data["title"] = "Landing Page";
    $this->load->view('templates/header',$data);
    $this->load->view('landingPage');
    $this->load->view('templates/footer');
  }
}?>