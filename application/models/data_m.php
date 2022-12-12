<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_m extends CI_Model {
  public function get($table){
    return $this->db->get($table)->result_array();
  }
}