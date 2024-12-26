
$(function () {
  "use strict";


// Chart 1 
var options = {
  series: [{
    name: "Net Sales",
    data: [4, 10, 25, 12, 25, 18, 40, 20, 15, 30, 22, 25, 10, 16, 28, 35, 18, 25, 30, 12, 25, 10, 15, 28, 30, 20, 12, 25, 18, 32]
  }],
  chart: {
    width: 150,
    height: 55,
    type: 'area',
    sparkline: {
      enabled: true
    },
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 1.7,
    curve: 'smooth'
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'dark',
      gradientToColors: ['#0d6efd'],
      shadeIntensity: 1,
      type: 'vertical',
      opacityFrom: 0.8,
      opacityTo: 0.1,
      stops: [0, 100, 100, 100]
    },
  },
  colors: ["#0d6efd"],
  tooltip: {
    theme: "dark",
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function () {
          return ""
        }
      }
    },
    marker: {
      show: false
    }
  },
  xaxis: {
    categories: Array.from({ length: 30 }, (_, i) => `Day ${i + 1}`) 
  }
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();





  // chart 2

  var options = {
    series: [{
      name: "Net Sales",
      data: [0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 6, 23]
    }],
    chart: {
      width: 150,
      height: 55,
      type: 'area',
      sparkline: {
        enabled: !0
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 1.7,
      curve: 'smooth'
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        gradientToColors: ['#02c27a'],
        shadeIntensity: 1,
        type: 'vertical',
        opacityFrom: 0.8,
        opacityTo: 0.1,
        stops: [0, 100, 100, 100]
      },
    },

    colors: ["#02c27a"],
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: !1
      },
      x: {
        show: !1
      },
      y: {
        title: {
          formatter: function (e) {
            return ""
          }
        }
      },
      marker: {
        show: !1
      }
    },
    xaxis: {
      categories: Array.from({ length: 30 }, (_, i) => `Day ${i + 1}`) 
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();



  // chart 3

  var options = {
    series: [{
      name: "Net Sales",
      data: [0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 6, 23]
    }],
    chart: {
      width: 150,
      height: 55,
      type: 'area',
      sparkline: {
        enabled: !0
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 1.7,
      curve: 'smooth'
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        gradientToColors: ['#fc185a'],
        shadeIntensity: 1,
        type: 'vertical',
        opacityFrom: 0.8,
        opacityTo: 0.1,
        stops: [0, 100, 100, 100]
      },
    },

    colors: ["#fc185a"],
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: !1
      },
      x: {
        show: !1
      },
      y: {
        title: {
          formatter: function (e) {
            return ""
          }
        }
      },
      marker: {
        show: !1
      }
    },
    xaxis: {
      categories: Array.from({ length: 30 }, (_, i) => `Day ${i + 1}`) 
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);
  chart.render();



  // chart 4

  var options = {
    series: [{
      name: "Net Sales",
      data: [0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 0, 8, 19, 12, 25, 5, 8, 6, 23]
    }],
    chart: {
      width: 150,
      height: 55,
      type: 'area',
      sparkline: {
        enabled: !0
      },
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 1.7,
      curve: 'smooth'
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        gradientToColors: ['#fd7e14'],
        shadeIntensity: 1,
        type: 'vertical',
        opacityFrom: 0.8,
        opacityTo: 0.1,
        stops: [0, 100, 100, 100]
      },
    },

    colors: ["#fd7e14"],
    tooltip: {
      theme: "dark",
      fixed: {
        enabled: !1
      },
      x: {
        show: !1
      },
      y: {
        title: {
          formatter: function (e) {
            return ""
          }
        }
      },
      marker: {
        show: !1
      }
    },
    xaxis: {
      categories: Array.from({ length: 30 }, (_, i) => `Day ${i + 1}`) 
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart4"), options);
  chart.render();




  // chart 5

  var options = {
    series: [{
      name: "Desktops",
      data: [20, 50, 35, 65, 49, 82, 69, 100, 60]
  }],
    chart: {
    foreColor: "#afb39b",
    height: 300,
    type: 'area',
    zoom: {
      enabled: false
    },
    toolbar: {
        show: !1,
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 3,
    curve: 'smooth'
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'dark',
      gradientToColors: ['#e8ff14'],
      shadeIntensity: 1,
      type: 'vertical',
      opacityFrom: 0.8,
      opacityTo: 0.1,
      stops: [0, 100, 100, 100]
    },
  },
  colors: ["#e8ff14"],
  grid: {
    show: true,
    borderColor: 'rgba(0, 0, 0, 0.15)',
    strokeDashArray: 4,
  },
  tooltip: {
    theme: "dark",
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart5"), options);
  chart.render();





  // chart 6

  var options = {
    series: [12, 6, 9, 20, 15, 18],
    chart: {
        foreColor: "#9ba7b2",
        height: 350,
        type: 'pie',
    },
    labels: ['Service 1', 'Service 2', 'Service 3', 'Service 4', 'Service 5', 'Service 6'],
    legend: {
  position: "bottom",
  show: !0
},
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#chart6"), options);
chart.render();





});