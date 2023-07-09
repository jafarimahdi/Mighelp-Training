// function for toggle class

let selector= function(element){
    return document.querySelector(element);
}

let menuToggle = selector('.menu-toggle');
let body = selector('body');

menuToggle.addEventListener('click', function(){
    body.classList.toggle('open');
})

//   ScrollReval() class for the scroll animation
window.sr = ScrollReveal();

sr.reveal('.animate-left', {
    origin:'left',
    duration:1000,
    distance:'25rem',
    delay:300
});

sr.reveal('.animate-right',{
    origin:'right',
    duration:1000,
    distance:'25rem',
    delay:600
});
sr.reveal('.animate-top',{
    origin:'top',
    duration:1000,
    distance:'25rem',
    delay:600
});
sr.reveal('.animate-bottom',{
    origin:'bottom',
    duration:1000,
    distance:'25rem',
    delay:600
});
