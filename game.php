<?php
//session_start();
include_once 'Cookie.php';
include 'functions.php';

echo "<h1 style='text-align: end; font-size: 50px'> Runda: " . $_SESSION['turns'] + 1 . "</h1>";

//$mleko = 1;

$ciasta = $_SESSION['ciasta'];
$polewy = $_SESSION['polewy'];
$dodatki = $_SESSION['dodatki'];

echo $_SESSION['ordered'];

?>

<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="factory">
    <img src="cookie_factory.png">

    <form class="factory__form" method="post" action="set.php">
        <div class="form__element">
            <h4>Rodzaj Ciasta</h4>
            <?php
            for ($i=0; $i<sizeof($ciasta); $i++) {
                echo "<label><input type='radio' name='ciasto' value=$ciasta[$i] required> $ciasta[$i]</label><br>";
            }
            ?>
        </div>
        <div class="form__element">
            <h4>Polewa</h4>
            <?php
            for ($i=1; $i<sizeof($polewy); $i++) {
                echo "<label><input type='radio' name='polewa' value=$polewy[$i]> $polewy[$i]</label><br>";
            }
            ?>
        </div>
        <div class="form__element">
            <h4>Dodatki</h4>
            <?php
            for ($i=1; $i<sizeof($dodatki); $i++) {
                echo "<label><input type='radio' name='dodatek' value=$dodatki[$i]> $dodatki[$i]</label><br>";
            }
            ?>
        </div>
        <div class="form__element milk">
            <label><input type="checkbox" name="mleko" value="1">Mleko</label>
        </div><br>
        <input class="form__submit" type="submit" value="Gotowe" name="submit">
    </form>
</div>

<?php

?>

</body>
</html>
