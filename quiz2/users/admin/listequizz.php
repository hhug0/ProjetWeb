<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" href="buton.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <meta name="viewport">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
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
        <li><a href="inscription_admin.php">Créer un utilisateur</a></li>
        <li><a href="#">Jouer</a></li>
        <li><a href="add.php">Créer un Quizz</a></li>
        <li><a href="resultat.php">Gestion des Quizz</a></li>
        <li><a href="../traitement/deconnexion.php">Déconnexion</a></li>
    </ul>


    <!--Quizz-->
    <br></br>
    <br></br>

    <h1 style="text-align: center; font-family: 'Acme', sans-serif; color: yellow;">Liste des Quizz</h1>

  <br></br>
  <a href="../quizutilisateur/drama.html" class="button"><h4 style="font-family: 'Acme', sans-serif; color: yellow">Films Dramatiques</h4></a>
  <a href="../quizutilisateur/action.html" class="button"><h4 style="font-family: 'Acme', sans-serif; color: yellow">Films d'Actions</h4></a>
  <a href="../quizutilisateur/disney.html" class="button"><h4 style="font-family: 'Acme', sans-serif; color: yellow">Films Disney</h4></a>

  <img class ="clapper" src="theatre.png" alt="clapper">
  <img class ="disney" src="disney.png" alt="disney">

  
  </body>
</html>