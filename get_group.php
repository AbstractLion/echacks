<?php
  if (isset($_POST['uuid'])) {
    $id = $_POST['uuid'];
    $result = $db->query("select user_uuid_array from pacts where uuid = '$id'");
    if ($result->num_rows != 0)
      echo json_encode(explode(',', $result->fetch_assoc()['user_uuid_array']));
      return;
  }
  echo "{}";
?>