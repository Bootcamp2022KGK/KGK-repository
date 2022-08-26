const filterSortButton = document.querySelector(".collection__sort");
const filterSortDropdown = document.querySelector(
    ".collection__filter .options"
);

let showFilterSort = false;

filterSortButton.addEventListener("click", handleClick);

function handleClick() {
    toggleStatus();
    updateDropdown();
}

function updateDropdown() {
    if (showFilterSort) {
        filterSortDropdown.classList.remove("hidden");
    } else {
        filterSortDropdown.classList.add("hidden");
    }
}

function toggleStatus() {
    showFilterSort = !showFilterSort;
    return showFilterSort;
}
