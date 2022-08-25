const addToCartButton = document.querySelector(".card__button");

addToCartButton.addEventListener("click", (e) => {
    e.preventDefault();
    const code = addToCartButton.getAttribute("data-code");
    console.log(code);
});
