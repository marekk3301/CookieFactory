<?php
include_once 'Cookie.php';
include 'functions.php';

echo "<h1 class='points'> Punkty: ";
echo $_SESSION['points'];
echo "</h1>";

echo "<h1 class='turn'> Runda: ";
echo $_SESSION['turns'] + 1;
echo "/";
echo $_SESSION['maxTurns'] + 1;
echo "</h1>";

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