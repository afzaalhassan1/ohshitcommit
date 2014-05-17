<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function dashboard()
	{
    $this->load->model('Commit_m');

    $commits = $this->Commit_m->get_all();

    $this->template->set('my_commits', $commits);
		$this->template->build('home_v');
	}
}
