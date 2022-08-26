const navElement = document.querySelector(".nav");
const menuIconButton = document.querySelector(".navigation_bar .menu_icon");
const hamburgerIcon = document.querySelector(
    ".navigation_bar .menu_icon .hamburger"
);
const timesIcon = document.querySelector(".navigation_bar .menu_icon .times");

let menuActive = false;
let mobileScreen = false;

window.addEventListener("load", () => {
    checkScreen();
    updateMenuIcons();
    updateNavElement();
});

window.onresize = () => {
    checkScreen();

    if (!mobileScreen) {
        menuActive = false;
    }

    updateMenuIcons();
    updateNavElement();
};

menuIconButton.addEventListener("click", toggleNavigation);

function checkScreen() {
    const screenWidth = window.innerWidth;

    if (screenWidth < 702) {
        mobileScreen = true;
    }

    if (screenWidth >= 702) {
        mobileScreen = false;
    }
}

function toggleNavigation() {
    toggleStatus();
    updateMenuIcons();
    updateNavElement();
}

function toggleStatus() {
    menuActive = !menuActive;
    return menuActive;
}

function updateNavElement() {
    if (menuActive && mobileScreen) {
        navElement.classList.remove("hidden");
    }

    if (!menuActive && mobileScreen) {
        navElement.classList.add("hidden");
    } else {
        navElement.classList.remove("hidden");
    }
}

function updateMenuIcons() {
    if (menuActive) {
        hamburgerIcon.classList.add("hidden");
        timesIcon.classList.remove("hidden");
    }
    if (!menuActive) {
        hamburgerIcon.classList.remove("hidden");
        timesIcon.classList.add("hidden");
    }
}
