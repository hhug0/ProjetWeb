<?php 
    session_start();
    require_once '../config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['admin'])){
        header('Location:../index.php');
        die();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        h1 {
            color: #333;
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
    <ul class="navbar">
        <li><a href="admin.php">Accueil</a></li>
        <li><a href="../admin/user.php">Utilisateur</a></li>
        <li><a href="../admin/inscription_admin.php">Création Utilisateur</a></li>
        <li><a href="#">Quiz</a></li>
        <li><a href="#">Création Quiz</a></li>
        <li><a href="#">Gestion Quiz</a></li>
        <li><a href="../traitement/deconnexion.php">Déconnexion</a></li>
    </ul>
    <h1>Page Admin</h1>
</body>
</html>