const addToCartButtons = document.querySelectorAll(".card__button");

addToCartButtons.forEach((addToCartButton) => {
    addToCartButton.addEventListener("click", (e) => {
        e.preventDefault();
        const code = addToCartButton.getAttribute("data-code");
        console.log(code);
        let quantity = 1;

        let keys = Object.keys(localStorage);

        if (keys.includes(code)) {
            let currentQuantity = localStorage.getItem(code);
            const newQuantity = parseInt(currentQuantity) + 1;
            localStorage.setItem(code, newQuantity);
        } else {
            localStorage.setItem(code, quantity);
        }
    });
});
