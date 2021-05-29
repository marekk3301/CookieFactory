<?php

if ($_COOKIE['test'] != "test") {
    header('Location: enableCookies.php');
}
else {
    header( 'Location: order.php');
}
