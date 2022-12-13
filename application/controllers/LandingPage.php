<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class LandingPage extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // if(!$this->session->userdata('email')){
    //   redirect('auth');
    // }
  }
  public function index(){
    $data["title"] = "Comprar Sell";
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    $data['barang'] = $this->data->get('barang');
    $query = "SELECT *
    FROM `hero`
    WHERE `status`= 'Di terima'";
    $data['hero'] = $this->db->query($query)->result_array();
    $this->_template('landingPage',$data);
  }
  public function detailBarang($id){
    $data["title"] = "Comprar Sell";
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    $data['item'] = $this->db->get_where('barang', ['id' => $id])->row_array();
    $this->_template('detailBarang',$data);
  }
  public function keranjang(){
    if(!$this->session->userdata('email')){
      redirect('auth');
    }
    $data["title"] = "Comprar Sell";
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    // Pengecekan apakah ada id barang atau tidak
    $idBarang = $this->uri->segment(3);
    if(!is_null($idBarang)){
      if(!$this->db->get_where('keranjang',['id_barang' => $idBarang,'id_user' => $data['user']['id'] ])->row_array()){
        $this->db->insert('keranjang', [
          'id_user' => $data['user']['id'],
          'id_barang' => $idBarang
        ]);
      }
    }
    $query = "SELECT `keranjang`.`jumlah`,`barang`.*
    FROM `keranjang`
    INNER JOIN `akun` ON `keranjang`.`id_user` = `akun`.`id`
    INNER JOIN `barang` ON `barang`.`id` = `keranjang`.`id_barang`
    WHERE `keranjang`.`id_user` = ".$data['user']['id'];
    $data['keranjang'] = $this->db->query($query)->result_array();
    $this->_template('keranjang',$data);
  }
  private function _template($page, $data){
    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view($page,$data);
    $this->load->view('templates/footer');
  }
}
