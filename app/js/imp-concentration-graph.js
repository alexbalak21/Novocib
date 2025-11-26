const ctx = document.getElementById("impChart").getContext("2d")

const dataPoints = [
  {
    x: 1.33,
    y: 1.26,
  },
  {
    x: 1.95,
    y: 1.9,
  },
  {
    x: 2.3,
    y: 2.13,
  },
  {
    x: 0.69,
    y: 0.58,
  },
  {
    x: 2.91,
    y: 3.0,
  },
  {
    x: 2.11,
    y: 2.11,
  },
  {
    x: 0.9,
    y: 0.84,
  },
  {
    x: 1.64,
    y: 1.56,
  },
  {
    x: 2.13,
    y: 2.36,
  },
  {
    x: 3.94,
    y: 4.16,
  },
]

const regressionLabelPlugin = {
  id: "regressionLabel",
  beforeDraw(chart) {
    const {
      ctx,
      chartArea: { top, right },
    } = chart
    ctx.save()
    ctx.font = "14px Arial"
    ctx.fillStyle = "black"
    ctx.textAlign = "right"
    ctx.fillText("y = 1.01166x", right - 10, top + 20)
    ctx.fillText("R² = 0.9968", right - 10, top + 40)
    ctx.restore()
  },
}

new Chart(ctx, {
  type: "scatter",
  data: {
    datasets: [
      {
        label: "IMP Concentration (g/kg)",
        data: dataPoints,
        backgroundColor: "rgb(55, 113, 200)",
        borderColor: "rgb(55, 113, 200)",
        pointRadius: 5,
        trendlineLinear: {
          style: "rgba(255,105,180,0.8)",
          width: 2,
          projection: true,
          lineStyle: "dotted",
          label: "y = 1.0166x",
        },
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      },
    },
    scales: {
      x: {
        type: "linear",
        bounds: "ticks",
        min: 0.0,
        max: 5.0,
        title: {
          display: true,
          text: "IMP (g/kg) by HPLC",
        },
        ticks: {
          stepSize: 1.0,
          callback: function (value) {
            return value.toFixed(2)
          },
        },
      },
      y: {
        type: "linear",
        bounds: "ticks",
        min: 0.0,
        max: 4.5,
        title: {
          display: true,
          text: "IMP (g/kg) by Enzymatic Kit",
        },
      },
    },
  },
  plugins: [regressionLabelPlugin],
})
