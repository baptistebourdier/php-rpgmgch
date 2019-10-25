<?php

class User {

    private $id;
    private $email;
    private $createdAt;

    public function __construct($id, $email, $createdAt){
        $this->id = $id;
        $this->email = $email;
        $this->createAt = $createdAt;

    }
    public function id(){
        return $this->id . '<br>';
    }
    public function email(){
        return $this->email . '<br>';
    }
    public function createAt(){
        return $this->createAt(date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))) . '<br>';
    }
};

$client1 = new User('Bourdier', 'baptiste@gmail.com', 24/10/2019);
$client2 = new User('Toto', 'toto@gmail.com','(2019/10/25)');
echo $client1->id();
echo $client1->email();
echo $client1->createAt();
echo $client2->id();
echo $client2->email();
echo $client2->createAt();
?>