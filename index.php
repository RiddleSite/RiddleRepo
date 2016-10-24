<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="web_effects.js" type="text/javascript"></script>
    <script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
    </script>
    <script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
    <link rel="shortcut icon" href="favicon.ico" type="favicon/ico">

    <title>Enigmatic Mathematics</title>

</head>
<body>
<?php require 'navBar.php'; navBarMake(); ?>
<main class="mainBody">
    <div class="welcomeMsg">
        <h1>
            Hello!
        </h1>
        <p>
            You have arrived at
        </p>
        <p>
            $\sum \mathbb{N} \Im G^{M} \forall  \Upsilon \Phi \zeta $ $\boldsymbol{M} \partial \mathit{T} \frac{h }{\xi  } \mathfrak{M} \Lambda \Gamma \Psi \varsigma \mathfrak{s}$
        </p>
        <p>
            the first stop for math riddlers and freakoids!
        </p>

    </div>
    <div class="featRiddle">
        <header class="featRiddleTitle">
            <?php
                echo "Monty Hall Problem";
            ?>
        </header>
        <p style="font-family: 'PT Serif', serif; font-size: .9em;">
                <?php
                $userName = "Isa Milefchik";
                echo "Sumbitted by <em>" . $userName . "</em>";
                ?>
        </p>
        <hr>
        <p class="featRiddleInfo">

                "Suppose you're on a game show, and you're given the choice of three doors: Behind one door is a car; behind the others, goats. You pick a door, say No. 1, and the host, who knows what's behind the doors, opens another door, say No. 3, which has a goat. He then says to you, "Do you want to pick door No. 2?" Is it to your advantage to switch your choice?"
        </p>
    </div>
<!--    Maybe instead we could have a space in which we talk about the site? This feels more appropriate for the riddles page-->
</main>
</body>
</html>
