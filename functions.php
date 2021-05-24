<?php
session_start();

//tu sa przechowywane skladniki
$_SESSION['ciasta'] = ['owsiane', 'czekoladowe', 'piernik'];
$_SESSION['polewy'] = ['none', 'malinowa', 'czekoladowa', 'waniliowa', 'toffee'];
$_SESSION['dodatki'] = ['none', 'posypka', 'orzeszki', 'żurawina', 'rodzynki', 'czekoladki', 'cukier', 'wisienka'];

$ciasta = $_SESSION['ciasta'];
$polewy = $_SESSION['polewy'];
$dodatki = $_SESSION['dodatki'];

function getRandCookie() {
    //funkcja do losowania składnikow ciastka
    $cookie = ['ciasto' => $_SESSION['ciasta'][rand(0,sizeof($_SESSION['ciasta'])-1)], 'polewa' => $_SESSION['polewy'][rand(0,sizeof($_SESSION['polewy'])-1)],
        'dodatek' => $_SESSION['dodatki'][rand(0,sizeof($_SESSION['dodatki'])-1)], 'mleko' => rand(0,1)];
    return $cookie;
}

function drawBoard($cookie) {
    $ciasto = $cookie['ciasto'];
    $polewa = $cookie['polewa'];
    $dodatek = $cookie['dodatek'];
    $mleko = $cookie['mleko'];
    echo "<img class='cookieImage' src='cookieBox/$ciasto.png'>";
    echo "<img class='cookieImage' src='cookieBox/$polewa.png'>";
    echo "<img class='cookieImage' src='cookieBox/$dodatek.png'>";
//    echo $mleko;
}

function setNewCookie($cookie) {
    //zapisywanie ciasteczka w przegladarce
    $cookieString = $cookie['ciasto'] .";". $cookie['polewa'] .";". $cookie['dodatek'] .";". $cookie['mleko'];
    setcookie("freshCookie", $cookieString, time()+15);
}

function convertCookie($cookie) {
    $cookieString = $cookie['ciasto'] .";". $cookie['polewa'] .";". $cookie['dodatek'] .";". $cookie['mleko'];
    return $cookieString;
}

function compareCookies($order, $cookie) {
    //porownywanie czy zrobione ciasteczko jest identyczne z zamowieniem
    if ($order == $cookie) {
        header( "refresh:0;url=winner.php" );
    }
    else {
        echo $order."<br>".$cookie;
        header( "refresh:1;url=looser.php" );
    }
}