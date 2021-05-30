<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="centered">
    <?php
    session_start();
    echo "<h4>Good Job " . $_SESSION['username'] . "!</h4><br>";
    echo "You've got <b>" . $_SESSION['points'] . '</b> points<br><br>';
    session_destroy();
    ?>
    <a href="index.php"><input class="restart" type="submit" value="restart now" name="restart"></a>
</div>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
<script>
    var count = 400;
    var defaults = {
        origin: { y: 0.7 }
    };

    function fire(particleRatio, opts) {
        confetti(Object.assign({}, defaults, opts, {
            particleCount: Math.floor(count * particleRatio)
        }));
    }

    fire(0.25, {
        spread: 26,
        startVelocity: 55,
    });
    fire(0.2, {
        spread: 60,
    });
    fire(0.35, {
        spread: 100,
        decay: 0.91,
        scalar: 0.8
    });
    fire(0.1, {
        spread: 120,
        startVelocity: 25,
        decay: 0.92,
        scalar: 1.2
    });
    fire(0.1, {
        spread: 120,
        startVelocity: 45,
    });
</script>

</body>
</html>
