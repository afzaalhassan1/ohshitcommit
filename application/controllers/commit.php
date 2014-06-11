<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commit extends CI_Controller {

  public function new_commit()
  {
    $this->load->model('Commit_m');

    $form_data = $this->input->post();

    $this->Commit_m->insert($form_data);

    redirect("/");

  }

  public function show($commit_id)
  {
    $this->load->model('Commit_m');
    $this->load->model('Comment_m');
    $this->load->model('author_m');

    $commit = $this->Commit_m->get($commit_id);
    $comments = $this->Comment_m->get_all($commit_id);
    $authors = $this->author_m->get_author($commit_id);
    

    $this->template->set('orig_commit', $commit);
    $this->template->set('comments', $comments);
    $this->template->set('orig_author', $authors);
    $this->template->build('comment_v');
    $this->template->build('author_v');
  }
}
