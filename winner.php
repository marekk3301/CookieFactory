<?php
include 'functions.php';
    header( "refresh:3.5;url=order.php" );
?>

<html lang="">
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            /*background: #333;*/
        }
        div{
            width: 10px;
            height: 10px;
            position: fixed;
            top: -15px;
            box-shadow: 0 0 2px #444;
            -webkit-animation: floating 2s ease-in, rotating .5s ease-in-out infinite;
        }

        .paper1{
            background: #e83415;
        }
        .paper2{
            background: GreenYellow;
        }
        .paper3{
            background: #01dcf5;
        }
        .paper4{
            background: yellow;
        }
        .paper5{
            background: orange;
        }
        .paper6{
            background: #11D;
        }
        .paper7{
            background: Fuchsia;
        }

        @-webkit-keyframes floating{
            from {top: -15px}
            to {top: 100%}
        }
        @-keyframes floating{
            from {top: 0}
            to {top: 1000px}
        }

        @-webkit-keyframes rotating{
            0% {transform: rotateZ(0deg) rotateX(0deg);}
            50% {transform: rotateZ(45deg) rotateX(180deg);}
            100% {transform: rotateZ(0deg) rotateX(360deg);}
        }
    </style>
</head>
<body>

<span class="board"><span class="shadow"></span><?php drawBoard($_SESSION['freshCookie'])?> <p class="result">WINNER</p></span>

<script>
        var inc = 1;

        function _(id){
            return document.getElementById(id);
        }
        function reset(v){
            document.body.innerHTML = '';
            inc = 1;
        }

        function clearnode(node){
            setTimeout(function(){
                _(node).parentNode.removeChild(_(node));
            }, 1000*2);
        }

        setInterval(function(){
            if (inc < 999999999999999) inc++;
            else reset(inc);
            var div = document.createElement('div');
            let temp = Math.floor((Math.random() * 7) + 1 );
            div.id = 'paper'+inc;
            div.style.webkitAnimationDuration = (Math.random()+1.5)+'s, 0.5s';
            div.style.height = eval(7+Math.floor((Math.random() * 7) + 1 )-2)+'px';
            div.style.width = div.style.height;
            div.className = 'paper paper'+temp;
            div.style.left = Math.floor((Math.random() * 100) + 1)+'%';
            document.body.append(div);
            clearnode(div.id);
        }, 10);
    </script>

</body>
</html>
