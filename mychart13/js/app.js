$(document).ready(function(){
  $.ajax({
    url: "http://localhost/bootstrap8/mychart13/chartindex.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var rating = [];
      var variety = [];
      var quality = [];
      var serving = [];
      var presentation = [];
      var value = [];
      var speed = [];
      var courtesy = [];
      var knowledge = [];
      var location = [];
      var ambience = [];
      var cleanliness = [];

      for(var i in data) {
        rating.push(data[i].ratingid);
        variety.push(data[i].variety);
        quality.push(data[i].quality);
        serving.push(data[i].serving);
        presentation.push(data[i].presentation);
        value.push(data[i].value);
        speed.push(data[i].speed);
        courtesy.push(data[i].courtesy);
        knowledge.push(data[i].knowledge);
        location.push(data[i].location);
        ambience.push(data[i].ambience);
        cleanliness.push(data[i].cleanliness);
      }

      var chartdata = {
        labels: rating,
        datasets: [
          {
            label: 'Variety',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            //backgroundColor: 'blue',
            backgroundColor: 'rgba(0, 0, 128, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: variety
          },
          {
            label: 'Quality',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 255, 0, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: quality
          },
          {
            label: 'Serving',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(255, 0, 0, 0.6)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: serving
          },
          {
            label: 'Presentation',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 128, 128, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: presentation
          },
          {
            label: 'Value',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 0, 128, 0.5)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: value
          },
          {
            label: 'Speed',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(128, 0, 0, 0.9)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: speed
          },
          {
            label: 'Courtesy',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(0, 0, 255, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: courtesy
          },
          {
            label: 'Knowledge',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(128, 128, 0, 0.4)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: knowledge
          },
          {
            label: 'Location',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(255, 0, 0, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: location
          },
          {
            label: 'Ambience',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgba(192, 192, 192, 0.8)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: ambience
          },
          {
            label: 'Cleanliness',
            //backgroundColor: 'rgba(200, 200, 200, 0.75)',
            backgroundColor: 'rgb(0, 255, 0, 0.5)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: cleanliness
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
                text: 'RESTAURANT FEEDBACK CHART',
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
