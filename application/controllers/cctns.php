<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cctns extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	function layout($page)
	{
		
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view($page);
		$this->load->view('templates/footer');

	}

	function index()
	{
		
		// if (!$this->tank_auth->is_logged_in()) {
		// 	redirect('/auth/login/');

		// } else {
		// 	$data['user_id']	= $this->tank_auth->get_user_id();
		// 	$data['username']	= $this->tank_auth->get_username();
		// 	$this->load->view('welcome', $data);
		// }
		$page="pages/index";
		$this->layout($page);
		
	}
	function login(){
		$bseurl=site_url();
		$this->load->view($bseurl.'/auth/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */