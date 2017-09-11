<div class="section" parent-module="sales" name-module="sales_quotation_entry">
	<form class="uniq-form">
		<ul>
			<li class="uniq-col col-3">
				<em>
				<label>Customer</label>
					<select>
						<option selected> AAA Trading</option>
						<option>Customer B</option>
						<option>Customer C</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Payment</label>
					<select>
						<option selected>Cash only</option>
						<option>Term 30 days</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Current Credit</label>
					<a href="#">-2,181.00</a>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Branch</label>
					<select>
						<option selected> AAA Trading</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Price List</label>
					<select>
						<option selected>Tax exclude</option>
						<option>Tax include</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Customer discount</label>
					<a> 0%</a>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Reference</label>
					<input type="text" name="reference" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
				<label>Date</label>
					<input type="text" name="date" id="date_dt" />
				</em>
			</li>
			<li>
				<em>
				<label>Customer reference</label>
					<input type="text" name="reference" />
				</em>
			</li>
			<li>
				<em>
				<label>Deliver from location</label>
					<select>
						<option selected>All location</option>
						<option>Default</option>
					</select>
				</em>
			</li>
			<h1>SALES QUOTATATION ITEMS</h1>
			<div class="uniq-table-wrapped">
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>Item Code</td>
							<td>Item Description</td>
							<td>Tax</td>
							<td>Quantity</td>
							<td>Unit</td>
							<td>phrase Before Tax</td>
							<td>Discount %</td>
							<td>Total</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<li>
									<em>
										<input type="text" name="" placeholder="item code" />
									</em>
								</li>
							</td>
							<td>
								<li>
									<em>
										<select>
											<option>a</option>
										</select>
									</em>
								</li>
							</td>
							<td>
								<li>
									<em>
										<select>
											<option>a</option>
										</select>
									</em>
								</li>
							</td>
							<td>
								<li>
									<em>
										<input type="text" name=""/>
									</em>
								</li>
							</td>
							<td>Pcs</td>
							<td>
								<li>
									<em>
										<input type="text" name=""/>
									</em>
								</li>
							</td>
							<td>0</td>
							<td>
								<li>
									<input class="uniq-button" type="button" value="+" />
								</li>
							</td>
						</tr>
						<tr>
							<td colspan="6" align="right">shipping charge</td>
							<td>
								<li>
									<em>
										<input type="text" name="" />
									</em>
								</li>
							</td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="6" align="right">Sub total</td>
							<td>
								0
							</td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="6" align="right">Discount given</td>
							<td>
								0
							</td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="6" align="right">Amount total</td>
							<td>
								0
							</td>
							<td colspan="2"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<li>
			</li>
			<li>
				<input style="float:right;" type="button" name="" class="uniq-button" value="update" />
			</li>
			<div class="clearfix"></div>
			<h1>quotation delivery details</h1>
			<li class="uniq-col col-2" >
				<em>
				<label>Delivery from location</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>Contact phone number</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>valid until</label>
					<input type="text" name="" id="valid_dt" class="datepicker" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>Customer reference</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>Deliver to</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>Comments</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>Address</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2" >
				<em>
				<label>Shipping Company</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-2">
				<input type="button" class="uniq-button" name="" value="back" /> 
			</li>
			<li class="uniq-col col-2">
				<input type="button" class="uniq-button" name="" value="cancel quotation" />
				<input type="button" class="uniq-button" name="" value="place quotation" />
			</li>

		</ul>
	</form>
</div>

