
<center><h1>Dashboard Purchase</h1></center>

<div class="uniq-table-wrapped">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <td colspan="8"><h3><i class="fa fa-table" aria-hidden="true"></i> 10/101 Overdue Purchase Invoices</h3></td>          
        </thead>
        <thead>
        	<tr>
	            <td>#</td>
	            <td><center>Date</center></td>
	            <td><center>Due Date</center></td>
	            <td><center>Supllier</center></td>
	            <td><center>Curency</center></td>
	            <td><center>Total</center></td>
	            <td><center>Remainder</center></td>
	            <td><center>Days</center></td>
            </tr>
        </thead>
        <tbody>
            <tr>
		        <td>01</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>

            <tr>
		        <td>02</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>

            <tr>
		        <td>03</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>
        </tbody>
    </table>
</div>

<br />

<div class="uniq-table-wrapped" style="width: 50%; float: left;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <td colspan="8"><h3><i class="fa fa-table" aria-hidden="true"></i> Top 10 Suppliers</h3></td>          
        </thead>
        <thead>
        	<tr>
	            <td>#</td>
	            <td><center>Date</center></td>
	            <td><center>Due Date</center></td>
	            <td><center>Supllier</center></td>
	            <td><center>Curency</center></td>
	            <td><center>Total</center></td>
	            <td><center>Remainder</center></td>
	            <td><center>Days</center></td>
            </tr>
        </thead>
        <tbody>
            <tr>
		        <td>01</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>

            <tr>
		        <td>02</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>

            <tr>
		        <td>03</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>
        </tbody>
    </table>
</div>

<div  style="width: 45%; float: right; border-spacing: 2;">
        <canvas id="bar-chart"></canvas>
</div>

<br />
<div style="width: 45%; float: left;">
        <canvas id="line-chart"></canvas>
</div>

<div class="uniq-table-wrapped" style="widows: 50%; float: right;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <td colspan="8"><h3><i class="fa fa-table" aria-hidden="true"></i> Top 10 Suppliers</h3></td>          
        </thead>
        <thead>
        	<tr>
	            <td>#</td>
	            <td><center>Date</center></td>
	            <td><center>Due Date</center></td>
	            <td><center>Supllier</center></td>
	            <td><center>Curency</center></td>
	            <td><center>Total</center></td>
	            <td><center>Remainder</center></td>
	            <td><center>Days</center></td>
            </tr>
        </thead>
        <tbody>
            <tr>
		        <td>01</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>

            <tr>
		        <td>02</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>

            <tr>
		        <td>03</td>
		        <td>31-12-2014</td>
		        <td>31-12-2014</td>
		        <td>60 S1 Company</td>
		        <td>MYR</td>
		        <td>900.00</td>
		        <td>900.00</td>
		        <td>974</td>
            </tr>
        </tbody>
    </table>
</div>


<script type="text/javascript">
	new Chart(document.getElementById("bar-chart"), {
    type: 'horizontalBar',
    data: {
      labels: ["28092016", "Jess", "QQ USA CORPORATION", "Apple 1234", "Y1 Company"],
      datasets: [
        {
          label: "Top 10 Suppliers",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [195634.00,140708.00,126000.00,121150.00, 50040.00]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Top 10 Suppliers'
      }
    }
});

	new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['2016-01-08','2016-03-31','2016-04-11','2016-09-29','2016-10-06','2016-10-19','2016-11-22','2017-06-01'],
    datasets: [{ 
        data: [-17072.99, -17845.00, -10666.00, -12750.00, -6360.00, -81960.00, -11105.60, -1060.00],
        label: "Gross   Sales",
        borderColor: "#3e95cd",
        fill: false
      },
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }, 
    elements: {
        line: {
            tension: 0.000001
        }
    },
  }
});
</script>

