const submitBtn = document.querySelector('.btn');
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

submitBtn.addEventListener('mouseenter', function() {
    this.textContent = 'All done? 👍';
});

submitBtn.addEventListener('mouseleave', function() {
    this.textContent = 'Let\'s get started!';
});

if (navToggle && navMenu) {
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
        navToggle.classList.toggle('active');
        if (navToggle.classList.contains('active')) {
            navToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>';
        } else {
            navToggle.innerHTML = '<span></span><span></span><span></span>';
        }
    });
}