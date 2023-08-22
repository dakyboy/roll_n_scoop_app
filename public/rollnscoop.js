const menu = document.getElementById('menu-container');
const openMenuButton = document.getElementById('open-menu-button');
const closeMenuButton = document.getElementById('close-menu-button');

// Reveal Menu
function openMenu() {
    menu.style.visibility = "visible";
    openMenuButton.style.zIndex = "-4";
    openMenuButton.style.height = "0";
    openMenuButton.style.width = "0";
    closeMenuButton.style.zIndex = "4";
    closeMenuButton.style.width = "32px";
    closeMenuButton.style.height = "32px";
    
}
// Hide Menu
function closeMenu() {
    menu.style.visibility = "hidden";
    openMenuButton.style.zIndex = "4";
    closeMenuButton.style.zIndex = "-4";
    openMenuButton.style.height = "32px";
    openMenuButton.style.width = "32px";
    closeMenuButton.style.height = "0";
    closeMenuButton.style.width = "0";
}