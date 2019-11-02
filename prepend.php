<?php
include "credentials/sql_credentials.php";
$sql_connection = new mysqli($server_name,$db_username,$db_password,$database_name);
$db = $sql_connection;

// Create necessary tables

$sql_connection->query("create table if not exists accounts (id integer primary key auto_increment, username text, password text, email text, display_name text, uuid text, api_key text, json_data text, update_time integer)");

$sql_connection->query("create table if not exists pacts (id integer primary key auto_increment, group_uuid text, user_uuid_array text)");

$sql_connection->query("create table if not exists active_sessions (id integer primary key auto_increment, session_uuid text, user_uuid text, expiry integer)");