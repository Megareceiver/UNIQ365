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
      //       $string = read_file(dirname(__FILE__)/site_url().'application/config/CompanySetup.ini');
   			// $title['data'] = json_encode($string);
        	$this->template->load('Template','/setup/CompanySetup/CompanySetup',$title);
        }
	}

	public function CompanySaveData(){
		$this->load->helper('file');

		$Company = $this->input->post('CompanyName');
		$Address = $this->input->post('Address');
		$Domicile = $this->input->post('Domicile');	
		$PhoneNumber = $this->input->post('PhoneNumber');	
		$FaxNumber = $this->input->post('FaxNumber');			
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



		// $data = array(
		// 	"Company_Name#".$Company,
		// 	"\r\nAddress#".$Address,
		// 	"\r\nDomicile#".$Domicile,
		// 	"\r\nPhoneNumber#".$PhoneNumber,
		// 	"\r\nFaxNumber#".$FaxNumber, 
		// 	"\r\nEmailAddress#".$EmailAddress,
		// 	"\r\nBCCAddress#".$BCCAddress,
		// 	"\r\nOfficialCompany#".$OfficialCompany, 
		// 	"\r\nGSTNo#".$GSTNo, 
		// 	"\r\nHomeCurrency#".$HomeCurrency, 
		// 	"\r\nFiscalYear#".$FiscalYear,
		// 	"\r\nTaxPeriods#".$TaxPeriods,
		// 	"\r\nTaxLastPeriods#".$TaxLastPeriods,
		// 	"\r\nNewCompLogo#".$NewCompLogo,
		// 	"\r\nDeleteLogo#".$DeleteLogo,
		// 	"\r\nBasePrice#".$BasePrice,
		// 	"\r\nAddPrice#".$AddPrice,
		// 	"\r\nRoundToNearest#".$RoundToNearest,
		// 	"\r\nSearchItem".$SearchItem,
		// 	"\r\nSearchCustomer#".$SearchCustomer,
		// 	"\r\nSearchSupplier#".$SearchSupplier,
		// 	"\r\nAutomaticRevaluation#".$AutomaticRevaluation,
		// 	"\r\nTimeZone#".$TimeZone,
		// 	"\r\nLoginTimeout#".$LoginTimeout,

		// );

		$data = array(
			"Company_Name" =>$Company,
			"Address"=>$Address,
			"Domicile"=>$Domicile,
			"PhoneNumber"=>$PhoneNumber,
			"FaxNumber"=>$FaxNumber, 
			"EmailAddress"=>$EmailAddress,
			"BCCAddress"=>$BCCAddress,
			"OfficialCompany"=>$OfficialCompany, 
			"GSTNo"=>$GSTNo, 
			"HomeCurrency"=>$HomeCurrency, 
			"FiscalYear"=>$FiscalYear,
			"TaxPeriods"=>$TaxPeriods,
			"TaxLastPeriods"=>$TaxLastPeriods,
			"NewCompLogo"=>$NewCompLogo,
			"DeleteLogo"=>$DeleteLogo,
			"BasePrice"=>$BasePrice,
			"AddPrice"=>$AddPrice,
			"RoundToNearest"=>$RoundToNearest,
			"SearchItem"=>$SearchItem,
			"SearchCustomer"=>$SearchCustomer,
			"SearchSupplier"=>$SearchSupplier,
			"AutomaticRevaluation"=>$AutomaticRevaluation,
			"TimeZone"=>$TimeZone,
			"LoginTimeout"=>$LoginTimeout,

		);

		$file = json_encode($data);
		  
		    $file_path = APPPATH . "../assets/CompanySetup.ini";
			if(file_exists($file_path))
			{
			    write_file($file_path, $file);
			}
			else
			{
			    write_file($file_path, $file);
			}

        echo json_encode($data);
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
