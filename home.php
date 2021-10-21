<?php
include "header.php";
include "navbar.php";


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDIAN Bank</title>
    <link rel="icon" href="/images/tsf.png" type="image/x-icon" />
    <link rel="stylesheet" href="home_style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="app.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-color: #333;
    }

    .output {
        text-align: center;
        font-family: 'Source Code Pro', monospace;
        color: white;
    }

    /* Cursor Styling */

    .cursor::after {
        content: '';
        display: inline-block;
        margin-left: 3px;
        background-color: white;
        animation-name: blink;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
    }

    h1.cursor::after {
        height: 32px;
        width: 5px;
    }

    p.cursor::after {
        height: 13px;
        width: 6px;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        49% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <div class="container py-5">
                    <div class="output" id="output">
                        <h1 class="cursor"></h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item-1">

                <div class="flex-item-login">
                    <h2 style="text-align:center;">Welcome</h2>
                </div>
                <div class="buttons2">

                    <div class="flex-item">
                        <form method="get" action="money.php">
                            <button type="submit" style="float:right;width:470px;">Money Transfer</button>
                        </form>
                    </div>

                    <div class="flex-item">
                        <form method="get" action="history.php">
                            <button type="submit" style="float: right;width:470px;">Transaction History</button>
                        </form>
                    </div>
                </div>


            </div>
            </form>
        </div>
    </div>

    </div>
    </br>
    </br>
    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);text-align:center;color:white;">
                © 2021 Copyright - Made by <strong>RAJASHEKAR</strong> :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank" style="color:white;"> The Sparks
                    Foundation </a>
            </div>
            <!-- Copyright -->
        </footer>

</body>

</html>

<?php include "easter_egg.php"; ?>