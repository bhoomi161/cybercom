<?php

$match = 'bhoomi@16';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (!empty($password)) {
        if ($password === $match) {
            echo 'Password is correct';
        } else {
            echo 'Password is incorrect';
        }
    } else {
        echo 'Please enter the password';
    }
}

?>

<form action = 'PostVariable.php' method = 'POST'>
    Password:<input type = 'password' name = 'password'><br><br>
    <input type = 'submit' value = 'submit'>
</form>