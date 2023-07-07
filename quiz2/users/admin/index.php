
<?php include 'database.php'; ?>
<?php
/*
 * Get total Questions
 */
 $query ="SELECT * FROM question";
 // Get results
 $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
 $total = $results->num_rows;
?>
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
                <h2>Testez vos connaissances PHP </h2>
                <p>Ceci est un quiz à choix multiples pour tester vos connaissances en PHP</php>
                <ul>
                    <li><strong>Nombre de questions : </strong><?php echo $total; ?></li>
                    <li><strong>Taper:  </strong>Plusieurs</li>
                    <li><strong>Temps estimé:  </strong><?php echo $total * .5; ?> Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">Démarrer le questionnaire</a>

            </div>
        </main>
        <footer>
            <div class="container">
                 Copyright  &copy; 2023, Questionnaire PHP
            </div>
        </footer>

    </body>
</html>