<?php

include './admin.php';
include_once'./persona.php';
include './user.php';

$user = new User;
$user->type = new Admin;
echo $user->type->Saludo();
