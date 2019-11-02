<?php
  $id = $_POST['id'];
  $result = $db->query("select user_uuid_array from pacts where uuid = '$id'");
  echo json_encode($result->fetch_assoc()['user_uuid_array']);
?>