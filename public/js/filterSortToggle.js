const filterSortButton = document.querySelector(".collection__sort");

let showFilterSort = false;

filterSortButton.addEventListener("click", () => {});

function toggleStatus() {
    showFilterSort = !showFilterSort;
    return showFilterSort;
}
