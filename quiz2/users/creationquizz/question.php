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
            <link rel="stylesheet" href="final.css" type="text/css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
            <meta name="viewport" 
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

                
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="js/bootstrap.min.js">
            <meta name="viewport" 
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        </head>

    </head>
    <body>
        <br></br>
        <div class="container loki">
            <div class="rows">
            <div class="col-p6"></div>
        <header>
                <h1 style="text-align: center; font-family: 'Acme', sans-serif;">Questionnaire</h1>

        </header>

        <div class="col-p6">
        <main>
            <br></br>
                <div class="current" style="font-family: 'Acme', sans-serif;"><h4>Question<?php echo $question['question_number']; ?> of <?php echo $total; ?> </h4></div>
                <br></br>
                <h4 class="question" style="font-family: 'Acme', sans-serif;">
                    <?php echo $question['text']; ?>
                </h4>

                <br></br>
                <form method="post" action="process.php" style="font-family: 'Acme', sans-serif;">
                    <ul class="choices">
                        <?php while($row = $choices->fetch_assoc()): ?>
                            <li><input name="choice" type="radio" value="<?php echo $row['id'];?>" /><?php echo $row['text']; ?> </li>
                        <?php endwhile; ?>  
                        

                    </ul>
                    <input type="submit" value="Soumettre" />
                    <input type="hidden" name="number" value="<?php echo $number; ?>" />
                </form>
        </main>
        <div class="col-p6"></div>
        </div>
        </div>
    </body>
</html>