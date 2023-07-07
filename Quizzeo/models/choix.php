<?php
class choix {
    private $id;
    private $reponse;
    private $bonnereponse;
    private $id_question;

    /* ID */
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    /* Réponse */
    public function setReponse($reponse) {
        $this->reponse = $reponse;
    }

    public function getReponse() {
        return $this->reponse;
    }

    /* Bonne réponse */
    public function setBonneReponse($bonneReponse) {
        $this->bonnereponse = $bonneReponse;
    }

    public function getBonneReponse() {
        return $this->bonnereponse;
    }

    /* ID question */
    public function setIdQuestion($id_question) {
        $this->id_question = $id_question;
    }

    public function getIdQuestion() {
        return $this->id_question;
    }
}
