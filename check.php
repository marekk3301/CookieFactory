<?php
include 'functions.php';

compareCookies($_SESSION['ordered'], $_COOKIE['freshCookie']);

header( "refresh:0;url=results.php" );

?>