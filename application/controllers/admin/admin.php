<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		//refuse access when not logged in as admin
		if (!$this->session->userdata('role')) {
			redirect(base_url());
		} else if ($this->session->userdata('role') !== 'admin') {
			$message_403 = 'You don\'t have permission to access the URL you are trying to reach. Click on this <a href="'.base_url().'">link</a> to go back to the homepage.';
			$heading = '403 Forbidden';
			show_error($message_403,403,$heading);
		}
	}

/**
 * Default function when there is no URI segment after evaluation/admin.
 * Redirects to admin/evaluation.
 */
	public function index() {
		redirect('admin/evaluation');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin/admin.php */