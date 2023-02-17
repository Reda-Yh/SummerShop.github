<?php
    require_once("../inc/header.php");
?>

<div class="container my-5">
    <h1 class="text-center">Office</h1>
    <form class="was-validated">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control is-invalid" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div class="invalid-feedback">Veuillez entrer une adresse email valide</div>
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit d'autre.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control is-invalid" id="exampleInputPassword1" required>
        <div class="invalid-feedback">Veuillez entrer un mot de passe</div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">Cochez-moi</label>
        <div class="invalid-feedback">Veuillez cocher cette case</div>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>


<?php
    require_once("../inc/footer.php");
?>