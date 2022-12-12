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
    $data["title"] = "Dashboard";
    $data['user'] = $this->db->get_where('akun', [
      'email' => $this->session->userdata('email')
    ])->row_array();
    $data['lenBarang'] = count($this->db->get('barang')->result_array());
    $data['lenAkun'] = count($this->db->get('akun')->result_array());
    $this->_template('dashboard', $data);
  }
  public function dataBarang()
  {
    $data["title"] = "Data Barang";
    $data['barang'] = $this->data->get('barang');
    // rules form validation
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
    $this->form_validation->set_rules('stok', 'Stok', 'required|trim');
    // jika belum validasi form tambah barang
    if ($this->form_validation->run() == false) {
      $this->_template('dataBarang', $data);
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
        'nama' => htmlspecialchars($this->input->post('nama')),
        'harga' => htmlspecialchars($this->input->post('harga')),
        'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
        'jenis' => htmlspecialchars($this->input->post('jenis')),
        'stok' => htmlspecialchars($this->input->post('stok')),
        'gambar' => $namaGambar
      ]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah barang berhasil !</div>');
      redirect('admin');
    }
  }
  public function ubahBarang($id)
  {
    $data["title"] = "Ubah Data";
    $data['item'] = $this->db->get_where('barang', ['id' => $id])->row_array();
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
    if (count($data['item']) > 0) {
      if ($this->form_validation->run() == false) {
        $this->_template('ubahBarang', $data);
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
        $this->db->set('nama', htmlspecialchars($this->input->post('nama')));
        $this->db->set('harga', htmlspecialchars($this->input->post('harga')));
        $this->db->set('deskripsi', htmlspecialchars($this->input->post('deskripsi')));
        $this->db->set('jenis', htmlspecialchars($this->input->post('jenis')));
        $this->db->set('stok', htmlspecialchars($this->input->post('stok')));
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
    // cek id barang apakah ada didalam database
    $item = $this->db->get_where('barang', ['id' => $id])->row_array();
    // jika ada 
    if (count($item) > 0) {
      // jika gambar bukan gambar default
      if ($item['gambar'] != 'default-item.png') {
        unlink(FCPATH . 'assets/img/barang/' . $item['gambar']);
      }
      // delete barang di database
      $this->db->delete('barang', ['id' => $id]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus barang berhasil !</div>');
      redirect('admin/dataBarang');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus barang gagal ! id tidak ditemukan</div>');
      redirect('admin/dataBarang');
    }
  }

  public function hero()
  {
    $data['title'] = "Data Hero";
    $this->_template('hero', $data);
  }
  public function akun()
  {
    $data['title'] = "Data Akun";
    $data['akun'] = $this->data->get('akun');
    $this->_template('akun', $data);
  }

  private function _template($page, $data)
  {
    $data['user'] = $this->db->get_where('akun', [
      'email' => $this->session->userdata('email')
    ])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/' . $page, $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('templates/footer');
  }
}
