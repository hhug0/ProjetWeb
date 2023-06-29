<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <head>
            <meta charset="UTF-8" />
            <title>Questionnaire PHP</title>
            <link rel="stylesheet" href="css/style.css" type="text/css" />
        </head>

    </head>
    <body>
        <header>
            <div class="container">
                <h1>Questionnaire PHP</h1>

            </div>
        </header>
        <main>
            <div class="container">
                <h2>Vous avez terminé!</h2>
                <p>Bravo! Vous avez terminé le test </p>
                <p>Score final: <?php echo $_SESSION['score']; ?> </p>
                <a href="question.php?n=1" class="start">Prendre encore</a>
            </div>
        </main>
        <footer>
            <div class="container">
                 Copyright  &copy; 2023, Questionnaire PHP
            </div>
        </footer>
        </body>
</html>