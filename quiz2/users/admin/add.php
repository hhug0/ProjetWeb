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
        <style> 
        .main{
            padding-left: 40%
        }

        h1 {
            color: #333;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        a {
            color: #333;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        .delete-button {
            background-color: #ff0000;
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .delete-button:hover {
            background-color: #cc0000;
        }
        
        .edit-button {
            background-color: #007bff;
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .edit-button:hover {
            background-color: #0056b3;
        }
        
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            margin-bottom: 20px;
        }
        
        ul.navbar li {
            float: left;
        }
        
        ul.navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        ul.navbar li a:hover {
            background-color: #111;
        }

        .input{
            margin-left: 200px;
        }
    </style>
</head>

<body>
        <!--barre de navigation-->

        <nav class="navbar navbar-dark justify-content-center text-light border yolo">
			<div class="container-fluid mt-6">

			<div class="col p-6">
			<nav class="navbar navbar-dark justify-content-center text-light">
			</div>

			<div class="col p-6">
			<div class=kiki>
			  <a>
          <img src="https://cdn2.trictrac.net/documents/formats/news_xlarge/documents/originals/6b/4c/b24a9d99bc500a729e1947ddcd3c2a82f1a44ff11a31b072dd5071618055.jpeg" alt="logo" height="100px" width="250px">
        </a>
			</div>
			</div>

		<div class="col p-6">
        </div>
        </div>
      </nav>

    <ul class="navbar">
        <li><a href="../pages/admin.php">Liste des utilisateurs</a></li>
        <li><a href="inscription_admin.php">Créer un Utilisateur</a></li>
        <li><a href="listequizz.php">Jouer</a></li>
        <li><a href="add.php">Créer un Quizz</a></li>
        <li><a href="resultat.php">Gestion des Quizz</a></li>
        <li><a href="../traitement/deconnexion.php">Déconnexion</a></li>
    </ul>


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
