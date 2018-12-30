<?php

require '../connection/connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$email = $_REQUEST['session'];

if (isset($_REQUEST["tourID"])) {
    $tourID = $_REQUEST['tourID'];
} else {
    $tourID = 0;
}
if (isset($_REQUEST["apartmentID"])) {
    $apartmentID = $_REQUEST['apartmentID'];
} else {
    $apartmentID = 0;
}
if (isset($_REQUEST["hotelID"])) {
    $hotelID = $_REQUEST['hotelID'];
} else {
    $hotelID = 0;
}
if (isset($_REQUEST["carID"])) {
    $carID = $_REQUEST['carID'];
} else {
    $carID = 0;
}
if (isset($_REQUEST["price"])) {
    $price = $_REQUEST['price'];
}

$query = "INSERT INTO `confirmedOffers` (`name`, `tourID`, `apartmentID`, `hotelID`, `carID`, `price`) values ('$email', '$tourID', '$apartmentID', '$hotelID', '$carID', '$price')";

$response = @mysqli_query($dbc, $query);
if ($response) {

    $sql = "Select confirmedoffers.name,confirmedoffers.tourID,confirmedoffers.apartmentID,confirmedoffers.hotelID,confirmedoffers.carID,confirmedoffers.price as price, tourplan.ID, tourplan.title as tourPlanTitle, apartment.ID, apartment.title as apartmentTitle, hotel.ID, hotel.title as hotelTitle, cars.ID, cars.title as carTitle from confirmedoffers inner join tourplan on tourplan.ID = confirmedoffers.tourID inner join apartment on apartment.ID = confirmedoffers.apartmentID inner join hotel on hotel.ID = confirmedoffers.hotelID inner join cars on cars.ID = confirmedoffers.carID having confirmedoffers.name like '%" . trim($email) . "%' ";

    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        while ($row = $result->fetch_assoc()) {
            try {
                //Server settings
                $mail->SMTPDebug = 1;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'abdulrahman.almonajed@gmail.com';                 // SMTP username
                $mail->Password = 'camqaqoelmxzbouh';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
                $mail->setFrom('no-reply@btt.ba', 'BTT');
                $mail->addAddress($email);     // Add a recipient
    //Content 
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'BTT.ba | Thanks for your reservation';
                $mail->Body = '

    <center>
        
        <div style="font-size: 1.5vw;margin-top:10px;">
            We want to kindly thank you for reservation <span style="color: silver">' . strtoupper($row["tourPlanTitle"]) . ', ' . strtoupper($row["apartmentTitle"]) . ', ' . strtoupper($row["hotelTitle"]) . ', ' . strtoupper($row["carTitle"]) . '</span> via <a href="localhost/github/btt" style="color:gold; text-decoration:none;">BTT.BA</a><br>Note: <br> Price is: ' . $row['price'] . '
        </div>
            
    </center> 
    <div style="color: red; font-size: 1.5vw; margin-top: 10px;">
        If it was not you please <a href="mailto:abdulrahman.almonajed@gmail.com" style="color: gold; text-decoration:none">contact us</a>!!! 
    </div>
     <br>';
                $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';


                echo ' Message has been sent < br > ';
                $mail->send();

                echo ('sent');
                //header('location: ../myCart.php');
                break;




            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
        }
        $response = true;
        if ($response) {
            echo ('sent');
        }
    } else {
        echo ('neki error');
    }

} else {
    echo ('error');
}

?>