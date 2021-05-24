<?php
include_once 'Cookie.php';
include 'functions.php';

$_SESSION['turns'] += 1;

header( "refresh:3.5;url=order.php" );
?>

<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="board"><div class="shadow"></div><?php
    drawBoard($_SESSION['freshCookie']);
    $result = $_SESSION['result'] == 1 ? '"Delicious😋"' : '"That is not what I ordered!🤬"';
    echo "<p class='result'> $result </p></div>";

?>
</body>
</html>


