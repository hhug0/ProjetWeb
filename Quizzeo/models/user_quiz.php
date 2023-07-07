<?php
class user_quiz {
    private $id_user;
    private $id_quiz;
    private $score;

    /* ID utilisateur */
    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    /* ID quiz */
    public function setIdQuiz($id_quiz) {
        $this->id_quiz = $id_quiz;
    }

    public function getIdQuiz() {
        return $this->id_quiz;
    }

    /* Score */
    public function setScore($score) {
        $this->score = $score;
    }

    public function getScore() {
        return $this->score;
    }
}
