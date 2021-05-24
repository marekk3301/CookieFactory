<?php
//session_start();
include 'functions.php';

compareCookies(convertCookie($_SESSION['ordered']), $_COOKIE['freshCookie']);


?>