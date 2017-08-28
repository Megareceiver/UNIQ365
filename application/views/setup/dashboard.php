<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>Ini Dashboard</h1>

	<h3>Company Setup</h3>
	<ul>
		<li><a href="<?php echo site_url('Setup_controller/CompanyPreference') ?>">Company Preference</a></li>
		<li><a href="<?php echo site_url('Setup_controller/UsersSetup') ?>">Users Setup</a></li>
		<li><a href="<?php echo site_url('Setup_controller/SecurityRoles') ?>">Security Roles</a></li>
		<li><a href="<?php echo site_url('Setup_controller/DisplayPreference') ?>">Display Preference</a></li>
		<li><a href="<?php echo site_url('Setup_controller/FormsSetup') ?>">Transaction References</a></li>
		<li><a href="<?php echo site_url('Setup_controller/TaxType') ?>">Taxes</a></li>
		<li><a href="<?php echo site_url('Setup_controller/TaxGroups') ?>">Tax Groups</a></li>
		<li><a href="<?php echo site_url('Setup_controller/ItemTaxType') ?>">Item Tax Type</a></li>
		<li><a href="<?php echo site_url('Setup_controller/GlSetup') ?>">System and General GL Setup</a></li>
		<li><a href="<?php echo site_url('Setup_controller/FiscalYears') ?>">Fiscal Years</a></li>
		<li><a href="<?php echo site_url('Setup_controller/PrintProfiles') ?>">Print Profiles</a></li>
	</ul>

	<h3>Miscellaneous</h3>
	<ul>
		<li><a href="<?php echo site_url('Setup_controller/PaymentTerm') ?>">Payment Terms</a></li>
		<li><a href="<?php echo site_url('Setup_controller/ShippingCompanies') ?>">Shipping Company</a></li>
		<li><a href="<?php echo site_url('Setup_controller/SalesPoint') ?>">Points of Sale</a></li>
		<li><a href="<?php echo site_url('Setup_controller/Printers') ?>">Printers</a></li>
		<li><a href="<?php echo site_url('Setup_controller/ContactCategories') ?>">Contact Categories</a></li>
	</ul>


	<h3>Maintenance</h3>
	<ul>
		<li><a href="<?php echo site_url('Setup_controller/VoidTrans') ?>">Void a Transaction</a></li>
		<li><a href="<?php echo site_url('Setup_controller/ViewPrintTrans') ?>">View or Print Transactions</a></li>
		<li><a href="<?php echo site_url('Setup_controller/Attachment') ?>">Attach Documents</a></li>
		<li><a href="<?php echo site_url('Setup_controller/SystemDiag') ?>">System Diagnostics</a></li>
		<!--Backup and Restore -->
		<li><a href="<?php echo site_url('Setup_controller/Backups') ?>">Backup and Restore</a></li>
		<li><a href="<?php echo site_url('Setup_controller/CreateCoy') ?>">Create/Update Companies</a></li>
		<li><a href="<?php echo site_url('Setup_controller/InstLang') ?>">Install/Update Languages</a></li>
		<li><a href="<?php echo site_url('Setup_controller/InstModule') ?>">Install/Activate Extensions</a></li>
		<li><a href="<?php echo site_url('Setup_controller/IntTheme') ?>">Install/Activate Themes</a></li>
		<li><a href="<?php echo site_url('Setup_controller/IntChart') ?>">Install/Activate Chart of Accounts</a></li>
		<li><a href="<?php echo site_url('Setup_controller/InstUpgrade') ?>">Software Upgrade</a></li>
	</ul>
</body>
</html>