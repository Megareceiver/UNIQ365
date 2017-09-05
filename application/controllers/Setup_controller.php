<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_controller extends CI_Controller {

	function __construct() {

        parent::__construct();
        $this->load->helper('file');

    }

	public function index()
	{
		$title['title'] = "Dashboard Sales";
        $this->template->load('Template','/setup/dashboard',$title);
	}

	//Setup - Company
	// Company setup -------
	public function CompanySetup(){
		
        if(isset($_POST['updateSetup'])){
        	
        }else{
            $title['title'] = "Company Setup";

        	$this->template->load('Template','/setup/CompanySetup/CompanySetup',$title);
        }
	}

	public function CompanySaveData(){
		$this->load->helper('file');

		$Company = $this->input->post('CompanyName');
		$Address = $this->input->post('Address');
		$Domicile = $this->input->post('Domicile');	
		$PhoneNumber = $this->input->post('Domicile');	
		$FaxNumber = $this->input->post('PhoneNumber');			
		$EmailAddress = $this->input->post('EmailAddress');	
		$BCCAddress = $this->input->post('BCCAddress');	
		$OfficialCompany = $this->input->post('OfficialCompany');	
		$GSTNo = $this->input->post('GSTNo');	
		$HomeCurrency = $this->input->post('HomeCurrency');	
		$FiscalYear = $this->input->post('FiscalYear');	
		$TaxPeriods = $this->input->post('TaxPeriods');	
		$TaxLastPeriods = $this->input->post('TaxLastPeriods');	
		$NewCompLogo = $this->input->post('NewCompLogo');	
		$DeleteLogo = $this->input->post('DeleteLogo');	
		$BasePrice = $this->input->post('BasePrice');	
		$AddPrice = $this->input->post('AddPrice');	
		$RoundToNearest = $this->input->post('RoundToNearest');	
		$SearchItem = $this->input->post('SearchItem');	
		$SearchCustomer = $this->input->post('SearchCustomer');	
		$SearchSupplier = $this->input->post('SearchSupplier');	
		$AutomaticRevaluation = $this->input->post('AutomaticRevaluation');	
		$TimeZone = $this->input->post('TimeZone');	
		$LoginTimeout = $this->input->post('LoginTimeout');	



		$data = array(
			"Company Name#".$Company.'',
			"\n Address#".$Address,
			"\n Domicile#".$Domicile,
			"\n PhoneNumber#".$PhoneNumber,
			"\n FaxNumber#".$FaxNumber, 
			"\n EmailAddress#".$EmailAddress,
			"\n BCCAddress#".$BCCAddress,
			"\n OfficialCompany#".$OfficialCompany, 
			"\n GSTNo#".$GSTNo, 
			"\n HomeCurrency#".$HomeCurrency, 
			"\n FiscalYear#".$FiscalYear,
			"\n TaxPeriods#".$TaxPeriods,
			"\n TaxLastPeriods#".$TaxLastPeriods,
			"\n NewCompLogo#".$NewCompLogo,
			"\n DeleteLogo#".$DeleteLogo,
			"\n BasePrice#".$BasePrice,
			"\n AddPrice#".$AddPrice,
			"\n RoundToNearest#".$RoundToNearest,
			"\n SearchItem".$SearchItem,
			"\n SearchCustomer#".$SearchCustomer,
			"\n SearchSupplier#".$SearchSupplier,
			"\n AutomaticRevaluation#".$AutomaticRevaluation,
			"\n TimeZone#".$TimeZone,
			"\n LoginTimeout#".$LoginTimeout,

		);

		$file = implode($data);
		  
		    $file_path = APPPATH . "../application/config/CompanySetup.ini";
			if(file_exists($file_path))
			{
			    write_file($file_path, $file);
			}
			else
			{
			    write_file($file_path, $file);
			}

        echo json_encode($file);
	}
	// ------------end Company setup

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
