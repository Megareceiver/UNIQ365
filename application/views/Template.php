<html>
    <head>
        <title>UNIQ365</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        
        <link rel="icon" type="/image/x-icon" href="<?php echo site_url()?>Template/uniq/assets/image/favicon.ico" /> 
        <link type="text/css" rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo site_url()?>Template/uniq/assets/css/uniq-main.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo site_url()?>Template/uniq/assets/css/uniq-component.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo site_url()?>Template/uniq/assets/css/datepicker.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo site_url()?>Template/uniq/assets/css/animate.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo site_url()?>Template/uniq/assets/css/uniq.resposive.css"/>
        
        <script type="text/javascript" src="<?php echo site_url()?>Template/uniq/assets/js/jquery-1.11.1.min.js"></script>
            <script src="<?php echo site_url()?>assets/js/Chart.bundle.js"></script>
            <!-- <script src="<?php echo site_url()?>assets/js/Chart.js"></script> -->
    </head>
    <body>
    <div class="header">  
        <div class="uniq-logo">
            <img src="<?php echo site_url()?>assets/image/uniq-logo-icon.png"/>
            <span>
                UNIQ 365<br><b>version 1.3</b>
            </span>
        </div> 
        <div class="container">
            <form class="uniq-search ">
                <input type="text" placeholder="Search"/>
                <i class="fa fa-search"><input type="submit" value="go"/></i>
            </form>
            <ul>
                <li id="user">
                    <label class="fa fa-user drop"></label>
                    <div>
                        <span>
                            Welcome,<strong>Admin</strong>
                        </span>
                        <a href="#"><i class="fa fa-id-card" aria-hidden="true"></i> Profile</a>
                        <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Login')?>" class="fa fa-power-off"></a>
                </li>
                <li id="lang">
                    <label class="fa fa-globe drop"></label>
                    <div>
                        <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> English</a>
                        <a href="#" id="changeLanguage"><i class="fa fa-flag" aria-hidden="true"></i> Indonesia</input>
                        <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> Melayu</a>
                        <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> China</a>
                        <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> Japan</a>
                        <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> Vietnam</a>
                        <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> Thailand</a>
                    </div>
                </li>
                <li class="mobile-menu">
                    <a href="#" class="fa fa-bars"></a>
                </li>
            </ul>
        </div>        
    </div>
    <div class="uniq-menu">            
        <ul>
            <li>
                <a href="<?php echo site_url('')?>Dashboard"><i class="fa fa-home"></i>Home</a>
            </li>
            <!-- SALES -->
            <li>
                <a href="#" class="menu-parent"><i class="fa fa-shopping-cart"></i>Sales</a>
                <div class="menu-child">
                    <span>
                        <a href="<?php echo site_url('Sales_controller')?>" class="" data-title="DB">Dashboard</a>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="OP">Operations</a>
                        <div>
                            <!-- submenu -->
                            <a href="<?php echo site_url('Sales_controller/SalesQuotation')?>" data-title="SQ">Sales Quotation</a>
                            <a href="<?php echo site_url('Sales_controller/SalesOrder')?>" data-title="SO">Sales Order</a>
                            <a href="<?php echo site_url('Sales_controller/DirectDelivery')?>" data-title="DD">Direct Delivery</a>
                            <a href="<?php echo site_url('Sales_controller/DirectInvoice')?>" data-title="DI">Direct Invoice</a>
                            <a href="<?php echo site_url('Sales_controller/DeliveryAgainstSalesOrders')?>" data-title="DA">Delivery Against Sales Orders</a>
                            <a href="<?php echo site_url('Sales_controller/InvoiceAgainstSalesDelivery')?>" data-title="IA">Invoice Against Sales Delivery</a>
                            <a href="<?php echo site_url('Sales_controller/CopyDelivery')?>" data-title="CD">Copy Delivery</a>
                            <a href="<?php echo site_url('Sales_controller/CopyInvoice')?>" data-title="CI">Copy Invoice</a>
                            <a href="<?php echo site_url('Sales_controller/CreateAndPrintRecurringInvoice')?>" data-title="CR">Create and Print Recurring Invoice</a>
                            <a href="<?php echo site_url('Sales_controller/CustomerPayments')?>" data-title="CP">Customer Payments</a>
                            <a href="<?php echo site_url('Sales_controller/CustomerCreditNotes')?>" data-title="CC">Customer Credit Notes</a>
                            <a href="<?php echo site_url('Sales_controller/AllocateCustomerPaymentOrCreditNotes')?>" data-title="AC">Allocate Customer Payments or Credit Notes</a>

                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="IQ">Inquiry</a>
                        <div>
                            <!-- submenu -->
                            <a href="<?php echo site_url('Sales_controller/CustomerTransaction')?>" data-title="CT">Customer Transaction</a>
                            <a href="<?php echo site_url('Sales_controller/CustomerAllocation')?>" data-title="CA">Customer Allocation</a>

                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="RP">Reports</a>
                        <div>
                            <!-- submenu -->
                            <a href="<?php echo site_url('Sales_controller/CustomerLedger')?>" data-title="CL">Customer Ledger</a>
                            <a href="<?php echo site_url('Sales_controller/AgedCustomerAnalysis')?>" data-title="AC">Aged Customer Analysis</a>
                            <a href="<?php echo site_url('Sales_controller/CustomerDetailListing')?>" data-title="CD">Customer Detail Listing</a>
                            <a href="<?php echo site_url('Sales_controller/SalesSummaryReport')?>" data-title="SS">Sales Summary Report</a>
                            <a href="<?php echo site_url('Sales_controller/PriceListing')?>" data-title="PL">Price Listing</a>
                            <a href="<?php echo site_url('Sales_controller/OrderStatusListing')?>" data-title="OS">Order Status Listing</a>
                            <a href="<?php echo site_url('Sales_controller/SalesmanListing')?>" data-title="SL">Salesman Listing</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="DP">Document Printing</a>
                        <div>
                            <!-- submenu -->
                            <a href="<?php echo site_url('Sales_controller/PrintInvoices')?>" data-title="PI">Print Invoices</a>
                            <a href="<?php echo site_url('Sales_controller/PrintCreditNotes')?>" data-title="PC">Print Credit Notes</a>
                            <a href="<?php echo site_url('Sales_controller/PrintDeliveries')?>" data-title="PD">Print Deliveries</a>
                            <a href="<?php echo site_url('Sales_controller/PrintStatments')?>" data-title="PT">Print Statements</a>
                            <a href="<?php echo site_url('Sales_controller/PrintSalesOrders')?>" data-title="PO">Print Sales Orders</a>
                            <a href="<?php echo site_url('Sales_controller/PrintSalesQuotation')?>" data-title="PS">Print Sales Quotation</a>
                            <a href="<?php echo site_url('Sales_controller/PrintReceipts')?>" data-title="PR">Print Receipts</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="HK">Housekeeping</a>
                        <div>
                            <!-- submenu -->
                            <a href="<?php echo site_url('Sales_controller/CustomerMaintenance')?>" data-title="CM">Customer Maintenance</a>
                            <a href="<?php echo site_url('Sales_controller/CustomerBranches')?>" data-title="CB">Customer Branches</a>
                            <a href="<?php echo site_url('Sales_controller/SalesGroup')?>" data-title="SG">Sales Groups</a>
                            <a href="<?php echo site_url('Sales_controller/SalesTypes')?>" data-title="ST">Sales Types</a>
                            <a href="<?php echo site_url('Sales_controller/SalesPersons')?>" data-title="SP">Sales Persons</a>
                            <a href="<?php echo site_url('Sales_controller/SalesAreas')?>" data-title="SA">Sales Areas</a>
                            <a href="<?php echo site_url('Sales_controller/CreditStatusSetup')?>" data-title="CS">Credit Status Setup</a>
                        </div>
                    </span>
                </div>
            </li>

            <!-- Purchases -->
            <li>
                <a href="#" class="menu-parent"><i class="fa fa-credit-card" aria-hidden="true"></i>Purchases</a>
                <div class="menu-child">
                    <span>
                        <a href="<?php echo site_url('Purchase_controller')?>" class="" data-title="DB">Dashboard</a>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="OP">Operations</a>
                        <div>
                            <a href="<?php echo site_url('Purchase_controller/PurchaseOrder')?>" data-title="PO">Purchase Orders</a>
                            <a href="<?php echo site_url('Purchase_controller/DirectGrn')?>" data-title="DG">Direct GRN</a>
                            <a href="<?php echo site_url('Purchase_controller/DirectInvoice')?>" data-title="DI">Direct Invoice</a>
                            <a href="<?php echo site_url('Purchase_controller/SupplierInvoices')?>" data-title="SI">Supplier Invoices</a>
                            <a href="<?php echo site_url('Purchase_controller/PaymentsToSuppliers')?>" data-title="PS">Payments to Supplier</a>
                            <a href="<?php echo site_url('Purchase_controller/SupplierCreditNotes')?>" data-title="SC">Supplier Credit Notes</a>
                            <a href="<?php echo site_url('Purchase_controller/SupplierPayments_CreditNotes')?>" data-title="AC">Allocate Customer Payments or Credit Notes</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="IQ">Inquiry</a>
                        <div>
                            <a href="<?php echo site_url('Purchase_controller/SupplierTransaction')?>" data-title="ST">Supplier Transaction</a>
                            <a href="<?php echo site_url('Purchase_controller/SupplierAllocation')?>" data-title="SA">Supplier Allocation</a>
                            
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="RP">Reports</a>
                        <div>
                            <a href="<?php echo site_url('Purchase_controller/SupplierLedger')?>" data-title="SL">Supplier Ledger</a>
                            <a href="<?php echo site_url('Purchase_controller/AgeSupplierAnalysis')?>" data-title="AS">Age Supplier Analysis</a>
                            <a href="<?php echo site_url('Purchase_controller/PaymentReport')?>" data-title="PR">Payment Report</a>
                            <a href="<?php echo site_url('Purchase_controller/OutstandingGrnsReport')?>" data-title="OT">Outstanding GRNs Report</a>
                            <a href="<?php echo site_url('Purchase_controller/SupplierDetailListing')?>" data-title="SD">Supplier Detail Listing</a>
                            
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="DP">Document Printing</a>
                        <div>
                            <a href="<?php echo site_url('Purchase_controller/PrintPurchaseOrder')?>" data-title="PP">Print Purchase Oders</a>
                            <a href="<?php echo site_url('Purchase_controller/PrintRemittances')?>" data-title="PR">Print Remittances</a>
                            
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="HK">Housekeeping</a>
                        <div>
                            <a href="<?php echo site_url('Purchase_controller/SupplierMaintenance')?>" data-title="SM">Suppliers Maintenance</a>
                            
                        </div>
                    </span>
                </div>
            </li>

            <!-- Products -->
            <li>
                <a href="#" class="menu-parent"><i class="fa fa-cubes" aria-hidden="true"></i>Products</a>

                <div class="menu-child">
                    <span>
                        <a href="<?php echo site_url('Product_controller')?>" class="" data-title="DB">Dashboard</a>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="OP">Operations</a>
                        <div>
                            <a href="<?php echo site_url('Product_controller/LocationTransfers')?>" data-title="IL">Inventory Location Transfers</a>
                            <a href="<?php echo site_url('Product_controller/Adjustment')?>" data-title="IA">Inventory Adjustments</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="IQ">Inquiry</a>
                        <div>
                            <a href="<?php echo site_url('Product_controller/ItemMovements')?>" data-title="IM">Inventory Item Movements</a>
                            <a href="<?php echo site_url('Product_controller/ItemStatus')?>" data-title="IS">Inventory Item Status</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="RP">Reports</a>
                        <div>
                            <a href="<?php echo site_url('Product_controller/InValuationReports')?>" data-title="IV">Inventory Valuation Report</a>
                            <a href="<?php echo site_url('Product_controller/InPlanningReports')?>" data-title="IP">Inventory Planning Report</a>
                            <a href="<?php echo site_url('Product_controller/StockCheckSheets')?>" data-title="SC">Stock Check Sheets</a>
                            <a href="<?php echo site_url('Product_controller/InSalesReports')?>" data-title="IP">Inventory Sales Report</a>
                            <a href="<?php echo site_url('Product_controller/ValuationReports')?>" data-title="GV">GNL Valuation Report</a>
                            <a href="<?php echo site_url('Product_controller/InPurchasing')?>" data-title="IP">Inventory Purchasing Report</a>
                            <a href="<?php echo site_url('Product_controller/CostedInMovReport')?>" data-title="IM">Inventory Movement Report</a>
                            <a href="<?php echo site_url('Product_controller/CostedInMovReport')?>" data-title="CI">Costed Inventory Movement Report</a>
                            <a href="<?php echo site_url('Product_controller/ItemSalesSummaryReport')?>" data-title="IS">Item Sales Summary Report</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="HK">Housekeeping</a>
                        <div>
                            <a href="<?php echo site_url('Product_controller/Items')?>" data-title="IT">Items</a>
                            <a href="<?php echo site_url('Product_controller/ForeignItemCodes')?>" data-title="FI">Foreign Item Codes</a>
                            <a href="<?php echo site_url('Product_controller/SalesKits')?>" data-title="SK">Sales Kits</a>
                            <a href="<?php echo site_url('Product_controller/ItemCategories')?>" data-title="IC">Item Categories</a>
                            <a href="<?php echo site_url('Product_controller/InventoryLocations')?>" data-title="IL">Inventory Locations</a>
                            <a href="<?php echo site_url('Product_controller/InMovementTypes')?>" data-title="IM">Inventory Movement Types</a>
                            <a href="<?php echo site_url('Product_controller/SalesPricing')?>" data-title="SP">Sales Pricing</a>
                            <a href="<?php echo site_url('Product_controller/PurchasingPricing')?>" data-title="PP">Purchasing Pricing</a>
                            <a href="<?php echo site_url('Product_controller/StandardCosts')?>" data-title="SC">Standard Costs</a>
                        </div>
                    </span>
                </div>
            </li>

            <!-- Class -->
            <!-- <li>
                <a href="#" class="menu-parent"><i class="fa fa-cubes" aria-hidden="true"></i>Class</a>
                <div class="menu-child">
                    <span>
                        <a href="<?php ?>" class="" data-title="DB">Dashboard</a>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="TS">Transactions</a>
                        <div>
                            <a href="#" data-title="CE">Class Entry</a>
                            <a href="#" data-title="OC">Outstanding Class</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="IR">Inquiries and Reports</a>
                        <div>
                            <a href="#" data-title="CL">Class</a>
                            <a href="#" data-title="CR">Class Reports</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="MT">Maintenance</a>
                        <div>
                            <a href="#" data-title="CT">Class Tags</a>
                        </div>
                    </span>
                </div>
            </li> -->

            <!-- Cash and GL -->
            <li>
                <a href="#" class="menu-parent"><i class="fa fa-money" aria-hidden="true"></i>Cash and GL</a>
                <div class="menu-child">
                    <span>
                        <a href="<?php echo site_url('Cash_controller')?>" class="" data-title="DB">Dashboard</a>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="OP">Operations</a>
                        <div>
                            <a href="#" data-title="PM">Payments</a>
                            <a href="#" data-title="DP">Deposits</a>
                            <a href="#" data-title="BA">Bank Account Transfers</a>
                            <a href="#" data-title="JE">Journal Entry</a>
                            <a href="#" data-title="BE">Budget Entry</a>
                            <a href="#" data-title="RB">Reconcile Bank Account</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="IQ">Inquiry</a>
                        <div>
                            <a href="#" data-title="GF">GST Form 5</a>
                            <a href="#" data-title="GL">GL</a>
                            <a href="#" data-title="BA">Bank Account</a>
                            <a href="#" data-title="TX">Tax</a>
                            <a href="#" data-title="TB">Trial Balance</a>
                            <a href="#" data-title="BS">Balance Sheet Drilldown</a>
                            <a href="#" data-title="PL">Profit and Loss Drilldown</a>

                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="RP">Reports</a>
                        <div>
                            <a href="#" data-title="BS">Bank Statement</a>
                            <a href="#" data-title="CA">Chart of Accounts</a>
                            <a href="#" data-title="LJ">List of Journal Entries</a>
                            <a href="#" data-title="GA">GL Account Transactions</a>
                            <a href="#" data-title="AE">Annual Expense Breakdown</a>
                            <a href="#" data-title="BS">Balance Sheet</a>
                            <a href="#" data-title="PL">Profit and Loss Statement</a>
                            <a href="#" data-title="TB">Trial Balance</a>
                            <a href="#" data-title="TR">Tax Report</a>
                            <a href="#" data-title="AT">Audit Trail</a>
                            <a href="#" data-title="GG">GST Grouping Details</a>

                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="DP">Document Printing</a>
                        <div>
                            <a href="#" data-title="BP">Bank Payment Voucher</a>
                            <a href="#" data-title="BD">Bank Deposit Voucher</a>
                            <a href="#" data-title="BA">Bank Account Transfer Voucher</a>
                            <a href="#" data-title="BR">Bank Reconcile</a>

                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="HK">Housekeeping</a>
                        <div>
                            <a href="#" data-title="BA">Bank Accounts</a>
                            <a href="#" data-title="QE">Quick Entries</a>
                            <a href="#" data-title="AT">Account Tags</a>
                            <a href="#" data-title="CR">Currencies</a>
                            <a href="#" data-title="ER">Exchange Rates</a>
                            <a href="#" data-title="GA">GL Accounts</a>
                            <a href="#" data-title="GG">GL Account Groups</a>
                            <a href="#" data-title="GC">GL Account Classes</a>
                            <a href="#" data-title="RC">Revaluation of Currency Accounts</a>

                        </div>
                    </span>
                </div>
            </li>

            <!-- Accountant's Area -->
            <li>
                <a href="#" class="menu-parent"><i class="fa fa-usd" aria-hidden="true"></i>Accountant's Area</a>
                <div class="menu-child">

                   <!--  <span>
                        <a href="#" class="menu-sub-child" data-title="PJ">Process Journal Entry </a>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="RP">Reports</a>
                        <div>
                            <a href="#" data-title="MR">Management Reports</a>
                            <a href="#" data-title="TR">Transaction Reports</a>
                            <a href="#" data-title="AR">Audit Reports</a>
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="TB">Trial Balance Export</a>
                    </span> -->

                    <span>
                        <a href="#" class="" data-title="MA">Mobile Accountant</a>
                    </span>
                </div>
            </li>

            <!-- Setup -->
            <li>
                <a href="#" class="menu-parent"><i class="fa fa-cog" aria-hidden="true"></i>Setup</a>
                <div class="menu-child">

                    <span>
                        <a href="#" class="menu-sub-child" data-title="CP">Company</a>
                        <div>
                            <a href="#" data-title="ID">Import Data</a>
                            <a href="<?php echo site_url('Setup_controller/CompanySetup'); ?>" data-title="CS">Company Setup</a>
                            <a href="#" data-title="UA">User Accounts Setup</a>
                            <a href="#" data-title="AS">Access Setup</a>
                            <a href="#" data-title="DS">Display Setup</a>
                            <a href="#" data-title="FS">Forms Setup</a>
                            <a href="#" data-title="TX">Taxes</a>
                            <a href="#" data-title="SG">System and General GL Setup</a>
                            <a href="#" data-title="FY">Fiscal Years</a>
                            <a href="#" data-title="ET">Expense Type</a>
                            <a href="#" data-title="RT">Revenue Type</a>

                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="MC">Miscellaneous</a>
                        <div>
                            <a href="#" data-title="PT">Payment Terms</a>
                            <a href="#" data-title="SC">Shipping Company</a>
                            <a href="#" data-title="PS">Points of Sale</a>
                            <a href="#" data-title="PT">Printers</a>
                            <a href="#" data-title="CC">Contact Categories</a>
                            
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="MT">Maintenance</a>
                        <div>
                            <a href="#" data-title="VT">Void a Transaction</a>
                            <a href="#" data-title="VP">View or Print Transactions</a>
                            <a href="#" data-title="AD">Attach Documents</a>
                            <a href="#" data-title="AT">Audit Trail</a>
                            
                        </div>
                    </span>

                    <span>
                        <a href="#" class="menu-sub-child" data-title="OB">Opening Balances</a>
                        <div>
                            <a href="#" data-title="BA">Bank Account</a>
                            <a href="#" data-title="SG">System GL Accounts</a>
                            <a href="#" data-title="IV">Inventory</a>
                            <a href="#" data-title="CT">Customer</a>
                            <a href="#" data-title="SP">Supplier</a>
                            
                        </div>
                    </span>

                </div>
            </li>
        </ul>
    </div>



<!-- Content Here -->
<div class="uniq-content">
    <div class="wrapped">
        <div class="container">
            <!-- content start here -->
            <h1><i class="fa fa-home" aria-hidden="true"></i> <?php echo $title;?></h1>
            <?php echo $contents;?>
            <!-- content end here -->
        </div> 
    </div>
</div>
<!-- End Content Here -->




<!-- Fotter -->
 <script type="text/javascript" src="<?php echo site_url()?>assets/js/datepicker.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/timepicker.js"></script>
    <!-- <script type="text/javascript" src="<?php echo site_url()?>assets/js/src/chart.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function(e){
            $('.uniq-menu li a.menu-parent').click(function( ){
                $(this).toggleClass('rotate');
                $(this).parent().find('div span a.menu-sub-child').removeClass('show');
                $(this).parent().find('.menu-child').toggleClass('show');
                $(this).parent().find('.menu-child span div').removeClass('show');                
            });
            $('.uniq-menu li div span a.menu-sub-child').click(function( ){
                $(this).toggleClass('rotate');
                $(this).parent().find('div').toggleClass('show');
            });
            /*------------------------- HEADER RIGHT MENU START ---*/
            $('.header .container ul li#user').click(function( ){
                $('.header .container ul li#lang').removeClass('show');
                $('.header .container ul li#lang label.rotate').removeClass('rotate');
                $(this).toggleClass('show');
                $(this).children('label').toggleClass('rotate');
            });
            $('.header .container ul li#lang').click(function( ){
                $('.header .container ul li#user').removeClass('show');
                $('.header .container ul li#user label.rotate').removeClass('rotate');
                $(this).toggleClass('show');
                $(this).children('label').toggleClass('rotate');
            });
            /*------------------------- HEADER RIGHT MENU END ---*/
            $('.uniq-form ul li em input,.uniq-form ul li em select,.uniq-form ul li em textarea').focus(function( ){
                $(this).parent().addClass('focus');
            });
            $('.uniq-form ul li em input,.uniq-form ul li em select,.uniq-form ul li em textarea').blur(function( ){
                $(this).parent().removeClass('focus');
            });
            $('.uniq-message .container .button').click(function( ){
                $(this).parent().parent().removeClass('show');
            });
            $('#b-alert').click(function( ){
                $("#alert").addClass('show');
            });
            $('#b-delete').click(function( ){
                $("#delete").addClass('show');
            });
            $('#b-success').click(function( ){
                $("#success").addClass('show');
            });
            $('#b-error').click(function( ){
                $(".uniq-error span").toggleClass('show animated flash');
                if( $(".uniq-error span").hasClass('show')){
                    $(this).parent().parent().find('em').addClass('error');
                }
                else{
                    $('.uniq-form ul li em').removeClass('error');
                }
            });
            $('#b-loading').click(function( ){
                $("#loading").addClass('show');
            });
            $('#loading').click(function( ){
                $("#loading").removeClass('show');
            });
            $('#b-popup').click(function( ){
                $("#popup").addClass('show');
            });
            $('.uniq-popup .popup-header i').click(function( ){
                $("#popup").removeClass('show');
            });
            
            //-------------------------- mobile responsive            
            $('.header .container ul li a.fa').click(function( ){
                $(this).toggleClass('close');
                $("body").toggleClass('slide-menu');
            });
        });

        $('#changeLanguage').unbind().on("click", function(e){
            loadFileAsText();
        });
    </script>


    </body>
</html>