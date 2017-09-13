        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <legend>    </legend>
                <ul>
                  <li>
                        <label>Items</label>
                        <em>
                            <select>
                                <option selected>P002 - Apple iPhone 6 16 GB Grey</option>
                                <option>Q-Product - QProduct</option>
                                <option>SPR02 - Super O2</option>
                                <option>P001 - Apple iPhone Screen Replacements</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Supplier</td>
                        <td>Price</td>
                        <td>Currency</td>
                        <td>Supplier's Unit</td>
                        <td>Conversion Factor</td>
                        <td>Supplier's Description</td>
                        <td></td>
                        <td></td>
                    </tr>

                   	<tr>
                   		<td>Motorola Supply Pte Ltd</td>
                   		<td>600.00</td>
                   		<td>SGD</td>
                   		<td></td>
                   		<td>1</td>
                   		<td>Apple iPhone 6 16GB Grey</td>
                   		<td></td>
                   		<td></td>
                   	</tr> 

                   	<tr>
                   		<td>Supplier A</td>
                   		<td>300.00</td>
                   		<td>SGD</td>
                   		<td></td>
                   		<td>1</td>
                   		<td>Apple iPhone 6 16GB Grey</td>
                   		<td></td>
                   		<td></td>
                   	</tr>

                   	<tr>
                   		<td>Megan Comp</td>
                   		<td>200.00</td>
                   		<td>SGD</td>
                   		<td></td>
                   		<td>1</td>
                   		<td>Apple iPhone 6 16GB Grey</td>
                   		<td></td>
                   		<td></td>
                   	</tr>                  
                </table>
                </div>

                <legend>    </legend>
                  <li>
                        <label>Supplier</label>
                        <em>
                            <select>
                                <option selected>MC</option>
                                <option>Motorola Supply</option>
                                <option>QSupplier</option>
                                <option>SupplierA</option>
                                <option>Zebra Supply</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                  <li>
                        <label>Price</label>
                        <em>
							<input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                  <li>
                        <label>Suppliers Unit of Measure</label>
                        <em>
                        	<input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                  <li>
                        <label>Conversion Factor (to our UOM)</label>
                        <em>
                        	<input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                  <li>
                        <label>Supplier's Code or Description</label>
                        <em>
                        	<input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                </fieldset>

                <ul>
                    <li>
                        <button type="submit" class="uniq-button">Add New</button>
                    </li>
                </ul>
            </div>
        </form>

<!-- Success Message -->
<div class="uniq-message" id="successAlert">
    <div class="container animated rubberBand">
        <i class="fa fa-check-circle green" aria-hidden="true"></i>
        <p>
            <b class="green">Success Insert Data</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button">OK</a>
    </div>
</div>

<!-- Alert Message -->
<div class="uniq-message" id="FailAlert">
    <div class="container animated shake">
        <i class="fa fa-exclamation-circle red" aria-hidden="true"></i>
        <p>
            <b class="red">Data Fail To Save!</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button">OK</a>
    </div>
</div>