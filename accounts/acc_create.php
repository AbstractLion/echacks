<?php
include "../database_connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $password_hash = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $sql_connection->query("insert into accounts (username, password, email, display_name, uuid) values ('{$_POST['username']}','{$password_hash}','{$_POST['email']}','{$_POST['display_name']}',UUID())");
}