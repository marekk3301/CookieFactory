<?php
session_start();

//tu sa przechowywane skladniki
$_SESSION['ciasta'] = ['owsiane', 'czekoladowe', 'piernik'];
$_SESSION['polewy'] = ['none', 'malinowa', 'czekoladowa', 'waniliowa', 'toffee'];
$_SESSION['dodatki'] = ['none', 'posypka', 'orzeszki', 'żurawina', 'rodzynki', 'czekoladki', 'cukier', 'wisienka'];



$ciasta = $_SESSION['ciasta'];
$polewy = $_SESSION['polewy'];
$dodatki = $_SESSION['dodatki'];

//function getRandCookie() {
//    //funkcja do losowania składnikow ciastka
//    $cookie = ['ciasto' => $_SESSION['ciasta'][rand(0,sizeof($_SESSION['ciasta'])-1)], 'polewa' => $_SESSION['polewy'][rand(0,sizeof($_SESSION['polewy'])-1)],
//        'dodatek' => $_SESSION['dodatki'][rand(0,sizeof($_SESSION['dodatki'])-1)], 'mleko' => rand(0,1)];
//    return $cookie;
//}

function incrementTurns($maxTurns) {
    if ($_SESSION['turns'] >= $maxTurns) {
        header("Location : endGame.php");
    }
    else {
        $_SESSION['turns'] += 1;
    }
}

function calculateDelay($difficulty) {
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
            $a = 4;
            $b = 0.86;
            break;
    }

    return round($a*pow($b,$_SESSION['turns']),2);
}

function drawBoard($cookie) {
    $ciasto = $cookie->getCiasto();
    $polewa = $cookie->getPolewa();
    $dodatek = $cookie->getDodatek();
    $mleko = $cookie->getMleko();
    echo "<img class='cookieImage' src='cookieBox/$ciasto.png'>";
    echo "<img class='cookieImage' src='cookieBox/$polewa.png'>";
    echo "<img class='cookieImage' src='cookieBox/$dodatek.png'>";
//    echo $mleko;
}

function setNewCookie($cookie) {
    //zapisywanie ciasteczka w przegladarce
    $cookieString = $cookie->toString();
    setcookie("freshCookie", $cookieString, time()+15);
}

//function convertCookie($cookie) {
//    $cookieString = $cookie['ciasto'] .";". $cookie['polewa'] .";". $cookie['dodatek'] .";". $cookie['mleko'];
//    return $cookieString;
//}

function compareCookies($order, $cookie) {
    //porownywanie czy zrobione ciasteczko jest identyczne z zamowieniem
    if ($order == $cookie) {
        $_SESSION['result'] = 1;
        $_SESSION['points'] += 1;
    }
    else {
        $_SESSION['result'] = 0;
    }
}