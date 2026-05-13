const productForm = document.getElementById("product-form");
const productIDInput = document.getElementById("productID");
const productNameInput = document.getElementById("productName");
const productDescriptionInput = document.getElementById("productDescription");
const productPriceInput = document.getElementById("productPrice");
const productList = document.getElementById("product-list");

function addProduct() {
    const productID = productIDInput.value; 
    const productName = productNameInput.value;
    const productDescription = productDescriptionInput.value;
    const productPrice = parseFloat(productPriceInput.value).toFixed(2);

    if (!productID || !productName || !productDescription || isNaN(productPrice)) {
        alert("Please fill in all fields correctly.");
        return;
    }

    const productItem = document.createElement("li");
    productItem.innerHTML = `<strong>Product ID: ${productID}</strong><br>Product Name: ${productName}<br>Product Description: ${productDescription}<br>Price: $${productPrice}`;

    productList.appendChild(productItem);

    // Clear the form
    productIDInput.value = ""; // Clear Product ID
    productNameInput.value = "";
    productDescriptionInput.value = "";
    productPriceInput.value = "";
}
