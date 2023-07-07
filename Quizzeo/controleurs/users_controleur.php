<?php 
include_once"models/user.php"
class user_controleur{
    private $bdd;
        function user_controleur(){
            $this->bdd = connexion::getConnexion(); 
        }

    /* Création users */
    public fonction create(user $user){
        $query = "INSERT INTO user (pseudo, email, password, role) VALUES (?,?,?,?)";
        $statement = $this->bdd->($query);
        return $statement->execute([$user->getPseudo(),$user->getEmail(),$user->getPassword,$user->getRole()]); 
    }

    /* Modification users */
    public fonction modifier(user $user){
        $query = "UPDATE user SET pseudo=?, email=?, password=?, role=? WHERE id =?";
        $statement = $this->bdd->($query);
        return $statement->execute([$user->getPseudo(),$user->getEmail(),$user->getPassword,$user->getRole(),$user->getid]); 
    }

    /* Suppresion users */
    public fonction supprimer($id){
        $query = "DELETE FROM user WHERE id =?";
        $statement = $this->bdd->($query);
        return $statement->execute([$id]); 
    }

    /* Selection users */
    public fonction select($id){
        $query = "DELETE FROM user WHERE id =?";
        $statement = $this->bdd->($query);
        return $statement->execute([$id]); 
    }

}