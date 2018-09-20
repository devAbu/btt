<!--TODO: skontat bolji dizajn/izgled-->
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
    <meta name="description" content="BTT - Bosnian Toursit Travel offers the best tour plans and the best hotels in B&H. ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="jquery.validate.js"></script>

    <style>
    .pass{
            position: relative;
        }
        .passIcon{
            position: absolute;
            top:10%;
            padding: 9px 8px;
            left: 90%
        }
        .em{
            position: relative;
        }
        .emIcon{
            position: absolute;
            top:10%;
            padding: 9px 8px;
            left: 90%
        }
         label.error {
            margin-left:5%;
            margin-top:3px;
            color: white;
            font-size: 18px;
        }
        </style>
</head>
<body>

    <nav class="navbar bg-warning navbar-light  navbar-expand-md fixed-top" style="opacity:0.7; font-size:18px;">
        <a href="index.php" class="navbar-brand"><img src="images/icon.png" alt="logo" class="img-fluid mr-3" width="45" height="45" /><span class="h4">BTT</span></a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navScrollspy">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.php" class="nav-link"><i class="fas fa-users mr-2"></i>About Us</a>
                </li>
                <li class="nav-item">
                    <a href="tourPlans.php" class="nav-link"><i class="fas fa-suitcase mr-2"></i>Tour plans</a>
                </li>
            </ul>
        </div>
    </nav>

            <div id="bg">
                <div class="offset-4">
                    <form id="loginForm" name="loginForm">
                        <div class="card" style="width: 22rem; margin-top:-15px;background:none !important; border:none;">
                            <div class="card-body text-center">
                                <img class="card-img-top mb-3" src="images/icon.png" style="width:90px !important; margin-top:150px !important;" height="80" alt="Card image cap">
                                <h3 class="card-title text-uppercase text-warning">Login</h3>
                            </div>
                            <ul class="list-group list-group-flush" style="margin-top:-20px;">
                                <li class="list-group-item bg-info" style="background:none !important;">
                                    <div class="em">
                                        <input type="email" placeholder="you@example.com" class="form-control mb-2" id="emailLog" name="emailLog" required data-msg-required="Please enter your email!!!" data-msg-email="Please enter validate email!!!">
                                        <i class="far fa-envelope-open emIcon"></i>
                                    </div>
                                </li>
                                <li class="list-group-item bg-info" style="background:none !important;">
                                    <div class="pass">
                                        <input type="password" placeholder="Password..." class="form-control" name="passLog" id="passLog" required data-msg="Please enter your password!!!">
                                        <i class="far fa-eye passIcon" id="passIcon"></i>
                                    </div>
                                </li>
                            </ul>
                            <div class="row no-gutters">

                                <div class="col-7">
                                    <a href="register.php" class="badge ml-3 text-warning" style="text-decoration:none;"><span style="font-size:13px;">No account?</span></a>
                                </div>
                                <div class="col-5">
                                    <a href="forgotPass.php" class="badge text-warning" style="text-decoration:none;"><span style="font-size:13px;">Forgot password?</span></a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-warning text-white" id="logButton" name="logButton">Login<i class="fas fa-sign-in-alt ml-2"></i></button>
                            </div>
                        </div>
                        <div class="alert mt-3 ml-3" id="alertLog" style="width:350px;"></div>
                    </form>
                </div>
                <div class="text-center text-warning" style="margin-left:-100px;">
                    <p style="font-size:20px;">Copyright &copy; 2018 Abdurahman Almonajed</p>
                  
                </div>
            </div>
            
            <script>

                $('#logButton').prop('disabled', true);
    $('#logButton').css('cursor', 'not-allowed');

    jQuery(document).ready(function ($) {
        console.log('juhu')
        $('#loginForm').validate();

        function checkForm(currentInput) {
            if (currentInput.valid() == true) {
                if ($('#loginForm').validate().checkForm()) {
                    $('#logButton').prop('disabled', false);
                    $('#logButton').css('cursor', '');
                } else {
                    $('#logButton').prop('disabled', true);
                    $('#logButton').css('cursor', 'not-allowed');
                }
            } else {
                $('#logButton').prop('disabled', true);
                $('#logButton').css('cursor', 'not-allowed');
            }
        }
        $('#loginForm input').on('blur change keyup', function (e) {
            checkForm($(this));
            if(e.keyCode == 13){
                $('#logButton').trigger('click');
            }
        });


    })
            </script>

            <script src="loginRegister/login.js"></script>


</body>
</html>
