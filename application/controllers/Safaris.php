<?php defined('BASEPATH') or exit('No Direct Script Access Permitted');

class Safaris extends CI_Controller {
	
	function Safaris()
	{
		parent::__construct();
	}
	
	
	public function index()
	{
		$data['page_title'] = $this->config->item('site_name');
		
		$this->load->vars($data);
		$this->load->view('template');
	}
}
