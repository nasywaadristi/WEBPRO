<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$email = $_POST['email'];

if($uname == '' OR $pass == ''){
    echo "Username dan Password harus diisi <br>";
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("email is a valid email address");
} else {
    echo("email is not a valid email address");
}

