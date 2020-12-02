let sideMenuShown=false;
document.getElementsByClassName("nav-menu-icon")[0].addEventListener("click", openNav)

function openNav() {
    document.getElementById("nav-side-menu").style.width = "250px";
}

function closeNav() {
    document.getElementById("nav-side-menu").style.width = "0";
}