<div parent-module="purchase" name-module="purchase_order">
	<form class="uniq-form">
		<ul>
			<li class="uniq-col-5" style="margin-top: 12; display: block; margin-bottom: 15px; clear: none; float: right;">
                <input class="uniq-button" type="button" lang-id="psi-013" value="Add New Overude Invoices" style="height: 40px;">
            </li>
		</ul>
		<ul>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="psi-001">Supplier</span>
                <em>
                    <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="psi-002"> From</span>
                <em>
                    <input type="text" id="from_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="psi-003"> To</span>
                <em>
                    <input type="text" id="to_dt" class="datepicker"/>
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
                <span></span>
                <em style="margin-top: 17;">
                    <select>
                        <option selected>Overude Invoices</option>
                        <option>All Types</option>
                        <option>GRNs</option>
                        <option>Invoices</option>
                        <option>Overude Invoices</option>
                        <option>Payments</option>
                        <option>Credit Notes</option>
                        <option>Overude Credit Notes</option>
                    </select>
                </em>
            </li>
            <li style="margin-top: 12; display: block; margin-bottom: 15px; clear: none;">
            <span lang-id="psi-004" style="">Voided</span>
                <em class="checkbox">
                    <input id="option-1" type="checkbox" name="" value="" />
                    <label for="option-1"></label>
                </em>
                <input class="uniq-button" type="button" lang-id="psi-005" value="Search" style="height: 40px;">
            </li>
        </ul>	
	</form>
	<div class="uniq-table-wrapped">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <td lang-id="psi-006">Type</td>
                <td>#</td>
                <td lang-id="psi-007">Reference</td>
                <td lang-id="psi-008">Supplier</td>
                <td lang-id="psi-009">Supplier's Reference</td>
                <td lang-id="psi-010">Date</td>
                <td lang-id="psi-011">Currency</td>
                <td lang-id="psi-012">Debit</td>
                <td lang-id="psi-012">Credit</td>
                <td></td>
                <td></td>
                <td></td>
            </thead>
        </table>
    </div>		
</div>