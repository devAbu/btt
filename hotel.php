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
  <link rel="icon" type="image/ico" href="images/btt_logo_icon.ico" />
  <meta name="author" content="abu">
  <meta name="keywords" content="btt, bosnian, tourist, travel, agency, arabic, bosna">
  <meta name="description" content="BTT - Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H. ">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
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
                <div class="align-text-bottom">
                    <a href="#res" id="downArrow" ><i class="fa fa-caret-down fa-7x" id="test" style="color: #007BFF; " ></i></a>
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

    <script src="titles/hotelTitle.js"></script>

    <section>
    <?php
    require 'connection/connect.php';

   /*  if (!empty($_POST)) {
        $where = $_REQUEST['search-loged'];
    } */
//echo $where;

    /* if (isset($where)) {
        $sql = "SELECT * FROM hotel where title like '%" . trim($where) . "%'";
        $result = $dbc->query($sql);

        $count = $result->num_rows;

        if ($count > 0) {
            if (isset($_SESSION["email"])) {
            /*  echo '
            <div class="card-group mt-5">
            <div class="row"><form action = "userhotel.php" method = "POST">'; *
                while ($row = $result->fetch_assoc()) {

                    $session = $_SESSION["email"];
                    echo '<form action = "userAll/userHotel.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
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

                    echo '<form action = "userAll/userHotel.php" method = "POST"><div class="card text-center mt-4 ">

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
              </li>
              </a>
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

    }  else {*/

    $sql = "SELECT * FROM hotel";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            /*  echo '
            <div class="card-group mt-5">
            <div class="row"><form action = "userhotel.php" method = "POST">'; */
            while ($row = $result->fetch_assoc()) {
                $session = $_SESSION["email"];
                echo '<div class="myDIV"><form action = "userAll/userHotel.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>

                    <img src="' . $row["img"] . '" class="tourPlans img-fluid" alt="skijanje " width="400 " height="250
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
                    <input class="btn btn-primary " value="Select" style="width:125px;color:white " data-toggle="modal" data-target="#dateSelection' . $row["ID"] . '"  />
                </li>

                <li class="list-group-item " style="border:none">
                    <input class="btn btn-primary " value="Leave feedback" style="width:150px; " data-toggle="collapse" data-target="#hotelFeedbackCollapse' . $row["ID"] . '"  id="hotelFeedback' . $row["ID"] . '" />
                </li>
            </ul>

            <div class="collapse mt-4 feedCollapse" id="hotelFeedbackCollapse' . $row["ID"] . '">
                <textarea cols="40" id="offerFeedback' . $row["ID"] . '" rows="7" class="form-control" style="resize: none;" placeholder="Your opinion about this tour..." onchange="feed(this.id)" onkeydown="feed(this.id)" onkeyup="feed(this.id)"></textarea>
            
                <input type="button" class="btn btn-success mt-3" value="Send" id="hotelFeedbackSend' . $row["ID"] . '" >         
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
            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div>
            </div></form>
            ';

            }

        } else {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="myDIV"><form action = "userAll/userHotel.php" method = "POST"><div class="card text-center mt-4 ">

          <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
          <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
          <div class="card-body ">
              <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                  <img src="' . $row["img"] . '" class="tourPlans img-fluid" alt="skijanje " width="400 " height="250
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
                  <input type="button" name="select" id="login" class="btn btn-primary " value="Login " style="width:100px;color: white " />
              </a>
            </li>
              
          </ul>
          </div>
          <div class="card-footer text-muted ">
              <small class="text-muted ">
                  <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
          </div>
          </div>
          </div></form>
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
    $(".myDIV form ").not( $('#select, #login') ).filter(function() {
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
                $('#jumbotron').addClass('jumbotron4')
                $('.loader').hide()  
                $('#select').attr('disabled', true);

                var currentDate = new Date()
                var month = currentDate.getMonth()+1;
                var day = currentDate.getDate();

                var date = currentDate . getFullYear()+'-'+
                        ((''+month) . length < 2 ? '0' : '') + month+'-'+
                        ((''+day) . length < 2 ? '0' : '') + day;
                        console.log(date) 

                var allFeedbackBtn = $('input[id ^= "hotelFeedbackSend"')
                allFeedbackBtn.attr('disabled', true)

                $( ".arrival" ).datepicker({dateFormat: 'yy-mm-dd', minDate: date});
                $( ".departure" ).datepicker({dateFormat: 'yy-mm-dd', minDate: date});
            })
        });
    </script>

    <script>
        function date(idClick){

            console.log(idClick)

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
            console.log($('#hotelFeedbackSend'+idRes).val())
            var but = $('#hotelFeedbackSend'+idRes).attr("id");
            var idBut = id.replace(/\D/g, "")
            console.log(idBut)

            $('#hotelFeedbackSend'+idRes).attr('disabled', true)

            if(feedback != ""){
                $('#hotelFeedbackSend'+idRes).attr('disabled', false)
            }
            
            $("#hotelFeedbackSend"+idBut).click(function(){
                console.log(idBut)
                console.log(feedback)
                console.log($("#session").val())

                var session = $("#session").val()

                

                if(feedback == ""){
                    toastr.error("Please enter your opinion")
                }else{
                    $.ajax({
                        url: "dbSend/hotelFeedback.php?task=sendFeed&idRes="+idBut+"&feedback="+feedback+"&session="+session,
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
