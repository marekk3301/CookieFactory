<?php
include 'functions.php';

//tu generuje sie ciasteczko zmowione przez klienta
$_SESSION['ordered'] = getRandCookie();
?>

<html lang="">
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="board"><div class="shadow"></div><?php drawBoard($_SESSION['ordered'])?> </div>
</body>
</html>

<?php
$delay = 3.5;

header( "refresh:$delay;url=game.php" );