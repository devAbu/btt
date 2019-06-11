<?php

require "connection/connect.php";

$sql = "SELECT `feedback` from `carfeedback` where `carID` = 2";
$result = $dbc->query($sql);

$count = $result->num_rows;

if ($count > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<ul>
                <li>' . $row["feedback"] . ' </li> 
            </ul>';
    }
}
