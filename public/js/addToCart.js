const addToCartButtons = document.querySelectorAll(".card__button");

addToCartButtons.forEach((addToCartButton) => {
    addToCartButton.addEventListener("click", (e) => {
        e.preventDefault();
        const code = addToCartButton.getAttribute("data-code");
        console.log(code);
    });
});
