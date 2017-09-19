<div parent-module="purchase" name-module="purchase_order">
	<form class="uniq-form">
		<ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="pps-001">Payment To</span>
                <em>
                    <select>
                        <option selected>MC</option>
                        <option>Motorola Supply</option>
                        <option>QSupplier</option>
                        <option>Supplier A</option>
                    </select>
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="pps-002"> Date Paid</span>
                <em>
                    <input type="text" id="from_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="pps-003"> Bank Charge</span>
                <em>
                    <input type="text" />
                </em>
            </li>
        </ul>	
        <ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="pps-004">From Bank Account</span>
                <em>
                    <select>
                        <option selected>CITI BANK</option>
                        <option>Cash</option>
                    </select>
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="pps-005"> Reference</span>
                <em>
                    <input type="text" />
                </em>
            </li>
        </ul>
        <ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="pps-006">Bank Balance</span>
                <em>
                   <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="pps-007"> Cheque No.</span>
                <em>
                    <input type="text" />
                </em>
            </li>
        </ul>

	<div class="uniq-table-wrapped">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <td lang-id="pps-008">Transaction type</td>
                <td>#</td>
                <td lang-id="pps-009">Supplier Ref</td>
                <td lang-id="pps-010">Date</td>
                <td lang-id="pps-011">Due Date</td>
                <td lang-id="pps-012">Amount</td>
                <td lang-id="pps-013">Other Allocations</td>
                <td lang-id="pps-014">Left to Allocate</td>
                <td lang-id="pps-015">	This Allocation</td>
                <td></td>
                <td></td>
            </thead>
        </table>
    </div>	

    	<ul style="margin-top: 20">
            <li>
            <span lang-id="pps-016">Amount of Discount</span>
                <em>
                   <input type="text" />
                </em>
                <br />
            <span lang-id="pps-017"> Amount of Payment</span>
                <em>
                    <input type="text" />
                </em>
                <br />
            <span lang-id="pps-018"> Memo</span>
                <em>
                    <textarea lang-id="pps-019"></textarea>
                </em>
            </li>
        </ul>

        <ul>
        	<li>
        			<input class="uniq-button" type="button" lang-id="pps-020" value="Enter Payment" style="height: 40px; float: right;">
        	</li>
        </ul>
    </form>	
</div>