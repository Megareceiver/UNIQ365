        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Location Code</td>
                        <td>Location Name</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>Secondary Phone</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DEF</td>
                        <td>Default</td>
                        <td>Delivery 1 Delivery 2 Delivery 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="6">
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
                        <label>Location Code</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <label>Location Name</label>
                        <em>
							<input type="text" id="page_size" placeholder=""/> 
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                   <li>
                        <label>Contact for deliveries</label>
                        <em>
							<input type="text" id="page_size" placeholder=""/> 
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Address</label>
                        <em>
							<textarea placeholder=""></textarea>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Telephone No</label>
                        <em class="checkbox">
							<input type="text" id="page_size" placeholder=""/> 
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>   
                        </div>
                    </li>

                    <li>
                        <label>Secondary Phone Number</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/> 
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>Facsimile No</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>

                    <li>
                        <label>E-mail</label>
                        <em>
                            <input type="text" id="page_size" placeholder=""/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                </ul>    
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