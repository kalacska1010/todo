<?php

require './feldolgoz.php';
 $ab = new DBkapcsolat();
 
 $szoveg= $_POST['szoveg'];
 $datum= $_POST['datum'];
 $sql = $ab->modosit("todo", "sz", $where);