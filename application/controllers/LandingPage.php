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
    $data["title"] = "Comprar Sell";
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    $data['barang'] = $this->db->get('barang')->result_array();
    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view('landingPage',$data);
    $this->load->view('templates/footer');
  }
  public function detailBarang($id){
    $data["title"] = "Comprar Sell";
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    $data['item'] = $this->db->get_where('barang', ['id' => $id])->row_array();
    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view('detailBarang',$data);
    $this->load->view('templates/footer');
  }
}
