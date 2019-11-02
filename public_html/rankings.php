<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id = "content">
  <div id = "rankings">
  </div>
</div>
<script>
  $.post("getgroup.php", function(data) {
    // contains an array of uuids of group
    data = JSON.parse(data);
    for (let i = 0; i < data.length; ++i) {
      let rankBox = $('<div></div>');
      rankBox.attr('class', 'ranking-box');

      $.post("getprofile.php", function(json) {
        let profile = JSON.parse(json);
        let userImg = $('<img class = "profile-pic"/>');
        userImg.attr('src', profile.img_url);
        rankBox.appendChild(userImg);
      });

      $.post("getdata.php", function(json) {
        data = JSON.parse(json);
        
        // Parsing RescueTime Data
        console.log(data);
        
      });

      $('#rankings').appendChild(rankBox);
    }
  });
</script>
</body>
</html>