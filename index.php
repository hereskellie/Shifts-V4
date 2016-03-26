<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../favicon.ico" rel="icon">
    <script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
    <script type="text/javascript" src="userauth.js"></script>
    <title>Shifts</title><!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="softwareproject.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="dark.jpg">
   
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <table border="0" cellpadding="20px">
            <tr>
                <td>
                    <center>
                        <img height="375" src="logo10.png" width="375">
                    </center>
                </td>
                <td>
                   <div>
      <form action="" id="finallogin">
        <header>
          <h2><font color="white">Shifts Rostering System</font></h2>
        </header>
        <div>
          <label class="labelStyle" id="logintitle1" for="loginField1"><font color="white">Login Email:</font></label>
          <div>
            <input id="finalloginInput" name="loginField1" type="text" value="" tabindex="1" placeholder="enter email address">
          </div>
        </div><!--end of login field-->
        <div>
          <label class="labelStyle" id="logintitle2" for="loginField2"><font color="white">Password:</font></label>
          <div>
            <input id="finalpwField" name="loginField2" type="password" value="" tabindex="2" placeholder="enter password">
          </div>
        </div><!--end of password-->
        <br />
        <div>
        
          <input id="finalloginForm" name="registerForm" type="submit" value="Login" class="rosterclicks">
        </div><!--end of submit-->
      </form>
    </div>


                    <!-- <form class="form-signin">
                        <center>
                            <h2 class="form-signin-heading">The OnlineRoster</h2>
                        </center>
                        <label class="sr-only" for="inputEmail"></label>
                        <input autofocus="" class="form-control" id="inputEmail" placeholder="Email address" required="" type="email">
                        <label class="sr-only" for="inputPassword"></label>
                        <input class="form-control" id="inputPassword" placeholder="Password" required="" type="password">
                        <div class="checkbox">
                            <label><input type="checkbox" value="remember-me">Remember me</label>
                        </div>
                    </form> -->
                    <center>
                        <table border="0">
                            <tr>
                                <td>
                                    <!-- <form action="roster3101.php">
                                        <input class="rosterclicks" type=
                                        "submit" value="Login">
                                    </form> -->
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
        </table>
    </center>

</body>
</html>
