<div parent-module="purchase" name-module="purchase_order">
	<form class="uniq-form">
		
		<ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="psc-001">Supplier</span>
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
            <span lang-id="psc-002"> Date </span>
                <em>
                    <input type="text" id="from_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-004"> Tax Group</span>
                <em>
                    
                </em>
            </li>
        </ul>	
        <ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="psc-005">Reference</span>
                <em>
                    <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-006"> Due Date</span>
                <em>
                    <input type="text" id="due_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-007"> Current Credit</span>
                <em>
                    
                </em>
            </li>
        </ul>
        <ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="psc-008">Supplier's Ref.</span>
                <em>
                   <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-009"> Terms</span>
                <em>
                    
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-010"> Paid Tax</span>
                <em>
                    <input type="text" value="False" />
                </em>
            </li>
        </ul>
        <ul>
        	<li class="uniq-col-5" style="margin-left: 20%">
        		<span lang-id="psc-011"> Reason</span>
                <em>
                    <input type="text" value="False" />
                </em>
        	</li>
        </ul>

    <div class="wrapped" style="margin-top: 0%">
    	<ul>
    		<li>
    			<span lang-id="psc-015">DELIVERY ITEM SELECTED FOR ADDING TO A SUPPLIER CREDIT NOTE</span>
    			<em></em>
    		</li>
		</ul>
    	<ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="psc-012">Supplier's Ref.</span>
                <em>
                   <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-013"> Terms</span>
                <em>
                    <input type="text" id="ter_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5" >
                    <input class="uniq-button" type="button" lang-id="psc-014" value="Search" style="height: 30px; float: right; margin-top: 5%">
            </li>
            <li class="uniq-col-5" >
                    <input class="uniq-button" type="button" lang-id="psc-015" value="Add All Item" style="height: 30px; float: right; margin-top: 5%">
            </li>
        </ul>
        <div class="uniq-table-wrapped">
	        <table cellpadding="0" cellspacing="0">
	            <tr>
	            <thead>
	                <td lang-id="psc-016">Delivery</td>
	                <td lang-id="psc-017">P.O.</td>
	                <td lang-id="psc-018">Item</td>
	                <td lang-id="psc-019">Description</td>
	                <td lang-id="psc-020">Received On</td>
	                <td lang-id="psc-021">Quantity Received</td>
	                <td lang-id="psc-022">Quantity Invoiced</td>
	                <td lang-id="psc-023">Qty Yet To Invoice</td>
	                <td lang-id="psc-024">Amt Yet To Credit</td>
	                <td lang-id="psc-025">GST</td>
	                <td lang-id="psc-026">Total</td>
	                <td></td>
	            </thead>
	            </tr>
	        </table>
	    </div>	
    </div>

	<div class="wrapped" style="margin-top: 0%">
    	<ul>
    		<li>
    			<span lang-id="psc-027">GL ITEMS FOR THIS CREDIT NOT</span>
    			<em></em>
    		</li>
		</ul>
    	<ul>
            <li class="uniq-col-5" style="margin-left: 20%">
            <span lang-id="psc-028">Quick Entry</span>
                <em>
                   <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" >
            <span lang-id="psc-028"> Amount</span>
                <em>
                    <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5" >
                    <input class="uniq-button" type="button" lang-id="psc-029" value="Go" style="height: 30px; float: right; margin-top: 5%">
            </li>
        </ul>
        <div class="uniq-table-wrapped">
	        <table cellpadding="0" cellspacing="0">
	            <tr>
	            <thead>
	                <td lang-id="psc-030">Account</td>
	                <td lang-id="psc-031">Name</td>
	                <td lang-id="psc-032">Tax</td>
	                <td lang-id="psc-033">Amount</td>
	                <td lang-id="psc-034">Memo</td>
	                <td > </td>
	                <td > </td>
	                <td></td>
	            </thead>
	            </tr>
	            <tr>
	            	<td ></td>
	                <td ></td>
	                <td ></td>
	                <td ></td>
	                <td ></td>
	                <td > </td>
	                <td > </td>
	                <td></td>
	            </tr>
	            <tr>
	            	<td colspan="3"></td>
	                <td ></td>
	                <td colspan="4"></td>
	            </tr>
	        </table>
	    </div>	
    </div>

        <ul>
        	<li>
        			<input class="uniq-button" type="button" lang-id="psc-035" value="Enter Credit Note" style="height: 40px; float: right;">
        	</li>
        </ul>
    </form>	
</div>