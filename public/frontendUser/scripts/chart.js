$(function () {
  var donutChartCanvas = $("#donutChart").get(0).getContext("2d");
  var donutData = {
    labels: ["2015", "2016"],
    datasets: [
      {
        data: [10, 50],
        backgroundColor: [
          "#f56954",
          "#00a65a",
          "#f39c12",
          "#00c0ef",
          "#3c8dbc",
          "#d2d6de",
        ],
      },
    ],
  };
  var donutOptions = {
    maintainAspectRatio: false,
    responsive: true,
  };
  var donutChart = new Chart(donutChartCanvas, {
    type: "doughnut",
    data: donutData,
    options: donutOptions,
  });
});
