<div parent-module="setup" name-module="forms_setup">
<form class="uniq-form" style="width: 80%;" id="form">
    <div class="uniq-col col-2">
        <fieldset>
            <legend><h5>General GL</h5></legend>
        </fieldset>
        <ul>
            <li>
            <label lang-id="sfs-001">Journal Entry</label>
                <em>
                    <input type="text" name="JournalEntry">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-002">Bank Payment</label>
                <em>
                    <input type="text" name="BankPayment">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-003">Bank Deposit</label>
                <em>
                    <input type="text"  name="BankDeposit">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-004">Founds Transfer</label>
                <em>
                    <input type="text"  name="FoundsTransfer">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-005">Sales Invoice</label>
                <em>
                    <input type="text" name="SalesInvoice">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Customers and Sales</h5></legend>
        </fieldset>        
        <ul>
            <li>
            <label lang-id="sfs-006">Customer Credit Note</label>
                <em>
                    <input type="text" name="CustomerCreditNote">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-007">Customer Payment</label>
                <em>
                    <input type="text" name="CustomerPayment">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-008">Delivery Note</label>
                <em>
                    <input type="text" name="DeliveryNote">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-009">Location Transfer</label>
                <em>
                    <input type="text" name="LocationTransfer">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Customers and Sales Defaults</h5></legend>
        </fieldset>   
        <ul>
            <li>
            <label lang-id="sfs-010">Inventory Adjustment</label>
                <em>
                    <input type="text" name="InventoryAdjustment">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-011">Purchase Order</label>
                <em>
                    <input type="text" name="PurchaseOrder">
                </em>
            </li>
        </ul>
        
        <ul>
            <li>
            <input class="uniq-button" type="button" value="Back" id="back" lang-id="sfs-028">
            </li>
        </ul>
    </div>

    <div class="uniq-col col-2">
        <fieldset>
            <legend><h5>Department Defaults</h5></legend>
        </fieldset>    
        <ul>
            <li>
            <label lang-id="sfs-012">Supplier Invoice</label>
                <em>
                    <input type="text" name="SupplierInvoice">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Suppliers and Purchasing</h5></legend>
        </fieldset>    
        <ul>
            <li>
            <label lang-id="sfs-013">Supplier Credit Note</label>
                <em>
                    <input type="text" name="SupplierCreditNote">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-014">Supplier Payment</label>
                <em>
                    <input type="text" name="SupplierPayment">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Suppliers and Purchasing Defaults</h5></legend>
        </fieldset> 
        <ul>
            <li>
            <label lang-id="sfs-015">Purchase Order Delivery</label>
                <em>
                    <input type="text" name="PurchaseOrderDelivery">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-016">Work Order</label>
                <em>
                    <input type="text" name="WorkOrder">
                </em>
            </li>
        </ul>


        <ul>
            <li>
            <label lang-id="sfs-017">Work Order Issue</label>
                <em>
                    <input type="text" name="WorkOrderIssue">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Inventory</h5></legend>
        </fieldset> 
        <ul>
            <li>
            <label lang-id="sfs-018">Word Order Production</label>
                <em>
                    <input type="text" name="WorkOrderProduction">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Items Defaults</h5></legend>
        </fieldset> 
        <ul>
            <li>
            <label lang-id="sfs-019">Sales Order</label>
                <em>
                    <input type="text" name="SalesOrder">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-020">Sales Quotation</label>
                <em>
                    <input type="text" name="SalesQuotation">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-021">Cost Update</label>
                <em>
                    <input type="text" name="CostUpdate">
                </em>
            </li>
        </ul>

        <ul>
            <li>
            <label lang-id="sfs-022">Dimension</label>
                <em>
                    <input type="text" name="Dimension">
                </em>
            </li>
        </ul>

        <fieldset>
            <legend><h5>Product GST Default</h5></legend>
        </fieldset> 
        <ul>
            
            <li>
            <input class="uniq-button" type="button" value="Update" id="updateSetup" lang-id="sfs-023">
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
            <b class="green" lang-id="sfs-024">Success Insert Data</b>
            <span lang-id="sfs-025">For close this alaret message you must click the button!</span>
        </p>
        <a href="#action" class="button" id="btnpopup">OK</a>
    </div>
</div>

<!-- Alert Message -->
<div class="uniq-message" id="FailAlert">
    <div class="container animated shake">
        <i class="fa fa-exclamation-circle red" aria-hidden="true"></i>
        <p>
            <b class="red" lang-id="sfs-026">Data Fail To Save!</b>
            <span lang-id="sfs-027">For close this alaret message you must click the button!</span>
        </p>
        <a href="#action" class="button" id="btnpopup">OK</a>
    </div>
</div>