document.addEventListener('DOMContentLoaded', function() {
    // modals triggers
    var modalTriggers = document.getElementsByClassName('modal-trigger');
    for(let index in modalTriggers) {
        modalTriggers[index].addEventListener('click', function(e) {
            var targetId = e.target.dataset.target;
            document.getElementById(targetId).classList.toggle('hidden');
        });
    }
    // close modal
    document.addEventListener('click', function(e) {
        console.log(e);
        if(e.target.classList.contains('modal-wrapper')) {
            e.target.classList.toggle('hidden');       
        }
    });
});
