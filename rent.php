﻿<?php
session_start();
?>
<?php
if (isset($_REQUEST['Message'])) {
    echo '<input type="text" value="' . $_REQUEST["Message"] . '" id="reserved" hidden/>';
}
?>
<!DOCTYPE html>
<html lang="en">
<!--TODO: vidjet da se uradi numTaken-->
<!--TODO: vidjet da se uradi star rating-->
<!--TODO: uradit feedback svakog auta-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <title>BTT</title>
  <link rel="icon" type="image/ico" href="images/btt_logo_icon.ico" />
  <meta name="author" content="abu">
  <meta name="keywords" content="btt, bosnian, tourist, travel, agency, arabic, bosna">
  <meta name="description" content="BTT - Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H. ">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script> -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="jquery.validate.js"></script>

    <link rel="stylesheet" href="loaders.min.css" />

    <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>


    <script>
        $(function (){
            $('#navbarInclude').load("./template/navbar.php");
            $('#footerInclude').load("./template/footer.php");
        })
    </script>


</head>

<body>

  <div class="loader">
        <div class="loader-inner ball-scale-multiple">
        </div>
    </div>

   <div id="navbarInclude"></div>

    <section id="jumbotron" class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Rent the best car for you and your family!</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
            <div class="align-text-bottom">
                <a href="#res" id="downArrow"><i class="fa fa-caret-down fa-7x" id="test" style="color: #007BFF"></i></a>
            </div>
        </div>
    </section>

    <script>
        $('#downArrow').click(function() {
            event.preventDefault();
            var sectionTo = $(this).attr('href');
            $('html').animate({
            scrollTop: $(sectionTo).offset().top - 60
            }, 1000);
        });
        
    </script>
    

    <section id="res">
        <div class="row no-gutters">
            <div class="col-md-5 offset-md-2 col-11 offset-1">
                <!-- <form action="apartment.php" method="POST" name="form" id="form"> -->
                    <input id="search-loged" name="search-loged" value="" type="text" class="form-control mt-2" placeholder="Search...">
                <!-- </form> -->
            </div>
            <!--<div class="col-2">
                <button id="filters" class="btn btn-success my-2  ml-4" style="width:200px;" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-sliders-h mr-2" data-fa-transform="rotate-90"></i>
                    Filters
                </button>
            </div>-->
        </div>
        <!--<div class="collapse" id="collapseExample">
            <div class="row ">
                <div class="col-12 text-success offset-1 mt-2 mb-5">
                    <i class="fas fa-rss"></i>
                    xx Cars found
                </div>
                <div class="offset-1 col-3">
                    <h4 class="text-success">Car type:</h4>

                    <input class="w3-check  mr-1" type="checkbox">BMW
                    <br />
                    <input class="w3-check mr-1" type="checkbox">AUDI
                    <br />
                    <input class="w3-check mr-1" type="checkbox">MERCEDES
                    <br />
                    <input class="w3-check mr-1" type="checkbox">VOLKSWAGEN
                    <br />
                    <input class="w3-check mr-1" type="checkbox">FORD
                    <br />
                </div>
                <div class=" col-3">
                    <h4 class="text-success">No. of people:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 5 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 8 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 10 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More then 10 people
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">Budget:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 500$
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 800
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 1200
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 1500
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2000
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More then 1500
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">Model Year:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2010
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2014
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2015
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2017
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Newe than 2017
                    <br />
                </div>
                <div class="offset-1 col-3">
                    <h4 class="text-success">Vehicle type:</h4>

                    <input class="w3-check  mr-1" type="checkbox">Car
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Van
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Jeep
                    <br />
                </div>
            </div>
        </div>-->
    </section>

     <script src="titles/rentTitle.js"></script>

    <section>

<?php

require 'connection/connect.php';

/* if (!empty($_POST)) {
    $where = $_REQUEST['search-loged'];
}

if (isset($where)) {
    $sql = "SELECT * FROM cars where title like '$where' or type like '$where'  ";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            while ($row = $result->fetch_assoc()) {
                $session = $_SESSION["email"];
                echo '<form action = "userAll/userCar.php"><div class="card text-center mt-4 ">
            <div class="card-header text-success h3 text-uppercase ">' .
                    $row["title"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>

                    <img src=" ' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />



                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


            <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-users "></i>
                        <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                </li>
            </ul>

            <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
                <!-- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li>
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>-->
                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            </div></form>
            ';

            }

        } else {
            while ($row = $result->fetch_assoc()) {
                echo '<form action = "userAll/userCar.php"><div class="card text-center mt-4 ">
          <div class="card-header text-success h3 text-uppercase ">' .
                    $row["title"] . '
          </div>
          <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
          <div class="card-body ">
              <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>

                  <img src=" ' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
          " style="float:left; " />



              <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


          <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
              <li class="list-group-item text-warning mt-4 " style="border:none; ">
                  <p class="card-text " style="float:left; ">
                      <i class="fas fa-users "></i>
                      <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                  </p>
              </li>
              <li class="list-group-item text-warning ">
                  <p class="card-text " style="float:left; ">
                      <i class="fas fa-calendar-alt "></i>
                      <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                  </p>
              </li>
              <li class="list-group-item text-warning ">
                  <p class="card-text " style="float:left; ">
                      <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
              </li>
          </ul>

          <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
              <!-- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                  <p class="card-text "></p>
                  <input type="button " class="btn btn-warning " value="More Detalis " />
              </li>
              <li class="list-group-item text-warning " style=" border:none;">
                  <p class="card-text ">
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                  </p>
              </li>-->
              <li class="list-group-item " style="border:none">
              <a href="login.php">
                  <input type="button" name="select" id="select" class="btn btn-warning " value="Login " style="width:100px; " />
                  </a>
              </li>
          </ul>
          </div>
          </div></form>
          ';

            }
        }

    } else {
        echo " 0 results";

    }
}  else { */


$sql = "SELECT * FROM cars";
$result = $dbc->query($sql);

$count = $result->num_rows;

if ($count > 0) {
    if (isset($_SESSION["email"])) {
        while ($row = $result->fetch_assoc()) {
            $session = $_SESSION["email"];
            echo '<div class="myDIV"><form action = "userAll/userCar.php"><div class="card text-center mt-4 ">
            <div class="card-header text-primary h3 text-uppercase ">' .
                $row["title"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>

                    <img src=" ' . $row["img"] . '" class="tourPlans img-fluid" alt="skijanje " width="400 " height="250
            " style="float:left; " />



                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


            <ul class="list-group list-group-flush tourPlans2 col-12" style="width:390px; border:none; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-users "></i>
                        <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . ' per day</p>
                </li>
            </ul>
			<ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                    <input class="btn btn-primary " value="Select " style="width:125px;color:white " data-toggle="modal" data-target="#dateSelection' . $row["ID"] . '" />
                </li>
                <li class="list-group-item" style="border:none;">
                    <input class="btn btn-primary " value="Leave feedback " style="width:150px; color:white" data-toggle="collapse" data-target="#carFeedbackCollapse' . $row["ID"] . '" id="carFeedback' . $row["ID"] . '" />
                </li>
            </ul>

            <div class="collapse mt-4 feedCollapse" id="carFeedbackCollapse' . $row["ID"] . '">
                <textarea cols="40" id="offerFeedback' . $row["ID"] . '" rows="7" class="form-control" style="resize: none;" placeholder="Your opinion about this tour..." onchange="feed(this.id)" onkeydown="feed(this.id)" onkeyup="feed(this.id)"></textarea>
            
                <input type="button" class="btn btn-success mt-3" value="Send" id="carFeedbackSend' . $row["ID"] . '" >         
            </div>

            <div class="modal fade" id="dateSelection' . $row["ID"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Visit date</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control arrival" placeholder="Date of arrival" name="arrival" id="arrival' . $row["ID"] . '" onchange="date(this.id)">
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control departure" placeholder="Date of departure" name="departure" id="departure' . $row["ID"] . '" onchange="date(this.id)">
                                </div>
                                <div class="col-12 mt-3">
                                    <p>Driver (+40$)</p>
                                    <input type="text" id="driverPrice" name="driverPrice" hidden>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="driver">Yes</label>
                                            <input type="radio" class="form-control" name="driver" id="driver">
                                        </div>
                                        <div class="col-6">
                                            <label for="noDriver">No</label>
                                            <input type="radio" class="form-control" name="driver" id="noDriver">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="select" id="select' . $row["ID"] . '" class="btn btn-primary">Continue</button>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div></form></div>
            ';

        }

    } else {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="myDIV"><form action = "userAll/userCar.php"><div class="card text-center mt-4 ">
          <div class="card-header text-primary h3 text-uppercase ">' .
                $row["title"] . '
          </div>
          <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
          <div class="card-body ">
              <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>

                  <img src=" ' . $row["img"] . '" class="tourPlans img-fluid" alt="skijanje " width="400 " height="250
          " style="float:left; " />



              <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


          <ul class="list-group list-group-flush tourPlans2 col-12" style="width:390px; border:none; ">
              <li class="list-group-item text-warning mt-4 " style="border:none; ">
                  <p class="card-text " style="float:left; ">
                      <i class="fas fa-users "></i>
                      <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                  </p>
              </li>
              <li class="list-group-item text-warning ">
                  <p class="card-text " style="float:left; ">
                      <i class="fas fa-calendar-alt "></i>
                      <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                  </p>
              </li>
              <li class="list-group-item text-warning ">
                  <p class="card-text " style="float:left; ">
                      <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
              </li>
          </ul>
		  <ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                <a href="login.php">
                    <input type="button" name="select" id="login" class="btn btn-primary " value="Login " style="width:100px; color:white" />
                    </a>
                </li>
            </ul>

          <!--<ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
               <li class="list-group-item text-warning mt-4 " style="border:none; ">
                  <p class="card-text "></p>
                  <input type="button " class="btn btn-warning " value="More Detalis " />
              </li>
              <li class="list-group-item text-warning " style=" border:none;">
                  <p class="card-text ">
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                      <i class="far fa-star "></i>
                  </p>
              </li>
              <li class="list-group-item " style="border:none">
              <a href="login.php">
                  <input type="button" name="select" id="select" class="btn btn-warning " value="Login " style="width:100px; " />
                  </a>
              </li>
          </ul>-->
          </div>
          </div></form></div>
          ';

        }
    }

} else {
    echo " 0 results";

}

$dbc->close();
?>

</section>

   <script>
             

  $("#search-loged").on("keyup", function() {
      console.log($(this).val().toLowerCase())
    var value = $(this).val().toLowerCase();
    $(".myDIV form ").not( $('#select') ).not( $('#login') ).filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

</script>

    <div id="footerInclude"></div>

    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $( window ).on( "load", function() {
            $( document ).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('#jumbotron').addClass('jumbotron6')
                $('.loader').hide()  
                
                $('#select').attr('disabled', true);

                var currentDate = new Date()
                var month = currentDate.getMonth()+1;
                var day = currentDate.getDate();

                var date = currentDate . getFullYear()+'-'+
                        ((''+month) . length < 2 ? '0' : '') + month+'-'+
                        ((''+day) . length < 2 ? '0' : '') + day;
                        console.log(date) 

                var allFeedbackBtn = $('input[id ^= "carFeedbackSend"')
                allFeedbackBtn.attr('disabled', true)

                $( ".arrival" ).datepicker({dateFormat: 'yy-mm-dd', minDate: date});
                $( ".departure" ).datepicker({dateFormat: 'yy-mm-dd', minDate: date});

                var reserved = $('#reserved').val()
                if(reserved != null){
                  console.log(reserved)
                  toastr.error('Car is not available!!! <br /> Reserved from ' + reserved);
                }

                $('#driver, #noDriver').click(function (){
                    var checked = document.querySelector('input[name = "driver"]:checked')
                    console.log(checked.getAttribute('id'))
                    if(checked.getAttribute('id') == 'driver'){
                        console.log('yes')
                        $('#driverPrice').val('yes')
                    }else if(checked.getAttribute('id') == 'noDriver'){
                        console.log('no')
                        $('#driverPrice').val('no')
                    }
                })
            })
        });
    </script>

    <script>
        function driverPrice(){
            console.log($('#driverPrice'))
            if($('#driver').checked()){
                $('#driverPrice').val('yes')
            }else{
                $('#driverPrice').val('no')
            }
            console.log($('#driverPrice'))
        }
    </script>

    <script>
        function date(idClick){

            var res = idClick.replace(/\D/g, "")

            var arrival = $('#arrival'+res).val()
            var departure = $('#departure'+res).val()
            if(arrival != "" && departure != ""){
                if(arrival >= departure){
                    toastr.error('Please select valid date!!!')
                    $('#select'+res).attr('disabled', true);
                }else{
                    $('#select'+res).attr('disabled', false);
                }
            }
            
        }
    </script>


    <script>
        function feed(id){
            console.log(id)

            var idRes = id.replace(/\D/g, "")
            var feedback = $('#offerFeedback'+idRes).val()

            console.log(idRes)
            console.log(feedback)
            console.log($('#carFeedbackSend'+idRes).val())
            var but = $('#carFeedbackSend'+idRes).attr("id");
            var idBut = id.replace(/\D/g, "")
            console.log(idBut)
            
            $('#carFeedbackSend'+idRes).attr('disabled', true)

            if(feedback != ""){
                $('#carFeedbackSend'+idRes).attr('disabled', false)
            }

            $("#carFeedbackSend"+idBut).click(function(){
                console.log(idBut)
                console.log(feedback)
                console.log($("#session").val())

                var session = $("#session").val()

                

                if(feedback == ""){
                    toastr.error("Please enter your opinion")
                }else{
                    $.ajax({
                        url: "dbSend/carFeedback.php?task=sendFeed&idRes="+idBut+"&feedback="+feedback+"&session="+session,
                        success: function(data){
                            if(data.indexOf('sent')> -1){
                                jQuery.noConflict();
                                toastr.success("Feedback sent. Thank you!!!")
                                //feedback.val("")
                                $('#offerFeedback'+idRes).val("")
                                $('.feedCollapse').collapse("hide")
                            } else {
                                toastr.error("Please try again!!!")
                            }
                        },
                        error: function(data, err) {
                            toastr.error("Some problem occurred. Please try later.")
                        }
                    })
                }

                
            })
            
        }

    </script>

    <script src="loaders.css.js "></script>



</body>

</html>
