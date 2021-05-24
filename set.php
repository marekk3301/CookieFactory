<?php
//session_start();
include 'functions.php';

if (isset($_POST['submit'])) {
    $polewa = isset($_POST['polewa']) ? $_POST['polewa'] : 'none';
    $dodatek = isset($_POST['dodatek']) ? $_POST['dodatek'] : 'none';
    $mleko = isset($_POST['mleko']) ? 1 : 0;

    $_SESSION['freshCookie'] = ['ciasto' => $_POST['ciasto'], 'polewa' => $polewa, 'dodatek' => $dodatek, 'mleko' => $mleko];

    setNewCookie(['ciasto' => $_POST['ciasto'], 'polewa' => $polewa, 'dodatek' => $dodatek, 'mleko' => $mleko]);
    header('Location: check.php');

}