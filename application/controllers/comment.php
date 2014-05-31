<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

  public function add_comment()
  {
    $this->load->model('Comment_m');
    
    $form_data2 = $this->input->post();
    
    $this->Comment_m->insert($form_data2);
    redirect("/commit/show/" . $this->input->post('commit_id'));
  }
  
}
