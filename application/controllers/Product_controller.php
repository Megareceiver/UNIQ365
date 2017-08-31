<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_controller extends CI_Controller {

	// $title['title'] = "title name";
 	// $this->template->load('Template','/directory',$title);
	public function index()
	{
		$title['title'] = "Dashboard Product";
        $this->template->load('Template','/product/Dashboard',$title);

	}


	//Operations

	public function LocationTransfers(){
		$title['title'] = "Location Transfer";
		$this->template->load('Template','/product/Operations/LocationTransfers',$title);
	}

	public function Adjustment(){
		$title['title'] = "inventory Adjustments";
		$this->template->load('Template','/Product/Operations/Adjustment',$title);
	}

	//Inquiry
	public function ItemMovements(){
		$title['title'] = "Inventory Item Movements";
		$this->template->load('Template','/Product/Inquiry/ItemMovements',$title);
	}

	public function ItemStatus(){
		$title['title'] = "Inventory Item Status";
		$this->template->load('Template','/Product/Inquiry/ItemStatus',$title);
	}

	//Reports
	public function InValuationReports(){
		$title['title'] = "Inventory Valuation Report";
		$this->template->load('Template','/Product/Reports/InValuationReports',$title);
	}
	
	public function InPlanningReports(){
		$title['title'] = "Inventory Planning Report";
		$this->template->load('Template','/Product/Reports/InPlanningReports',$title);
	}

	public function StockCheckSheets(){
		$title['title'] = "Stock Check Sheet";
		$this->template->load('Template','/Product/Reports/StockCheckSheets',$title);
	}

	public function InSalesReports(){
		$title['title'] = "Inventory Sales Report";
		$this->template->load('Template','/Product/Reports/InSalesReports',$title);
	}

	public function ValuationReports(){
		$title['title'] = "GNL Valuation Report";
		$this->template->load('Template','/Product/Reports/ValuationReports',$title);
	}

	public function InPurchasing(){
		$title['title'] = "Inventory Purchasing Report";
		$this->template->load('Template','/Product/Reports/InPurchasing',$title);
	}

	public function CostedInMovReport(){
		$title['title'] = "Costed Inventory Movement Report";
		$this->template->load('Template','/Product/Reports/CostedInMovReport',$title);
	}

	public function ItemSalesSummaryReport(){
		$title['title'] = "Item Sales Summary Report";
		$this->template->load('Template','/Product/Reports/ItemSalesSummaryReport',$title);
	}


	//Housekeeping
	public function Items(){
		$title['title'] = "Items";
		$this->template->load('Template','/Product/Housekeeping/Items',$title);
	}

	public function ForeignItemCodes(){
		$title['title'] = "Foreign Item Codes";
		$this->template->load('Template','/Product/Housekeeping/ForeignItemCodes',$title);
	}

	public function SalesKits(){
		$title['title'] = "Sales Kits";
		$this->template->load('Template','/Product/Housekeeping/SalesKits',$title);
	}

	public function ItemCategories(){
		$title['title'] = "Item Categories";
		$this->template->load('Template','/Product/Housekeeping/ItemCategories',$title);
	}

	public function InMovementTypes(){
		$title['title'] = "Inventory Movement Types";
		$this->template->load('Template','/Product/Housekeeping/InMovementTypes',$title);
	}

	public function UnitsMeasure(){
		$title['title'] = "Units Measure";
		$this->template->load('Template','/Product/Housekeeping/UnitsMeasure',$title);
	}

	public function ReordeLevels(){
		$title['title'] = "ReordeLevels";
		$this->template->load('Template','/Product/Housekeeping/ReordeLevels',$title);
	}

	public function SalesPricing(){
		$title['title'] = "Sales Pircing";
		$this->template->load('Template','/Product/Housekeeping/SalesPricing',$title);
	}

	public function PurchasingPricing(){
		$title['title'] = "Purchasing Pircing";
		$this->template->load('Template','/Product/Housekeeping/PurchasingPricing',$title);
	}

	public function InventoryLocations(){
		$title['title'] = "Inventory Locations";
		$this->template->load('Template','/Product/Housekeeping/InventoryLocations',$title);
	}

	public function StandardCosts(){
		$title['title'] = "Standard Costs";
		$this->template->load('Template','/Product/Housekeeping/StandardCosts',$title);
	}

}
