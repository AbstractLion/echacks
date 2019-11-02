<?php
parse_str($_SERVER["QUERY_STRING"], $query_string);
extract($query_string);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/jquery.min.js"></script>
    <script>
        $.post("get_user_from_uuid.php", { user_uuid : "<?php echo $user_uuid?>" }, function(data) {
            data = JSON.parse(data);
            document.getElementById("user_info").innerHTML= "<p>" + data.display_name + "</p><br/><p>" + data.username + "</p>";
        });
    </script>
</head>
<body>
<img src="profile_photos/<?php echo $user_uuid?>.jpg" alt="Profile Photo" width="20%" height="20%"/>
<div id="user_info">

</div>
</body>
</html>
