<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($data3) {
    $this->db->insert('author', $data3);
    return;
  }

  function get($author_id) {
    $this->db->where('id', $author_id);
    return $this->db->get('comment')->row_array();
    return $this->db->get('commit')->row_array();
  }

}