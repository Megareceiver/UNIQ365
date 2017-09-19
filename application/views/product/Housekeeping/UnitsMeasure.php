        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Unit</td>
                        <td>Description</td>
                        <td>Decimals</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ea</td>
                        <td>Each</td>
                        <td>0</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                        	<ul>
                        		<li>
                        			<em class="checkbox">
                            			<input id="option-1" type="checkbox" name="field" value="option">
                            			<label for="option-1">Show also Inactive</label>
                        			</em>
                    		</li>
                        </td>
                        <td>
                    			<li>
                        			<button type="submit" class="uniq-button">Update</button>
                    			</li>
                			</ul>
                        </td>
                    </tr>                    
                </table>
                </div>

                </fieldset>

                <fieldset>
                <legend>    </legend>
                <ul>
                  <li>
                        <label>Unit Abbreviation</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                  <li>
                        <label>Descriptive Name</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                  <li>
                        <label>Decimal Places</label>
                        <em>
                            <select>
                                <option selected>- User Quantity Decimals -</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
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