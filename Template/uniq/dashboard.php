<?php include'header.php';?>

<div class="uniq-content">
    <div class="wrapped">
        <div class="container">
            <!-- content start here -->
            <h1><i class="fa fa-home" aria-hidden="true"></i> Dashboard</h1>
            <ul class="uniq-dashboard-list">
                <li>
                    <a href="#action">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <strong>Create a Quote</strong>
                        Send a quotation to your customer
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-envelope"></i>
                        <strong>Create an Invoice</strong>
                        Sell items or service to your customer
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-money"></i>
                        <strong>Customer Payment</strong>
                        Receive payment from your customers
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-credit-card-alt"></i>
                        <strong>Create a Credit Note</strong>
                        Credit your customer for goods returned
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-truck"></i>
                        <strong>Create a Supplier Invoice</strong>
                        Purchase items from supplier
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-bank"></i>
                        <strong>Supplier Payment</strong>
                        Pay your suppliers
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-refresh"></i>
                        <strong>Bank Reconciliation</strong>
                        View and reconcile your bank statement
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-shopping-cart"></i>
                        <strong>Pay Expenses</strong>
                        Manually capture expenses into your bank
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-exchange"></i>
                        <strong>View Bank Transaction</strong>
                        View payments, receipts and bank tranfer
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-paper-plane"></i>
                        <strong>Send Customer Statements</strong>
                        Email ( print) statements to all your customer
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-search"></i>
                        <strong>Profit and Loss</strong>
                        View your Profit and Loss report
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-balance-scale"></i>
                        <strong>Balance Sheet</strong>
                        Statement of Assets and Liabilities report
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-list-alt"></i>
                        <strong>Prepare GST Return</strong>
                        Tax returns and Tax reporting
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-cog"></i>
                        <strong>Company Maintenance</strong>
                        Manage branding, financial years, Tax and so on
                    </a>
                </li>
            </ul>
            <h1><i class="fa fa-file-text-o" aria-hidden="true"></i> Modify Form Style</h1>
            <form class="uniq-form">
                <ul>
                    <li class="uniq-col-5">
                        <label>#</label>
                        <em>
                            <input type="text" placeholder="Type here..."/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li class="uniq-col-5">
                        <label>Ref</label>
                        <em>
                            <input type="text" placeholder="Type here..."/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li class="uniq-col-5">
                        <label>From</label>
                        <em>
                            <input type="text" id="from_dt" class="datepicker" placeholder="Date & Time"/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li class="uniq-col-5">
                        <label>To</label>
                        <em>
                            <input type="text" id="to_dt" class="datepicker" placeholder="Date & Time"/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li class="uniq-col-5">
                        <label>Location</label>
                        <em>
                            <select>
                                <option selected>- Choose One -</option>
                                <option>- Field here -</option>
                                <option>- Field here -</option>
                                <option>- Field here -</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <label>Checkbox</label>
                        <em class="checkbox">
                            <input id="option-1" type="checkbox" name="field" value="option">
                            <label for="option-1">Value 1</label>
                        </em>
                        <em class="checkbox">
                            <input id="option-2" type="checkbox" name="field" value="option">
                            <label for="option-2">Value 2</label>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <label>Radio</label>
                        <em class="radio">
                            <input id="radio-1" type="radio" name="field-radio" value="option">
                            <label for="radio-1">Value 1</label>
                        </em>
                        <em class="radio">
                            <input id="radio-2" type="radio" name="field-radio" value="option">
                            <label for="radio-2">Value 2</label>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <label>Time & Date</label>
                        <em>
                            <input type="text" id="start_dt" class="datepicker" placeholder="Date & Time"/>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <label>Select</label>
                        <em>
                            <select>
                                <option selected>- Choose One -</option>
                                <option>- Field here -</option>
                                <option>- Field here -</option>
                                <option>- Field here -</option>
                            </select>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <label>Textarea</label>
                        <em>
                            <textarea placeholder="Type here..."></textarea>
                        </em>
                        <div class="uniq-error">
                            <span>Ups, error message here!</span>
                        </div>
                    </li>
                    <li>
                        <input class="uniq-button" type="button" value="Button">
                        <input class="uniq-button" type="button" value="Error" id="b-error">
                        <input class="uniq-button disable" type="button" value="Disabled" disabled>
                        <input class="uniq-button" type="button" value="Alert" id="b-alert">
                        <br>
                        <input class="uniq-button" type="button" value="Delete" id="b-delete">
                        <input class="uniq-button" type="button" value="Success" id="b-success">
                        <input class="uniq-button" type="button" value="Loading" id="b-loading">
                        <input class="uniq-button" type="button" value="Popup" id="b-popup">
                    </li>
                </ul>
            </form>
            <h1><i class="fa fa-table" aria-hidden="true"></i> Table Style</h1>
            <div class="uniq-table-wrapped">
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <td>No.</td>
                        <td>Field Name</td>
                        <td>Qty.</td>
                        <td>From</td>
                        <td>To</td>
                        <td>Description</td>
                        <td>Action</td>
                    </thead>
                    <tr>
                        <td>01.</td>
                        <td>Invetory Today</td>
                        <td>5 pcs</td>
                        <td>Bandung</td>
                        <td>Paris</td>
                        <td>No caption needed</td>
                        <td>
                            <a href="#action" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#action" title="View"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <a href="#action" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#action" title="Print"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>02.</td>
                        <td>Invetory Today</td>
                        <td>5 pcs</td>
                        <td>Bandung</td>
                        <td>Paris</td>
                        <td>No caption needed</td>
                        <td>
                            <a href="#action" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#action" title="View"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <a href="#action" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#action" title="Print"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>03.</td>
                        <td>Invetory Today</td>
                        <td>5 pcs</td>
                        <td>Bandung</td>
                        <td>Paris</td>
                        <td>No caption needed</td>
                        <td>
                            <a href="#action" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#action" title="View"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <a href="#action" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#action" title="Print"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
            <br><br>
            <h1><i class="fa fa-address-book-o" aria-hidden="true"></i> Special Tab</h1>
            <div class="uniq-tab-special">
                <form>
                    <div class="uniq-tab-nav">
                        <a href="#tab-1" class="active">Tab 1</a>
                        <a href="#tab-2">Tab 2</a>
                        <a href="#tab-3">Tab 3</a>
                        <a href="#tab-4">Tab 4</a>
                    </div>
                    <div class="uniq-tab-content">
                        <section id="tab-1">
                            <em class="checkbox">
                                <input id="opt-1" type="checkbox" name="field" value="option">
                                <label for="opt-1"><i class="fa fa-check animated"></i> Tab 1 Option 1</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-2" type="checkbox" name="field" value="option">
                                <label for="opt-2"><i class="fa fa-check animated"></i> Tab 1 Option 2</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-3" type="checkbox" name="field" value="option">
                                <label for="opt-3"><i class="fa fa-check animated"></i> Tab 1 Option 3</label>
                            </em>
                        </section>
                        <section id="tab-2" class="hide">
                            <em class="checkbox">
                                <input id="opt-4" type="checkbox" name="field" value="option">
                                <label for="opt-4"><i class="fa fa-check animated"></i> Tab 2 Option 1</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-5" type="checkbox" name="field" value="option">
                                <label for="opt-5"><i class="fa fa-check animated"></i> Tab 2 Option 2</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-6" type="checkbox" name="field" value="option">
                                <label for="opt-6"><i class="fa fa-check animated"></i> Tab 2 Option 3</label>
                            </em>
                        </section>
                        <section id="tab-3" class="hide">
                            <em class="checkbox">
                                <input id="opt-7" type="checkbox" name="field" value="option">
                                <label for="opt-7"><i class="fa fa-check animated"></i> Tab 3 Option 1</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-8" type="checkbox" name="field" value="option">
                                <label for="opt-8"><i class="fa fa-check animated"></i> Tab 3 Option 2</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-9" type="checkbox" name="field" value="option">
                                <label for="opt-9"><i class="fa fa-check animated"></i> Tab 3 Option 3</label>
                            </em>
                        </section>
                        <section id="tab-4" class="hide">
                            <em class="checkbox">
                                <input id="opt-10" type="checkbox" name="field" value="option">
                                <label for="opt-10"><i class="fa fa-check animated"></i> Tab 4 Option 1</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-11" type="checkbox" name="field" value="option">
                                <label for="opt-11"><i class="fa fa-check animated"></i> Tab 4 Option 2</label>
                            </em>
                            <em class="checkbox">
                                <input id="opt-12" type="checkbox" name="field" value="option">
                                <label for="opt-12"><i class="fa fa-check animated"></i> Tab 4 Option 3</label>
                            </em>
                        </section>
                    </div>
                </form>
            </div>
            <br><br>
            <h1><i class="fa fa-table" aria-hidden="true"></i> Grid</h1>
            <div class="uniq-col col-2"><div class="container">1</div></div>
            <div class="uniq-col col-2"><div class="container">2</div></div><br><br>
            <div class="uniq-col col-3"><div class="container">1</div></div>
            <div class="uniq-col col-3"><div class="container">2</div></div>
            <div class="uniq-col col-3"><div class="container">3</div></div><br><br>
            <div class="uniq-col col-4"><div class="container">1</div></div>
            <div class="uniq-col col-4"><div class="container">2</div></div>
            <div class="uniq-col col-4"><div class="container">3</div></div>
            <div class="uniq-col col-4"><div class="container">4</div></div><br><br>
            <div class="uniq-col col-5"><div class="container">1</div></div>
            <div class="uniq-col col-5"><div class="container">2</div></div>
            <div class="uniq-col col-5"><div class="container">3</div></div>
            <div class="uniq-col col-5"><div class="container">4</div></div>
            <div class="uniq-col col-5"><div class="container">5</div></div>
            <!-- content end here -->
        </div> 
    </div>
</div>

<!----------------------------------------------------- Uniq Message Content Start -->
<!-- Alert Message -->
<div class="uniq-message" id="alert">
    <div class="container animated shake">
        <i class="fa fa-exclamation-circle red" aria-hidden="true"></i>
        <p>
            <b class="red">This is alert message!</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button">OK</a>
    </div>
</div>

<!-- Delete Message -->
<div class="uniq-message" id="delete">
    <div class="container animated swing">
        <i class="fa fa-trash yellow" aria-hidden="true"></i>
        <p>
            <b class="yellow">Are you sure!</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button left">NO</a>
        <a href="#action" class="button right">YES</a>
    </div>
</div>

<!-- Success Message -->
<div class="uniq-message" id="success">
    <div class="container animated rubberBand">
        <i class="fa fa-check-circle green" aria-hidden="true"></i>
        <p>
            <b class="green">Yea, this is amazing!</b>
            For close this alaret message you must click the button!
        </p>
        <a href="#action" class="button">OK</a>
    </div>
</div>

<!-- Loading Message -->
<div class="uniq-message" id="loading">
    <div class="loading"></div>
</div>
<!----------------------------------------------------- Uniq Message Content End -->

<!----------------------------------------------------- Uniq Popup Start -->
<div class="uniq-popup" id="popup">
    <div class="container animated fadeIn">
        <div class="popup-header">
            Title Popup Here
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <div class="wrapped">
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                END CONTENT!
            </div>
        </div>
    </div>
</div>
<!----------------------------------------------------- Uniq Popup End -->

<?php include'footer.php';?>