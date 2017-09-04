<div class="uniq-table-wrapped" style="height:100%; px;width:49%;float:left;margin-bottom: 10px;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <td colspan="2"><h3><i class="fa fa-table" aria-hidden="true"></i>Return</h3></td>          
        </thead>
        <thead>
        </thead>
        <tbody>
            <tr>
		        <td style="background-color: #f2f1f1;">Assets</td>
		        <td>1,317,203.56</td>
            </tr>

            <tr>
		        <td style="background-color: #f2f1f1;">Liabelities</td>
		        <td>-5,241,630.36</td>
            </tr>

            <tr>
		        <td style="background-color: #f2f1f1;">Income</td>
		        <td>-494,740.81</td>
            </tr>

            <tr>
		        <td style="background-color: #f2f1f1;">Cost</td>
		        <td>4,720,452.49</td>
            </tr>

            <tr>
		        <td style="background-color: #f2f1f1;">Calculated Return</td>
		        <td>301,284.88</td>
            </tr>
        </tbody>
    </table>
</div>


<div class="uniq-table-wrapped" style="position:relative;height:100%; px;width:49%;float:right;margin-bottom: 10px;">
        <canvas id="bar-chart"></canvas>
</div>

<div class="uniq-table-wrapped" style="height:100%; px;width:49%;float:left;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <td colspan="2"><h3><i class="fa fa-table" aria-hidden="true"></i>Bank Balance</h3></td>          
        </thead>
        <thead>
        		<th>Account</th>
        		<th>Balance</th>
        </thead>
        <tbody>
            <tr>
		        <td>Assets</td>
		        <td>1,317,203.56</td>
            </tr>

            <tr>
		        <td>Liabelities</td>
		        <td>-5,241,630.36</td>
            </tr>

            <tr>
		        <td>Income</td>
		        <td>-494,740.81</td>
            </tr>

            <tr>
		        <td>Cost</td>
		        <td>4,720,452.49</td>
            </tr>

            <tr>
		        <td>Calculated Return</td>
		        <td>301,284.88</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="uniq-table-wrapped" style="position:relative;height:100%; px;width:49%;float:right;">
        <canvas id="circle-chart"></canvas>
</div>

<script type="text/javascript">
	new Chart(document.getElementById("bar-chart"), {
    type: 'pie',
    data: {
      labels: ["Income", "Costs", "Return"],
      datasets: [
        {
          label: ")",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
          data: [195634.00,140708.00,126000.00]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Return'
      }
    }
});

	new Chart(document.getElementById("circle-chart"), {
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
