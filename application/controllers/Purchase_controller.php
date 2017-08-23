<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('/purchase/Dashboard');
	}

	//Operations Modul
	//load view dropdown menu Operations - purchase order
	public function PurchaseOrder()
	{
		$this->load->view('/purchase/Operations/PurchaseOrder');
	}

	//load view dropdown menu Operations - DirectGrn
	public function DirectGrn()
	{
		$this->load->view('/purchase/Operations/DirectGrn');
	}

	//load view dropdown menu Operations - DirectInvoice
	public function DirectInvoice()
	{
		$this->load->view('/purchase/Operations/DirectInvoice');
	}

	//load view dropdown menu Operations - BadDebtProcessing
	public function BadDebtProcessing()
	{
		$this->load->view('/purchase/Operations/BadDebtProcessing');
	}

	//load view dropdown menu Operations - SupplierInvoices
	public function SupplierInvoices()
	{
		$this->load->view('/purchase/Operations/SupplierInvoices');
	}

	//load view dropdown menu Operations - PaymentsToSuppliers
	public function PaymentsToSuppliers()
	{
		$this->load->view('/purchase/Operations/PaymentsToSuppliers');
	}

	//load view dropdown menu Operations - SupplierCreditNotes
	public function SupplierCreditNotes()
	{
		$this->load->view('/purchase/Operations/SupplierCreditNotes');
	}

	//load view dropdown menu Operations - SupplierPayments_CreditNotes
	public function SupplierPayments_CreditNotes()
	{
		$this->load->view('/purchase/Operations/SupplierPayments_CreditNotes');
	}

	//Inquiry Modul
	//load view dropdown menu Inquiry - SupplierTransaction
	public function SupplierTransaction()
	{
		$this->load->view('/purchase/Inquiry/SupplierTransaction');
	}

	//load view dropdown menu Inquiry - SupplierAllocation
	public function SupplierAllocation()
	{
		$this->load->view('/purchase/Inquiry/SupplierAllocation');
	}

	//load view dropdown menu Inquiry - CheckTransactions
	public function CheckTransactions()
	{
		$this->load->view('/purchase/Inquiry/CheckTransactions');
	}

	//Reports Modul
	//load view dropdown menu Reports - SupplierLedger
	public function SupplierLedger()
	{
		$this->load->view('/purchase/Reports/SupplierLedger');
	}

	//load view dropdown menu Reports - AgeSupplierAnalysis
	public function AgeSupplierAnalysis()
	{
		$this->load->view('/purchase/Reports/AgeSupplierAnalysis');
	}

	//load view dropdown menu Reports - PaymentReport
	public function PaymentReport()
	{
		$this->load->view('/purchase/Reports/PaymentReport');
	}

	//load view dropdown menu Reports - OutstandingGrnsReport
	public function OutstandingGrnsReport()
	{
		$this->load->view('/purchase/Reports/OutstandingGrnsReport');
	}

	//load view dropdown menu Reports - SupplierDetailListing
	public function SupplierDetailListing()
	{
		$this->load->view('/purchase/Reports/SupplierDetailListing');
	}

	//Document Printing Modul
	//load view dropdown menu Document Printing - Print Purchase Order
	public function PrintPurchaseOrder()
	{
		$this->load->view('/purchase/DocumentPrinting/PrintPurchaseOrder');
	}

	//load view dropdown menu Document Printing - Print Remittances
	public function PrintRemittances()
	{
		$this->load->view('/purchase/DocumentPrinting/PrintRemittances');
	}

	//Housekeeping Modul
	//load view dropdown menu Housekeeping - Supplier Maintenance
	public function SupplierMaintenance()
	{
		$this->load->view('/purchase/Housekeeping/SupplierMaintenance');
	}
}
