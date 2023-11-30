"use strict";
let navIcon = document.getElementsByClassName("mobile-nav-icon");
let toplogoEl = document.getElementsByClassName("toplogo-img");
let navEl = document.getElementById('myTopnav')

window.addEventListener('resize', function navStyle() {
    if (window.innerWidth > 700) {
        navEl.style.display = "flex";
    } else {
        navEl.style.display = "none";
    }
});

navIcon[0].addEventListener("click", function openNav() {
    if (navEl.style.display === "none") {
        navEl.style.display = "flex";
    } else {
        navEl.style.display = "none";
    }
});

window.addEventListener('scroll', function hideLogo() {
    
    
    if (window.innerWidth < 700) {
        if (window.scrollY === 0) {
            toplogoEl[0].style.height = "5em";
        } else {
            
            toplogoEl[0].style.height = "2.5em";
        }
    }
});
