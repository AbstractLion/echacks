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
    align-items: center;
    justify-content: center;
  }
  .fact-box:nth-child(odd) {
    background-color: lightgrey;
  }
  .fact {
    margin: 5px;
    width: 100%;
    display: grid;
    grid-template-columns: 2fr 8fr;
    align-items: center;
    justify-items: center;
    padding: 10px;
  }
  .fact > .img > img {
    max-height: 100px;
    max-width: 100px;
    min-height: 100px;
    min-width: 100px;
    border-radius: 50px;
  }
  .fact > .desc {
    margin: 10px;
  }
  #home-page-banner {
    font-family: Lato;
    display: grid;
    font-weight: bold;
    grid-template-rows: 150px 250px;
    justify-items: center;
    align-items: center;
    height: 400px;
    width: 100%;
    background-image: url("images/banner.jpg");
    background-position: 0% 100%;
  }
  #home-page-banner .title {
    text-align: center;
    font-size: 50px;
    font-weight: bold;
  }
  #home-page-banner .desc {
    text-align: center;
    font-size: 20px;
    font-weight: bold;
  }
</style>
</head>
<body>
  <div id="tab-container"></div>
  <div id="home-page-banner">
    <div>
    <div class="title">TimeTract</div>
    <div class="desc">Accountability at its peak.</div>
    </div>
  </div>
  <div id="content">
    <div class="fact-box">
      <div class="fact">
        <div class="img">
          <img src="images/test.jpg">
        </div>
        <div class="desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
</body>
</html>