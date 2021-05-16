/* to make the humburger list */
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link')
navToggle.addEventListener('click',() => {
    document.body.classList.toggle('nav-open');

});
/* to make the humburger disaper when clicked */
navLinks.forEach(link => {
    link.addEventListener('click',() => {
        document.body.classList.remove('nav-open');
    })
})
