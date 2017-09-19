        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <ul>

                    <li>
                        <label>Items</label>
                        <em>
                            <select>
                                <option selected>P002 - Apple iPhone 6 16GB Grey</option>
                                <option>Q-Product - QProduct</option>
                                <option>SPR - Super O2</option>
                            </select>                        
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                </ul>

                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Item Code</td>
                        <td>Item Description</td>
                        <td>Quantity</td>
                        <td>Unit</td>
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
                        <td><button type="submit" class="uniq-button">Add Item</button></td>
                    </tr>                    
                </table>
                </div>

                </fieldset>

                <fieldset>
                <legend>--------</legend>
                <ul>
                  <li>
                        <label>UPC/EAN code</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                   <li>
                        <label>Quantity</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Description</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Category</label>
                        <em>
                            <select>
                                <option selected>Service Items</option>
                                <option>Purchase Items</option>
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
                        <button type="submit" class="uniq-button">Display:Costed Inventory Movement Report</button>
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