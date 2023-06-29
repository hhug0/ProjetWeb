<?php include 'database.php'; ?>
<?php
    if(isset($_POST['soumettre'])){
        //Get post variables
        $question_number = $_POST['question_number'];
        $question_text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];
        //Choices array
        $choices = array();
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        $choices[5] = $_POST['choice5'];

        //Question query
        $query = "INSERT INTO questions(question_number, text)
                    VALUES('$question_number', '$question_text')";

        //Run query
        $insert_row =  $mysqli->query($query) or die($mysqli->error.__LINE__);
        
        if ($insert_row) {
            foreach ($choices as $choice => $value) {
                if ($value != '') {
                    if ($correct_choice == $choice) {
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }
                    // Choice query
                    $query = "INSERT INTO choices (question_number, is_correct, text)
                              VALUES ('$question_number', '$is_correct', '$value')";
        
                    // Run query
                    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
        
                    // Validate insert
                    if ($insert_row) {
                        continue;
                    } else {
                        die('Error: (' . $mysqli->errno . ') ' . $mysqli->error);
                    }
                }
            }
            $msg = 'La question a été ajoutée';
        }
    }        
    /*
     * Get total questions
     */
    $query = "SELECT * FROM questions ";
    //Get the Results
    $questions = $mysqli->query($query) or die (mysqli->error.__LINE__);
    $total = $questions->num_rows;
    $next = $total+1;
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
                <h2>Ajouter une question</h2>
                <?php
                    if(isset($msg)) {
                        echo '<p>'. $msg. '</p>';
                    }
                ?>
                <form method="post" action="add.php">
                    <p>
                        <label>Numéro de question: </label>
                        <input type="number" value="<?php echo $next; ?>" name="question_number" />

                    </p>
                    <p>
                        <label>Texte des questions: </label>
                        <input type="text" name="question_text" />

                    </p>
                    <p>
                        <label>Choix #1: </label>
                        <input type="text" name="choice1" />

                    </p>
                    <p>
                        <label>Choix #2: </label>
                        <input type="text" name="choice2" />

                    </p>
                    <p>
                        <label>Choix #3: </label>
                        <input type="text" name="choice3" />

                    </p>
                    <p>
                        <label>Choix #4: </label>
                        <input type="text" name="choice4" />

                    </p>
                    <p>
                        <label>Choix #5: </label>
                        <input type="text" name="choice5" />

                    </p>
                    <p>
                        <label>Numéro de choix correct : </label>
                        <input type="number" name="correct_choice" />

                    </p>
                    <p>
                        <input type="submit" name="soumettre" value="Soumettre" />

                    </p>




                </form>
            </div>
        </main>

    </body>
</html>