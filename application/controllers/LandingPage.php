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
    $data['barang'] = $this->data->get('barang');
    $this->_template('landingPage',$data);
  }
  public function detailBarang($id){
    $data["title"] = "Comprar Sell";
    $data['item'] = $this->db->get_where('barang', ['id' => $id])->row_array();
    $this->_template('detailBarang',$data);
  }
  public function keranjang(){
    $data["title"] = "Comprar Sell";
    $this->_template('keranjang',$data);
  }
  private function _template($page, $data){
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view($page,$data);
    $this->load->view('templates/footer');
  }
}
