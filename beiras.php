<?php

require './feldolgoz.php';
$ab = new DBkapcsolat();
$datum = $_POST["datum"];
$szoveg = $_POST["szoveg"];
$mySql->ujRekord("todo", "(`id`, `todo`, `datum`, `allapott`)", "(null,'$szoveg','$datum','0')");


