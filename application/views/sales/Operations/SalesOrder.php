<div class="section" parent-module="sales" name-module="sales_order">
	<form class="uniq-form">
		<ul>
			<li>
				<input style="float:right;" class="uniq-button" type="button" value="+ new order" name="newOrder" />
			</li>
			<div class="clearfix"></div>
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
					<input type="text" name="from" id="form_dt" class="datepicker" />
				</em>
			</li>
			<li class="uniq-col-5">
					<label>To</label>
				<em>
					<input type="text" name="to" id="to_dt" class="datepicker" />
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
			<li class="uniq-col col-4">
				<em>
					<label>Product</label>
					<input type="text" name="product" />
				</em>
			</li>
			<li class="uniq-col col-4">
				<em>
					<label>Customer</label>
					<input type="text" name="customer" />
				</em>
			</li>
			<li class="uniq-col col-4">
				<em class="checkbox">
					<input id="option-1" type="checkbox" name="field" value="option">
					<label for="option-1">select all</label>
				</em>
			</li>
			<li class="uniq-col col-4">
				<input type="button" class="uniq-button" value="search" />
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
					<td>Cust Order Ref</td>
					<td>Order Date</td>
					<td>Valid until</td>
					<td>Delivery To</td>
					<td>Order total</td>
					<td>Currency</td>
					<td>Tmpl</td>
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
					<td>
						<ul>
						<li>
							<em class="checkbox">
								<input type="checkbox" name="field" id="option-2" value="option">
								<label for="option-2"></label>
							</em>
						</li>
						</ul>
					</td>
					<td><i class="fa fa-shopping-cart"></i></td>
					<td><i class="fa fa-print"></i></td>
				</tr>
			</tbody>
		</table>
	</div>
	</form>
	</div>
</div>