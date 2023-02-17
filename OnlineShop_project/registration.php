<?php
    require_once("../inc/header.php");
?>

<!-- Body Content -->

<form action="" class="was-validated">
    <div class="row">
        <div class="col-md-6">
            <label for="Pseudo" class="form-label mt-2">Pseudo: </label>
            <input type="text" class="form-control" id="Pseudo" aria-describedby="Pseudo" placeholder="Enter your pseudo" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label mt-2">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col-md-3">
            <label for="lasttName" class="form-label mt-2">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col-md-3">
            <label for="firstName" class="form-label mt-2">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col-md-3">
            <label for="email" class="form-label mt-2">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col-md-3">
            <label for="sexe" class="form-label mt-2">Sexe:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="m" id="sexem">
                <label class="form-check-label" for="sexem">
                    Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" value="f" id="sexef">
                <label class="form-check-label" for="sexef">
                    Female
                </label>
                </div>
        </div>
        <div class="col-md-12">
            <label for="address" class="form-label mt-2">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    <div class="col-md-12 mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>

<?php
    require_once("../inc/footer.php");
?>