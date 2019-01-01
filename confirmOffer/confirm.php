<?php

require '../connection/connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$email = $_REQUEST['session'];

$sql = "Select confirmedoffers.name,confirmedoffers.tourID,confirmedoffers.apartmentID,confirmedoffers.hotelID,confirmedoffers.carID,confirmedoffers.price as price, tourplan.ID, tourplan.title as tourPlanTitle, apartment.ID, apartment.title as apartmentTitle, hotel.ID, hotel.title as hotelTitle, cars.ID, cars.title as carTitle from confirmedoffers inner join tourplan on tourplan.ID = confirmedoffers.tourID inner join apartment on apartment.ID = confirmedoffers.apartmentID inner join hotel on hotel.ID = confirmedoffers.hotelID inner join cars on cars.ID = confirmedoffers.carID having confirmedoffers.name like '%" . trim($email) . "%' ";

if (isset($_REQUEST["tourID"]) && $_REQUEST["tourID"] != 0) {
    $tourID = $_REQUEST['tourID'];
} else {
    $tourID = 0;
    $sql = "Select confirmedoffers.name,confirmedoffers.apartmentID,confirmedoffers.hotelID,confirmedoffers.carID,confirmedoffers.price as price, apartment.ID, apartment.title as apartmentTitle, hotel.ID, hotel.title as hotelTitle, cars.ID, cars.title as carTitle from confirmedoffers inner join apartment on apartment.ID = confirmedoffers.apartmentID inner join hotel on hotel.ID = confirmedoffers.hotelID inner join cars on cars.ID = confirmedoffers.carID having confirmedoffers.name like '%" . trim($email) . "%' ";


}
if (isset($_REQUEST["apartmentID"]) && $_REQUEST["apartmentID"] != 0) {
    $apartmentID = $_REQUEST['apartmentID'];
} else {
    $apartmentID = 0;
    $sql = "Select confirmedoffers.name,confirmedoffers.tourID,confirmedoffers.hotelID,confirmedoffers.carID,confirmedoffers.price as price, tourplan.ID, tourplan.title as tourPlanTitle, hotel.ID, hotel.title as hotelTitle, cars.ID, cars.title as carTitle from confirmedoffers inner join tourplan on tourplan.ID = confirmedoffers.tourID inner join hotel on hotel.ID = confirmedoffers.hotelID inner join cars on cars.ID = confirmedoffers.carID having confirmedoffers.name like '%" . trim($email) . "%' ";


}
if (isset($_REQUEST["hotelID"]) && $_REQUEST["hotelID"] != 0) {
    $hotelID = $_REQUEST['hotelID'];
} else {
    $hotelID = 0;
    $sql = "Select confirmedoffers.name,confirmedoffers.tourID,confirmedoffers.apartmentID,confirmedoffers.carID,confirmedoffers.price as price, tourplan.ID, tourplan.title as tourPlanTitle, apartment.ID, apartment.title as apartmentTitle, cars.ID, cars.title as carTitle from confirmedoffers inner join tourplan on tourplan.ID = confirmedoffers.tourID inner join apartment on apartment.ID = confirmedoffers.apartmentID inner join cars on cars.ID = confirmedoffers.carID having confirmedoffers.name like '%" . trim($email) . "%' ";


}
if (isset($_REQUEST["carID"]) && $_REQUEST["carID"] != 0) {
    $carID = $_REQUEST['carID'];
} else {
    $carID = 0;
    $sql = "Select confirmedoffers.name,confirmedoffers.tourID,confirmedoffers.apartmentID,confirmedoffers.hotelID,confirmedoffers.price as price, tourplan.ID, tourplan.title as tourPlanTitle, apartment.ID, apartment.title as apartmentTitle, hotel.ID, hotel.title as hotelTitle from confirmedoffers inner join tourplan on tourplan.ID = confirmedoffers.tourID inner join apartment on apartment.ID = confirmedoffers.apartmentID inner join hotel on hotel.ID = confirmedoffers.hotelID having confirmedoffers.name like '%" . trim($email) . "%' ";


}
if (isset($_REQUEST["price"])) {
    $price = $_REQUEST['price'];
}

$query = "INSERT INTO `confirmedOffers` (`name`, `tourID`, `apartmentID`, `hotelID`, `carID`, `price`) values ('$email', '$tourID', '$apartmentID', '$hotelID', '$carID', '$price')";

$response = @mysqli_query($dbc, $query);
if ($response) {



    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        while ($row = $result->fetch_assoc()) {

            $emailText = 'We want to kindly thank you for reservation <span style = "color: #565656" > ' . strtoupper($row["tourPlanTitle"]) . ', ' . strtoupper($row["apartmentTitle"]) . ', ' . strtoupper($row["hotelTitle"]) . ', ' . strtoupper($row["carTitle"]) . ' </span> via <a href= "localhost/github/btt" style= "color:gold; text-decoration:none;" > BTT.BA </a> <br> Note : <br> Price is : ' . $row["price"] . ' ';

            if ($tourID == 0) {
                $emailText = 'We want to kindly thank you for reservation <span style = "color: silver" > ' . strtoupper($row["apartmentTitle"]) . ', ' . strtoupper($row["hotelTitle"]) . ', ' . strtoupper($row["carTitle"]) . ' </span> via <a href= "localhost/github/btt" style= "color:gold; text-decoration:none;" > BTT.BA </a> <br> Note : <br> Price is : ' . $row["price"] . ' ';
            }

            if ($apartmentID == 0) {
                $emailText = 'We want to kindly thank you for reservation <span style = "color: #5b5b5b" > ' . strtoupper($row["tourPlanTitle"]) . ', ' . strtoupper($row["hotelTitle"]) . ', ' . strtoupper($row["carTitle"]) . ' </span> via <a href= "localhost/github/btt" style= "color:gold; text-decoration:none;" > BTT.BA </a> <br> Note : <br> Price is : ' . $row["price"] . ' ';
            }

            if ($hotelID == 0) {
                $emailText = 'We want to kindly thank you for reservation <span style = "color: silver" > ' . strtoupper($row["tourPlanTitle"]) . ', ' . strtoupper($row["apartmentTitle"]) . ', ' . strtoupper($row["carTitle"]) . ' </span> via <a href= "localhost/github/btt" style= "color:gold; text-decoration:none;" > BTT.BA </a> <br> Note : <br> Price is : ' . $row["price"] . ' ';
            }

            if ($carID == 0) {
                $emailText = 'We want to kindly thank you for reservation <span style = "color: silver" > ' . strtoupper($row["tourPlanTitle"]) . ', ' . strtoupper($row["apartmentTitle"]) . ', ' . strtoupper($row["hotelTitle"]) . ' </span> via <a href= "localhost/github/btt" style= "color:gold; text-decoration:none;" > BTT.BA </a> <br> Note : <br> Price is : ' . $row["price"] . ' ';
            }

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
                $mail->Subject = ' BTT.ba | Thanks for your reservation ';
                $mail->Body = '

    <center>

    <div style= "font-size: 20px;margin-top:10px;">
                ' . $emailText . '
    </div>

    </center><br>
    <div style= " font-size: 16px; margin-top: 10px;">
    If this was not you, please <a href= "mailto:abdulrahman.almonajed@gmail.com" style= "color: red; text-decoration:none"> contact us </a> !!!</div>
    <br> ';
                $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';


                echo 'Message has been sent <br>';
                $mail->send();

                echo ('sent');
                //header(' location : . . / myCart . php ');
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