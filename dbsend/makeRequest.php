<?php

require '../connection/connect.php';

$check = $_REQUEST['check'];
$people = $_REQUEST['people'];
$child = $_REQUEST['child'];
$length = $_REQUEST['length'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];
/* $checkyes = $_REQUEST['checkyes']; */
$price = $_REQUEST['price'];
/* $budget = $_REQUEST['budget']; */
$session = $_REQUEST['session'];
$checkDriver = $_REQUEST['checkDriver'];

if ($_REQUEST['task'] == "request") {
    $query = "INSERT INTO tourrequest (`name`, `city`, `length`, `people`, `child`, `arrival`, `departure`, `price`, `driver`) VALUES ('$session', '$check', '$length', '$people', '$child', '$arrival', '$departure', '$price', '$checkDriver')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
