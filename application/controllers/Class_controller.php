<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Class_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Class";
        $this->template->load('Template','/class/Dashboard',$title);

	}
}
