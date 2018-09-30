<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <title>BTT</title>
  <link rel="icon" type="image/ico" href="images/icon.ico" />
  <meta name="author" content="abu">
  <meta name="keywords" content="btt, bosnian, tourist, travel, agency, arabic, bosna">
  <meta name="description" content="BTT - Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H. ">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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


    <script>
        $(function (){
            $('#navbarInclude').load("./template/navbar.php");
        })
    </script>
    
<style>
    .loader {
    position: fixed;
    top: 50%;
    left: 50%;
    z-index: 999;
    transform: scale(4);
}
.hidden{
    display:none;
}
.pass {
    position: relative;
}

.passIcon {
    position: absolute;
    top: 10%;
    padding: 9px 8px;
    left: 90%
}
.passIcon2 {
    position: absolute;
    top: 10%;
    padding: 9px 8px;
    left: 90%
}

label.error {
    margin-left: 5%;
    margin-top: 3px;
    color: red;
    font-size: 17px;
}
</style>

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
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Ready for an unforgettable adventure?</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>
<!--TODO: vidjet da se uradi updateRequest-->
    <section>
        <h2 class="display-4 text-center text-info">Tour Plans</h2>
            <?php
            require 'connection/connect.php';

            if (isset($_SESSION["email"])) {
                $session = $_SESSION["email"];
    //echo 'session = ' . $session;
    //echo 'length = ' . strlen($session);
                $sql = "Select usertour.tourID,usertour.name, tourplan.ID, tourplan.type, tourplan.title, tourplan.description, tourplan.people, tourplan.available, tourplan.price, tourplan.days, tourplan.img from usertour inner join tourplan on tourplan.ID = usertour.tourID having usertour.name like '%" . trim($session) . "%' ";
                $result = $dbc->query($sql);

                $count = $result->num_rows;
                if ($count > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<form action = "delete/deleteTour.php" method = "POST"><div class="card text-center mt-4 ">
            <div class="card-header text-success h3 text-uppercase ">' .
                            $row["type"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                <a href="# " style="text-decoration:none; ">
                    <img src="' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            </a>

            <a href="# " style="text-decoration:none; ">
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            </a>

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
                        <span class="ml-3 ">Availability: ' . $row["available"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                </li>
            </ul>
             <ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Delete " style="width:100px; " />
                </li>
            </ul>

            <!-- <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>';
                        echo '

                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Delete " style="width:100px; " />
                </li>
            </ul>-->
            </div>
            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="far fa-clock mr-2 "></i> ' . $row["days"] . '</small>
            </div>
            </div></form>
            ';
                    }
                } else {
                    echo '<div class=text-center>
            <h2>No selected tour plans!!! <a href="tourplans.php" style="color: gold;">Click here</a> to see and choose tour plan</h2>
        </div>';
                }
            }
            ?>

     
        <h2 class="display-4 text-center text-info">Requested tour plan(s)</h2>

        <?php

        if (isset($_SESSION["email"])) {
            $session = $_SESSION["email"];
    //echo 'session = ' . $session;
    //echo 'length = ' . strlen($session);
            $sql = "Select * from tourrequest where name like '%" . trim($session) . "%' ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<form action = "delete/deleteRequest.php" method = "POST">
            <div class="card  mt-4 ">

                <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
                <input type="text" value=" ' . $row["id"] . ' "  name="idnum" id="idnum" hidden>
                <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-4 col-12 mb-2">
                            <label>City: </label>
                            <input type="text" class="form-control" id="city"  value="' . $row["city"] . '" readonly>

                        </div>
                        <div class="col-md-6 col-12 mb-2">
                        <label>Length: </label>
                            <input type="number" class="form-control" id="length" value="' . $row["length"] . '" readonly>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                        <label>budget: </label>
                            <input type="number" class="form-control" id="budget"  value="' . $row["budget"] . '" readonly>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                        <label>people: </label>
                            <input type="number"  class="form-control" id="people" value="' . $row["people"] . '" readonly>
                        </div>
                        <div class="col-md-4 col-12 mb-2">
                        <label>period: </label>
                            <input type="text" class="form-control" id="period" value="' . $row["period"] . '" readonly>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                        <label>interpreter: </label>
                            <input type="text" class="form-control" id="interpreter" value="' . $row["interpreter"] . '" readonly>
                        </div>
                        <div class="col-12 col-md-4 mb-2">
                        <label>price: </label>
                            <input type="number" class="form-control" id="price" value="' . $row["price"] . '" readonly>
                        </div>
                        <label class="ml-3 mt-4">Options: </label>

                        <div class="col-2 mt-4">
                            <input type="submit" id="delete" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="alert" id="alert"></div>
            ';
                }
            } else {
                echo '<div class=text-center>
            <h2>No requested tour !!! <a href="makeTour.php" style="color: gold;">Click here</a> to request one.</h2>
        </div>';
            }
        }
        ?>
    </section>

   <!--
       <div class="col-1 mb-2">
                            <input type="button" class="btn btn-warning" id="edit" value="Edit">
                        </div>
        <script>

        $('#edit').click(function () {
            $('#length').removeAttr('readonly');
            $('#budget').removeAttr('readonly');
            $('#people').removeAttr('readonly');
            var session = $('#session').val();
            var idnum = $('#idnum').val();

            $('#edit').attr('value', 'Save');
            $('#delete').attr('disabled', '');



            $('#edit').click(function () {
                $('#alert').removeClass('alert-success').removeClass('#alert-danger')
                $('#length').attr('readonly', '');
                $('#budget').attr('readonly', '');
                $('#people').attr('readonly', '');

                $('#edit').attr('value', 'Edit');
                $('#delete').removeAttr('disabled');

                var length = $('#length').val();
                var budget = $('#budget').val();
                var people= $('#people').val();
                var price = $('#price').val();

                console.log(price);

                if(length != 0) {
                    if (length < 3) {
                        price += 35;
                        console.log(price);
                    } else if (length < 5) {
                        price += 50;
                        console.log(price);
                    } else if (length < 8) {
                        price += 75;
                        console.log(price);
                    } else {
                        price += 100;
                        console.log(price);
                    }
                }

                if(people != 0) {
                    if (people < 5 ) {
                        price += 200;
                        console.log(price);
                    } else if (people < 10) {
                        price += 250;
                        console.log(price);
                    } else {
                        price += 350;
                        console . log(price);

                    }
                }

                document.getElementById("price").value = price;
                document.getElementById("budget").value = budget;

                if (budget == 0 || budget == ""){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Enter your budget");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                }else if(people == 0 || people == ""){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Enter how amny people will be");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                } else if(length == 0 || length == "" ){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Enter how many days the tour will be");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                } else if(budget < price ){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Your budget is smaller than the total price");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                } else {
                    $.ajax ({
                        url : "./updateRequest.php?task=update&people="+people+"&budget="+budget+"&length="+length+"&price="+price+"&session="+session,
                        success: function (data){
                            if(data.indexOf('sent') > -1){
                                $("#alert").addClass('alert-success');
                                $("#alert").html("Updated successfully.");
                                $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                            } else {
                                $("#alert").addClass('alert-danger');
                                $("#alert").html('Error occured');
                                $("#alert").slideDown(500).delay(1000).slideUp(500);
                            }
                        },
                        error: function (data, err){
                            $("#alert").addClass('alert-danger');
                            $("#alert").html('Some problem occured. We are sorry.');
                            $("#alert").slideDown(500).delay(1000).slideUp(500);
                        }
                    })
                }

            })
        })
    </script>
 -->

 <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('#jumbotron').addClass('jumbotronMy')
                $('.loader').hide()  
        });
    </script>

    <script src="loaders.css.js "></script>

    </body>
</html>
