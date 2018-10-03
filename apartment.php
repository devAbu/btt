<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--TODO: vidjet da se uradi numTaken-->
<!--TODO: vidjet da se uradi star rating-->
<!--TODO: vidjet da se prvo trazi od usera datum boravka...pa da na osnovu toga mu predlozi ture / il samo kad hoce da selecta mora unijet datume -->
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            $('#footerInclude').load("./template/footer.php");
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

<div id="navbarInclude"></div>

<div class="loader">
        <div class="loader-inner ball-scale-multiple">
        </div>
    </div>


    <section id="jumbotron" class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Choose the best hotel for your need!</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section>
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
            <div class="row">
                <div class="col-12 text-success offset-1 mt-2 mb-5">
                    <i class="fas fa-rss"></i>
                    xx Hotel found
                </div>
                <div class="offset-1 col-3">
                    <h4 class="text-success">Budget:</h4>

                    <input class="w3-check  mr-1" type="checkbox">Up to 99$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 199$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 299$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 399$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More than 399$ per night
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">No. of stars:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 3 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 4 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 5 stars
                    <br />
                </div>
                <div class=" col-3">
                    <h4 class="text-success">Customer rating:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 3 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 4 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 5 stars
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">Distance to town (min):</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 5 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 15 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 30 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 45 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More than 45 min
                    <br />
                </div>
                <div class=" col-2 offset-1">
                    <h4 class="text-success">City:</h4>

                    <input class="w3-check mr-1" type="checkbox">Sarajevo
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Konjic
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Mostar
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Jajce
                    <br />
                </div>
            </div>
        </div>-->
    </section>

 <script src="titles/apartTitle.js"></script>

    <section>
    <?php
    require 'connection/connect.php';
/* if (!empty($_POST)) {
    $where = $_REQUEST['search-loged'];
}
if (isset($where)) {
    $sql = "SELECT * FROM apartment where title like '$where'";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            /* echo '<div class="card-group mt-5">
            <div class="row">'; 
    while ($row = $result->fetch_assoc()) {

        $session = $_SESSION["email"];
        echo '<form action = "userAll/userApartment.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                    <img src="' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


            <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
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
                </li>-->';
        echo '

                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div></form>
            ';

    }

} else {
    while ($row = $result->fetch_assoc()) {

        echo '<form action = "userAll/userApartment.php" method = "POST"><div class="card text-center mt-4 ">

          <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
          <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
          <div class="card-body ">
              <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                  <img src=" ' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
          " style="float:left; " />
              <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


          <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
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
              </li>-->';
        echo '

              <li class="list-group-item " style="border:none">
              <a href="login.php">
                  <input type="button" name="select" id="select" class="btn btn-warning " value="Login " style="width:100px; " />
                  </a>
              </li>
          </ul>
          </div>
          <div class="card-footer text-muted ">
              <small class="text-muted ">
                  <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
          </div>
          </div></form>
          ';

    }
}
} else {
    echo '0 results';
}
} else {
     */



    $sql = "SELECT * FROM apartment";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            /* echo '<div class="card-group mt-5">
            <div class="row">'; */
            while ($row = $result->fetch_assoc()) {

                $session = $_SESSION["email"];
                echo '<div class="myDIV"><form action = "userAll/userApartment.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>

                    <img src="' . $row["img"] . '"  class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />

            



                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>



            <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
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
                </li>-->';
                echo '

                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            <div class="card-footer text-muted ">
            <span style="float:left !important"><i class="fas fa-dollar-sign mr-2"></i>' . $row["price"] . ' per day</span>
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div></form></div>
            ';

            }

        } else {
            while ($row = $result->fetch_assoc()) {

                echo '
                <div class="myDIV">
                <form action = "userAll/userApartment.php" method = "POST"><div class="card text-center mt-4 ">

          <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
          <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
          <div class="card-body ">
              <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                  <img src="' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
          " style="float:left; " />
              <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


          <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
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
              </li>-->';
                echo '

              <li class="list-group-item " style="border:none">
              <a href="login.php">
                  <input type="button" name="select" id="select" class="btn btn-warning " value="Login " style="width:100px; " />
                  </a>
              </li>
          </ul>
          </div>
          <div class="card-footer text-muted ">
              <small class="text-muted ">
                  <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
          </div>
          </div></form></div>
          ';

            }
        }
    } else {
        echo '0 results';
    }

    $dbc->close();

    ?>
    </section>

     <script>
             

  $("#search-loged").on("keyup", function() {
      console.log($(this).val().toLowerCase())
    var value = $(this).val().toLowerCase();
    $(".myDIV form ").not( $('#select') ).filter(function() {
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
                $('#jumbotron').addClass('jumbotron9')
                $('.loader').hide()  
            })
        });
    </script>


<script src="loaders.css.js "></script>

</body>

</html>
