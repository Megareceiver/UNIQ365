<html>
<head>
	<title>Import Data</title>
</head>
<body>
<div parent-module="setup" name-module="company_setup">
<form class="uniq-form" id="form">
	<fieldset>
		<legend>Upload Excel file to import data into system</legend>
	</fieldset>
    <div class="">
        <ul>
            <li>
            <label lang-id="scs-027">Data file</label>
                <em>
                    <input type="file" name="NewCompLogo" />
                </em><span>(jpg | png)</span>
            </li>
        </ul>
        <ul>
            <li>
            	<input class="uniq-button" type="button" value="Back" id="back" lang-id="scs-025">
            	<input class="uniq-button" type="button" value="Update" id="Update" lang-id="scs-025">
            </li>
        </ul>
    </div>
</form>
</div>

<!-- Success Message -->
<div class="uniq-message" id="successAlert">
    <div class="container animated rubberBand">
        <i class="fa fa-check-circle green" aria-hidden="true"></i>
        <p>
            <b class="green" lang-id="scs-042">Success Insert Data</b>
            <span lang-id="scs-043">For close this alaret message you must click the button!</span>
        </p>
        <a href="#action" class="button" id="btnpopup">OK</a>
    </div>
</div>

<!-- Alert Message -->
<div class="uniq-message" id="FailAlert">
    <div class="container animated shake">
        <i class="fa fa-exclamation-circle red" aria-hidden="true"></i>
        <p>
            <b class="red" lang-id="scs-044">Data Fail To Save!</b>
            <span lang-id="scs-045">For close this alaret message you must click the button!</span>
        </p>
        <a href="#action" class="button" id="btnpopup">OK</a>
    </div>
</div>

</body>
</html>