<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Sales";
        $this->template->load('Template','sales/dashboard.php',$title);
	}
}
