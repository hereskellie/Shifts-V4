<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Shifts</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="softwareproject.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
  <script type="text/javascript" src="chatjava.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <div id='cssmenu'>
<ul>
   <li><a href='roster0702.php'><span>Rosters</span></a></li>
   <li><a href='dayoff.php'><span>Request Time Off</span></a></li>
   <li><a href='shiftchange.php'><span>Request Shift Change</span></a></li>
   <li class='active'><a href='chat2.php'><span>Chat</span></a></li>
</ul>
</div>
  </head>

  <body background="dark.jpg">

<center><img src="company.png" width="750" height="100"></center>

 <center>
  <h1><font color="white">Message Members of Staff</font></h1>

  <div id="chatwindow">
  <label for="nameInput"><font color="white">Name:</font></label>
    <input type='text' id='nameInput' placeholder='enter your name'>
 <div id="messagewindow">
  <ul id='example-messages' class="example-chat-messages"></ul>
 </div>
 <label><font color="white">Message:</font></label>
 <input type='text' id='messageInput'  placeholder='Type a message...'></div>
</center>




  </div>
      


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>