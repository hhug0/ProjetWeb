<?php 

class connection {
    const HOST = "localhost";
    const DBNAME = "quizzeo";
    const USER = "root";
    const PASS = "root";

    public static function getConnection() {
        try {
            $bdd = new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USER, self::PASS);
            echo "Je suis connecté";
        } catch(PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
}

// Appel de la méthode getConnection()
Connection::getConnection();




// try 
// {
//     $bdd = new PDO("mysql:host=localhost;dbname=quizzeo;charset=utf8", "root", "root");
//     echo "Je suis connecté";
// }
// catch(PDOException $e)
// {
//     die('Erreur : '.$e->getMessage());
// }