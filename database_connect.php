<?php
include "credentials/sql_credentials.php";
$sql_connection = new mysqli($server_name,$username,$password,$database_name);

// Create necessary tables
$sql_connection->query("create table if not exists accounts (id integer primary key auto_increment, username text, password text, email text, display_name text, uuid text, api_key text)");