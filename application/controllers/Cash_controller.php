<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cash_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Cash and GL";
        $this->template->load('Template','/cash/Dashboard',$title);

	}
}
