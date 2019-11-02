<?php
include "../database_connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $return_values = $db->query("select uuid from accounts where username = '{$_POST['username']}'");
    if (mysqli_num_rows($return_values) >= 1) {
        echo "Account already exists!";
    } else {
        $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $db->query("insert into accounts (username, password, email, display_name, uuid, api_key) values ('{$_POST['username']}','{$password_hash}','{$_POST['email']}','{$_POST['display_name']}',UUID(),'{$_POST['api_key']}')");
    }
}