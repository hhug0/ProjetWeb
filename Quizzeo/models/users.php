<?php
class users {
    private $id;
    private $pseudo;
    private $email;
    private $password;
    private $role;

    /* ID */
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    /* Pseudo */
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    /* Email */
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    /* Password */
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    /* Role */
    public function setRole($role) {
        $this->role = $role;
    }

    public function getRole() {
        return $this->role;
    }
}