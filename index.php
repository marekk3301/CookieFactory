<?php

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form class="start" method="post" action="index.php">
        <input class="name" type="text" value="baker baker cookie maker" name="username"><br><br>
        <input class="play" type="submit" value="play" name="play">
    </form>

    <?php
    if (isset($_POST['play'])) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header( 'Location: order.php' );
    }
    ?>
    </body>
</html>
