<div class="container" parent-module="sales" name-module="customerPayment">
	<form class="uniq-form">
		<ul>
			<li class="uniq-col col-3">
				<em>
					<label>Into bank acount</label>
					<select>
						<option selected>BML MVR - MVR</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Date of deposit</label>
					<input type="text" class="datepicker" id="dDeposit_dt" name="" />
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Payment amount</label>
					<input type="text" name="" /> 
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>From customer</label>
					<select>
						<option selected>AAA trading</option>
					</select>
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
					<label>Bank charge</label>
					<input type="text" name="" /> 
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Branch</label>
					<select>
						<option selected>AAA trading</option>
					</select>
				</em>
			</li>
			<li class="uniq-col col-3">
				<em>
					<label>Cheque No.</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-3"></li>
			<li class="uniq-col col-3"></li>
			<li class="uniq-col col-3">
				<em>
					<label>Customer ref</label>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-3"></li>
			<br>
			<h1> Allocated amounts in SGD </h1>
			<br>
			<div class="uniq-table-wrapped">
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>Transaction type</td>
							<td>#</td>
							<td>Ref</td>
							<td>Date</td>
							<td>Due Date</td>
							<td>Amount</td>
							<td>Other Allocations</td>
							<td>Left to Allocate</td>
							<td>This Allocation</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sales Invoice</td>
							<td>
								<a href="#">1</a>
							</td>
							<td>SI001</td>
							<td>17-06-2017</td>
							<td>17-07-2017</td>
							<td>13,917.00</td>
							<td>13,917.00</td>
							<td>0</td>
							<td>
								<ul>
									<li>
										<em>
											<input type="text" name="" />
										</em>
									</li>
								</ul>
							</td>
							<td>
								<a href="#">All</a>
							</td>
							<td>
								<a href="#">None</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<br>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4">
				<label>Customer prompt payment discount</label>
			</li>
			<li class="uniq-col col-4" style="padding-left: 0px;">
				0%
			</li>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4">
				<label>Amount of Discount</label>
			</li>
			<li class="uniq-col col-4" style="padding-left: 0px;">
				<em>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4">
				<label>Amount</label>
			</li>
			<li class="uniq-col col-4" style="padding-left: 0px;">
				<em>
					<input type="text" name="" />
				</em>
			</li>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4"></li>
			<li class="uniq-col col-4">
				<label>Memo</label>
			</li>
			<li class="uniq-col col-4" style="padding-left: 0px;">
				<em>
					<textarea placeholder=""></textarea>
				</em>
			</li>
			<li class="uniq-col col-4"></li>
		</ul>
		<br>
		<ul>
			<li style="padding-left: 0px;">
				<input style="float:right;" type="button" class="uniq-button" name="" value="Add payment" />
				<input type="button" class="uniq-button" name="" value="Back" />
			</li>
			<div class="clearfix"></div>
		</ul>
	</form>
</div>