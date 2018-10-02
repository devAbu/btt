<!-- TODO: bolji dizajn -->

<?php

require('connection/connect.php');

if ($_REQUEST['email']) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $hashedPass = $hash_pass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT email FROM registacija WHERE email = '$email'";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $email) {

                $query = "UPDATE registacija set password = '$hashedPass' where email = '$email'";

                $result2 = $dbc->query($query);

                if ($result2) {
                    echo 'Your password changed successfully!!! <br> Now you can <a href="login.php">login</a> ';
                }

            } else {
                echo ('mail');
            }
        }
    } else {
        echo 'Email address does not exists!!!';
    }

}

?>