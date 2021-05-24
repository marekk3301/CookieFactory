<?php
include_once 'Cookie.php';
include 'functions.php';

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
$delay = 3.5;

header( "refresh:$delay;url=game.php" );