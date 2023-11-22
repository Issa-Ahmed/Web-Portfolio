import "./bootstrap";
const openMenu = document.getElementById("showMenu");
const hideMenu = document.getElementById("hideMenu");
const mobileNav = document.getElementById("mobileNav");

function toggleMenu() {
    hideMenu.classList.toggle("hidden");
    openMenu.classList.toggle("hidden");
    mobileNav.classList.toggle("translate-x-37");
    mobileNav.classList.contains("translate-x-37")
        ? document.body.classList.remove("overflow-y-hidden")
        : document.body.classList.add("overflow-y-hidden");
}

openMenu.addEventListener("click", toggleMenu);
hideMenu.addEventListener("click", toggleMenu);
