<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
  public function __construct(){
    parent::__construct();
  }

  public function index()
  {
    $data["title"] = "Management Data";
    $user['nama'] = 'User';
    $data['user'] = $user;
    if ($this->session->userdata('email')) {
      $data['user'] = $this->db->get_where('akun', [
        'email' => $this->session->userdata('email')
      ]);
    }
    // $data['user'] = $this->db->get_where('akun',[
    //   'email' => $this->session->userdata('email')])->row_array();
    $data['barang'] = $this->db->get('barang')->result_array();

    // rules form validation
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');
    // jika belum validasi form tambah barang
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/templates/footer');
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('barang', ['nama' => $this->input->post('nama'), 'harga' => $this->input->post('harga')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah barang berhasil !</div>');
      redirect('admin');
    }
  }

  public function ubahBarang()
  {
    $data["title"] = "Ubah Data";
    $user['nama'] = 'User';
    $data['user'] = $user;
    $this->load->view('templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/ubahBarang');
    $this->load->view('admin/templates/footer');
    $this->load->view('templates/footer');
  }

  public function hapusBarang($id)
  {
    if (count($this->db->get_where('barang', ['id' => $id])->result_array()) > 0) {
      $this->db->delete('barang', ['id' => $id]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus barang berhasil !</div>');
      redirect('admin');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus barang gagal ! id tidak ditemukan</div>');
      redirect('admin');
    }
  }
}
