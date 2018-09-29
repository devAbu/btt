﻿<?php
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

    <section id="jumbotronAbout" class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase">Let's introduce ourselves</p>
            <p class="text-primary h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>
    

    <section class="bg">
        <div class="row no-gutters">
            <div class="col-2 offset-2 mt-5">
                <h2 class="text-uppercase text-warning">About Us:</h2>
            </div>
            <div class="col-6 ml-5 mt-5">
                <p style="font-size:22px; color: rgb(255, 255, 0);">
                  Bosnia Travels agency is run by young and creative team who can respond all your needs. In cooperation with our partners (hotels, restaurants, real estate agencies, rent-a-car companies, professional tourist guides) we guarantee you to get the best services!

Either you are looking for VIP services or low budget trip; we will make the best offer according to your demands. Our goal is to deliver you the best of the quality services!
                </p>
            </div>
            <div class="col-5 offset-2">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top aboutUs" src="images/abu.jpg" alt="Owner" height="250">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:30px;">Abdurahman A.</h5>
                        <p class="card-text text-muted">Founder</p>
                        <a href="https://www.ibu.edu.ba" target="_blank" style="text-decoration:none;">
                            <p class="card-text text-muted">
                                <i class="fas fa-graduation-cap mr-1"></i>Internacional Burch University</p>
                        </a>
                        <a href="https://www.facebook.com/abdurahman.almonajed.98" target="_blank">
                            <label class="card-text text-muted">
                                <i class="fab fa-2x fa-facebook mr-3 mt-3" id="abufb"></i>
                            </label>
                        </a>
                        <a href="https://www.instagram.com/maliabud/" target="_blank">
                            <label class="card-text text-muted">
                                <i class="fab fa-2x fa-instagram mr-3 mt-3" id="abufb"></i>
                            </label>
                        </a>
                        <a href="https://www.linkedin.com/in/abdurahman-almonajed-2b4842138/" target="_blank">
                            <label class="card-text text-muted">
                                <i class="fab fa-2x fa-linkedin mr-1 mt-3" id="abufb"></i>
                            </label>
                        </a>
                    </div>
                    <button class='btn btn-outline-dark' id="button" onclick="window.location.href='mailto:abdulrahman.almonajed@gmail.com'">
                        <i class="far fa-envelope mr-2"></i> Contact
                    </button>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top aboutUs" src="images/oba.jpg" alt="Owner" width="250" height="250">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size:30px;">Obada A.</h5>
                        <p class="card-text text-muted">Manager</p>
                        <a href="https://www.ibu.edu.ba" target="_blank" style="text-decoration:none;">
                            <p class="card-text text-muted">
                                <i class="fas fa-graduation-cap mr-1"></i>Internacional Burch University</p>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank">
                            <label class="card-text text-muted">
                                <i class="fab fa-2x fa-facebook mr-3 mt-3" id="abufb"></i>
                            </label>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <label class="card-text text-muted">
                                <i class="fab fa-2x fa-instagram mr-3 mt-3" id="abufb"></i>
                            </label>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <label class="card-text text-muted">
                                <i class="fab fa-2x fa-linkedin mr-1 mt-3" id="abufb"></i>
                            </label>
                        </a>
                    </div>
                    <button class='btn btn-outline-dark' id="button" onclick="window.location.href='mailto:obada_almonajed@hotmail.com'">
                        <i class="far fa-envelope mr-2"></i> Contact
                    </button>
                </div>
            </div>
            </div>
        </div>
    </section>

    <div id="footerInclude"></div>

    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('#jumbotronAbout').addClass('jumbotron2')
                $('.loader').hide()  
        });
    </script>

    <script src="loaders.css.js "></script>

</body>

</html>
