<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            color:#e8e6e3;
        }

        .fact-box {
            font-family: Lato;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding:10px 200px 10px 200px;
        }

        .fact-box:nth-child(odd) {
            background-color: #252729;
        }

        .fact {
            margin: 5px;
            width: 100%;
            display: grid;
            grid-template-columns: 2fr 8fr;
            align-items: center;
            justify-items: center;
            padding: 10px;
            font-size: 35px;
        }

        .fact > .img > img {
            max-height: 250px;
            max-width: 250px;
            min-height: 250px;
            min-width: 250px;
            border-radius: 50px;
        }

        .fact > .desc {
            margin: 10px;
        }

        #home-page-banner {
            font-family: Lato, sans-serif;
            display: grid;
            font-weight: bolder;
            grid-template-rows: 150px 250px;
            justify-items: center;
            align-items: center;
            height: 80vh;
            width: 100%;
            background-color: #181a1b;
            background-position: 0% 100%;
        }

        #home-page-banner .title {
            text-align: center;
            font-size: 200px;
            font-weight: bold;
            padding-top:400px;
        }

        #home-page-banner .desc {
            text-align: center;
            font-size: 50px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div id="tab-container"></div>
<div id="home-page-banner">
    <div>
        <div class="title">TimeTract</div>
        <div class="desc"></div>
        <div class="desc">Accountability at its peak.</div>
    </div>
</div>
<div id="content">
    <div class="fact-box">
        <div class="fact">
            <div class="img">
                <img src="images/clock.png">
            </div>
            <div class="desc">
                Accountability at its peak. Keep yourself accountable. Stop wasting time.
            </div>
        </div>
        <div class="fact">
            <div class="img">
                <img src="images/rescue_time_dark.png">
            </div>
            <div class="desc">
                Built on the popular RescueTime API.
            </div>
        </div>
        <div class="fact">
            <div class="img">
                <img src="images/trophy.png">
            </div>
            <div class="desc">
                Compete with your friends - work together to achieve productivity
            </div>
        </div>
        <div class="fact">
            <div class="img">
                <img src="images/free.jpg">
            </div>
            <div class="desc">
                Free and Open Source - you can trust us
            </div>
        </div>
        <div class="fact">
            <div class="img"></div>
            <div class="desc">
                <a href="accounts/create_account.html" style="color:white">Sign up</a> or <a href="accounts/login_account.html" style="color:white">Sign in</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>