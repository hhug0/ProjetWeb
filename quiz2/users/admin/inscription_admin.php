<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" href="utilisa.css">
        <meta name="viewport" 
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <title>Inscription</title>
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

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
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
        <li><a href="inscription_admin.php">Créer un Utilisateur</a></li>
        <li><a href="listequizz.php">Jouer</a></li>
        <li><a href="add.php">Création de Quizz</a></li>
        <li><a href="resultat.php">Gestion des Quizz</a></li>
        <li><a href="../traitement/deconnexion.php">Déconnexion</a></li>
    </ul>

    <br></br>
    <form action="../traitement/inscription_traitement_admin.php" method="post">
        <h3>Créer un utilisateur</h3>
        <br></br>
        <input type="text" name="pseudo" placeholder="Pseudo" required="required">
        <input type="email" name="email" placeholder="Email" required="required">
        <input type="password" name="password" placeholder="Mot de passe" required="required">
        <input type="password" name="password_retype" placeholder="Re-tapez le mot de passe" required="required">
        <select name="role">
            <option value="joueur">Joueur</option>
            <option value="quizzeur">Quizzeur</option>
        </select>
        <button type="submit">Inscription</button>
    </form>
</body>
</html>