<?php 
    session_start();
    require_once '../config.php'; // ajout connexion bdd 
    // si la session n'existe pas ou si l'on n'est pas connecté, on redirige
    if(!isset($_SESSION['admin'])){
        header('Location:index.php');
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
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
    </style>
</head>
<body>
    <ul class="navbar">
        <li><a href="../pages/admin.php">Accueil</a></li>
        <li><a href="user.php">Utilisateur</a></li>
        <li><a href="inscription_admin.php">Création Utilisateur</a></li>
        <li><a href="#">Quiz</a></li>
        <li><a href="#">Création Quiz</a></li>
        <li><a href="#">Gestion Quiz</a></li>
        <li><a href="../traitement/deconnexion.php">Déconnexion</a></li>
    </ul>
    <h1>Liste des utilisateurs</h1>
    <!-- Afficher les utilisateurs -->
    <table>
        <tr>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php 
            $recupUser = $bdd->query('SELECT * FROM user');
            while($user = $recupUser->fetch()){
                echo '<tr>';
                echo '<td>'.$user['pseudo'].'</td>';
                echo '<td>'.$user['email'].'</td>';
                echo '<td>'.$user['role'].'</td>';
                echo '<td><a href="modif.php?id='.$user['id'].'" class="edit-button">Modifier</a></td>';
                echo '<td><a href="supp.php?id='.$user['id'].'" class="delete-button">Supprimer</a></td>';

                echo '</tr>';
            }
            $recupUser->closeCursor(); // Fermer la requête pour libérer les ressources
        ?>
    </table>
</body>
</html>