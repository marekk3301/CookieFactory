<?php
include 'functions.php';
?>

<html lang="">
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form class="start" method="post" action="index.php">
        <input class="username" type="text" placeholder="username" name="username"><br>
        <input class="maxTurns" type="number" min="1" max="50" step="1" value="5" name="maxTurns"><br>
        <label><input class="difficulty" type="radio" value="easy" name="difficulty">Łatwy</label><br>
        <label><input class="difficulty" type="radio" value="medium" name="difficulty">Średni</label><br>
        <label><input class="difficulty" type="radio" value="hard" name="difficulty">Trudny</label><br><br>
        <input class="play" type="submit" value="play" name="play">
    </form>

    <?php
    if (isset($_POST['play'])) {
        setcookie("test", "test", time()+15);           //ciasteczko testowe - nie można grac bez wlaczonych ciasteczek

        $_SESSION['username'] = $_POST['username'];     //nazwa użytkownika
        $_SESSION['maxTurns'] = $_POST['maxTurns'];     //ilość rund

        switch ($_POST['difficulty']) {
            case 'easy':
                $difficulty = 1;
                break;
            case 'medium':
                $difficulty = 2;
                break;
            case 'hard':
                $difficulty = 3;
                break;
        }

        $_SESSION['difficulty'] = $difficulty;          //poziom trudności - wpływa na czas widoczności zamowienia
        $_SESSION['turns'] = 0;                         //deklaruje zmienna do liczenia rund
        $_SESSION['points'] = 0;                        //deklaruje zmienna do liczenia punktów

        header( 'Location: checkCookies.php');
    }
    ?>
    </body>
</html>
