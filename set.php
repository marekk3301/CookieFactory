 <?php
include_once 'Cookie.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    $polewa = isset($_POST['polewa']) ? $_POST['polewa'] : 'none';
    $dodatek = isset($_POST['dodatek']) ? $_POST['dodatek'] : 'none';

    $freshCookie = new Cookie($_POST['ciasto'], $polewa, $dodatek);

    $_SESSION['freshCookie'] = $freshCookie;

    setNewCookie($freshCookie);
    header('Location: check.php');

}