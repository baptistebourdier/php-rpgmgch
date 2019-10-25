<?php
$client_tab=[];

include('user.php');
include('Client.php');



$client1 = new User('Bourdier', 'baptiste@gmail.com');
$client2 = new User('Toto', 'toto@gmail.com');


$client_tab = [$client1, $client2];
return [
    $client1,
    $client2
 ];
?>