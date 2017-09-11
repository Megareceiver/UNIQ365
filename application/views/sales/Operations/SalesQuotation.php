<div class="section" parent-module="sales" name-module="sales_quotation">
	<form class="uniq-form">
		<ul>
			<li>
				<input class="uniq-button" type="button" value="+ new quotation" name="newQuotation" />
			</li>
			<li class="uniq-col-5">
					<label>#</label>
				<em>
					<input type="text" name="quot" />
				</em>
			</li>
			<li class="uniq-col-5">
					<label>Ref</label>
				<em>
					<input type="text" name="ref" />
				</em>
			</li>
			<li class="uniq-col-5">
					<label>From</label>
				<em>
					<input type="text" name="from" id="form_dt" />
					<!-- <a href="#" class="datepickershow" onclick="return showDatePicker('form_dt')">
					</a> -->
				</em>
			</li>
			<li class="uniq-col-5">
					<label>To</label>
				<em>
					<input type="text" name="to" id="to_dt" />
				</em>
			</li>
			<li class="uniq-col-5">
					<label>Location</label>
				<em>
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
			<li class="uniq-col col-3">
				<input type="button" class="uniq-button" value="search" />
			</li>
		</ul>
	</form>
	<div class="uniq-table-wrapped">
		<table cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<td>Quote#</td>
					<td>Ref</td>
					<td>Customer</td>
					<td>Branch</td>
					<td>Cust Order Ref</td>
					<td>Quote Date</td>
					<td>Valid until</td>
					<td>Delivery To</td>
					<td>Quote total</td>
					<td>Currency</td>
					<td>Edit</td>
					<td>Order</td>
					<td>Prt</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>SQ002</td>
					<td>CustomerB</td>
					<td>CustomerB</td>
					<td></td>
					<td>26-07-2017</td>
					<td>27-07-2017</td>
					<td>CustomerB</td>
					<td>500.00</td>
					<td>SGD</td>
					<td><i class="fa fa-pencil-square-o"></i></td>
					<td><i class="fa fa-shopping-cart"></i></td>
					<td><i class="fa fa-print"></i></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>