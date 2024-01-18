var options = {
    series: [{
    name: 'series1',
    data: [60, 30,60, 51,70,60]
  }, {
    name: 'series2',
    data: [30, 62, 51, 90, 43, 70]
  }],
    chart: {
    height: 350,
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth'
  },
  xaxis: {
    type: 'datetime',
    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z"]
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
  };

  var chart = new ApexCharts(document.querySelector("#main_graph"), options);
  chart.render()

  var line_graph={
       toolbar:{show:false},
       series:[{
          name:"Desktops",
          data:[20,60,30,80,20,70]
       }],
       chart:{
          height:150,
          type:'line',
          zoom:{enabled:false}
       },
       dataLabels:{
        enabled:false,
       },
       stroke:{
        curve:'smooth',
       },
       title:{
           text:'',
           align:'center',
       },
       grid:{
        row:{
          colors:['#ffffff','transparent'],
          opacity:0.1
        }
       },
       xaxis:{
         categories:['JAN','FEB','MAR','APR','MAY','JUN'],
         
       },
       yaxis:{show:false},
       grid:{
        yaxis:{
          lines:{show:false}
         }
       }

  };

  var charts = new ApexCharts(document.querySelector("#line_graph"), line_graph);
  charts.render()



  var baroptions = {
    series: [{
    name: 'Net Profit',
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      endingShape: 'rounded'
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
  },
  yaxis: {
    title: {
      text: '$ (thousands)'
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands"
      }
    }
  }
  };

  var barchart = new ApexCharts(document.querySelector("#bar_column_group"), baroptions);
  barchart.render();