<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Accountant's Area";
        $this->template->load('Template','/accountant/Dashboard',$title);

	}
}
