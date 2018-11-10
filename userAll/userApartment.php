<!--TODO: prvjerit na vise usera-->
<?php
require '../connection/connect.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$email = $_REQUEST['session'];
$apartmentID = $_REQUEST['idnum'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];

//echo $apartmentID;
$sql = "SELECT * FROM `userapartment` WHERE arrival BETWEEN  '$arrival' and  '$departure' or departure BETWEEN '$arrival'  and '$departure' having apartmentID = '$apartmentID' order by departure asc ";
$result = @mysqli_query($dbc, $sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        header('location: ../apartment.php?Message=' . urlencode($row[arrival] . " to " . $row[departure]));

    }
} else {

    $query = "INSERT INTO userapartment (`name`, `apartmentID`, `arrival`, `departure`) VALUES ('$email', '$apartmentID', '$arrival', '$departure')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {

        $sql = "Select userapartment.apartmentID,userapartment.name, apartment.ID, apartment.title, apartment.description, apartment.place, apartment.img from userapartment inner join apartment on apartment.ID = userapartment.apartmentID having userapartment.name like '%" . trim($email) . "%' ";
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
                    $mail->Subject = 'BTT.ba | Thanks for apartment reservation';
                    $mail->Body = '

    <center>
        ' . $row["ID"] . '
        <div style="font-size: 1.5vw;margin-top:10px;">
            We want to kindly thank you for reservation <span style="color: silver">' . strtoupper($row["title"]) . '</span> via <a href="localhost/github/btt" style="color:gold; text-decoration:none;">BTT.BA</a>
        </div>
       ' . $row["apartmentID"] . '
            
    </center> 
    <div style="color: red; font-size: 1.5vw; margin-top: 10px;">
        If it was not you please <a href="mailto:abdulrahman.almonajed@gmail.com" style="color: gold; text-decoration:none">contact us</a>!!! 
    </div>
     <br>';
                    $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';


                    echo ' Message has been sent < br > ';
                    $mail->send();

                    //echo ('sent');
                    header('location: ../myCart.php');
                    break;

                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
        }
    } else {
        echo mysqli_error($dbc);
    }
}