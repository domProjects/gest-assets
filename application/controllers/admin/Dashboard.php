<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		// Define the root url for the controller
		$this->root_url = 'admin'.DIRECTORY_SEPARATOR.'dashboard';
	}

	public function index()
	{
		//
		$this->data['page_content'] = $this->root_url;
		$this->render();
	}
}
