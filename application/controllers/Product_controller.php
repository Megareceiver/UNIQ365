<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('/products/dashboard');
	}


	//Operations

	public function LocationTransfers(){
		$this->load->view('/products/Operations/LocationTransfers');
	}

	public function Adjustment(){
		$this->load->view('/products/Operations/Adjustment');
	}

	//Inquiry
	public function ItemMovements(){
		$this->load->view('/products/Inquiry/ItemMovements');
	}

	public function ItemStatus(){
		$this->load->view('/products/Inquiry/ItemStatus');
	}

	//Reports
	public function InValuationReports(){
		$this->load->view('/products/Reports/InValuationReports');
	}
	
	public function InPlanningReports(){
		$this->load->view('/products/Reports/InPlanningReports');
	}

	public function StockCheckSheets(){
		$this->load->view('/products/Reports/StockCheckSheets');
	}

	public function InSalesReports(){
		$this->load->view('/products/Reports/InSalesReports');
	}

	public function ValuationReports(){
		$this->load->view('/products/Reports/ValuationReports');
	}

	public function InPurchasing(){
		$this->load->view('/products/Reports/InPurchasing');
	}

	public function CostedInMovReport(){
		$this->load->view('/products/Reports/CostedInMovReport');
	}

	public function ItemSlaesSummaryReport(){
		$this->load->view('/products/Reports/ItemSlaesSummaryReport');
	}


	//Housekeeping
	public function Items(){
		$this->load->view('/products/Reports/Items');
	}

	public function ForeignItemCodes(){
		$this->load->view('/products/Reports/ForeignItemCodes');
	}

	public function SalesKits(){
		$this->load->view('/products/Reports/SalesKits');
	}

	public function ItemCategories(){
		$this->load->view('/products/Reports/ItemCategories');
	}

	public function InMovementTypes(){
		$this->load->view('/products/Reports/InMovementTypes');
	}

	public function UnitsMeasure(){
		$this->load->view('/products/Reports/UnitsMeasure');
	}

	public function ReordeLevels(){
		$this->load->view('/products/Reports/ReordeLevels');
	}

	public function SalesPricing(){
		$this->load->view('/products/Reports/SalesPricing');
	}

	public function PurchasingPricing(){
		$this->load->view('/products/Reports/PurchasingPricing');
	}

	public function StandardCosts(){
		$this->load->view('/products/Reports/StandardCosts');
	}

}
