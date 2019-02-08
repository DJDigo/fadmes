<div class="content">
  <!-- <div class="content-wrapper">
    <div class="content-title">
      <span>Dashboard</span>
    </div>
  </div> -->
  <div class="content-title-dashboard">
    <span>Dashboard</span>
  </div>

  <div class="dashboard-list-horizontal">
    <div class="dashboard-list dashboard-student">
      <i class="fa fa-users dashboard-icon" aria-hidden="true"></i>
      <span class="dashboard-count">2</span>
      <span class="dashboard-text">Number of Student</span>
    </div>
    <div class="dashboard-list dashboard-teacher">
      <i class="fa fa-users dashboard-icon" aria-hidden="true"></i>
      <span class="dashboard-count">2</span>
      <span class="dashboard-text">Number of Teacher</span>
    </div>
    <div class="dashboard-list dashboard-reviews">
      <i class="fa fa-users dashboard-icon" aria-hidden="true"></i>
      <span class="dashboard-count">2</span>
      <span class="dashboard-text">Reviews</span>
    </div>
  </div>

  <div class="dashboard-list-chart">
    <canvas id="bar-graph"></canvas>
  </div>
  
  <div class="dashboard-list-vertical">
    <div class="dashboard-list dashboard-transferees">
      <i class="fa fa-users dashboard-icon" aria-hidden="true"></i>
      <span class="dashboard-count">2</span>
      <span class="dashboard-text">Number of Transferees</span>
    </div>

    <div class="dashboard-list dashboard-dropout">
      <i class="fa fa-users dashboard-icon" aria-hidden="true"></i>
      <span class="dashboard-count">2</span>
      <span class="dashboard-text">Number of Dropout</span>
    </div>
  </div>
</div>

<script>
  $(function() {
    window.chartColors = {
        red: 'rgb(255, 0, 0)',
        green: 'rgb(0, 163, 51)',
        blue: 'rgb(54, 162, 235)',
        yellow: 'rgb(255, 255, 1)',
        violet: 'rgb(238, 130, 238)',
    };

    var barChartData = {
			labels: ['0', '1', '2', '3', '4'],
			datasets: [{
				label: ' ',
				backgroundColor: [
          window.chartColors.red, 
          window.chartColors.green,
          window.chartColors.blue,
          window.chartColors.yellow,
          window.chartColors.violet
        ],
				borderWidth: 1,
				data: [20, 40, 60, 80, 100],
			}]
		};
    
    var config = {
      type: 'bar',
      data: barChartData,
      options: {
        scales: {
          yAxes: [{
            display: true,
            stacked: true,
            ticks: {
              min: 10, // minimum value
              max: 100, // maximum value
              callback: function (value) {
                return (value / this.max * 100).toFixed(0) + '%'; // convert it to percentage
              },
            },
          }]
        },
        responsive: true,
        legend: {
          display: false
        },
      }
    }

    var ctx = document.getElementById('bar-graph').getContext('2d');
    window.myPie = new Chart(ctx, config);
  })
</script>