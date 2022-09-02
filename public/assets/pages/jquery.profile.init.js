/**
 * Theme: Neko
 * Author: Mannatthemes
 * Profile Js
 */


//Doughnut
      
var ctx = document.getElementById("pro-doughnut").getContext('2d');

gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke1.addColorStop(0, '#00e795');
  gradientStroke1.addColorStop(1, '#0095e2');

gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke2.addColorStop(1, '#f6d365');
  gradientStroke2.addColorStop(0, '#ff7850');

gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke3.addColorStop(0, '#f56348');
  gradientStroke3.addColorStop(1, '#f81f8b');

  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Computers", "IPhones", "Tablates"],
      datasets: [{
        backgroundColor: [
          gradientStroke1,
          gradientStroke2,
          gradientStroke3,
        ],
        hoverBackgroundColor: [
          gradientStroke1,
          gradientStroke2,
          gradientStroke3,
        ],
        data: [22, 25, 25],
        borderWidth: [.8, .8, .8]
      }]
    },
    options: {
        cutoutPercentage: 75,
        legend: {
          position: 'bottom',
          display: false,
          labels: {
            boxWidth:12
          }
      },          
    }
  }); 

// bar
$('.peity-bar').each(function () {
    $(this).peity("bar", $(this).data());
});

$('.js-conveyor-example').jConveyorTicker({reverse_elm: true});

// File Uploead

$('.dropify').dropify();

var are1 = document.getElementById('are1'),
    arrat_area1 = are1.innerText.trim();

    var are2 = document.getElementById('are2'),
    arrat_area2 = are2.innerText.trim();

// d2_overview

/*var options = {
  chart: {
      height: 350,
      type: 'area',
  },
  dataLabels: {
      enabled: false
  },
  colors:['#00bcd4', '#7043c1'],
  stroke: {
      curve: 'smooth'
  },
  markers: {
    size: 3,
    opacity: 0.9,
    colors: ["#f93b7a"],
    strokeColor: "#fff",
    strokeWidth: 2,
    style: 'inverted', // full, hollow, inverted
    hover: {
      size: 5,
    }
  },
  series: [{
      name: 'Ебашим',
      data: [0]
  }, {
      name: 'Отказались',
      data: [0]
  },
  {
   name: 'Перезвоны',
      data: [0]
  
  }, 
  {
   name: 'Встречи',
      data: [0]
  
  }, 
  {
   name: 'Попробыввть позже',
      data: [0]
  
  }, 
  {
   name: 'Однажды',
      data: [0]
  
  },  
  {
  name: 'Ждем',
      data: [0]
  }

  ],


  xaxis: {
      type: 'month',
      categories: [],                
  },
  tooltip: {
     theme: "dark",
      x: {
          format: 'dd/MM/yy HH:mm'
      },
  }
}
 var param1 = document.querySelector(".start").innerText.split(' ');
 var param2 = document.querySelector(".refused").innerText.split(' ');
 var param3 = document.querySelector(".recall").innerText.split(' ');
 var param4 = document.querySelector(".meeting").innerText.split(' ');
 var param5 = document.querySelector(".trying").innerText.split(' ');
 var param6 = document.querySelector(".later").innerText.split(' ');
 var param7 = document.querySelector(".waiting").innerText.split(' ');
 var param8 = document.querySelector(".day_count").innerText.split(' ');

for(i = 0; i < param8; i++){
options.series[0].data[i] = Number(param1[1]);
console.log(options.series[0].data[i]);
options.series[1].data[i] = Number(param2[i]);
options.series[2].data[i] = Number(param3[i]);
options.series[3].data[i] = Number(param4[i]);
options.series[4].data[i] = Number(param5[i]);
options.series[5].data[i] = Number(param6[i]);
options.series[6].data[i] = Number(param7[i]);

}*/
var options = {
  chart: {
      height: 350,
      type: 'area',
  },
  dataLabels: {
      enabled: false
  },
  colors:['#00bcd4', '#7043c1'],
  stroke: {
      curve: 'smooth'
  },
  markers: {
    size: 3,
    opacity: 0.9,
    colors: ["#f93b7a"],
    strokeColor: "#fff",
    strokeWidth: 2,
    style: 'inverted', // full, hollow, inverted
    hover: {
      size: 5,
    }
  },
  series: [{
      name: 'Ебашим',
      data: []
  }, {
      name: 'Отказались',
      data: []
  }, {
      name: 'Перезвоны',
      data: []
  }, {
       name: 'Встречи',
      data: []
  }, {
      name: 'Попробыввть позже',
      data: []
  }, {
      name: 'Однажды',
      data: []
  }, {
      name: 'Ждем',
      data: []
  }],

  xaxis: {
      type: 'month',
      categories: [],                
  },
  tooltip: {
      theme: "dark",
      x: {
          format: 'dd/MM/yy HH:mm'
      },
  }
}

 var param1 = document.querySelector(".start").innerText.split(' ');
 var param2 = document.querySelector(".refused").innerText.split(' ');
 var param3 = document.querySelector(".recall").innerText.split(' ');
 var param4 = document.querySelector(".meeting").innerText.split(' ');
 var param5 = document.querySelector(".trying").innerText.split(' ');
 var param6 = document.querySelector(".later").innerText.split(' ');
 var param7 = document.querySelector(".waiting").innerText.split(' ');
 var param8 = document.querySelector(".day_count").innerText.split(' ');
var param9 = document.querySelector(".mouth_name").innerText.split(' ');

for(i = 0; i < param8.length-2; i++){
  
  options.xaxis.categories[i] = i;
options.series[0].data[i] = Number(param1[i+1]);

options.series[1].data[i] = Number(param2[i+1]);
options.series[2].data[i] = Number(param3[i+1]);
options.series[3].data[i] = Number(param4[i+1]);
options.series[4].data[i] = Number(param5[i+1]);
options.series[5].data[i] = Number(param6[i+1]);
options.series[6].data[i] = Number(param7[i+1]);
options.xaxis.categories[i] = i+1 + param9;

}

var chart = new ApexCharts(
  document.querySelector("#d2_overview"),
  options
);

chart.render();

var options = {
  chart: {
      height: 350,
      type: 'area',
  },
  dataLabels: {
      enabled: false
  },
  colors:['#00bcd4', '#7043c1'],
  stroke: {
      curve: 'smooth'
  },
  markers: {
    size: 3,
    opacity: 0.9,
    colors: ["#f93b7a"],
    strokeColor: "#fff",
    strokeWidth: 2,
    style: 'inverted', // full, hollow, inverted
    hover: {
      size: 5,
    }
  },
  series: [{
      name: '1',
      data: [3, 30, 10, 10, 22, 12, 5, 15, 5, 25, 5, 7]
  }, {
      name: '2',
      data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
  }, {
      name: '3',
      data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
  }, {
      name: '4',
      data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
  }, {
      name: '5',
      data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
  }, {
      name: '6',
      data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
  }, {
      name: '7',
      data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
  }
  ],

  xaxis: {
      type: 'month',
      categories: [],                
  },
  tooltip: {
      x: {
          format: 'dd/MM/yy HH:mm'
      },
  }
}



//payment-widget


var options = {
  chart: {
      height: 250,
      type: 'donut',
  }, 
  series: [1],
  stroke: {
    colors: undefined,
},
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: -13
  },
  labels: [ "Ебашим", "Отказались", "Перезвоны", "Встречи", "Попробыввть позже", "Однажды", "Ждем"],
  colors: ["#00FF00", "#FF0000", "#F6F60B", "#E366E8", "#669AE8", "#0B69F6", "#054EBC"],
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],
  
}
//"ЕБашим", "Отказались", "Перезвоны", "Встречи", "Попробыввть позже", "Однажды", "Ждем"
//options123.series[0] = 190;
 var param0 = document.querySelector(".call_mouth_one").innerText.split(' ');

for(i = 0; i < 7; i++){


options.series[i] = Number(param0[i]);

}


var chart = new ApexCharts(
  document.querySelector("#d1_payment"),
  options
);

chart.render();