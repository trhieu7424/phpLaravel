var exampleModal = document.getElementById('exampleModal');

exampleModal.addEventListener('show.bs.modal', function (event) {

    var button = event.relatedTarget;
  
    var info = button.getAttribute('data-bs-info');
    var modelBodyInput = exampleModal.querySelector('.category-info');
    modelBodyInput.innerHTML = info;

    var mer = button.getAttribute('data-bs-mer'); 
    var deleteButton = exampleModal.querySelector('#btn-del');
    deleteButton.href = mer;
});