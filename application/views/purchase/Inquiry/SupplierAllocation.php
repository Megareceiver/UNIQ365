<div parent-module="purchase" name-module="supplier_allocation">
	<form class="uniq-form">

		<ul>
            <li class="uniq-col-5" style="margin-left: 0% ">
            <span lang-id="isa-001">Select a Supplier</span>
                <em>
                    <select>
                        <option selected>MC</option>
                        <option>Motorola Supply</option>
                        <option>QSupplier</option>
                        <option>Supplier A</option>
                    </select>
                </em>
            </li>
            <li class="uniq-col-5">
            <span lang-id="isa-002">From</span>
                <em>
                    <input type="text" id="form_dt" class="datepicker">
                </em>
            </li>
            <li class="uniq-col-5">
            <span lang-id="isa-003">to</span>
                <em>
                    <input type="text" id="to_dt" class="datepicker">
                </em>
            </li>
            <li class="uniq-col-5" style="margin-top: 1.1%">
                <em>
                    <select>
                        <option selected>All Types</option>
                    </select>
                </em>
            </li>
            <li class="uniq-col-5" style="margin-top: 1.3%">
            <span lang-id="isa-004"> Voided </span>
                <em class="checkbox">
                    <input id="option-1" type="checkbox" name="" value="" />
                    <label for="option-1"></label>
                </em>
                <input class="uniq-button" type="button" lang-id="isa-005" value="Search" style="height: 30px; clear: none;float: right; margin-top: 0%">
            </li>
        </ul>	

        <div class="uniq-table-wrapped">
	        <table cellpadding="0" cellspacing="0">
	            <tr>
	            <thead>
	                <td lang-id="isa-006">Type</td>
	                <td >#</td>
	                <td lang-id="isa-007">Reference</td>
	                <td lang-id="isa-008">Supplier</td>
	                <td lang-id="isa-009">Supplier's Reference</td>
	                <td lang-id="isa-010">Date</td>
	                <td lang-id="isa-011">Currency</td>
	                <td lang-id="isa-012">Debit</td>
	                <td lang-id="isa-013">Credit</td>
	                <td lang-id="isa-014">Allocated</td>
	                <td lang-id="isa-015">Balance</td>
	                <td ></td>
	            </thead>
	            </tr>
	        </table>
	    </div>	
    </div>
	</form>
</div>