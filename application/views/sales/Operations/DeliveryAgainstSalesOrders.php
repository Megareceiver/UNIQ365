<div class="container" parent-module="sales" name-module="direct_invoice">
	<form class="uniq-form">
		<ul>
			<li>
				<input style="float:right;" type="button" class="uniq-button" name="newInvoice" value="+ New sales order" />
			<div class="clearfix"></div>
			</li>
		</ul>
		<ul>
			<li class="uniq-col col-3">
				<em>
					<label>#</label>
					<input type="text" name="quot" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Ref</label>
					<input type="text" name="ref" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Location</label>
					<select>
						<option selected>- Choose one -</option>
						<option >- field here -</option>
						<option >- field here -</option>
						<option >- field here -</option>
						<option >- field here -</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Product</label>
					<input type="text" name="product" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Customer</label>
					<input type="text" name="customer" />
				</em>
			</li>
			<li style="float:right;">
				<input type="button" class="uniq-button" value="search" />
			</li>
			<div class="clearfix"></div>
		</ul>
		<div class="uniq-table-wrapped">
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<td>Order #</td>
						<td>Ref</td>
						<td>Customer</td>
						<td>Branch</td>
						<td>Cust Order Ref</td>
						<td>Order Date</td>
						<td>Delivery To</td>
						<td>Order Total</td>
						<td>Currency</td>
						<td>Disp</td>
						<td>Edit</td>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<br>
		<ul>
			<li style="padding-left: 0px;" class ="uniq-col col-3">
				<input type="button" class="uniq-button" name=""  value="back" />
			</li>
		</ul>
	</form>
</div>