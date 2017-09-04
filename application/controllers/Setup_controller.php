<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Sales";
        $this->template->load('Template','/setup/dashboard',$title);
	}


	//Company Setup

	public function CompanyPreference(){
		$this->load->view('/setup/CompanySetup/CompanyPreference');
	}

	public function UsersSetup(){
		$this->load->view('/setup/CompanySetup/UsersSetup');
	}

	public function SecurityRoles(){
		$this->load->view('/setup/CompanySetup/SecurityRoles');
	}

	public function DisplayPreference(){
		$this->load->view('/setup/CompanySetup/DisplayPreference');
	}

	public function FormsSetup(){
		$this->load->view('/setup/CompanySetup/FormsSetup');
	}
	
	public function TaxType(){
		$this->load->view('/setup/CompanySetup/TaxType');
	}

	public function TaxGroups(){
		$this->load->view('/setup/CompanySetup/TaxGroups');
	}

	public function ItemTaxType(){
		$this->load->view('/setup/CompanySetup/ItemTaxType');
	}

	public function GlSetup(){
		$this->load->view('/setup/CompanySetup/GlSetup');
	}

	public function FiscalYears(){
		$this->load->view('/setup/CompanySetup/FiscalYears');
	}

	public function PrintProfiles(){
		$this->load->view('/setup/CompanySetup/PrintProfiles');
	}


	//Miscellaneous

	public function PaymentTerm(){
		$this->load->view('/setup/Miscellaneous/PaymentTerm');
	}

	public function ShippingCompanies(){
		$this->load->view('/setup/Miscellaneous/ShippingCompanies');
	}

	public function SalesPoint(){
		$this->load->view('/setup/Miscellaneous/SalesPoint');
	}

	public function Printers(){
		$this->load->view('/setup/Miscellaneous/Printers');
	}

	public function ContactCategories(){
		$this->load->view('/setup/Miscellaneous/ContactCategories');
	}

	//Maintenence
	public function VoidTrans(){
		$this->load->view('/setup/Maintenence/VoidTrans');
	}

	public function ViewPrintTrans(){
		$this->load->view('/setup/Maintenence/ViewPrintTrans');
	}

	public function Attachment(){
		$this->load->view('/setup/Maintenence/Attachment');
	}

	public function SystemDiag(){
		$this->load->view('/setup/Maintenence/SystemDiag');
	}

	//Backup and Restore

	public function Backups(){
		$this->load->view('/setup/Maintenence/Backups');
	}

	public function CreateCoy(){
		$this->load->view('/setup/Maintenence/CreateCoy');
	}

	public function InstLang(){
		$this->load->view('/setup/Maintenence/InstLang');
	}

	public function InstModule(){
		$this->load->view('/setup/Maintenence/InstModule');
	}

	public function IntTheme(){
		$this->load->view('/setup/Maintenence/IntTheme');
	}

	public function IntChart(){
		$this->load->view('/setup/Maintenence/IntChart');
	}

	public function InstUpgrade(){
		$this->load->view('/setup/Maintenence/InstUpgrade');
	}


}
