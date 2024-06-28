window.addEventListener("scroll", function(){
    var nav = document.querySelector(".desktop-navigation-menu");
    nav.classList.toggle("sticky", window.scrollY > 0);
})