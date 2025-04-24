// var exampleModal = document.getElementById('exampleModal');

// exampleModal.addEventListener('show.bs.modal', function (event) {

//     var button = event.relatedTarget;
  
//     var info = button.getAttribute('data-bs-info');
//     var modelBodyInput = exampleModal.querySelector('.category-info');
//     modelBodyInput.innerHTML = info;

//     var mer = button.getAttribute('data-bs-mer'); 
//     var deleteButton = exampleModal.querySelector('#btn-del');
//     deleteButton.href = mer;
// });
document.addEventListener('DOMContentLoaded', function() {
    var deleteModal = document.getElementById('deleteModal');
    
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var href = button.getAttribute('data-href');
            
            var modalInfo = deleteModal.querySelector('.info');
            modalInfo.textContent = id + ' - ' + name;
            
            var deleteBtn = deleteModal.querySelector('#btn-del');
            deleteBtn.setAttribute('href', href);
        });
    } else {
        console.error('Không tìm thấy modal với ID "deleteModal"');
    }
});