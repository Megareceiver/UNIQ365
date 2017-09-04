
<h3> 10/145 Overdue Sales Invoices</h3>
<div class="uniq-table-wrapped" id="salesTabel">
   
</div>
</br>
</br>

<div style="padding: 5; width: 45%; float: left;">
    <div class="uniq-table-wrapped" id="Customer">
       
    </div>
</div>

<div style="padding: 5; width: 45%; float: right">
    <canvas id="chart"></canvas>
</div>

</br>
</br>

<div style="padding: 5; width: 45%; float: left;">
    <canvas id="chartLine"></canvas>
   
</div>

<div style="padding: 5; width: 45%; float: right">
     <div class="uniq-table-wrapped" id="Sales">
       
    </div>
</div>

   <!--  <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/Chart.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
/*tabel data*/
var dataTabel = {
    head : ["No", "Date", "Due date", "Customer", "Currency", "Total", "Remainder", "Days"],
    body : [
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"],
        ["246", "11-11-2014", "11-11-2014", "104 Y1 Company", "MYR", "3,333.00", "3,333.00", "1028"]
    ]
};
var Customer = {
    head : ['Customer','Amount'],
    body : [
        ['28092016', '4,288.00'],
        ['C1000', '1,445.00'],
        ['Y1 Company', '4'],
    ]
};

var Sales = {
    head : ['Week End','Gross Sales'],
    body : [
        ['2016-01-07', '200.00'],
        ['2016-03-16', '1,996.81'],
        ['2016-03-31', '8,100.00'],
        ['2016-04-04', '4,000.00'],
        ['2016-01-11', '1,060.00'],
        ['2016-01-19', '21,735.48'],
        ['2016-09-01', '930.00'],
        ['2016-01-28', '6,898.20'],
        ['2016-10-06', '4,450.00'],
        ['22016-11-01','5,069.98']
   
    ]
};

console.log(Customer.body[2][0]);
var tabel =
    '<table cellpadding="0" cellspacing="0">'+
        '<thead>'+
        '<tr>';
        for(var a =0; a < dataTabel.head.length; a++){
            tabel = tabel + '<td>'+dataTabel.head[a]+'</td>';
        }
        tabel = tabel +
        '</tr>'+
        '</thead>'+
        '<tbody>';
        for(var b = 0; b < dataTabel.body.length; b++){
            tabel = tabel + '<tr>';
            for (var c = 0; c < dataTabel.body[b].length; c++){
                tabel = tabel + '<td>'+ dataTabel.body[b][c]; + '</td>';
            }
            tabel = tabel + '</tr>';
        }  
        tabel = tabel +
        '</tbody>'+
    '</table>';
$("#salesTabel").append(tabel);

var tabelCustomer =
    '<table cellpadding="0" cellspacing="0">'+
        '<thead>'+
        '<tr>';
        for(var a =0; a < Customer.head.length; a++){
            tabelCustomer = tabelCustomer + '<td>'+Customer.head[a]+'</td>';
        }
        tabelCustomer = tabelCustomer +
        '</tr>'+
        '</thead>'+
        '<tbody>';
        for(var b = 0; b < Customer.body.length; b++){
            tabelCustomer = tabelCustomer + '<tr>';
            for (var c = 0; c < Customer.body[b].length; c++){
                tabelCustomer = tabelCustomer + '<td>'+ Customer.body[b][c]; + '</td>';
            }
            tabelCustomer = tabelCustomer + '</tr>';
        }  
        tabelCustomer = tabelCustomer +
        '</tbody>'+
    '</table>';
$("#Customer").append(tabelCustomer);

var tabelSales =
    '<table cellpadding="0" cellspacing="0">'+
        '<thead>'+
        '<tr>';
        for(var a =0; a < Sales.head.length; a++){
            tabelSales = tabelSales + '<td>'+Sales.head[a]+'</td>';
        }
        tabelSales = tabelSales +
        '</tr>'+
        '</thead>'+
        '<tbody>';
        for(var b = 0; b < Sales.body.length; b++){
            tabelSales = tabelSales + '<tr>';
            for (var c = 0; c < Sales.body[b].length; c++){
                tabelSales = tabelSales + '<td>'+ Sales.body[b][c]; + '</td>';
            }
            tabelSales = tabelSales + '</tr>';
        }  
        tabelSales = tabelSales +
        '</tbody>'+
    '</table>';
$("#Sales").append(tabelSales);

/*chart script*/
new Chart(document.getElementById("chart"), {
    type: 'bar',
    data: {
      labels: ['28092016','C1000','Y1 Company'],
      datasets: [{
        label: "Amount",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: ['4.288','1.445','4']
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Customer'
      }
    }
});

new Chart(document.getElementById("chartLine"), {
   type: 'line',
    data: {
      labels: ['28092016','C1000','Y1 Company'],
      datasets: [{
        label: "Amount",
        backgroundColor: ["#3e95cd"],
        data: ['4.288','1.445','4'],
        fill: false
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Customer'
      }
    }
});
</script>