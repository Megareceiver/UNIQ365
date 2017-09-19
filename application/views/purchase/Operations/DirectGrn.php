<div parent-module="purchase" name-module="direct_grn">
	<form class="uniq-form">
		<ul>
			<li class="uniq-col-5" style="margin-top: 12; display: block; margin-bottom: 15px; clear: none; float: right;">
                <input class="uniq-button" type="button" lang-id="pdg-013" value="Add New GRNs" style="height: 40px;">
            </li>
		</ul>
		<ul>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="pdg-001">Supplier</span>
                <em>
                    <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="pdg-002"> From</span>
                <em>
                    <input type="text" id="from_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
            <span lang-id="pdg-003"> To</span>
                <em>
                    <input type="text" id="to_dt" class="datepicker"/>
                </em>
            </li>
            <li class="uniq-col-5" style="float: left; width: 15%; clear: none; padding-left: 0;">
                <span></span>
                <em style="margin-top: 17;">
                    <select>
                        <option selected>GRNs</option>
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
            <span lang-id="pdg-004" style="">Voided</span>
                <em class="checkbox">
                    <input id="option-1" type="checkbox" name="" value="" />
                    <label for="option-1"></label>
                </em>
                <input class="uniq-button" type="button" lang-id="pdg-005" value="Search" style="height: 40px;">
            </li>
        </ul>	
	</form>
	<div class="uniq-table-wrapped">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <td lang-id="pdg-006">Type</td>
                <td>#</td>
                <td lang-id="pdg-007">Reference</td>
                <td lang-id="pdg-008">Supplier</td>
                <td lang-id="pdg-009">Supplier's Reference</td>
                <td lang-id="pdg-010">Date</td>
                <td lang-id="pdg-011">Currency</td>
                <td lang-id="pdg-012">Debit</td>
                <td lang-id="pdg-013">Credit</td>
                <td></td>
                <td></td>
                <td></td>
            </thead>
        </table>
    </div>		
</div>