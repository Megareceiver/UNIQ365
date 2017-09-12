<div class="container" parent-module="sales" name-module="copyDelivery">
	<form class="uniq-form">
		<ul>
			<li style="float:right">
				<input type="button" class="uniq-button" value="+ New sales order" name="" />
			</li>
			<div class="clearfix"></div>
		</ul>
		<ul>
			<li class="uniq-col col-3">
				<em>
					<label>#</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Ref</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Location</label>
					<select>
						<option selected>All location</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Product</label>
					<select>
						<option selected>All items</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Customer</label>
					<select>
						<option selected>All customer</option>
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
						<td>Order#</td>
						<td>Ref</td>
						<td>Customer</td>
						<td>Branch</td>
						<td>Description</td>
						<td>Order date</td>
						<td>Delivery to</td>
						<td>Order total</td>
						<td>Currency</td>
						<td>Deli</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="10">
							<center>No data</center>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<ul>
			<li style="padding-left: 0px;">
				<input style="float:right;" type="button" class="uniq-button" name="" value="Update" />
				<input type="button" class="uniq-button" name="" value="Back" />
			</li>
			<div class="clearfix"></div>
		</ul>
	</form>
</div>