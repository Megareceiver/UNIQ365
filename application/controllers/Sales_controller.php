<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_controller extends CI_Controller {

	public function index()
	{
		$title['title'] = "Dashboard Sales";
        $this->template->load('Template','sales/Dashboard.php',$title);
	}
/*sales*/
	/*Operations*/
	public function SalesQuotation()
	{
		$title['title'] = "Sales Quotation";
        $this->template->load('Template','/sales/Operations/SalesQuotation',$title);
	}
	public function SalesOrder()
	{
		$title['title'] = "Sales Order";
        $this->template->load('Template','/sales/Operations/SalesOrder',$title);
	}

	public function DirectDelivery()
	{
		$title['title'] = "Direct Delivery";
        $this->template->load('Template','/sales/Operations/DirectDelivery',$title);
	}

	public function DirectInvoice()
	{
		$title['title'] = "Direct Invoice";
        $this->template->load('Template','/sales/Operations/DirectInvoice',$title);
	}

	public function DeliveryAgainstSalesOrders()
	{
		$title['title'] = "Delivery Against Sales Orders";
        $this->template->load('Template','/sales/Operations/DeliveryAgainstSalesOrders',$title);
	}

	public function InvoiceAgainstSalesDelivery()
	{
		$title['title'] = "Invoice Against Sales Delivery";
        $this->template->load('Template','/sales/Operations/InvoiceAgainsSalesDelivery',$title);
	}

	public function CopyDelivery()
	{
		$title['title'] = "Copy Delivery";
        $this->template->load('Template','/sales/Operations/CopyDelivery',$title);
	}

	public function CopyInvoice()
	{
		$title['title'] = "Copy Invoice";
        $this->template->load('Template','/sales/Operations/CopyInvoice',$title);
	}

	public function CreateAndPrintRecurringInvoice()
	{
		$title['title'] = "Create and Print Recurring Invoice";
        $this->template->load('Template','/sales/Operations/CreateAndPrintRecurringInvoice',$title);
	}

	public function CustomerPayments()
	{
		$title['title'] = "Customer Payments";
        $this->template->load('Template','/sales/Operations/CustomerPayments',$title);
	}

	public function CustomerCreditNotes()
	{
		$title['title'] = "Customer Credit Notes";
        $this->template->load('Template','/sales/Operations/CustomerCreditNotes',$title);
	}

	public function AllocateCustomerPaymentOrCreditNotes()
	{
		$title['title'] = "Allocate Customer Payment or Credit Notes";
        $this->template->load('Template','/sales/Operations/AllocateCustomerPaymentOrCreditNotes',$title);
	}

	/*Inquiry*/
	public function CustomerTransaction()
	{
		$title['title'] = "Customer Transaction";
        $this->template->load('Template','/sales/Inquiry/CustomerTransaction',$title);
	}

	public function CustomerAllocation()
	{
		$title['title'] = "Customer Allocation";
        $this->template->load('Template','/sales/Inquiry/CustomerAllocation',$title);
	}

	/*Reports*/
	public function CustomerLedger()
	{
		$title['title'] = "Customer Ledger";
        $this->template->load('Template','/sales/Reports/CustomerLedger',$title);
	}

	public function AgedCustomerAnalysis()
	{
		$title['title'] = "Aged Customer Analysis";
        $this->template->load('Template','/sales/Reports/AgedCustomerAnalysis',$title);
	}

	public function CustomerDetailListing()
	{
		$title['title'] = "Customer Detail Listing";
        $this->template->load('Template','/sales/Reports/CustomerDetailListing',$title);
	}

	public function SalesSummaryReport()
	{
		$title['title'] = "Sales Summary Report";
        $this->template->load('Template','/sales/Reports/SalesSummaryReport',$title);
	}

	public function PriceListing()
	{
		$title['title'] = "Price Listing";
        $this->template->load('Template','/sales/Reports/PriceListing',$title);
	}

	public function OrderStatusListing()
	{
		$title['title'] = "Order Status Listing";
        $this->template->load('Template','/sales/Reports/OrderStatusListing',$title);
	}

	public function SalesmanListing()
	{
		$title['title'] = "Salesman Listing";
        $this->template->load('Template','/sales/Reports/SalesmanListing',$title);
	}

	/*Document Printing*/
	public function PrintInvoices()
	{
		$title['title'] = "Print Invoices";
        $this->template->load('Template','/sales/DocumentPrinting/PrintInvoices',$title);
	}

	public function PrintCreditNotes()
	{
		$title['title'] = "Print Credit Notes";
        $this->template->load('Template','/sales/DocumentPrinting/PrintCreditNotes',$title);
	}

	public function PrintDeliveries()
	{
		$title['title'] = "Print Deliveries";
        $this->template->load('Template','/sales/DocumentPrinting/PrintDeliveries',$title);
	}

	public function PrintStatments()
	{
		$title['title'] = "Print Statments";
        $this->template->load('Template','/sales/DocumentPrinting/PrintStatments',$title);
	}

	public function PrintSalesOrders()
	{
		$title['title'] = "Print Sales Orders";
        $this->template->load('Template','/sales/DocumentPrinting/PrintSalesOrder',$title);
	}

	public function PrintSalesQuotation()
	{
		$title['title'] = "Print Sales Quotation";
        $this->template->load('Template','/sales/DocumentPrinting/PrintSalesQuotation',$title);
	}

	public function PrintReceipts()
	{
		$title['title'] = "Print Receipts";
        $this->template->load('Template','/sales/DocumentPrinting/PrintReceipts',$title);
	}

	/*Housekeeping*/
	public function CustomerMaintenance()
	{
		$title['title'] = "Customer Maintenance";
        $this->template->load('Template','/sales/Housekeeping/CustomerMaintenance',$title);
	}

	public function CustomerBranches()
	{
		$title['title'] = "Customer Branches";
        $this->template->load('Template','/sales/Housekeeping/CustomerBranches',$title);
	}

	public function SalesGroup()
	{
		$title['title'] = "Sales Group";
        $this->template->load('Template','/sales/Housekeeping/SalesGroup',$title);
	}

	public function SalesTypes()
	{
		$title['title'] = "Sales Types";
        $this->template->load('Template','/sales/Housekeeping/SalesTypes',$title);
	}

	public function SalesPersons()
	{
		$title['title'] = "Sales Persons";
        $this->template->load('Template','/sales/Housekeeping/SalesPersons',$title);
	}

	public function SalesAreas()
	{
		$title['title'] = "Sales Areas";
        $this->template->load('Template','/sales/Housekeeping/SalesAreas',$title);
	}

	public function CreditStatusSetup()
	{
		$title['title'] = "Credit Status Setup";
        $this->template->load('Template','/sales/Housekeeping/CreditStatusSetup',$title);
	}
}
