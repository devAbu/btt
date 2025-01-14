<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTT || Email verification</title>
    <link rel="icon" type="image/ico" href="images/btt_logo_icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="background-color:#ffd260">
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
                        echo '
                        <div style="margin-top:100px;font-size:20px;" class="offset-md-3 offset-sm-2 offset-1" >
                            Your email address is already activated, you can <a href="login.php" style="text-decoration:none; color:white;">LOGIN</a> with your information!!!
                        </div>';
                        header("refresh:2.5;url=login");
                    } else {
                        $sql2 = "UPDATE `registacija` set `activated` = 1  where `email`= '$email' ";

                        $result2 = $dbc->query($sql2);
                        if ($result2) {
                            echo '
                            <div style="margin-top:100px; font-size:20px;" class="offset-md-3 offset-sm-2 offset-1">
                                Your email address activated successfully! Now you can <a href="login.php" style="text-decoration:none; color:white;">LOGIN</a>
                            </div>';
                            header("refresh:2;url=login");
                        }
                    }
                }
            }
        } else {
            echo '
            <div style="margin-top:100px;">
                <div class="offset-md-3 offset-sm-2 offset-1" style="font-size:20px;" >
                    Invalid approach, please use the link that has been send to your email.<br> 
                </div>
                <div class="offset-md-3 offset-sm-2 mt-3 offset-1" style="font-size:20px;color:red">
                    Account that you used does not exists
                </div>
            </div>';
        }

    }

    ?>
</body>
</html>
