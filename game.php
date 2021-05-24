<?php
//session_start();
include 'functions.php';

$_SESSION['turns'] = 0; //deklaruje zmienna do liczenia rund


//$mleko = 1;

$ciasta = $_SESSION['ciasta'];
$polewy = $_SESSION['polewy'];
$dodatki = $_SESSION['dodatki'];

var_dump($_SESSION['ordered']);

?>

<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="set.php">
    <div class="form__element">
        <?php
        for ($i=0; $i<sizeof($ciasta); $i++) {
            echo "<label><input type='radio' name='ciasto' value=$ciasta[$i] required> $ciasta[$i]</label><br>";
        }
        ?>
    </div>
    <div class="form__element">
        <?php
        for ($i=1; $i<sizeof($polewy); $i++) {
            echo "<label><input type='radio' name='polewa' value=$polewy[$i]> $polewy[$i]</label><br>";
        }
        ?>
    </div>
    <div class="form__element">
        <?php
        for ($i=1; $i<sizeof($dodatki); $i++) {
            echo "<label><input type='checkbox' name='dodatek' value=$dodatki[$i]> $dodatki[$i]</label><br>";
        }
        ?>
    </div>
    <div class="form__element">
        <label><input type="checkbox" name="mleko" value="1">Mleko</label>
    </div>
    <input type="submit" value="Gotowe" name="submit">
</form>

<?php

?>

</body>
</html>
