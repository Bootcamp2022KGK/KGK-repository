const navElement = document.querySelector(".nav");
const menuIconButton = document.querySelector(".navigation_bar .menu_icon");
const hamburgerIcon = document.querySelector(
    ".navigation_bar .menu_icon .hamburger"
);
const timesIcon = document.querySelector(".navigation_bar .menu_icon .times");

let toggle = false;

window.onresize = checkScreen;
menuIconButton.addEventListener("click", toggleNavigation);

function checkScreen() {
    const screenWidth = window.innerWidth;

    if (screenWidth < 702) {
        toggle
            ? navElement.classList.remove("hidden")
            : navElement.classList.add("hidden");
    }

    if (screenWidth >= 702) {
        navElement.classList.remove("hidden");
    }
}

function toggleNavigation() {
    toggleStatus();
    updateMenuIcons();
}

function toggleStatus() {
    toggle = !toggle;
    return toggle;
}

function updateMenuIcons() {
    if (toggle) {
        hamburgerIcon.classList.remove("hidden");
        timesIcon.classList.add("hidden");
    } else {
        hamburgerIcon.classList.add("hidden");
        timesIcon.classList.remove("hidden");
    }
}
