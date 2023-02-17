<?php
    require_once("../inc/header.php");
?>

<!-- Body Content -->

<div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item">
            <a href="#chemise" class="text-dark" id="#T">Chemises</a>
        </li>
        <li class="list-group-item">
            <a href="#shirt" class="text-dark" >T-Shirt</a>
        </li>
        <li class="list-group-item">
            <a href="#pullover" class="text-dark">PullOver</a>
        </li>
    </ul>
</div>

<!-- Chemises -->
<div class="row col-md-9" id="chemise">
    <h3 class="text-center mt-3">T-shirt Collection</h3>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" alt="Card image cap" src="../chemises/ch1.jpg" onmouseover="changeImage9()" onmouseout="changeImageBack9()" id="k" >
                <div class="card-body">
                    <h5 class="card-title text-center">chemise_info</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/chemise1.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" alt="Card image cap" src="../chemises/ch2.jpg" onmouseover="changeImage10()" onmouseout="changeImageBack10()" id="l">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/chemise2.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" alt="Card image cap" src="../chemises/ch3.jpg" onmouseover="changeImage11()" onmouseout="changeImageBack11()" id="m">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/chemise3.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" alt="Card image cap" src="../chemises/ch4.jpg" onmouseover="changeImage12()" onmouseout="changeImageBack12()" id="n">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/chemise4.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" alt="Card image cap" src="../chemises/ch5.jpg" onmouseover="changeImage13()" onmouseout="changeImageBack13()" id="o">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/chemise5.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
</div>

<!-- Cartes shirt -->
<div class="row col-md-9" id="shirt">
    <h3 class="text-center mt-3">Shirt Collection</h3>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../shirts/shirts1.jpg" alt="Card image cap" onmouseover="changeImage6()" onmouseout="changeImageBack6()" id="g">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/shirts1.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../shirts/shirts2.jpg" alt="Card image cap" onmouseover="changeImage7()" onmouseout="changeImageBack7()" id="h">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/shirts2.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../shirts/shirts3.jpg" alt="Card image cap" onmouseover="changeImage8()" onmouseout="changeImageBack8()" id="j">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/shirts3.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
</div>


<!-- Cartes pullover -->
<div class="row col-md-9" id="pullover">
    <h3 class="text-center mt-3">Pullover Collection</h3>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <!-- <img class="card-img-top" src="../pulls/vertt.jpg" alt="Card image cap" id="a"> -->
            <img id="a" src="../pulls/vertt.jpg" onmouseover="changeImage()" onmouseout="changeImageBack()">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/pull1.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../pulls/bleuu.jpg" alt="Card image cap" onmouseover="changeImage1()" onmouseout="changeImageBack1()" id="b">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/pull2.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../pulls/noirr.jpg" alt="Card image cap" onmouseover="changeImage2()" onmouseout="changeImageBack2()" id="c">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/pull3.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../pulls/dino.jpg" alt="Card image cap" onmouseover="changeImage3()" onmouseout="changeImageBack3()" id="d">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/pull4.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../pulls/pizza.jpg" alt="Card image cap" onmouseover="changeImage4()" onmouseout="changeImageBack4()" id="e">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/pull5.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
    <div class="col-md-4 pr-2 pl-2 pb-2">
        <div class="card">
            <img class="card-img-top" src="../pulls/red.jpg" alt="Card image cap" onmouseover="changeImage5()" onmouseout="changeImageBack5()" id="f">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center">Some quick example text.</p>
                    <a href="../achat/pull6.php" class="btn btn-dark d-flex justify-content-center">See product</a>
                </div>
        </div>
    </div>
</div>

<!-- Script pour masquer / afficher les cartes en fonction de la sélection de navigation -->

<script src="../js/app.js"></script>

<?php
    require_once("../inc/footer.php");
?>