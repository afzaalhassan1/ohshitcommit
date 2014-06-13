<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commit_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($data) {
    $data['commit_date'] = date('Y-m-d H:i:s');
    
    $this->db->insert('commit', $data);

    return;
  }

  function get($commit_id) {
    $this->db->where('id', $commit_id);
    return $this->db->get('commit')->row_array();
  }

  function get_all() {
    return $this->db->get('commit')->result_array();
  }

  function get_by_name($authorname) {
    $this->db->where('name', $authorname);
    return $this->db->get('commit')->result_array();
  }

}
