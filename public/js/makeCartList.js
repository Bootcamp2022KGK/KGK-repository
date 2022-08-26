const cartProductTemplate = document.querySelector(".cartproduct.hidden");
const cartBoxElement = document.querySelector(".cart__box");

const checkoutButton = document.querySelector(".cart__buttonchekout");
checkoutButton.addEventListener("click", (e) => completeCheckout(e));

const sumTotalElement = document.querySelector(".cart__subtotal");
let sumTotal = 0;

window.onload = makeCartList();

function makeCartList() {
    let keys = [];

    for (i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        keys.push(key);
    }

    fetch("/api/cart/getProductsData", {
        method: "POST",
        body: JSON.stringify(keys),
    })
        .then((response) => response.json())
        .then((data) => {
            data.forEach((product) => {
                product.quantity = localStorage.getItem(product.code);
                sumTotal += product.price * product.quantity;
                populateCartProduct(product);
            });
        })
        .then(() => updateSumTotal());
}

function populateCartProduct(data) {
    const cartProductItem = cartProductTemplate.cloneNode(true);
    cartProductItem.classList.remove("hidden");
    cartProductItem.classList.add("active");

    const productManufacturer =
        cartProductItem.querySelector(".cartproduct__name");
    const productQuantity = cartProductItem.querySelector(
        ".cartproduct__quantitynumber"
    );
    const productPrice = cartProductItem.querySelector(".cartproduct__price");
    const productImage = cartProductItem.querySelector(".cartproduct__image");

    productManufacturer.innerHTML = data.manufacturer;
    productQuantity.value = data.quantity;
    productPrice.innerHTML =
        "Price: " + (data.price * data.quantity).toFixed(2);

    productImage.src = "/images/products/" + data.picture_name + ".jpg";

    const increaseQuantityButton =
        cartProductItem.querySelector(".cartproduct__plus");

    const decreaseQuantityButton = cartProductItem.querySelector(
        ".cartproduct__minus"
    );

    increaseQuantityButton.addEventListener("click", () =>
        productIncreaseQuantity(data, productQuantity, productPrice)
    );

    decreaseQuantityButton.addEventListener("click", () =>
        productDecreaseQuantity(
            data,
            productQuantity,
            productPrice,
            cartProductItem
        )
    );

    const deleteProductButton = cartProductItem.querySelector(
        ".cartproduct__delete"
    );

    deleteProductButton.addEventListener("click", () =>
        productRemoveFromCart(cartProductItem, data)
    );

    cartBoxElement.append(cartProductItem);
}

function productIncreaseQuantity(data, quantityField, priceField) {
    const currentQuantity = localStorage.getItem(data.code);
    const newQuantity = parseInt(currentQuantity) + 1;

    localStorage.setItem(data.code, newQuantity);

    quantityField.value = newQuantity;
    priceField.innerHTML = "Price: " + (data.price * newQuantity).toFixed(2);

    updateSumTotal();
}

function productDecreaseQuantity(data, quantityField, priceField, productItem) {
    const currentQuantity = localStorage.getItem(data.code);
    const newQuantity = parseInt(currentQuantity) - 1;

    if (newQuantity === 0) {
        productItem.remove();
        localStorage.removeItem(data.code);
        return;
    }

    localStorage.setItem(data.code, newQuantity);

    quantityField.value = newQuantity;
    priceField.innerHTML = "Price: " + (data.price * newQuantity).toFixed(2);

    updateSumTotal();
}

function productRemoveFromCart(productItem, data) {
    productItem.remove();
    localStorage.removeItem(data.code);

    updateSumTotal();
}

function updateSumTotal() {
    sumTotal = 0;
    const allSubSumTotals = document.querySelectorAll(
        ".active .cartproduct__price"
    );

    allSubSumTotals.forEach((el) => {
        const subTotal = parseFloat(el.innerHTML.match(/[0-9.]+/));
        sumTotal += subTotal;
    });

    sumTotalElement.innerHTML = "Total: " + sumTotal.toFixed(2) + " EUR";
}

function completeCheckout(e) {
    // e.preventDefault();

    const data = {}; // Get all product keys from localStorage

    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);

        if (key.match(/kgk[0-9]+/)) {
            data[key] = localStorage.getItem(key);
        }
    }

    fetch("/api/processOrder", {
        method: "POST",
        body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .then((data) => window.location.replace(data.redirectURL))
        .then(() => localStorage.clear());
}
