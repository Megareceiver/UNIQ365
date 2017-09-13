<div class="container" parent-module="sales" name-module="customerCreditNotes" >
	<form class="uniq-form">
		<ul>
			<li class="uniq-col col-3">
				<em>
					<label>Customer</label>
					<select>
						<option selected>AAA Trading</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Sales type</label>
					<select>
						<option selected>Tax exclude</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Date</label>
					<input type="text" class="datepicker" id="date_dt" name="" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Branch</label>
					<select>
						<option selected>AAA Trading</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Shipping company</label>
					<select>
						<option selected>Default shipping company</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Reason</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Reference</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Customer Discount</label>
					<input type="text" name="" value="0%" />
				</em>
			</li>
		</ul>
		<div class="uniq-table-wrapped">
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<td>Item code</td>
						<td>Item Description</td>
						<td>Tax</td>
						<td>Quantity</td>
						<td>Unit</td>
						<td>Price</td>
						<td>Discount %</td>
						<td>Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<em>
										<input type="text" name="">
									</em>
								</li>
							</ul>
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<select>
										<option selected>P002-Apple iPhone 6 16GB Grey</option>
									</select>
								</li>
							</ul>
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<select>
										<option selected>OS(0%)</option>
									</select>
								</li>
							</ul>
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<em>
										<input type="text" name="">
									</em>
								</li>
							</ul>
						</td>
						<td>
							EA
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<em>
										<input type="text" name="">
									</em>
								</li>
							</ul>
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<em>
										<input type="text" name="">
									</em>
								</li>
							</ul>
						</td>
						<td>
							0
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<input type="button" class="uniq-button" value="+" name="">
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="6" style="text-align:right;">
							Sub-total
						</td>
						<td> 0 </td>
						<td colspan="2"></td>
					</tr>
					<tr>
						<td colspan="6" style="text-align:right;">
							Shipping
						</td>
						<td>
							<ul>
								<li style="padding-left: 0px;">
									<em>
										<input type="text" name="" />
									</em>
								</li>
							</ul>
						</td>
						<td colspan="2"></td>
					</tr>
					<tr>
						<td colspan="6" style="text-align:right;">
							Credit note total
						</td>
						<td>
							0
						</td>
						<td colspan="2"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>
		<ul>
			<li>
				<em>
					<label>Credit note type</label>
					<select>
						<option selected>Item returned to inventory location</option>
					</select>
				</em>
			</li>
			<li>
				<em>
					<label>Item returned to location</label>
					<select>
						<option selected>Default</option>
					</select>
				</em>
			</li>
			<li>
				<em>
					<label>Memo</label>
					<textarea></textarea>
				</em>
			</li>
		</ul>
		<br>
		<ul>
			<li style="padding-left: 0px;">
				<input style="float:right;" type="button" class="uniq-button" name="" value="Update" />
				<input style="float:right;" type="button" class="uniq-button" name="" value="Proccess credit note" />
				<input type="button" class="uniq-button" name="" value="Back" />
			</li>
			<div class="clearfix"></div>
		</ul>
	</form>
</div>
