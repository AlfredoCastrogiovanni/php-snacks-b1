<?php
$average = 0;
if(isset($_GET['num1']) && isset($_GET['num2']) ) {
    $average = ($_GET['num1'] + $_GET['num2']) / 2;
}

header('Content-Type: application/json');
echo json_encode($average);