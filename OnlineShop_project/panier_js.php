<?php
    require_once("../inc/header.php");
?>
<div class="card col-md-4">
    <img id="a" src="../pulls/vertt.jpg" onmouseover="changeImage()" onmouseout="changeImageBack()">
    <div class="card-body">
        <h5 class="card-title">Chemise verte </h5>
        <p class="card-text">Some quick example text.</p>
    </div>
</div>
<div class="col-md-4">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Category : pull</li>
        <li class="list-group-item">Color : red</li>
        <li class="list-group-item">Size : S</li>
        <li class="list-group-item">Price : 99&euro;</li>
        <form action="">
            <li class="list-group-item">
                <p>Quantity : </p>
                <select class="form-control form-select" id="quantitySelect">
                    <option selected>Choose Quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </li>
            <input type="submit" class="btn btn-secondary mt-5 w-100" id="addToCartBtn" value="Add to card">
        </form>
    </ul>
</div>

<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="shoppingCart">
  </tbody>
</table>


<script>
const addToCartBtn = document.getElementById("addToCartBtn");
const quantitySelect = document.getElementById("quantitySelect");
const shoppingCart = document.getElementById("shoppingCart");

let shoppingCartArray = [];

addToCartBtn.addEventListener("click", function(event) {
  event.preventDefault();
  const selectedQuantity = quantitySelect.value;
  if (selectedQuantity !== "Choose Quantity") {
    const article = {
      title: "Chemise red",
      quantity: selectedQuantity,
      price: "99&euro;",
      photo: "../pulls/vertt.jpg"
    };
    shoppingCartArray.push(article);
    renderShoppingCart();
  }
});

function renderShoppingCart() {
  shoppingCart.innerHTML = "";
  shoppingCartArray.forEach(function(article) {
    shoppingCart.innerHTML += `
      <tr>
        <td>${article.title}</td>
        <td>${article.quantity}</td>
        <td>${article.price}</td>
    <td><img style="width: 50px;" src="${article.photo}" alt="${article.title}"></td>
    <td><a href="#">Delete</a></td>
    </tr>
    `; }); shoppingCart.innerHTML += `<tr>
    <td colspan="5" class="text-end"><strong>Total ammount : </strong>${calculateTotalAmount()}</td>
    </tr>
    `;
}       

function calculateTotalAmount() {
let totalAmount = 0;
shoppingCartArray.forEach(function(article) {
totalAmount += article.quantity * parseInt(article.price.split("€")[0]);
});
return `${totalAmount}&euro;`;
}
</script>


<script src="../js/app.js"></script>


<?php
    require_once("../inc/footer.php");
?>