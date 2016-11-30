<?php

//@todo remove
if(isset($_POST['submit'])) {
    $authentication->authenticate($_POST['username'], $_POST['password']);
    if($authentication->isAdmin()) {
        header('Location: index.php?page=admin/dashboard');
    }
}

// Ici votre code PHP permettant de traiter le formulaire et d'authentifier l'utilisateur

?>
<!doctype html>
<html lang="fr"><head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>
