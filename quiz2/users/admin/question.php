<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Set question number
$number = (int) $_GET['n'];

 /*
    * Get total questions
    */
$query = "SELECT * FROM question";
// Get result
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;

 /*
 * Get question
 */
$query = "SELECT * FROM question
        WHERE question_number = $number";
        //Get result
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

        $question = $result->fetch_assoc();

        /*
 * Get Choices
 */
$query = "SELECT * FROM choices
WHERE question_number = $number";
//Get results
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
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
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> </div>
                <p class="question">
                    <?php echo $question['text']; ?>
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <?php while($row = $choices->fetch_assoc()): ?>
                            <li><input name="choice" type="radio" value="<?php echo $row['id'];?>" /><?php echo $row['text']; ?> </li>
                        <?php endwhile; ?>  
                        

                    </ul>
                    <input type="submit" value="Soumettre" />
                    <input type="hidden" name="number" value="<?php echo $number; ?>" />
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                 Copyright  &copy; 2023, Questionnaire PHP
            </div>
        </footer>

    </body>
</html>