        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <ul>
                    <li>
                        <label>Product Item</label>
                        <em>
                            <select name="prices" id="prices" placeholder="All Item">
                                <option selected>Default</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-4">
                        <label>From Location</label>
                        <em>
                            <select>
                                <option selected>Default</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-4">
                        <label>From</label>
                        <em>
							<input type="date" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-4">
                        <label>To</label>
                        <em>
							<input type="date" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li class="uniq-col col-4">
                        <label>Type</label>
                            <button type="submit" class="uniq-button">Show Movement</button>
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
                        <td>Type</td>
                        <td>#</td>
                        <td>Reference</td>
                        <td>Date</td>
                        <td>Detail</td>
                        <td>Quantity In</td>
                        <td>Quantity Out</td>
                        <td>Quantity On Hand</td>
                    </tr>
                    <tr>
                        <td colspan="5">Quantity on hand before 12-09-2017</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="5">Quantity on hand after 12-09-2017</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
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