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
        $title['title'] = "Company Setup";
    	$this->template->load('Template','/setup/CompanySetup/CompanySetup',$title);
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
		  
		    $file_path = APPPATH . "../assets/config/setup/CompanySetup.ini";
			if(file_exists($file_path)){
			    write_file($file_path, $file);
			}else{
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
	// =========Form setup 
	public function FormsSetup(){
		$title['title'] = "Company Setup";
    	$this->template->load('Template','/setup/CompanySetup/FormsSetup',$title);
	}

	public function FormsSaveData(){
		$this->load->helper('file');

		$JournalEntry = $this->input->post('JournalEntry');
		$BankPayment = $this->input->post('BankPayment');
		$BankDeposit = $this->input->post('BankDeposit');	
		$FoundsTransfer = $this->input->post('FoundsTransfer');	
		$SalesInvoice = $this->input->post('SalesInvoice');			
		$CustomerCreditNote = $this->input->post('EmailAddress');	
		$CustomerPayment = $this->input->post('CustomerPayment');	
		$DeliveryNote = $this->input->post('DeliveryNote');	
		$LocationTransfer = $this->input->post('LocationTransfer');	
		$InventoryAdjustment = $this->input->post('InventoryAdjustment');	
		$PurchaseOrder = $this->input->post('PurchaseOrder');	
		$SupplierInvoice = $this->input->post('SupplierInvoice');	
		$SupplierCreditNote = $this->input->post('SupplierCreditNote');	
		$SupplierPayment = $this->input->post('SupplierPayment');	
		$PurchaseOrderDelivery = $this->input->post('PurchaseOrderDelivery');	
		$WorkOrder = $this->input->post('WorkOrder');	
		$WorkOrderIssue = $this->input->post('WorkOrderIssue');	
		$WorkOrderProduction = $this->input->post('WorkOrderProduction');	
		$SalesOrder = $this->input->post('SalesOrder');	
		$SalesQuotation = $this->input->post('SalesQuotation');	
		$CostUpdate = $this->input->post('CostUpdate');	
		$Dimension = $this->input->post('Dimension');	

		$data = array(
			"JournalEntry" =>$JournalEntry,
			"BankPayment"=>$BankPayment,
			"BankDeposit"=>$BankDeposit,
			"SalesInvoice"=>$SalesInvoice,
			"CustomerCreditNote"=>$CustomerCreditNote,
			"CustomerPayment"=>$CustomerPayment, 
			"DeliveryNote"=>$DeliveryNote,
			"LocationTransfer"=>$LocationTransfer,
			"InventoryAdjustment"=>$InventoryAdjustment, 
			"PurchaseOrder"=>$PurchaseOrder, 
			"SupplierInvoice"=>$SupplierInvoice, 
			"SupplierCreditNote"=>$SupplierCreditNote,
			"SupplierPayment"=>$SupplierPayment,
			"PurchaseOrderDelivery"=>$PurchaseOrderDelivery,
			"WorkOrder"=>$WorkOrder,
			"WorkOrderIssue"=>$WorkOrderIssue,
			"WorkOrderProduction"=>$WorkOrderProduction,
			"SalesOrder"=>$SalesOrder,
			"SalesQuotation"=>$SalesQuotation,
			"CostUpdate"=>$CostUpdate,
			"Dimension"=>$Dimension,
		);

		$file = json_encode($data);
		  
		    $file_path = APPPATH . "../assets/config/setup/FormsSetup.ini";
			if(file_exists($file_path)){
			    write_file($file_path, $file);
			}else{
			    write_file($file_path, $file);
			}

        echo json_encode($data);
	}

	// =========End Form setup 
	
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
