<?php
include 'functions.php';
header( "refresh:3.5;url=order.php" );
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<span class="board"><span class="shadow"></span><?php drawBoard($_SESSION['freshCookie'])?> <p class="result">LOOSER</p></span>

</body>
</html>
