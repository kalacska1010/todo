<?php

require './kapcsolat.php';
$ab = new DBkapcsolat();
$datum = $_POST['datum'];
$szoveg = $_POST['szoveg'];
$allapot = 0;
$result = $ab->ujRekord("todo", "(`id`, `todo`, `datum`, `allapott`)", "(null,'$szoveg','$datum','$allapot')");

