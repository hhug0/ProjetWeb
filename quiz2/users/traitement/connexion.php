<?php
session_start();
require_once '../config.php';

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);

    $pseudo = strtolower($pseudo);

    $check = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
    $check->execute(array($pseudo));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row > 0) {
        $role = $data['role'];
        if ($role == 'joueur') {
            $_SESSION['user'] = $data; // Assigner les données de l'utilisateur à la session
            header('Location: ../pages/joueur.php');
            exit();
        } elseif ($role == 'quizzeur') {
            $_SESSION['quizzeur'] = $data; // Assigner les données de l'utilisateur à la session
            header('Location: ../pages/quizzeur.php');
            exit();
        } elseif ($role == 'admin') {
            $_SESSION['admin'] = $data; // Assigner les données de l'utilisateur à la session
            header('Location: ../pages/admin.php');
            exit();
        } else {
            echo "Rôle non reconnu";
        }
    } else {
        echo "Identifiants incorrects";
    }
}
?>