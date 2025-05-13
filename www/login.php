<?php
if (isset($_GET['error'])) {
    $message = "Wrong email or password";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="text">
            <h1>Login</h1>
            <hr>
        </div>
        <form action="login_process.php" method="post">
            <div class="forms">
                <div>
                    <label for="email">email</label><br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="password">password</label><br>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit">Login</button>
            </div>
        </form>
        <?php if (isset($message)) {
            echo $message;
        } ?>
    </div>
</body>

</html>