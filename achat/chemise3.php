<?php
    require_once("../inc/header.php");
?>

<!-- Body Content -->

<div class="card col-md-4">
    <img class="card-img-top" alt="Card image cap" src="../chemises/ch3.jpg" onmouseover="changeImage11()" onmouseout="changeImageBack11()" id="m">
    <div class="card-body">
        <h5 class="card-title text-center">Chemise red </h5>
        <p class="card-text text-center">Some quick example text.</p>
    </div>
</div>
<div class="col-md-4">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Category : chemise</li>
        <li class="list-group-item">Color : red</li>
        <li class="list-group-item">Size : S</li>
        <li class="list-group-item">Price : 99&euro;</li>
        <form action="">
            <li class="list-group-item">
                <p>Quantity : </p>
                <select class="form-control form-select" id="exampleFormControlSelect1">
                    <option selected>Choose Quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </li>
            <input type="submit" class="btn btn-secondary mt-5 w-100" disabled value="Add to card">
        </form>
    </ul>
</div>

<script src="../js/app.js">
    
</script>


<?php
    require_once("../inc/footer.php");
?>