<?php
  session_start();

  if (isset($_POST['submit'])) {
        $_SESSION['name'] = $_POST['name'];
        echo 'Bienvenue, ' . $_SESSION['name'] . '!';
  } else {
        echo 'Desole Veuillez renseigner le formulaire.  <a href="login.php">login</a>.';
  }
