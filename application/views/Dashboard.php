<div class="container">
            <!-- content start here -->
            <ul class="uniq-dashboard-list">
                <li>
                    <a href="#action">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <strong lang = "d-0" >Create a Quote</strong>
                        <span lang = "dt-0" >Send a quotation to your customer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-envelope"></i>
                        <strong lang = "d-1" >Create an Invoice</strong>
                        <span lang = 'dt-1' >Sell items or service to your customer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-money"></i>
                        <strong lang = "d-2" >Customer Payment</strong>
                        <span lang = 'dt-2' >Receive payment from your customers</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-credit-card-alt"></i>
                        <strong lang = "d-3" > Create a Credit Note</strong>
                       <span lang = 'dt-3' > Credit your customer for goods returned</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-truck"></i>
                        <strong lang = "d-4" > Create a Supplier Invoice</strong>
                       <span lang = 'dt-4' > Purchase items from supplier</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-bank"></i>
                        <strong lang = "d-5" >Supplier Payment</strong>
                        <span lang = 'dt-5' >Pay your suppliers</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-refresh"></i>
                        <strong lang = "d-6" >Bank Reconciliation</strong>
                       <span lang = 'dt-6' > View and reconcile your bank statement</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-shopping-cart"></i>
                        <strong lang = "d-7" >Pay Expenses</strong>
                       <span lang = 'dt-7' > Manually capture expenses into your bank</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-exchange"></i>
                        <strong lang = "d-8" >View Bank Transaction</strong>
                       <span lang = 'dt-8' >View payments, receipts and bank tranfer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-paper-plane"></i>
                        <strong lang = "d-9" >Send Customer Statements</strong>
                       <span lang = 'dt-9' >Email ( print) statements to all your customer</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-search"></i>
                        <strong lang = "d-10" >Profit and Loss</strong>
                        <span lang = 'dt-10' >View your Profit and Loss report</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-balance-scale"></i>
                        <strong lang = "d-11" >Balance Sheet</strong>
                        <span lang = 'dt-11' >Statement of Assets and Liabilities </span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-list-alt"></i>
                        <strong lang = "d-12" >Prepare GST Return</strong>
                        <span lang = 'dt-12' >Tax returns and Tax reporting</span>
                    </a>
                </li>
                <li>
                    <a href="#action">
                        <i class="fa fa-cog"></i>
                        <strong lang = "d-13" >Company Maintenance</strong>
                        <span lang = 'dt-13' >Manage branding, financial years, Tax and so on</span>
                    </a>
                </li>
            </ul>
</div>
<script>
var lang = [{
    head  : [
        "Buat Catatan",
        "Buat Faktur",
        "Pembayaran Pelanggan", 
        "Buat Nota Hutang", 
        "Buat Faktur Supplier", 
        "Pembayaran suplier", 
        "Rekonsilisasi Bank", 
        "Pembayaran", 
        "Lihat Transaksi Bank", 
        "Kirim Statmen Pelanggan", 
        "Laba Rugi",
        "Neraca Keuangan", 
        "Persiapan Kembali GST", 
        "Pemeliharaan Perusahaan"
        ]},{
    title : [
        "Kirim kutipan untuk pelanggan anda", 
        "Jual barang atau jasa pada pelanggan anda", 
        "Menerima pembayaran dari pelanggan", 
        "Retur barang", 
        "Beli barang dari suplier", 
        "Pembayaran suplier", 
        "Lihat dan rekonsilisasi bank anda", 
        "mengisikan pembayaran kedalam bank secara manual", 
        "Lihat pembayaran, struk, dan transaksi bank",
        "email(print) statmen pada semua pelanggan", 
        "Lihat laba rugi", 
        "Aset dan kewajiban",
        "pajak kembali dan pelaporan pajak",
        "Mengatur branding, finansial pertahun, dan lainnya"]}
];
console.log(lang[1].title.length);
for(var a = 0; a < lang[1].title.length; a++){
    $('[lang="dt-'+a+'"]').html(lang[1].title[a]);  
}
for(var b = 0; b < lang[0].head.length; b++){

    $('[lang="d-'+b+'"]').html(lang[0].head[b]);    
}
    

</script>