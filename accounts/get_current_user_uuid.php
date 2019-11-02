<?php
$user_uuid = null;
$get_user_uuid = $sql_connection->query("select user_uuid from active_sessions where session_uuid = '{$_COOKIE['SESSION_UUID']}'");
if ($get_user_uuid->num_rows >= 1) {
    extract($get_user_uuid->fetch_assoc());
    echo $user_uuid;
}