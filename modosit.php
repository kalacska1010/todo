<?php

require './kapcsolat.php';
 $ab = new DBkapcsolat();
$id = $_GET['id'];
 $sql = $ab->modosit("todo", "allapott=1", "id= '$id'");
