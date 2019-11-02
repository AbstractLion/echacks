<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
<style>
  body {
    margin: 0;
  }
  .fact-box {
    font-family: Lato;
    display: flex;
    flex-direction: column;
  }
  .fact {

  }
  .fact > .img {
    float: left;
  }
  .fact > .desc {
    
  }
  #home-page-banner {
    font-family: Lato;
    display: flex;
    font-weight: bold;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 40vh;
    width: 100%;
    background-image: url("images/banner.jpg");
    background-position: 0% 100%;
  }
  #home-page-banner > .title {
    display: inline-block;
    text-align: center;
    font-size: 50px;
    font-weight: bold;
  }
  #home-page-banner .desc {
    display: inline-block;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
  }
</style>
</head>
<body>
  <div id="tab-container"></div>
  <div id="home-page-banner">
    <div class="title">
      TimeTract
    </div>
    <div class="desc">
        Commitment through tracking.
    </div>
  </div>
  <div id="content">
    <div class="fact-box">
      <div class="fact">
        <div class="img">
          <img src="test.jpg" height="100" width="100" />
        </div>
        <div class="desc">
          [Name] is an application that combines time-tracking with competition, motivating you to spend your time more wisely knowing that it can be seen by others.
        </div>
      </div>
    </div>
  </div>
</body>
</html>