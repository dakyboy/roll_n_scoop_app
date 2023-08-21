const menu = document.getElementById('menu-container');

// Reveal Menu
function openMenu() {
    menu.style.visibility = "visible";
    openMenuButton.style.zIndex = "-4";
    openMenuButton.style.height = "0";
    openMenuButton.style.width = "0";
    closeMenuButton.style.zIndex = "4";
    closeMenuButton.style.width = "32px";
    closeMenuButton.style.height = "32px"
    
}
// Hide Menu