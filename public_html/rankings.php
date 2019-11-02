<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.pie > svg {
  width: 100px; height: 100px;
  transform: rotate(-90deg);
  background: yellowgreen;
  border-radius: 50%;
}

circle {
  fill: yellowgreen;
  stroke: #655;
  stroke-width: 32;
  stroke-dasharray: 38 100; /* for 38% */
}
</style>
</head>
<body>
<div id = "content">
  <div id = "rankings">
  <div class="pie">20%</div>
    <!--
      <div class='ranking-box'>
        <img class='profile-pic' />
      </div>
    -->
  </div>
</div>
<script>
  function $$(selector, context) { context = context || document; var elements = context.querySelectorAll(selector); return Array.prototype.slice.call(elements); }
  // very distracted time, distracted time, neutral time, productive time, very productive time
  function createPie(very_distracted, distracted, neutral, productive, very_productive) {
    var pie = $('<div class="pie"></div>')
    var p = parseFloat(pie.textContent);
    var NS = "http://www.w3.org/2000/svg";
    var svg = document.createElementNS(NS, "svg");
    var circle = document.createElementNS(NS, "circle");
    var title = document.createElementNS(NS, "title");
    circle.setAttribute("r", 16);
    circle.setAttribute("cx", 16);
    circle.setAttribute("cy", 16);
    circle.setAttribute("stroke-dasharray", p + " 100");
    svg.setAttribute("viewBox", "0 0 32 32");
    title.textContent = pie.textContent;
    pie.textContent = '';
    svg.appendChild(title);
    svg.appendChild(circle);
    pie.appendChild(svg);
    return pie;
  });
  }
  /*
  $.post("getgroup.php", function(data) {
    let rankBoxes = [];
    // contains an array of uuids of group
    data = JSON.parse(data);
    for (let i = 0; i < data.length; ++i) {
      let rankBox = $('<div></div>');
      rankBox.attr('class', 'ranking-box');

      $.post("getprofile.php", {"user_uuid": data[i]}, function(json) {
        let profile = JSON.parse(json);
        let userImgContainer = $('<div class="profile-pic-container"></div>');
        let userImg = $('<img class = "profile-pic"/>');
        userImg.attr('src', `/profile-images/${profile.user_uuid}.jpg`);
        userImgContainer.appendChild(userImg);
        rankBox.appendChild(userImgContainer);
      });

      $.post("getdata.php", function(json) {
        data = JSON.parse(json);

        let userPie = $('<div class="pie"></div>');
        userPie.html("60%");



        // [Rank, Time Spent (seconds), Number of People, Activity, Category, Productivity]
        
        


        // Parsing RescueTime Data
        console.log(data);
        
      });

      rankBoxes.push(rankBox);
    }

    // sort rankBoxes

  });
  */
  $(function(){createPies()});
</script>
</body>
</html>