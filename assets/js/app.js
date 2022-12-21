

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



// MODAL DU BOUTON POUR L'AJOUT DE REPAS //

const ShowModal = () => {

  if(modalWrap != null) {
    modalWrap.remove();
  }

  modalWrap = document.createElement("div");
  modalWrap.innerHTML = `<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
`

  document.body.appendChild(modalWrap);

  let modal = new bootstrap.Modal(modalWrap.querySelector('.modal'));

  modal.show();
}

