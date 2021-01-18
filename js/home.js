var header = document.getElementById('header');
window.addEventListener('scroll', function(e) {
    let vhScrolled = window.scrollY < window.innerHeight;
    header.classList.toggle('h-screen', vhScrolled);
    header.classList.toggle('fixed', !vhScrolled);
});
