<?php

class User {

    private $id;
    private $email;
    private $createdAt;

    public function __construct($id, $email){
        $this->id = $id;
        $this->email = $email;
        $this->createAt = date(DATE_RFC2822);

    }
    public function id(){
        return $this->id . '<br>';
    }
    public function email(){
        return $this->email . '<br>';
    }
    public function createAt(){
        return $this->createAt . '<br>';
    }
};

?>