<?php

    require "../connection/connect.php";

    $id = $_REQUEST["idRes"];
    $feedback = $_REQUEST["feedback"];
    $session = $_REQUEST["session"];

    if($_REQUEST["task"] == "sendFeed"){
        $sql = "INSERT INTO tourFeedback (`name`, `tourID`, `feedback`) VALUES ('$session', $id, '$feedback')";

        $response = @mysqli_query($dbc, $sql);
        if ($response) {
            echo ('sent');
        } else {
            echo mysqli_error($dbc);
        }
    }

?>