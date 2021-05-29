<?php
include_once 'Cookie.php';
include 'functions.php';

echo "<h1 style='text-align: end; font-size: 50px'> Runda: " . $_SESSION['turns'] + 1 . "</h1>";

//tu generuje sie ciasteczko zmowione przez klienta
$cookie = new Cookie();
$cookie->getRandCookie();
$_SESSION['ordered'] = $cookie->toString();

?>

<html lang="">
<head><link rel="stylesheet" href="style.css"></head>
<body>

<div class="board"><div class="shadow"></div><?php drawBoard($cookie)?> </div>
</body>
</html>

<?php



$delay = calculateDelay($_SESSION['difficulty']);
//echo $delay;

header( "refresh:$delay;url=game.php" );