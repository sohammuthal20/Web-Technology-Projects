document.addEventListener("DOMContentLoaded", function () {
    const addToCartButton = document.getElementById("add-to-cart");
    const titleInput = document.getElementById("title");
    const authorInput = document.getElementById("author");
    const priceInput = document.getElementById("price");
    const cartTable = document.getElementById("cart");

    addToCartButton.addEventListener("click", function () {
        const title = titleInput.value;
        const author = authorInput.value;
        const price = priceInput.value;

        if (title && author && price) {
            const newRow = cartTable.insertRow(-1);
            const titleCell = newRow.insertCell(0);
            const authorCell = newRow.insertCell(1);
            const priceCell = newRow.insertCell(2);

            titleCell.textContent = title;
            authorCell.textContent = author;
            priceCell.textContent = price;

            titleInput.value = "";
            authorInput.value = "";
            priceInput.value = "";
        }
    });
});