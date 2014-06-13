<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {

  //   public function add_author()
  // {
  //   $this->load->model('author_m');
    
  //   $form_data3 = $this->input->post();
    
  //   $this->author_m->insert($form_data3);
  //   redirect("/commit/show/" . $this->input->post('author_id'));
  // }
  public function display($author_name)
  {
    $this->load->model('Commit_m');
    $this->load->model('Comment_m');

    $commits = $this->Commit_m->get_by_name($author_name);
    $comments = $this->Comment_m->get_by_author($author_name);

    
    $this->template->set('commits', $commits);
    $this->template->set('comments', $comments);
    $this->template->build('author_v');
  }
}
