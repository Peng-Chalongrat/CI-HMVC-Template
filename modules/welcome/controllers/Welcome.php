<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('WelcomeModel');
	}

	public function index()
	{
		$this->load->view('welcome');
	}
}
