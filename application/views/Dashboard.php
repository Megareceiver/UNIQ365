<div class="container">
            <!-- content start here -->
            <ul class="uniq-dashboard-list">
                <li>
                    <a href="#action">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <strong lang = "hd-0" >Create a Quote</strong>
                        <span lang = "dt-0" >Send a quotation to your customer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-envelope"></i>
                        <strong lang = "hd-1" >Create an Invoice</strong>
                        <span lang = 'dt-1' >Sell items or service to your customer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-money"></i>
                        <strong lang = "hd-2" >Customer Payment</strong>
                        <span lang = 'dt-2' >Receive payment from your customers</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-credit-card-alt"></i>
                        <strong lang = "hd-3" > Create a Credit Note</strong>
                       <span lang = 'dt-3' > Credit your customer for goods returned</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-truck"></i>
                        <strong lang = "hd-4" > Create a Supplier Invoice</strong>
                       <span lang = 'dt-4' > Purchase items from supplier</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-bank"></i>
                        <strong lang = "hd-5" >Supplier Payment</strong>
                        <span lang = 'dt-5' >Pay your suppliers</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-refresh"></i>
                        <strong lang = "hd-6" >Bank Reconciliation</strong>
                       <span lang = 'dt-6' > View and reconcile your bank statement</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-shopping-cart"></i>
                        <strong lang = "hd-7" >Pay Expenses</strong>
                       <span lang = 'dt-7' > Manually capture expenses into your bank</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-exchange"></i>
                        <strong lang = "hd-8" >View Bank Transaction</strong>
                       <span lang = 'dt-8' >View payments, receipts and bank tranfer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-paper-plane"></i>
                        <strong lang = "hd-9" >Send Customer Statements</strong>
                       <span lang = 'dt-9' >Email ( print) statements to all your customer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-search"></i>
                        <strong lang = "hd-10" >Profit and Loss</strong>
                        <span lang = 'dt-10' >View your Profit and Loss report</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-balance-scale"></i>
                        <strong lang = "hd-11" >Balance Sheet</strong>
                        <span lang = 'dt-11' >Statement of Assets and Liabilities </span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-list-alt"></i>
                        <strong lang = "hd-12" >Prepare GST Return</strong>
                        <span lang = 'dt-12' >Tax returns and Tax reporting</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-cog"></i>
                        <strong lang = "hd-13" >Company Maintenance</strong>
                        <span lang = 'dt-13' >Manage branding, financial years, Tax and so on</span>
                    </a>
                </li>
            </ul>
</div>
<script>
// loadFileAsText();
function loadFileAsText(){
    var fileContents = "";
    var fileInput = "<?php echo site_url()?>assets/language/package/id/lang_id.ini";

   $.ajax({
            url: fileInput,
            async: false,
            success: function (data){
                fileContents = data;
            }
        });
    // console.log(fileContents);
    var nah = fileContents.split('\n');
    for(var a = 0; a < nah.length; a++){
        var ieu = nah[a].split('#');
        $('[lang="'+ieu[0]+'"]').html(ieu[1]);
    }
}
</script>