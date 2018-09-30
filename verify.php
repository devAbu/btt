<?php

require('connection/connect.php');

if ($_REQUEST['email']) {
    $email = $_REQUEST['email'];
    $sql = "SELECT `email`, `activated` from `registacija` where `email`= '$email' ";

    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {

                if ($row['activated'] == 1) {
                    echo 'Your email address is already activated, you can <a href="login.php">login</a> with your information!!!';
                } else {
                    $sql2 = "UPDATE `registacija` set `activated` = 1  where `email`= '$email' ";

                    $result2 = $dbc->query($sql2);
                    if ($result2) {
                        echo 'Your email address activated successfully! Now you can <a href="login.php">login</a>';
                    }
                }

                /* $query = "UPDATE registacija set password = '$hashedPass' where email = '$emailLog'";

                $response = @mysqli_query($dbc, $query);
                if ($response) {
                    echo ('sent');
                } else {
                    echo mysqli_error($dbc);
                } */

            }
        }
    } else {
        echo 'Invalid approach, please use the link that has been send to your email.';
    }

}

?>