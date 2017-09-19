        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Name</td>
                        <td>Tax type</td>
                        <td>Units</td>
                        <td>Type</td>
                        <td>Sales Act</td>
                        <td>COGS Account</td>
                        <td>Adjustment Account</td>
                        <td>Assembly Account</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Purchased Items</td>
                        <td>Standard Rated</td>
                        <td>each</td>
                        <td>Purchased</td>
                        <td>500-0000</td>
                        <td>330-0000</td>
                        <td>600-0000</td>
                        <td>640-0000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Service Items</td>
                        <td>Standard Rated</td>
                        <td>each</td>
                        <td>Purchased</td>
                        <td>500-0000</td>
                        <td>330-0000</td>
                        <td>600-0000</td>
                        <td>640-0000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>                    
                </table>
                <ul>
                    <li>
                        <button type="submit" class="uniq-button">Update</button>
                    </li>
                </ul>
                </div>

                </fieldset>

                <fieldset>
                <legend>    </legend>
                <ul>
                  <li>
                        <label>Category Name</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                <legend>Default values for new items</legend>
                    <li>
                        <label>Item Tax Type</label>
                        <em>
                            <select>
                                <option selected>Standard Rated</option>
                                <option>GST Zero Rated</option>
                            </select>  
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                   <li>
                        <label>Quantity</label>
                        <em>
                            <select>
                                <option selected>Purchased</option>
                                <option>Service</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Description</label>
                        <em>
                            <select>
                                <option selected>Each</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Exclude from sales</label>
                        <em class="checkbox">
                            <input id="option-1" type="checkbox" name="field" value="option">
                            <label for="option-1">Value 1</label>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>   
                        </div>
                    </li>

                    <li>
                        <label>Sales Account:</label>
                        <em>
                            <select>
                                <option selected>Each</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>C.O.G.S. Account</label>
                        <em>
                            <select>
                                <option selected>Each</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                </ul>    
                </fieldset>

                <ul>
                    <li>
                        <button type="submit" class="uniq-button">Add Item</button>
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