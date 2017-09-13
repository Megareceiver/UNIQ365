<div parent-module="purchase" name-module="purchase_order">
	<form class="uniq-form">
		<ul>
			<li class="uniq-col-5" style="margin-top: 12; display: block; margin-bottom: 15px; clear: none; float: right;">
                <input class="uniq-button" type="button" lang-id="pdi-013" value="Add New Invoices" style="height: 40px;">
            </li>
		</ul>
		<ul>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="pdi-001">Supplier</span>
                <em>
                    <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="pdi-002"> From</span>
                <em>
                    <input type="text" id="from_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="pdi-003"> To</span>
                <em>
                    <input type="text" id="to_dt" class="datepicker"/>
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
                <span></span>
                <em style="margin-top: 17;">
                    <select>
                        <option selected>Invoices</option>
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
            <span lang-id="pdi-004" style="">Voided</span>
                <em class="checkbox">
                    <input id="option-1" type="checkbox" name="" value="" />
                    <label for="option-1"></label>
                </em>
                <input class="uniq-button" type="button" lang-id="pdi-005" value="Search" style="height: 40px;">
            </li>
        </ul>	
	</form>
	<div class="uniq-table-wrapped">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <td lang-id="pdi-006">Type</td>
                <td>#</td>
                <td lang-id="pdi-007">Reference</td>
                <td lang-id="pdi-008">Supplier</td>
                <td lang-id="pdi-009">Supplier's Reference</td>
                <td lang-id="pdi-010">Date</td>
                <td lang-id="pdi-011">Currency</td>
                <td lang-id="pdi-012">Debit</td>
                <td lang-id="pdi-012">Credit</td>
                <td></td>
                <td></td>
                <td></td>
            </thead>
        </table>
    </div>		
</div>