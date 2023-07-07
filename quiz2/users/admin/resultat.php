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
        <li><a href="#">Gestion des Quizz</a></li>
        <li><a href="../traitement/deconnexion.php">Déconnexion</a></li>
    </ul>

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
