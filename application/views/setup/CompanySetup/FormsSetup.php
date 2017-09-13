<script type="text/javascript">
$(document).ready(function(){
var json = '<?php echo site_url()?>assets/config/setup/FormsSetup.ini';

    $.ajax({
        url: json,
        type: "GET",
        success: function(respone){
            var data = JSON.parse(respone);

            $("[name='JournalEntry']").val(data.JournalEntry);
            $("[name='BankPayment']").val(data.BankPayment);
            $("[name='BankDeposit']").val(data.BankDeposit);
            $("[name='FoundsTransfer']").val(data.FoundsTransfer);
            $("[name='SalesInvoice']").val(data.SalesInvoice);
            $("[name='CustomerCreditNote']").val(data.CustomerCreditNote);
            $("[name='CustomerPayment']").val(data.CustomerPayment);
            $("[name='DeliveryNote']").val(data.DeliveryNote);
            $("[name='LocationTransfer']").val(data.LocationTransfer);
            $("[name='InventoryAdjustment']").val(data.InventoryAdjustment);
            $("[name='PurchaseOrder']").val(data.PurchaseOrder);
            $("[name='SupplierInvoice']").val(data.SupplierInvoice);
            $("[name='SupplierCreditNote']").val(data.SupplierCreditNote);
            $("[name='SupplierPayment']").val(data.SupplierPayment);
            $("[name='PurchaseOrderDelivery']").val(data.PurchaseOrderDelivery);
            $("[name='WorkOrder']").val(data.WorkOrder);
            $("[name='WorkOrderIssue']").val(data.WorkOrderIssue);
            $("[name='WorkOrderProduction']").val(data.WorkOrderProduction);
            $("[name='SalesOrder']").val(data.SalesOrder);
            $("[name='SalesQuotation']").val(data.SalesQuotation);
            $("[name='CostUpdate']").val(data.CostUpdate);
            $("[name='Dimension']").val(data.Dimension);
            },
        error: function(){
            console.log('data is empty');
       }
    });
});
</script>

<div parent-module="setup" name-module="forms_setup">
<div>
     <span lang-id="sfs-029" ><h3>NEXT REFERENCE</h3></span>
</div>
<form class="uniq-form" style="width: 80%;" id="form">
    <div class="uniq-col col-2">
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
        <ul>
            <li>
            <label lang-id="sfs-012">Supplier Invoice</label>
                <em>
                    <input type="text" name="SupplierInvoice">
                </em>
            </li>
        </ul>

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

        <ul>
            <li>
            <label lang-id="sfs-018">Word Order Production</label>
                <em>
                    <input type="text" name="WorkOrderProduction">
                </em>
            </li>
        </ul>

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


<script type="text/javascript">
$("#updateSetup").click(function(){
$.ajax({
        url:'<?php echo site_url('Setup_controller/FormsSaveData')?>',
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
       success: function(respone){

            setup = [{'data':{
                'JournalEntry':respone.JournalEntry,
                'BankPayment':respone.BankPayment,
                'BankDeposit':respone.BankDeposit,
                'FoundsTransfer':respone.FoundsTransfer,
                'SalesInvoice':respone.SalesInvoice,
                'CustomerCreditNote':respone.CustomerCreditNote,
                'CustomerPayment':respone.CustomerPayment,
                'DeliveryNote':respone.DeliveryNote,
                'LocationTransfer':respone.LocationTransfer,
                'InventoryAdjustment':respone.InventoryAdjustment,
                'PurchaseOrder':respone.PurchaseOrder,
                'SupplierInvoice':respone.SupplierInvoice,
                'SupplierCreditNote':respone.SupplierCreditNote,
                'SupplierPayment':respone.SupplierPayment,
                'PurchaseOrderDelivery':respone.PurchaseOrderDelivery,
                'WorkOrder':respone.WorkOrder,
                'WorkOrderIssue':respone.WorkOrderIssue,
                'WorkOrderProduction':respone.WorkOrderProduction,
                'SalesOrder':respone.SalesOrder,
                'SalesQuotation':respone.SalesQuotation,
                'CostUpdate':respone.CostUpdate,
                'Dimension':respone.Dimension, 
                
                }}
            ];

            console.log(setup);
            $("#successAlert").addClass('show');
       },
       error: function(){
            $("#FailAlert").addClass('show');
       }
   });
});

$("#btnpopup").click(function(){
    location.reload();
});
</script>