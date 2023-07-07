<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <head>
            <meta charset="UTF-8" />
            <title>Questionnaire PHP</title>
            <link rel="stylesheet" href="final.css" type="text/css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        </head>

    </head>
    <body>
        <br></br>
        <a class="jojo" href="../pages/quizzeur.php" title="home">
        <img src="back.png" alt="logo" height="50px" width="50px">
        </a>

        <a class="jiji">
        <img class="clapper" src="clapperboard.png" alt="jiji">
        </a> 

        <a class="juju">
        <img class="clapper" src="popcorn.png" alt="juju">
        </a> 

        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <header>
            <div class="container">
                <h1 style= "text-align: center; font-family: 'Acme', sans-serif;">Jouer aux Quizz</h1>

            </div>
        </header>
        <main>
            <div class="container">
                <a href="question.php?n=1" class="start"><h2 style= "text-align: center; font-family: 'Acme', sans-serif;">Cliquez pour commencer !</h2></a>
                <p style= "text-align: center; font-family: 'Acme', sans-serif;">Score final: <?php echo $_SESSION['score']; ?> </p>
            </div>
        </main>
        </body>
</html>