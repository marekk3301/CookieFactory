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
        echo '"Delicious😋"';
        addPoints(calculateDelay($_SESSION['difficulty']));
    }
    else {
        echo '"That is not what I ordered!🤬"';
    }

    incrementTurns($_SESSION['maxTurns']);
?>
</body>
</html>