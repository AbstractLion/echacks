<!DOCTYPE HTML>
<html>
<body>
  <form action="scripts/create_group.php" method="post">
    Group Name: <input type="text" name="name"/><br/>
    Group Password: <input type="password" name="password"/><br/>
    <input type="submit" value="Create Group" method="post"/>
  </form>
  <form action="scripts/join_group.php" method="post">
    Group ID: <input type="text" name="group_id" /><br/>
    Group Password: <input type="password" name="password" /><br/>
    <input type="submit" value="Join Group" />
</body>
</html>