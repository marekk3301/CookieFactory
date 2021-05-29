 <?php
//session_start();
include_once 'Cookie.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    $polewa = isset($_POST['polewa']) ? $_POST['polewa'] : 'none';
    $dodatek = isset($_POST['dodatek']) ? $_POST['dodatek'] : 'none';
    $mleko = isset($_POST['mleko']) ? 1 : 0;

    $freshCookie = new Cookie($_POST['ciasto'], $polewa, $dodatek, $mleko);

    $_SESSION['freshCookie'] = $freshCookie;

    setNewCookie($freshCookie);
    header('Location: check.php');

}

