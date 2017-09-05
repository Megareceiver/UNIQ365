<form class="uniq-form" style="width: 80%;" id="form">
    <div class="uniq-col col-2">
        <ul>
            <li>
            <label>Company Name</label>
                <em>
                    <input type="text" placeholder="Type here..." name="CompanyName">
                    
                </em><span>To appear on reports</span>
            </li>
        </ul>
        <ul>
            <li>
            <label>Address</label>
                <em>
                    <textarea placeholder="Type here..." name="Address"></textarea>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Domicile</label>
                <em>
                    <input type="text" placeholder="Type here..." name="Domicile">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Phone Number</label>
                <em>
                    <input type="number" placeholder="Type here..." name="PhoneNumber">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Fax Number</label>
                <em>
                    <input type="number" placeholder="Type here..." name="FaxNumber">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Email Address</label>
                <em>
                    <input type="email" placeholder="Type here..." name="EmailAddress">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>BCC Address</label>
                <em>
                    <input type="text" placeholder="Type here..." name="BCCAddress">
                    
                </em><span>For all outgoing mails</span>
            </li>
        </ul>
        <ul>
            <li>
            <label>Official Company Number</label>
                <em>
                    <input type="text" placeholder="Type here..." name="OfficialCompany">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>GST No.</label>
                <em>
                    <input type="text" placeholder="Type here..." name="GSTNo">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Home Currency</label>
                <em>
                    <select name="HomeCurrency">
                        <option selected>- Choose One -</option>
                        <option value="Singapore Dollars">Singapore Dollars</option>
                    </select>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Fiscal Year</label>
                <em>
                    <select name="FiscalYear">
                        <option selected>- Choose One -</option>
                        <option value="01-01-2017 - 31-12-2017 Active">01-01-2017 - 31-12-2017 Active</option>
                    </select>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Tax Periods</label>
                
                    <input type="number" name="TaxPeriods">
                Months
            </li>
        </ul>
        <ul>
            <li>
            <label>Tax Last Period</label>
                    <input type="number" name="TaxLastPeriods">
                Months back
            </li>
        </ul>
        <ul>
            <li>
            <input class="uniq-button" type="button" value="Back" id="back">
            </li>
        </ul>
    </div>

    <div class="uniq-col col-2">
        <ul>
            <li>
            <label>Company Logo</label>
                <em>
                    <input type="text" value="Company Logo">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>New Company Logo</label>
                <em>
                    <input type="file" name="NewCompLogo" />
                </em><span>(jpg | png)</span>
            </li>
        </ul>
        <ul>
            <li>
            <label>Delete Company Logo</label>
                <em class="checkbox">
                    <input id="option-1" type="checkbox" name="DeleteLogo" value="DeleteLogo">
                    <label for="option-1"></label>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Base for auto price calculations</label>
                <em>
                    <select name="BasePrice">
                        <option selected>No base price list</option>
                        <option value="Tax Excluded">Tax Excluded</option>
                        <option value="Tax Included">Tax Included</option>
                    </select>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Add Price from Std Cost</label>
                    <input type="number" name="AddPrice"><span>%</span>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Round to nearest</label>
                    <input type="number" name="RoundToNearest"><span>Cents</span>
            </li>
        </ul>
        <ul>
            <li>
            <label><b>Search Setting</b></label>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Search Item List</label>
                <em class="checkbox">
                    <input id="option-2" type="checkbox" name="SearchItem" value="SearchItem">
                    <label for="option-2"></label>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Search Customer List</label>
                <em class="checkbox">
                    <input id="option-3" type="checkbox" name="SearchCustomer" value="SearchCustomer">
                    <label for="option-3"></label>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label>Search Supplier List</label>
                <em class="checkbox">
                    <input id="option-4" type="checkbox" name="SearchSupplier" value="SearchSupplier">
                    <label for="option-4"></label>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label><b>Work Session</b></label>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Automatic Revaluation Currency Accounts</label>
                <em class="checkbox">
                    <input id="option-5" type="checkbox" name="AutomaticRevaluation" value="AutomaticRevaluation">
                    <label for="option-5"></label>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Time Zone on Reports</label>
                <em class="checkbox">
                    <input id="option-6" type="checkbox" name="TimeZone" value="TimeZone">
                    <label for="option-6"></label>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label>Login Timeout</label>
                    <input type="number" name="LoginTimeout"><span>Seconds</span>
            </li>
        </ul>
        <ul>
            <li>
            <input class="uniq-button" type="button" value="Update" id="updateSetup">
            </li>
        </ul>
    </div>
</form>


<!-- Success Message -->
<div class="uniq-message" id="successAlert">
    <div class="container animated rubberBand">
        <i class="fa fa-check-circle green" aria-hidden="true"></i>
        <p>
            <b class="green">Success Insert Data</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button">OK</a>
    </div>
</div>

<!-- Alert Message -->
<div class="uniq-message" id="FailAlert">
    <div class="container animated shake">
        <i class="fa fa-exclamation-circle red" aria-hidden="true"></i>
        <p>
            <b class="red">Data Fail To Save!</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button">OK</a>
    </div>
</div>


<script type="text/javascript" src="<?php echo site_url()?>assets/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/timepicker.js"></script>


<script type="text/javascript">
$("#updateSetup").click(function(){
$.ajax({
        url:'<?php echo site_url('Setup_controller/CompanySaveData')?>',
        type: "POST",
        data: $('#form').serialize(),
        dataType: "html",
       success: function(respone){

            // setup = [{
            //     'Company_Name':respone.compname, 
            //     'Address':respone.address,
            //     'Domicile':respone.domicile,
            //     'PhoneNumber':respone.PhoneNumber,
            //     'FaxNumber':respone.FaxNumber,
            //     'EmailAddress':respone.EmailAddress,
            //     'BCCAddress':respone.BCCAddress, 
            //     'OfficialCompany':respone.OfficialCompany,
            //     'GSTNo':respone.GSTNo,
            //     'HomeCurrency':respone.HomeCurrency,
            //     'FiscalYear':respone.FiscalYear,
            //     'TaxPeriods':respone.TaxPeriods,
            //     'TaxLastPeriods':respone.TaxLastPeriods,
            //     'NewCompLogo':respone.NewCompLogo,
            //     'DeleteLogo':respone.DeleteLogo,
            //     'BasePrice':respone.BasePrice,
            //     'AddPrice':respone.AddPrice,
            //     'RoundToNearest':respone.RoundToNearest,
            //     'SearchItem':respone.SearchItem,
            //     'SearchCustomer':respone.SearchCustomer,
            //     'SearchSupplier':respone.SearchSupplier,
            //     'AutomaticRevaluation':respone.AutomaticRevaluation,
            //     'TimeZone':respone.TimeZone,
            //     'LoginTimeout':respone.LoginTimeout,

            // }];

            // console.log(setup);

            $("#successAlert").addClass('show');
       },
       error: function(){
            $("#FailAlert").addClass('show');
       }
   });
});

</script>