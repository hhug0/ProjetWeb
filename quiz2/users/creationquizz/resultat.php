<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="resultat.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <meta name="viewport" 
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Résultats du Quiz</title>
    <style>
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
  
li {
    float: left;
}
  
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
  
li a:hover {
    background-color: #111;
}

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .button {
            padding: 6px 10px;
            background-color: #4CAF50;background-color: #f44336; /* Couleur rouge */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <!--barre de navigation-->

    <nav class="navbar navbar-dark justify-content-center text-light border yolo">
			<div class="container-fluid mt-6">

			<div class="col p-6">
			<nav class="navbar navbar-dark justify-content-center text-light">
			<div class="link">
			<a class="" href="/quiz2/users/pages/quizzeur.php">
            <a class="" href="..">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
          <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
          </svg>
			</a>
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

			<div class="col p-6">
            </div>
		</div>
      </nav>
      <br></br>

      <h1 style="text-align: center; font-family: 'Acme', sans-serif; color: black">Gestionnaire des quizz</h1>
    
    <br></br>  
    <?php
    // Connexion à la base de données MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz2";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    // Requête SQL
    $sql = "SELECT DISTINCT quiz.titre, question.text, question.question_number, choices.text AS reponse, choices.is_correct
            FROM quiz, question, choices
            WHERE quiz.quiz_id = question.quiz_id
            AND question.question_number = choices.question_number";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Affichage des résultats sous forme de table
        echo "<table>";
        echo "<tr><th>Titre du quiz</th><th>Texte de la question</th><th>Réponse</th><th>Est correcte</th><th>Actions</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr id='" . $row["question_number"] . "'>";
            echo "<td>" . $row["titre"] . "</td>";
            echo "<td>" . $row["text"] . "</td>";
            echo "<td>" . $row["reponse"] . "</td>";
            echo "<td>" . $row["is_correct"] . "</td>";
            echo "<td>";
          
            
            echo "<button class='button' onclick='deleteRow(" . $row["question_number"] . ")'>Supprimer</button>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
    ?>

    <script>
        function deleteRow(questionNumber) {
            // Code pour supprimer la ligne avec l'identifiant questionNumber
            var row = document.getElementById(questionNumber);
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>
