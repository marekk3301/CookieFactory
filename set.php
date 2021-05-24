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

 //Fatal error: Uncaught Error: Call to a member function getCiasto() on array in C:\Users\Marekk3301\PhpstormProjects\Cookies Game\functions.php:21 Stack trace: #0 C:\Users\Marekk3301\PhpstormProjects\Cookies Game\results.php(62): drawBoard(Array) #1 {main} thrown in C:\Users\Marekk3301\PhpstormProjects\Cookies Game\functions.php on line 21