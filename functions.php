<?php
session_start();

//tu sa przechowywane skladniki
$_SESSION['ciasta'] = ['owsiane', 'czekoladowe', 'piernik'];
$_SESSION['polewy'] = ['none', 'malinowa', 'czekoladowa', 'waniliowa', 'toffee'];
$_SESSION['dodatki'] = ['none', 'posypka', 'orzeszki', 'żurawina', 'rodzynki', 'czekoladki', 'cukier', 'wisienka'];

$_SESSION['turns'] = 0; //deklaruje zmienna do liczenia rund
$_SESSION['points']; //deklaruje zmienna do liczenia punktów

$ciasta = $_SESSION['ciasta'];
$polewy = $_SESSION['polewy'];
$dodatki = $_SESSION['dodatki'];

//function getRandCookie() {
//    //funkcja do losowania składnikow ciastka
//    $cookie = ['ciasto' => $_SESSION['ciasta'][rand(0,sizeof($_SESSION['ciasta'])-1)], 'polewa' => $_SESSION['polewy'][rand(0,sizeof($_SESSION['polewy'])-1)],
//        'dodatek' => $_SESSION['dodatki'][rand(0,sizeof($_SESSION['dodatki'])-1)], 'mleko' => rand(0,1)];
//    return $cookie;
//}

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