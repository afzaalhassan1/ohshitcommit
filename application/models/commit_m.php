<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commit_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($data) {
    $data['commit_date'] = date('Y-m-d H:i:s');
    
    return $this->db->insert('commit', $data);
  }

  function get_all() {
    return $this->db->get('commit')->result_array();
  }

}
