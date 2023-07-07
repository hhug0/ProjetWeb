<?php include 'database.php'; ?>

<?php
if (isset($_POST['soumettre'])) {
    // Get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    $titre_quiz = $_POST['titre_quiz'];
    $quiz_id = $_POST['quiz_id'];

    // Choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];

    // Insert quiz
    $quiz_query = "INSERT INTO quiz (Titre, quiz_id) VALUES (?, ?)";
    $stmt = $mysqli->prepare($quiz_query);
    $stmt->bind_param("si", $titre_quiz, $quiz_id);
    $stmt->execute();

    if ($stmt) {
        $stmt->close();
        // Insert question
        $question_query = "INSERT INTO question (question_number, text, quiz_id) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($question_query);
        $stmt->bind_param("isi", $question_number, $question_text, $quiz_id);
        $stmt->execute();

        if ($stmt) {
            $stmt->close();
            // Insert choices
            foreach ($choices as $choice => $value) {
                if (!empty($value)) {
                    $is_correct = ($correct_choice == $choice) ? 1 : 0;
                    $choice_query = "INSERT INTO choices (question_number, is_correct, text) VALUES (?, ?, ?)";
                    $stmt = $mysqli->prepare($choice_query);
                    $stmt->bind_param("iis", $question_number, $is_correct, $value);
                    $stmt->execute();

                    if (!$stmt) {
                        die('Error: (' . $mysqli->errno . ') ' . $mysqli->error);
                    }

                    $stmt->close();
                }
            }
            $msg = 'La question a été ajoutée';
            echo '<p>' . $msg . ' - <a href="resultat.php">Voir les résultats</a></p>';
        }
    }
}

/*
 * Get total questions
 */
$query = "SELECT * FROM question ";
// Get the Results
$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $questions->num_rows;
$next = $total + 1;
?>

<!-- Rest of your HTML code -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Questionnaire PHP</title>
        <link rel="stylesheet" href="gary.css" type="text/css"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <meta name="viewport" 
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    </head>

    
    <body>
        <!--barre de navigation-->

		<nav class="navbar navbar-dark justify-content-center text-light border yolo">
			<div class="container-fluid mt-6">

			<div class="col p-6">
			<nav class="navbar navbar-dark justify-content-center text-light">
				<div class="link">
			<a class="" href="/quiz2/users/pages/quizzeur.php">
			<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  				<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  				<path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
			</svg>
			</a>
			</div>
			</div>

			<div class="col p-6">
			<div class=kiki>
			<a>
            <img src="https://cdn2.trictrac.net/documents/formats/news_xlarge/documents/originals/6b/4c/b24a9d99bc500a729e1947ddcd3c2a82f1a44ff11a31b072dd5071618055.jpeg" alt="logo" height="100px" width="250px">
            </a>
			</div>
			</div>

			<div class="col p-6"></div>
		</div>
        </nav>


        <main>
            <div class="container">
                <?php
                    if (isset($msg)) {
                        echo '<p>'. $msg. '</p>';
                    }
                ?>
                <form method="post" action="add.php">
                    <label>Titre de quiz</label>
                    <br></br>
                    <input type="text" class="form-control" name="titre_quiz">
                    
                    <p>
                        <label>Quiz ID:  </label>
                        <br></br>
                        <input type="number" value="<?php echo $next; ?>" name="quiz_id" />
                    </p>

                    <p>
                        <label>Numéro de question: </label>
                        <br></br>
                        <input type="number" value="<?php echo $next; ?>" name="question_number" />
                    </p>
                    <p>
                        <label>Texte des questions: </label>
                        <br></br>
                        <input type="text" name="question_text" />
                    </p>
                    <p>
                        <label>Choix #1: </label>
                        <br></br>
                        <input type="text" name="choice1" />
                    </p>
                    <p>
                        <label>Choix #2: </label>
                        <br></br>
                        <input type="text" name="choice2" />
                    </p>
                    <p>
                        <label>Choix #3: </label>
                        <br></br>
                        <input type="text" name="choice3" />
                    </p>
                    <p>
                        <label>Choix #4: </label>
                        <br></br>
                        <input type="text" name="choice4" />
                    </p>
                    <p>
                        <label>Choix #5: </label>
                        <br></br>
                        <input type="text" name="choice5" />
                    </p>
                    <p>
                        <label>Numéro de choix correct: </label>
                        <br></br>
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
