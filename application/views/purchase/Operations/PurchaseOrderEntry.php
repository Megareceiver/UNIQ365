<div parent-module="purchase" name-module="purchase_order">
	<form class="uniq-form">
		<div class="uniq-col col-4">
			<ul>
	            <li>
	            	<label  lang-id="ppo-015">Suplier </label>
	                <em>
	                    <select>
                        <option selected>- Choose One -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                    </select>
	                </em>
	            </li>
	        </ul>
	        <ul>
	            <li>
	            	<label lang-id="ppo-016">To </label>
	                <em>
	                    <input type="text" class="datepicker" />
	                </em>
	            </li>
	        </ul>
	        <ul>
	            <li>
	            	<label  lang-id="ppo-017">Current Credit</label>
	                <em>
	                    <input type="text" />
	                </em>
	            </li>
	        </ul>
	        <ul>
	            <li>
	            	<label  lang-id="ppo-018">Reference</label>
	                <em>
	                    <input type="text" />
	                </em>
	            </li>
	        </ul>
		</div>
		<div class="uniq-col col-3">
			<ul>
	            <li>
	            	<label  lang-id="ppo-019">Supplier's Reference</label>
	                <em>
	                    <input type="text" />
	                </em>
	            </li>
	        </ul>
	        <ul>
	            <li>
	            	<label lang-id="ppo-020">Receive Into</label>
	                <em>
	                    <select>
                        <option selected>- Choose One -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                    </select>
	                </em>
	            </li>
	        </ul>
	        <ul>
	            <li>
	            	<label lang-id="ppo-021">Permit No</label>
	                <em>
	                    <input type="text" />
	                </em>
	            </li>
	        </ul>
		</div>
		<div class="uniq-col col-3">
			<ul>
	            <li>
	            	<label lang-id="ppo-022">Deliver to</label>
	                <em>
	                    <textarea></textarea>

	                </em>
	            </li>
	        </ul>
		</div>

		<div lang-id="ppo-023">ORDER ITEMS</div>
		<div class="uniq-table-wrapped" style="margin-bottom: 20px;">
            <table cellpadding="0" cellspacing="0">
            <tr>
            	<thead>
                    <td lang-id="ppo-024">Item Code</td>
                    <td lang-id="ppo-025">Item Description</td>
                    <td lang-id="ppo-026">Tax</td>
                    <td lang-id="ppo-027">Quantity</td>
                    <td lang-id="ppo-028">Received</td>
                    <td lang-id="ppo-029">Unit</td>
                    <td lang-id="ppo-030">Required Delivery Date</td>
                    <td lang-id="ppo-031">Price before Tax</td>
                    <td lang-id="ppo-032">Line Total</td>
                    <td></td>
                </thead>
            </tr>
            <tr>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td></td>
                <td></td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td></td>	
                <td>
                    <a href="#action" title="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </td>
            </tr>
            </table>
        </div>

        <div class="uniq-col-5">
        	<ul>
	            <li>
	            	<label lang-id="ppo-032">Memo</label>
	                <em>
	                    <textarea></textarea>

	                </em>
	            </li>
	        </ul>
        </div>

        <div class="uniq-col-5">
        	<ul>
	            <li>
	                	<input class="uniq-button" type="button" lang-id="ppo-034" value="Back" onClick="document.location.href='<?php echo site_url('Purchase_controller/PurchaseOrder'); ?>'">

	                	<input class="uniq-button" type="button" lang-id="ppo-035" value="Cancel Order" id="btnSearch">
	            </li>
	        </ul>
        </div>
	</form>
</div>