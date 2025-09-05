<?php

require "../classes/User.php";

$obj = new User;
$obj->login($_POST);

?>