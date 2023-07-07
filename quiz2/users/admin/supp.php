<?php
include '../config.php';
session_start();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $get_id = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $recupUser->execute(array($get_id));
    if($recupUser->rowCount() > 0){
        $suppUser = $bdd->prepare('DELETE FROM user WHERE id = ?');
        $suppUser->execute(array($get_id));

        header('Location: user.php');
        exit(); // Ajout d'une instruction d'arrêt après la redirection
    }
    else{
        echo "Aucun utilisateur n'a été trouvé";
    }
}
else {
    echo "L'ID n'a pas été récupéré";
}
?>