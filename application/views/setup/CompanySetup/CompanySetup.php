<script type="text/javascript">
$(document).ready(function(){
var json = '<?php echo site_url()?>assets/CompanySetup.ini';
// var data = jQuery.parseJSON(json);
// console.log(data); // ["apple", "orange", "banana", "strawberry"]
// alert( data ); // "strawberry"

    $.ajax({
        url: json,
        type: "GET",
        success: function(respone){
            var data = JSON.parse(respone);
            console.log(data); // ["apple", "orange", "banana", "strawberry"]
            $("[name='CompanyName']").val(data.Company_Name);
            $("[name='Address']").val(data.Address);
            $("[name='Domicile']").val(data.Domicile);
            $("[name='PhoneNumber']").val(data.PhoneNumber);
            $("[name='FaxNumber']").val(data.FaxNumber);
            $("[name='EmailAddress']").val(data.EmailAddress);
            $("[name='BCCAddress']").val(data.Company_Name);
            $("[name='OfficialCompany']").val(data.Company_Name);
            $("[name='GSTNo']").val(data.Company_Name);
            $("[name='HomeCurrency']").val(data.HomeCurrency);
            $("[name='FiscalYear']").val(data.FiscalYear);
            $("[name='TaxPeriods']").val(data.TaxPeriods);
            $("[name='TaxLastPeriods']").val(data.TaxLastPeriods);
            $("[name='CompanyLogo']").val(data.NewCompLogo);
            $("[name='NewCompLogo']").val(data.NewCompLogo);
            $("[name='DeleteLogo']").val(data.DeleteLogo);
            $("[name='BasePrice']").val(data.BasePrice);
            $("[name='AddPrice']").val(data.AddPrice);
            $("[name='RoundToNearest']").val(data.RoundToNearest);
            $("[name='SearchItem']").val(data.SearchItem);
            $("[name='SearchCustomer']").val(data.SearchCustomer);
            $("[name='SearchSupplier']").val(data.SearchSupplier);
            $("[name='AutomaticRevaluation']").val(data.AutomaticRevaluation);
            $("[name='TimeZone']").val(data.TimeZone);
            $("[name='LoginTimeout']").val(data.LoginTimeout);
        },
        error: function(){
            
       }
    });
});
</script>


<form class="uniq-form" style="width: 80%;" id="form">
    <div class="uniq-col col-2">
        <ul>
            <li>
            <label lang-id="scs-001">Company Name</label>
                <em>
                    <input type="text" placeholder="Type here..." name="CompanyName">
                    
                </em><span lang-id="scs-002">To appear on reports</span>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-003">Address</label>
                <em>
                    <textarea placeholder="Type here..." name="Address" lang-id="scs-004"></textarea>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-005">Domicile</label>
                <em>
                    <input type="text" placeholder="Type here..." name="Domicile" lang-id="scs-006">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-007">Phone Number</label>
                <em>
                    <input type="number" placeholder="Type here..." name="PhoneNumber">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-008">Fax Number</label>
                <em>
                    <input type="number" placeholder="Type here..." name="FaxNumber" lang-id="scs-009">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-010">Email Address</label>
                <em>
                    <input type="email" placeholder="Type here..." name="EmailAddress" lang-id="scs-011">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-012">BCC Address</label>
                <em>
                    <input type="text" placeholder="Type here..." name="BCCAddress" lang-id="scs-013">
                    
                </em><span lang-id="scs-014">For all outgoing mails</span>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-015">Official Company Number</label>
                <em>
                    <input type="text" placeholder="Type here..." name="OfficialCompany" lang-id="scs-016">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-017">GST No.</label>
                <em>
                    <input type="text" placeholder="Type here..." name="GSTNo" lang-id="scs-018">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-019">Home Currency</label>
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
            <label lang-id="scs-020">Fiscal Year</label>
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
            <label lang-id="scs-021">Tax Periods</label>
                
                    <input type="number" name="TaxPeriods">
                <span lang-id="scs-022">Months</span>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-023">Tax Last Period</label>
                    <input type="number" name="TaxLastPeriods">
                <span lang-id="scs-024">Months back</span>
            </li>
        </ul>
        <ul>
            <li>
            <input class="uniq-button" type="button" value="Back" id="back" lang-id="scs-025">
            </li>
        </ul>
    </div>

    <div class="uniq-col col-2">
        <ul>
            <li>
            <label lang-id="scs-026">Company Logo</label>
                <em>
                    <input type="text" name="CompanyLogo">
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-027">New Company Logo</label>
                <em>
                    <input type="file" name="NewCompLogo" />
                </em><span>(jpg | png)</span>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-028">Delete Company Logo</label>
                <em class="checkbox">
                    <input id="option-1" type="checkbox" name="DeleteLogo" value="DeleteLogo">
                    <label for="option-1"></label>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label lang-id="scs-029">Base for auto price calculations</label>
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
            <label lang-id="scs-030">Add Price from Std Cost</label>
                    <input type="number" name="AddPrice"><span>%</span>
            </li>
        </ul><br />
        <ul>
            <li>
            <label lang-id="scs-031">Round to nearest</label>
                    <input type="number" name="RoundToNearest"><span>Cents</span>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-032"><b>Search Setting</b></label>
            </li>
        </ul><br />
        <ul>
            <li>
            <label lang-id="scs-033">Search Item List</label>
                <em class="checkbox">
                    <input id="option-2" type="checkbox" name="SearchItem" value="SearchItem">
                    <label for="option-2"></label>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-034">Search Customer List</label>
                <em class="checkbox">
                    <input id="option-3" type="checkbox" name="SearchCustomer" value="SearchCustomer">
                    <label for="option-3"></label>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-035">Search Supplier List</label>
                <em class="checkbox">
                    <input id="option-4" type="checkbox" name="SearchSupplier" value="SearchSupplier">
                    <label for="option-4"></label>
                </em>
            </li>
        </ul>
        <ul>
            <li>
            <label lang-id="scs-036"><b>Work Session</b></label>
            </li>
        </ul><br />
        <ul>
            <li>
            <label lang-id="scs-037">Automatic Revaluation Currency Accounts</label>
                <em class="checkbox">
                    <input id="option-5" type="checkbox" name="AutomaticRevaluation" value="AutomaticRevaluation">
                    <label for="option-5"></label>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label lang-id="scs-038">Time Zone on Reports</label>
                <em class="checkbox">
                    <input id="option-6" type="checkbox" name="TimeZone" value="TimeZone">
                    <label for="option-6"></label>
                </em>
            </li>
        </ul><br />
        <ul>
            <li>
            <label lang-id="scs-039">Login Timeout</label>
                    <input type="number" name="LoginTimeout"><span lang-id="scs-040">Seconds</span>
            </li>
        </ul>
        <ul>
            <li>
            <input class="uniq-button" type="button" value="Update" id="updateSetup" lang-id="scs-041">
            </li>
        </ul>
    </div>
</form>


<!-- Success Message -->
<div class="uniq-message" id="successAlert">
    <div class="container animated rubberBand">
        <i class="fa fa-check-circle green" aria-hidden="true"></i>
        <p>
            <b class="green" lang-id="scs-042">Success Insert Data</b>
            <span lang-id="scs-043">For close this alaret message you must click the button!</span>
        </p>
        <a href="#action" class="button">OK</a>
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
        dataType: "JSON",
       success: function(respone){

            setup = [{'data':{
                'Company_Name':respone.Company, 
                'Address':respone.Address,
                'Domicile':respone.Domicile,
                'PhoneNumber':respone.PhoneNumber,
                'FaxNumber':respone.FaxNumber,
                'EmailAddress':respone.EmailAddress,
                'BCCAddress':respone.BCCAddress, 
                'OfficialCompany':respone.OfficialCompany,
                'GSTNo':respone.GSTNo,
                'HomeCurrency':respone.HomeCurrency,
                'FiscalYear':respone.FiscalYear,
                'TaxPeriods':respone.TaxPeriods,
                'TaxLastPeriods':respone.TaxLastPeriods,
                'NewCompLogo':respone.NewCompLogo,
                'DeleteLogo':respone.DeleteLogo,
                'BasePrice':respone.BasePrice,
                'AddPrice':respone.AddPrice,
                'RoundToNearest':respone.RoundToNearest,
                'SearchItem':respone.SearchItem,
                'SearchCustomer':respone.SearchCustomer,
                'SearchSupplier':respone.SearchSupplier,
                'AutomaticRevaluation':respone.AutomaticRevaluation,
                'TimeZone':respone.TimeZone,
                'LoginTimeout':respone.LoginTimeout,}}

            ];

            console.log(setup);
            $("#successAlert").addClass('show');
       },
       error: function(){
            $("#FailAlert").addClass('show');
       }
   });
});
</script>