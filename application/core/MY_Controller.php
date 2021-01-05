<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Base controller for webapp
 */
class MY_Controller extends CI_Controller {

	// parameters for view components
	protected $data = [];

	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct();

		//
		$this->data = [];

		// define charset
		$this->data['charset'] = $this->config->item('charset');

		// define encoding
		mb_internal_encoding($this->config->item('charset'));

	}
}

/**
 * Base controller Admin
 */
class Admin_Controller extends MY_Controller {

	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Render this page
	 */
	public function render()
	{
		//
		$this->data['content'] = $this->parser->parse($this->data['page_content'], $this->data, TRUE);

		// Build the browser page
		$this->data['data'] = &$this->data;
		$this->parser->parse('admin'.DIRECTORY_SEPARATOR.'_template'.DIRECTORY_SEPARATOR.'render', $this->data);
	}
}

/**
 * Base controller Public
 *
 */
class Public_Controller extends MY_Controller {

	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Render this page
	 */
	public function render()
	{
		//
		$this->data['content'] = $this->parser->parse($this->data['page_content'], $this->data, TRUE);

		// build the browser page
		$this->data['data'] = &$this->data;
		$this->parser->parse('public'.DIRECTORY_SEPARATOR.'_template'.DIRECTORY_SEPARATOR.'render', $this->data);
	}
}
