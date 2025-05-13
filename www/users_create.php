<?php

require "database_connection.php";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$user_info = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toevoegen user</title>
</head>

<body>
    <div class="container">
        <div class="text">
            <h1>Toevoegen user</h1>
            <hr>
        </div>
        <form action="users_create_process.php" method="post">
            <div class="forms">
                <div>
                    <label for="firstname">firstname</label><br>
                    <input type="text" name="firstname" id="firstname" required>
                </div>
                <div>
                    <label for="lastname">lastname</label><br>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div>
                    <label for="email">email</label><br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="password">password</label><br>
                    <input type="password" name="password" id="password" required>
                </div>
                <div>
                    <label for="role">role</label><br>
                    <input type="text" name="role" id="role" required>
                </div>
                <div>
                    <label for="address">address</label><br>
                    <input type="text" name="address" id="address" required>
                </div>
                <div>
                    <label for="city">city</label><br>
                    <input type="text" name="city" id="city" required>
                </div>
                <div>
                    <label for="zipcode">zipcode</label><br>
                    <input type="text" name="zipcode" id="zipcode" required>
                </div>
                <div>
                    <label for="phonenumber">phonenumber</label><br>
                    <input type="text" name="phonenumber" id="phonenumber" required>
                </div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>

</html>