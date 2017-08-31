<div class="container">
    <h2>This is a sample — Line Chart</h2>
  
</div>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <!--  <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/Chart.js"></script> -->
   <div class="chart-container" style="position: relative; height:40vh; width:30vw">
    <canvas id="chart"></canvas>
</div>
<script>
new Chart(document.getElementById("chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>