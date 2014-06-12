<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class author extends CI_Controller {

    public function add_author()
  {
    $this->load->model('author_m');
    
    $form_data3 = $this->input->post();
    
    $this->author_m->insert($form_data3);
    redirect("/commit/show/" . $this->input->post('author_id'));
  }

  public function display($author_id)
  {
    $this->load->model('author_m');
    

    $authors = $this->author_m->get($author_id);
        

    $this->template->set('orig_author', $authors);
    $this->template->build('author_v');
}
