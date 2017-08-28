<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Products";
        $this->template->load('Template','/product/Dashboard',$title);

	}
}
