<?php
include_once 'Cookie.php';
include 'functions.php';

?>

<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="board"><div class="shadow"></div>

<?php
    drawBoard($_SESSION['freshCookie']);
    if ($_SESSION['result'] == 1) {
        echo "<p class='result'> 'Mniam😋' </p></div>";
        addPoints(calculateDelay($_SESSION['difficulty']));
    }
    else {
        $cookie = explode(";", $_SESSION['ordered']);
        echo "<p class='result'> 'To nie moje zamówienie!🤬' </p>";
        echo "<p style='transform: translateY(400px);'>czy to wygląda jak " . $cookie[0];
        if($cookie[1] != 'none'){echo " z polewa " . $cookie[1];}
        if($cookie[2] != 'none'){echo " i " . $cookie[2];}
        echo "</p></div>";
    }

    incrementTurns($_SESSION['maxTurns']);
?>
</body>
</html>