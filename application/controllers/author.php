<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {

  public function index($author_name)
  {
    $this->template->set('author_name', $author_name);
    $this->template->build('author_v');
  }
}
