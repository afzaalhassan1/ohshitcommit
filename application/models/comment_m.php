<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_m extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function insert($data2) {
    $data2['comment_date'] = date('Y-m-d H:i:s');
    
    $this->db->insert('comment', $data2);

    return;
  }

  function get($comment_id) {
    $this->db->where('id', $comment_id);
    return $this->db->get('comment')->row_array();
  }

  function get_all() {
    return $this->db->get('comment')->result_array();
  }

}
