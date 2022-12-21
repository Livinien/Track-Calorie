

// GRAPHIQUE //


const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Big Mac', 'Pains au chocolat', 'Pâtes Carbonara'],
      datasets: [{
        label: '',
        data: [400, 250, 1200],
        borderWidth: false,
        hoverOffset: 20,
        backgroundColor: [
            "#FF5E5B",
            "#00aeff",
            "#ffdc00",
            "#00CECB",
            "#ffdc00",
          ],
      }]
    },
    options: {
        responsive: true,
        cutout: "90%",
        plugins: {
            legend: false
        },
        layout: {
            padding: 20
        }
    }
});


