<div parent-module="purchase" name-module="purchase_order">
	<form class="uniq-form">
        <ul>
            <li class="uniq-col-5">
            	#
                <em>
                    <input type="text" />
                </em>
            </li>
            <li class="uniq-col-5">
            	<span lang-id="ppo-002">From</span>
                <em>
                    <input type="text" id="from_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5">
                <span lang-id="ppo-003">	To</span>
                <em>
                    <input type="text" id="to_dt" class="datepicker" />
                </em>
            </li>
            <li class="uniq-col-5">
                <span lang-id="ppo-004">Location</span>
                <em>
                    <select>
                        <option selected>- Choose One -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                    </select>
                </em>
            </li>
            <li class="uniq-col-5"><br>
                    <input class="uniq-button" type="button" lang-id="ppo-001" value="Add New Purchase Order" onClick="document.location.href='<?php echo site_url('Purchase_controller/AddNewPurchases'); ?>'" style="height: 30px;">
            </li>
            </li>
        </ul>

        <ul>
            <li class="uniq-col col-3">
                <label lang-id="ppo-005">Item </label>
                <em>
                    <select>
                        <option selected>- Choose One -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                    </select>
                </em>
            </li>
            <li class="uniq-col col-3">
                <label lang-id="ppo-006">Supplier</label>
                <em>
                    <select>
                        <option selected>- Choose One -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                        <option>- Field here -</option>
                    </select>
            </li>
            <li class="uniq-col col-4">
                <input class="uniq-button" type="button" lang-id="ppo-007" value="Serach" id="btnSearch" style="height: 30px;">
            </li>
        </ul>

        <div class="uniq-table-wrapped">
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <td>#</td>
                        <td lang-id="ppo-008">Reference</td>
                        <td lang-id="ppo-009">Supplier</td>
                        <td lang-id="ppo-010">Location</td>
                        <td lang-id="ppo-011">Supplier's Reference</td>
                        <td lang-id="ppo-012">Order Date</td>
                        <td lang-id="ppo-013">Currency</td>
                        <td lang-id="ppo-014">Order Total	</td>
                        <td></td>
                        <td></td>
                    </thead>
                    <tr>
                        <td>12</td>
                        <td>auto</td>
                        <td>Motorola Supply Pte Ltd</td>
                        <td>Default</td>
                        <td>MC01</td>
                        <td>19-08-2017</td>
                        <td>SGD</td>
                        <td>53,500.00</td>
                        <td>
                        	<a href="#action" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="#action" title="Print"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
    </form>
</div>
</script>