<?php

require "../classes/User.php";

$obj = new User;
$obj->update($_POST, $_FILES);

?>