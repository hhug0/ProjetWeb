<?php
class question {
    private $id;
    private $intituleQuestion;
    private $difficulte;
    private $date_creation;
    private $id_quiz;

    /* ID */
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    /* Intitulé de la question */
    public function setIntituleQuestion($intituleQuestion) {
        $this->intituleQuestion = $intituleQuestion;
    }

    public function getIntituleQuestion() {
        return $this->intituleQuestion;
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

    /* ID quiz */
    public function setIdQuiz($id_quiz) {
        $this->id_quiz = $id_quiz;
    }

    public function getIdQuiz() {
        return $this->id_quiz;
    }
}