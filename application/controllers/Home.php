<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

	public function __construct()
	{
		parent::__construct();

		// Define the root url for the controller
		//$this->root_url = 'home';
		$this->root_url = 'public'.DIRECTORY_SEPARATOR.'home';
	}

	public function index()
	{
		//
		$this->data['page_content'] = $this->root_url;
		$this->render();
	}
}
