<div class="uniq-table-wrapped" style="height:100%; px;width:49%;float:left;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <td colspan="3"><h3><i class="fa fa-table" aria-hidden="true"></i> Top 10 Items</h3></td>          
        </thead>
        <thead>
        	<tr>
	            <th style="width:350px;"><center>Item</center></th>
	            <th><center>Amount</center></th>
	            <th><center>Quantity</center></th>
            </tr>
        </thead>
        <tbody>
            <tr>
		        <td>ttt Products</td>
		        <td>3,633.00</td>
		        <td>4</td>
            </tr>

            <tr>
		        <td>PINECOM 10" ANDROID TABLET PC</td>
		        <td>1,000.00</td>
		        <td>1</td>
            </tr>

            <tr>
		        <td>Item PP</td>
		        <td>1,000.00</td>
		        <td>1</td>
            </tr>
        </tbody>
    </table>
</div>


<div class="uniq-table-wrapped" style="height:100%; px;width:49%;float:right;">
        <canvas id="bar-chart"></canvas>
</div>


<script type="text/javascript">
	new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["28092016", "Jess", "QQ USA CORPORATION", "Apple 1234", "Y1 Company"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [195634.00,140708.00,126000.00,121150.00, 50040.00]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Top 10 Items'
      }
    }
});

	new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Europe",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "Latin America",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "North America",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});
</script>