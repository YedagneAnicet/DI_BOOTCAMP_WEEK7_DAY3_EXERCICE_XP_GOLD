<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'password') {
        $username = $_SESSION['username'];
        $message = 'Bienvenue, ' . $username;
    } else {
        $message = " Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
</head>

<body>
    <form action="" method="post">
        <h2><?php echo $message; ?></h2>
        <input type="text" name="username" placeholder="Nom d'utilisateur" required />
        <input type="password" name="password" placeholder="Mot de passe" required />
        <input type="submit" name="login" value="Se connecter" />
    </form>
</body>

</html>