<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
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
        
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
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
    <form action="../traitement/inscription_traitement_admin.php" method="post">
        <h2>Inscription</h2>       
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