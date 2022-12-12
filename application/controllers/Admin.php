<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
    if ($this->session->userdata('level') == 'pelanggan') {
      redirect('landingPage');
    }
  }
  public function index()
  {
    $data["title"] = "Management Data";
    $data['user'] = $this->db->get_where('akun', [
      'email' => $this->session->userdata('email')
    ])->row_array();

    $data['barang'] = $this->db->get('barang')->result_array();
    // rules form validation
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
    $this->form_validation->set_rules('stok', 'Stok', 'required|trim');
    // jika belum validasi form tambah barang
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/dataBarang');
      $this->load->view('admin/templates/footer');
      $this->load->view('templates/footer');
    } else {
      $uploadGambar = $_FILES['gambar'];
      $namaGambar = 'default-item.png';
      if ($uploadGambar) {
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/barang/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $namaGambar = $this->upload->data('file_name');
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->db->insert('barang', [
        'nama' => $this->input->post('nama'),
        'harga' => $this->input->post('harga'),
        'deskripsi' => $this->input->post('deskripsi'),
        'jenis' => $this->input->post('jenis'),
        'stok' => $this->input->post('stok'),
        'gambar' => $namaGambar
      ]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah barang berhasil !</div>');
      redirect('admin');
    }
  }

  public function ubahBarang($id)
  {
    $data["title"] = "Ubah Data";
    $data['user'] = $this->db->get_where('akun', [
      'email' => $this->session->userdata('email')
    ])->row_array();
    $data['item'] = $this->db->get_where('barang', ['id' => $id])->row_array();
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
    if (count($data['item']) > 0) {
      if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/ubahBarang', $data);
        $this->load->view('admin/templates/footer');
        $this->load->view('templates/footer');
      } else {
        $uploadGambar = $_FILES['gambar'];
        if ($uploadGambar) {
          $config['allowed_types'] = 'jpg|png|jpeg';
          $config['max_size'] = '2048';
          $config['upload_path'] = './assets/img/barang/';
          $this->load->library('upload', $config);
          if ($this->upload->do_upload('gambar')) {
            $gambarLama = $data['item']['gambar'];
            if ($gambarLama != 'default-item.png') {
              unlink(FCPATH . 'assets/img/barang/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('gambar', $gambarBaru);
          } else {
            echo $this->upload->display_errors();
          }
        }
        $this->db->set('nama', $this->input->post('nama'));
        $this->db->set('harga', $this->input->post('harga'));
        $this->db->set('deskripsi', $this->input->post('deskripsi'));
        $this->db->set('jenis', $this->input->post('jenis'));
        $this->db->set('stok', $this->input->post('stok'));
        $this->db->where('id', $id);
        $this->db->update('barang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah barang berhasil !</div>');
        redirect('admin');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ubah barang gagal ! id tidak ditemukan</div>');
      redirect('admin');
    }
  }

  public function hapusBarang($id)
  {
    $item = $this->db->get_where('barang', ['id' => $id])->row_array();
    if (count($item) > 0) {
      if ($item['gambar'] != 'default-item.png') {
        unlink(FCPATH . 'assets/img/barang/' . $item['gambar']);
      }
      $this->db->delete('barang', ['id' => $id]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus barang berhasil !</div>');
      redirect('admin');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus barang gagal ! id tidak ditemukan</div>');
      redirect('admin');
    }
  }

  public function dashboard()
  {
    $data["title"] = "Dashboard";
    $data['user'] = $this->db->get_where('akun',[
      'email' => $this->session->userdata('email')])->row_array();
    $data['lenBarang'] = count($this->db->get('barang')->result_array());
    $data['lenAkun'] = count($this->db->get('akun')->result_array());
    $this->load->view('templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('templates/footer');
  }
}
