<?php
    require_once("../inc/header.php");
?>

<!-- Body Content -->

<form class="was-validated" method="" action="">
  <div class="mb-3">
    <label for="Pseudo">Pseudo :</label>
    <input type="text" class="form-control" id="Pseudo" placeholder="Enter your pseudo" required>
    <div class="invalid-feedback">Please enter your pseudo.</div>
  </div>
  <div class="mb-3">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
    <div class="invalid-feedback">Please enter your password.</div>
  </div>
  <button type="submit" class="btn btn-dark">Connection</button>
</form>

<?php
    require_once("../inc/footer.php");
?>