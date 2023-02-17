<?php
    require_once("../inc/header.php");
?>

<form class="contact-form" onsubmit="return validateForm()">
  <div class="form-group">
    <label for="name">Nom:</label>
    <input type="text" id="name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="message">Message:</label>
    <textarea id="message" class="form-control" rows="5" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<script>
  function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (name === "" || email === "" || message === "") {
      alert("Tous les champs sont requis");
      return false;
    }
    return true;
  }
</script>

<?php
    require_once("../inc/footer.php");
?>