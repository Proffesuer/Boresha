const hamburger = document.querySelector(".humburger");
const navlinks  = document.querySelector(".nav-links");
const links = document.querySelector(".nav-links li");
hamburger.addEventListener('click',()=>{

    navlinks.classList.toggle("open");
    links.forEach(link =>{

link.classList.toggle("fade");

    });
    hamburger.classList.toggle(".toggle");

});



