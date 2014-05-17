<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commit extends CI_Controller {

  public function new_commit()
  {
    $this->load->model('Commit_m');

    $form_data = $this->input->post();

    $result = $this->Commit_m->insert($form_data);

    redirect("/");

  }

  public function show()
  {
    $this->template->build('comment_v');
  }
}
