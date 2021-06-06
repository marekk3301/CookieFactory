<?php
session_start();

                                                                                //tu sa przechowywane skladniki
$_SESSION['ciasta'] = ['owsiane', 'czekoladowe', 'piernik'];
$_SESSION['polewy'] = ['none', 'malinowa', 'czekoladowa', 'waniliowa', 'toffee'];
$_SESSION['dodatki'] = ['none', 'posypka', 'orzeszki', 'żurawina', 'rodzynki', 'czekoladki', 'cukier', 'wisienka'];



$ciasta = $_SESSION['ciasta'];
$polewy = $_SESSION['polewy'];
$dodatki = $_SESSION['dodatki'];

function incrementTurns($maxTurns) {                                            //zwiekszanie rund
    if ($_SESSION['turns'] >= $maxTurns) {
        header("refresh:3.5;url=endGame.php");
    }
    else {
        $_SESSION['turns'] += 1;
        header( "refresh:3.5;url=order.php" );
    }
}

function calculateDelay($difficulty) {                                          //obliczanie czasu widocznosci ciasteczka
    switch ($difficulty) {
        case 1:
            $a = 5.5;
            $b = 0.9;
            break;
        case 2:
            $a = 5.5;
            $b = 0.87;
            break;
        case 3:
            $a = 3.5;
            $b = 0.87;
            break;
    }
    return round($a*pow($b,$_SESSION['turns']+1),2);
}

function addPoints($delay) {
    if ($delay == 0) {
        $_SESSION['points'] += 500;

    }
    else {
        $_SESSION['points'] += (int)((1/$delay)*5);
    }
}

function calculatePoints($delay) {
    echo $delay . '<br>';
    return ((1/$delay)*5);
}

function drawBoard($cookie) {                                                   //skladanie calego ciasteczka z obrazkow
    $ciasto = $cookie->getCiasto();
    $polewa = $cookie->getPolewa();
    $dodatek = $cookie->getDodatek();
    echo "<img class='cookieImage' src='cookieBox/$ciasto.png' alt='ciasto'>";
    echo "<img class='cookieImage' src='cookieBox/$polewa.png' alt='polewa'>";
    echo "<img class='cookieImage' src='cookieBox/$dodatek.png' alt='dodatek'>";
}

function setNewCookie($cookie) {                                                //zapisywanie ciasteczka w przegladarce
    $cookieString = $cookie->toString();
    setcookie("freshCookie", $cookieString, time()+15);
}

function compareCookies($order, $cookie) {                                      //porownywanie czy zrobione ciasteczko jest identyczne z zamowieniem
    if ($order == $cookie) {
        $_SESSION['result'] = 1;
    }
    else {
        $_SESSION['result'] = 0;
    }
}