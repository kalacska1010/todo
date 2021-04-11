<?php

require './kapcsolat.php';

$ab = new DBkapcsolat();

$varosok = array();
$result = $ab->lekerdez("todo");


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $varosok[] = $row;
    }
    echo json_encode($varosok);
} else {
    echo "0 results";
}
?>
