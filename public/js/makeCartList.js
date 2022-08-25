window.onload = makeCartList();

function makeCartList() {
    console.log("darbojas");

    for (i = 0; i < localStorage.length; i++) {
        key = localStorage.key(i);
        console.log(key);
    }
}
