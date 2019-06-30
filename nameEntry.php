<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="site.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body> 
    <ul>
        <li> <a href ="index.html"> Home</a></li>
        <li> <a href ="about.html"> About</a></li>
        <li> <a href ="current.html">  Current Class Schedule</a></li>
        <li> <a href="demo.php"> Demo Page </a></li>
        <li> <a href="nameEntry.php"> Visitor Login</a></li>
        <li> <a href="TermPaper.html">Resume</a></li>
        <li> <a href="gatorsRugby.html">Gators Rugby</a></li>
    </ul>
    <div>
        <form action="nameEntry.php" method="get">
            <h1>Name: <input type="text" name ="name"><br>
            </h1>
            <button type="submit" >Submit</button
        </form>
        <h1>
            <?php
            if (!isset($_GET["name"])) {
                echo " Please Login";
                
            } else {
                echo "Welcome " . $_GET["name"] . "!";
            }
            ?>

        </h1>
<!--        <p>
        <?php

        function mine($num) {
            if ($num == NULL) {
                for ($i = 0; $i < 10; $i++) {
                    echo "Hello World!<br>";
                }
            } else {

                for ($i = 0; $i < $num; $i++) {
                    echo "Hello World!<br>";
                }
            }
        }

        mine(4);
        ?>
        </p>-->


    </div>




</body>

