<div class="container" parent-module="sales" name-module="direct_invoice">
	<form class="uniq-form">
		<ul>
			<li>
				<input style="float:right;" type="button" class="uniq-button" name="newInvoice" value="+ New invoice" />
			<div class="clearfix"></div>
			</li>
		</ul>
		<ul>
			<li class ="uniq-col col-3">
				<em>
					<label>Customer</label>
					<select>
						<option selected>AAA Trading</option>
					</select>
				</em>
			</li>
			<li class ="uniq-col col-3">
				<em>
					<label>From</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class ="uniq-col col-3">
				<em>
					<label>To</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class ="uniq-col col-3">
				<em>
					<label>Delivery note</label>
					<select>
						<option selected>Sales invoice</option>
					</select>
				</em>
			</li>
			<li class ="uniq-col col-3">
					<!-- <label>Voided</label> -->
				<em class="checkbox">
                    <input id="option-1" type="checkbox" name="field" value="option">
                    <label for="option-1">Voided</label>
                </em>
			</li>
			<li class ="uniq-col col-3">
				<input style="float:right;" type="button" class="uniq-button" name=""  value="Search" />
			</li>
			<div class="clearfix"></div>
		</ul>
		<div class="uniq-table-wrapped">
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<td>Currency</td>
						<td>Terms</td>
						<td>Current</td>
						<td>1-30 Days</td>
						<td>31-60 Days</td>
						<td>Over 60 Days</td>
						<td>Total balance</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>SGD</td>
						<td>Term 30 Days</td>
						<td>1,070.00</td>
						<td>0</td>
						<td>16,028.00</td>
						<td>-13,917.00</td>
						<td>3,181.00</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<div class="uniq-table-wrapped">
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<td>Type</td>
						<td>#</td>
						<td>Order</td>
						<td>Reference</td>
						<td>Date</td>
						<td>Due Date</td>
						<td>Branch</td>
						<td>DR</td>
						<td>CR</td>
						<td>RB</td>
						<td>Gl</td>
						<td>Credit</td>
						<td>Edit</td>
						<td>Prt</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Delivery Note</td>
						<td>7</td>
						<td>7</td>
						<td>auto</td>
						<td>19-08-2017</td>
						<td></td>
						<td>AAA Trading Pte Ltd</td>
						<td>1,070.00</td>
						<td></td>
						<td>7.00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<ul>
			<li style="padding-left: 0px;" class ="uniq-col col-3">
				<input type="button" class="uniq-button" name=""  value="back" />
			</li>
		</ul>
	</form>
</div>