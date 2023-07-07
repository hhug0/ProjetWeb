<?php
class quiz {
    private $id;
    private $titre;
    private $difficulte;
    private $date_creation;
    private $id_user;

    /* ID */
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    /* Titre */
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getTitre() {
        return $this->titre;
    }

    /* Difficulté */
    public function setDifficulte($difficulte) {
        $this->difficulte = $difficulte;
    }

    public function getDifficulte() {
        return $this->difficulte;
    }

    /* Date de création */
    public function setDateCreation($date_creation) {
        $this->date_creation = $date_creation;
    }

    public function getDateCreation() {
        return $this->date_creation;
    }

    /* ID utilisateur */
    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getIdUser() {
        return $this->id_user;
    }
}