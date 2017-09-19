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

                  <li>
                        <label>Standard Material Cost Per Unit</label>
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