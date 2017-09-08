<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Purchases";
        $this->template->load('Template','/purchase/Dashboard',$title);
	}

	//Operations Modul
	//load view dropdown menu Operations - purchase order

	//==== purchase Order
	public function PurchaseOrder()
	{
		$title['title'] = "Purchase Orders";
        $this->template->load('Template','/purchase/Operations/PurchaseOrder',$title);
	}

	public function AddNewPurchases()
	{
        if(isset($_POST['submit'])){
            
        }else{
            $title['title'] = "Purchase Order Entry";
        	$this->template->load('Template','/purchase/Operations/PurchaseOrderEntry',$title);
        }
	}

	//==== End purchase Order

	//load view dropdown menu Operations - DirectGrn
	public function DirectGrn()
	{
		$title['title'] = "Direct GRN";
        $this->template->load('Template','/purchase/Operations/DirectGrn',$title);
	}

	//load view dropdown menu Operations - DirectInvoice
	public function DirectInvoice()
	{
		$title['title'] = "Direct Invoice";
        $this->template->load('Template','/purchase/Operations/DirectInvoice',$title);
	}

	//load view dropdown menu Operations - BadDebtProcessing
	public function BadDebtProcessing()
	{
		$title['title'] = "Bad Debt Processing";
        $this->template->load('Template','/purchase/Operations/BadDebtProcessing',$title);
	}

	//load view dropdown menu Operations - SupplierInvoices
	public function SupplierInvoices()
	{
		$title['title'] = "Supplier Invoices";
        $this->template->load('Template','/purchase/Operations/SupplierInvoices',$title);
	}

	//load view dropdown menu Operations - PaymentsToSuppliers
	public function PaymentsToSuppliers()
	{
		$title['title'] = "Payments to Supplier";
        $this->template->load('Template','/purchase/Operations/PaymentsToSuppliers',$title);
	}

	//load view dropdown menu Operations - SupplierCreditNotes
	public function SupplierCreditNotes()
	{
		$title['title'] = "Supplier Credit Notes";
        $this->template->load('Template','/purchase/Operations/SupplierCreditNotes',$title);
	}

	//load view dropdown menu Operations - SupplierPayments_CreditNotes
	public function SupplierPayments_CreditNotes()
	{
		$title['title'] = "Allocate Customer Payments or Credit Notes";
        $this->template->load('Template','/purchase/Operations/SupplierPayments_CreditNotes',$title);
	}

	//Inquiry Modul
	//load view dropdown menu Inquiry - SupplierTransaction
	public function SupplierTransaction()
	{
		$title['title'] = "Supplier Transaction";
        $this->template->load('Template','/purchase/Inquiry/SupplierTransaction',$title);
	}

	//load view dropdown menu Inquiry - SupplierAllocation
	public function SupplierAllocation()
	{
		$title['title'] = "Supplier Allocation";
        $this->template->load('Template','/purchase/Inquiry/SupplierAllocation',$title);
	}

	//load view dropdown menu Inquiry - CheckTransactions
	public function CheckTransactions()
	{
		$title['title'] = "Check Transactions";
        $this->template->load('Template','/purchase/Inquiry/CheckTransactions',$title);
	}

	//Reports Modul
	//load view dropdown menu Reports - SupplierLedger
	public function SupplierLedger()
	{
		$title['title'] = "Supplier Ledger";
        $this->template->load('Template','/purchase/Reports/SupplierLedger',$title);
	}

	//load view dropdown menu Reports - AgeSupplierAnalysis
	public function AgeSupplierAnalysis()
	{
		$title['title'] = "Age Supplier Analysis";
        $this->template->load('Template','/purchase/Reports/AgeSupplierAnalysis',$title);
	}

	//load view dropdown menu Reports - PaymentReport
	public function PaymentReport()
	{
		$title['title'] = "Payment Report";
        $this->template->load('Template','/purchase/Reports/PaymentReport',$title);
	}

	//load view dropdown menu Reports - OutstandingGrnsReport
	public function OutstandingGrnsReport()
	{
		$title['title'] = "Outstanding GRNs Report";
        $this->template->load('Template','/purchase/Reports/OutstandingGrnsReport',$title);
	}

	//load view dropdown menu Reports - SupplierDetailListing
	public function SupplierDetailListing()
	{
		$title['title'] = "Supplier Detail Listing";
        $this->template->load('Template','/purchase/Reports/SupplierDetailListing',$title);
	}

	//Document Printing Modul
	//load view dropdown menu Document Printing - Print Purchase Order
	public function PrintPurchaseOrder()
	{
		$title['title'] = "Print Purchase Oders";
        $this->template->load('Template','/purchase/DocumentPrinting/PrintPurchaseOrder',$title);
	}

	//load view dropdown menu Document Printing - Print Remittances
	public function PrintRemittances()
	{
		$title['title'] = "Print Remittances";
        $this->template->load('Template','/purchase/DocumentPrinting/PrintRemittances',$title);
	}

	//Housekeeping Modul
	//load view dropdown menu Housekeeping - Supplier Maintenance
	public function SupplierMaintenance()
	{
		$title['title'] = "Suppliers Maintenance";
        $this->template->load('Template','/purchase/Housekeeping/SupplierMaintenance',$title);
	}
}
