$(document).ready(function(){
  $.ajax({
    url: "http://localhost/bootstrap8/mychart15/chartindex.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var rating = [];
      var staffcourtesy = [];
      var staffspeed = [];
      var staffknowledge = [];
      var quality = [];
      var value = [];
      var variety = [];
      var location = [];
      var organization = [];
      var accessibility = [];

      for(var i in data) {
        rating.push(data[i].ratingid);
        staffcourtesy.push(data[i].staffcourtesy);
        staffspeed.push(data[i].staffspeed);
        staffknowledge.push(data[i].staffknowledge);
        quality.push(data[i].quality);
        value.push(data[i].value);
        variety.push(data[i].variety);
        location.push(data[i].location);
        organization.push(data[i].organization);
        accessibility.push(data[i].accessibility);
      }

      var chartdata = {
        labels: rating,
        datasets: [
          {
            label: 'Staff Courtesy',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            //backgroundColor: 'blue',
            backgroundColor: 'rgba(0, 0, 128, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: staffcourtesy
          },
          {
            label: 'Staff Speed',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 255, 0, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: staffspeed
          },
          {
            label: 'Staff knowledge',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(255, 0, 0, 0.6)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: staffknowledge
          },
          {
            label: 'Quality',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 128, 128, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: quality
          },
          {
            label: 'Value for Money',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 0, 128, 0.5)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: value
          },
          {
            label: 'Variety',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(128, 0, 0, 0.9)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: variety
          },
          {
            label: 'Location',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 0, 255, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: location
          },
          {
            label: 'Organization',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(128, 128, 0, 0.4)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: organization
          },
          {
            label: 'Accessibility',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(255, 0, 0, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: accessibility
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        options: {
          barValueSpacing: 20,
          title: {
                display: true,
                text: 'RETAIL STORE FEEDBACK CHART',
                fontSize: 20
          },
          scales: {
            xAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Rating options'
              }
            }],
            yAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Amount'
              },
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
