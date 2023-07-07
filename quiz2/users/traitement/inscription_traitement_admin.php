<?php 
    require_once '../config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $role = $_POST['role'];


        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule
        
            // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
            if($row == 0){ 
                // On hash le mot de passe avec Bcrypt, via un coût de 12
                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                // On insère dans la base de données
                $insert = $bdd->prepare('INSERT INTO user (pseudo, email, password, role) VALUES(:pseudo, :email, :password, :role)');
                $insert->execute(array(
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role,
                ));
                // On redirige avec le message de succès
                header('Location:../pages/admin.php');
            die();
        }
    }