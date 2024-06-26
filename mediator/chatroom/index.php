<?php

require_once 'ChatRoom.php';
require_once 'User.php';

$chatRoom = new ChatRoom();

$user1 = new User("ferli", $chatRoom);
$user2 = new User("fauzi", $chatRoom);

$user1->sendMessage("Halo, fauzi!");
$user2->sendMessage("Halo, fer!");

?>
