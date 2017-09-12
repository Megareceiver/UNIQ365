<div class="container" parent-module="sales" name-module="invoiceAgainsSalesDelivery">
	<form class="uniq-form">
		<ul>
			<li class="uniq-col col-4">
				<em>
				<label>#</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-4">
				<em>
				<label>From</label>
					<input type="text" class="datepicker" id="from_dt" name="" />
				</em>
			</li>
			<li class="uniq-col col-4">
				<em>
				<label>To</label>
					<input type="text" class="datepicker" id="from_dt" name="" />
				</em>
			</li>
			<li class="uniq-col col-4">
				<em>
				<label>Location</label>
					<select>
						<option selected>Default</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Item</label>
					<select>
						<option selected>All Item</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Customer</label>
					<select>
						<option selected>All Customer</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<input type="button" class="uniq-button" value="Search" name="" />
			</li>
		</ul>
		<div class="uniq-table-wrapped">
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>#</td>
						<td>Cust</td>
						<td>Branch</td>
						<td>Contact</td>
						<td>Reference</td>
						<td>Cust ref</td>
						<td>Date</td>
						<td>Due by</td>
						<td>Total</td>
						<td>Currency</td>
						<td>
							<ul>
								<li>
									<input type="button" class="uniq-button" name="" value="Batch" />
								</li>
							</ul>
						</td>
						<td>Edit</td>
						<td>Inv</td>
						<td>Prt</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="14">
							<center>No data</center>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<ul>
			<li style="padding-left: 0px;">
				<input type="button" class="uniq-button" name="" value="Back" />
			</li>
		</ul>
	</form>
</div>