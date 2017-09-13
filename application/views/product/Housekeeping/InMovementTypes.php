        <form class="uniq-form" action="" method="post" id="display-form">
            <div class="">
                <fieldset>
                <div class="uniq-table-wrapped">
                <table class="">
                    <tr>
                        <td>Description</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Adjustment</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Write Off</td>  
                        <td></td>
                        <td></td>                  	
                    </tr>
                    <tr>
                         <td>Transfer</td>
                         <td></td>
                         <td></td>                   	
                    </tr>
                    <tr>
                        <td>
                        	<ul>
                        		<li>
                        			<em class="checkbox">
                            			<input id="option-1" type="checkbox" name="field" value="option">
                            			<label for="option-1">Show also Inactive</label>
                        			</em>
                    		</li>
                        </td>
                        <td colspan="2">
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
                        <label>Description</label>
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