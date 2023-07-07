<?php
include '../config.php';
session_start();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $get_id = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $recupUser->execute(array($get_id));
    if($recupUser->rowCount() > 0){
        // Récupérer les informations de l'utilisateur
        $user = $recupUser->fetch();

        // Vérifier si des données de formulaire ont été soumises
        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['role'])){
            // Mettre à jour les informations de l'utilisateur
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            $updateUser = $bdd->prepare('UPDATE user SET pseudo = ?, email = ?, role = ? WHERE id = ?');
            $updateUser->execute(array($pseudo, $email, $role, $get_id));

            header('Location: user.php');
            exit(); // Ajout d'une instruction d'arrêt après la redirection
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier l'utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        h1 {
            color: #333;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="email"] {
            width: 300px;
            padding: 6px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        header {
            margin-bottom: 20px;
        }

        header a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <a href="user.php">&lt; Retour à la liste des utilisateurs</a>
    </header>
    <h1>Modifier l'utilisateur</h1>
    <form method="POST" action="">
        <label for="pseudo">Pseudo:</label>
        <input type="text" name="pseudo" value="<?php echo $user['pseudo']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <label for="role">Role:</label>
        <input type="text" name="role" value="<?php echo $user['role']; ?>"><br><br>
        <input type="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>
<?php
    }
    else{
        echo "Aucun utilisateur n'a été trouvé";
    }
}
else {
    echo "L'ID n'a pas été récupéré";
}
?>