<?php

require './kapcsolat.php';
$ab = new DBkapcsolat();
$id = $_GET["id"];
$sql = $ab->torol("todo", "id='$id'");

