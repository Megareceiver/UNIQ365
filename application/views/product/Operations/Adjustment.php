        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <ul>
                    <li class="uniq-col col-3">
                        <label>Location</label>
                        <em>
                            <select name="prices" id="prices">
                                <option selected>Default</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-3">
                        <label>Detail</label>
                        <em>
                            <select>
                                <option selected>Adjustment</option>
                                <option>Transfer</option>
                                <option>Write Off</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-3">
                        <label>Date</label>
                        <em>
							<input type="date" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-3">
                        <label>Reference</label>
                        <em>
							<input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-3">
                        <label>Type</label>
                        <em>
                            <select>
                                <option selected>Positive Adjustment</option>
                                <option>Negative Adjustment</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                </ul>
                </fieldset>

                <fieldset>
                <legend>ITEMS</legend>
                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Item Code</td>
                        <td>Item Description</td>
                        <td>Quantity</td>
                        <td>Unit</td>
                        <td>Unit Cost</td>
                        <td>Total</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="page_size" placeholder=""/></td>
                        <td>
                            <select>
                                <option selected>P002 - Apple iPhone 6 16GB Grey</option>
                                <option>Q-Product - QProduct</option>
                                <option>SPR - Super O2</option>
                            </select>
                        </td>
                        <td><input type="text" id="page_size" placeholder=""/></td>
                        <td>EU</td>
                        <td><input type="text" id="page_size" placeholder=""/></td>
                        <td></td>
                        <td><button type="submit" class="uniq-button">Add Item</button></td>
                    </tr>
                    <tr>
                    	<td colspan="5">Total</td>
                    	<td>0</td>
                    	<td></td>
                    </tr>                    
                </table>
                </div>
                </fieldset>

                <ul>
                    <li>
                        <button type="submit" class="uniq-button">Update</button>
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