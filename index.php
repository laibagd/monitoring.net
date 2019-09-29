<?php
// Initialize the session
session_start();



// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}






?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>


    <meta charset="UTF-8">
    <title>
        Puslapio pavadinimas
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/manostyle.css">


</head>


<body onload="StartTimers();" onmousemove="ResetTimers();">

<div id="timeout" >
     <h1>Session About To Timeout</h1>
    <p>Jus busit automatiškai atjungtas už 10 sekundžiu.<br />
        jeigu norit būti ne atjungtas pajudinkit pelę.
</div>


<div class="row">

    <div class="header side">
        <img id="logo" src="img/dreamdress.png">
    </div>

    <div class="header middle">

        <div class="topnav">

            <a href="index.php">Check Server | </a>
            <a id="index" >Apie mane |</a>
            <a id="portfolio">Portfolio |</a>
            <a id="kontaktai">Kontaktai | </a>

        </div>

    </div>
    <div class="header side">




            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>

<p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</p>





</div>
</div>
<div class="load-bar">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>


<div class="row">
    <div class="column side">
        <p>HTML</p>
        <div class="container">
            <div class="skills html">90%</div>
        </div>

        <p>CSS</p>
        <div class="container">
            <div class="skills css">80%</div>
        </div>

        <p>JavaScript</p>
        <div class="container">
            <div class="skills js">65%</div>
        </div>

        <p>PHP</p>
        <div class="container">
            <div class="skills php">60%</div>
        </div>

        <p>My SQL</p>
        <div class="container">
            <div class="skills sql">50%</div>
        </div>

    </div>




    <div id="apie" class="column middle">




        <div class="button">
        <button  onclick="setInterval(siustiduomenis, 3000);" value="checkserver" id="checkserver" name="ip"> Start ping </button>



        <button onclick="location.href='index.php'" type="button">  Stop ping </button>
        </div>

        <label for="ip">IP ADRESAS arba WEB puslapis </label>
        <input name="ip" type="text" id="ip" placeholder="192.168.0.1 arba www.delfi.lt" />














    </div>





    <div id="right" class="column side">

        <!-- laikrodis -->
        <canvas id="canvas" width="200" height="200"
                style="background-color:white">
        </canvas>


        <script>
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");
            var radius = canvas.height / 2;
            ctx.translate(radius, radius);
            radius = radius * 0.90
            setInterval(drawClock, 1000);


            function drawClock() {
                drawFace(ctx, radius);
                drawNumbers(ctx, radius);
                drawTime(ctx, radius);
            }

            function drawFace(ctx, radius) {
                var grad;
                ctx.beginPath();
                ctx.arc(0, 0, radius, 0, 2 * Math.PI);
                ctx.fillStyle = 'yellow';
                ctx.fill();
                grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
                grad.addColorStop(0, '#333');
                grad.addColorStop(0.5, 'red');
                grad.addColorStop(1, '#333');
                ctx.strokeStyle = grad;
                ctx.lineWidth = radius * 0.1;
                ctx.stroke();
                ctx.beginPath();
                ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
                ctx.fillStyle = '#333';
                ctx.fill();


                ctx.fillStyle = "green";
                ctx.fillText("Rolex", 0, -50);

            }

            function drawNumbers(ctx, radius) {
                var ang;
                var num;
                ctx.font = radius * 0.15 + "px arial";
                ctx.textBaseline = "middle";
                ctx.textAlign = "center";
                for (num = 1; num < 13; num++) {
                    ang = num * Math.PI / 6;
                    ctx.rotate(-ang);
                    ctx.translate(0, -radius * 0.85);
                    ctx.rotate(ang);
                    ctx.fillText(num.toString(), 0, 0);
                    ctx.rotate(-ang);
                    ctx.translate(0, radius * 0.85);
                    ctx.rotate(ang);


                }
            }

            function drawTime(ctx, radius) {
                var now = new Date();
                var hour = now.getHours();
                var minute = now.getMinutes();
                var second = now.getSeconds();
                //hour
                hour = hour % 12;
                hour = (hour * Math.PI / 6) +
                    (minute * Math.PI / (6 * 60)) +
                    (second * Math.PI / (360 * 60));
                drawHand(ctx, hour, radius * 0.5, radius * 0.07);
                //minute
                minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
                drawHand(ctx, minute, radius * 0.8, radius * 0.07);
                // second
                second = (second * Math.PI / 30);
                drawHand(ctx, second, radius * 0.9, radius * 0.02);
            }

            function drawHand(ctx, pos, length, width) {
                ctx.beginPath();
                ctx.lineWidth = width;
                ctx.lineCap = "round";
                ctx.moveTo(0, 0);
                ctx.rotate(-pos);
                ctx.lineTo(0, -length);
                ctx.stroke();
                ctx.rotate(pos);
            }
        </script>
        <button onclick="document.getElementById('lempute').src='/img/pic_bulboff.gif'">Turn off the light</button>

        <img id="lempute" src="/img/pic_bulboff.gif" style="width:100px">

        <button onclick="document.getElementById('lempute').src='/img/pic_bulbon.gif'">Turn on the light</button>

        <a href="#" id="name">
            <img title="Hello" src="/img/pic_bulboff.gif" onmouseover="this.src='/img/pic_bulbon.gif';" onmouseout="this.src='/img/pic_bulboff.gif';" />
        </a>

    </div>
</div>
<div class="row">
    <div class="footer side">
        <h3>Footer</h3>
        <p>Resize the browser window to see the responsive effect.</p>
    </div>

    <div class="footer middle">
        <h3>Footer</h3>
        <p>Resize the browser window to see the responsive effect.</p>
    </div>
    <div class="footer side">
        <h3>Footer</h3>
        <p>Resize the browser window to see the responsive effect.</p>
    </div>
</div>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="js/skaiciuoti.js"></script>
<script src="js/javascript.js"></script>

<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" />

<script src="/menu.js"></script>

</body>

</html>


































