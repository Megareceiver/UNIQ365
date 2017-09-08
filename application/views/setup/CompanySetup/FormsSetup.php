<div name-module="setup">
<form class="uniq-form" id="form">
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
            <input class="uniq-button" type="button" value="Back" id="back" lang-id="scs-025">
            </li>
        </ul>
    </div>

    <div class="uniq-col col-2">
        
        <ul>
            <li>
            <input class="uniq-button" type="button" value="Update" id="updateSetup" lang-id="scs-041">
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