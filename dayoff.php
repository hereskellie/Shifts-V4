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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <div id='cssmenu'>
<ul>
   <li><a href='roster0702.php'><span>Rosters</span></a></li>
   <li class='active'><a href='dayoff.php'><span>Request Time Off</span></a></li>
   <li><a href='shiftchange.php'><span>Request Shift Change</span></a></li>
   <li><a href='chat2.php'><span>Chat</span></a></li>
</ul>
</div>
  </head>

  <body background="dark.jpg">
  <div>
    <label for="requestnameInput"><font color="white">Name:</font></label>
    <input type='text' id='requestnameInput' placeholder='enter your name'>
    <label for="requesttypeInput"><font color="white">Type of Request:</font></label>
    <input type='text' id='requesttypeInput' placeholder='enter type of request'>
    <label><font color="white">Details:</font></label>
    <input type='text' id='requestInput'  placeholder='Added details'></div>
  </div>

<center><img src="company.png" width="750" height="100"></center>
      <center>
      <div class="shiftchange">
      <br/><font color="">
      <h2 class="form-signin-heading"><center>Day Off Request</center></h2>
      <label for="requestnameInput"><font color="white">Name:</font></label>
      <input type='text' id='requestnameInput' placeholder='enter your name'>
      <label for="requesttypeInput"><font color="white">Type of Request:</font></label>
      <input type='text' id='requesttypeInput' placeholder='enter type of request'>
      <label><font color="white">Details:</font></label>
      <input type='text' id='requestInput'  placeholder='Added details'></div>
      <textarea rows="4" cols="45"></textarea>

<table border="0">
<tr>
<td><form action="roster3101.php">
<input type="submit" class="rosterclicks" value="Submit">
</form></td>
<td>
&nbsp
</td>
<td><form action="roster3101.php">
<input type="submit" class="rosterclicks" value="Back">
</form></td>
</tr>
</table>
</center>
 
 <script>
  // CREATE A REFERENCE TO FIREBASE
  var ref = new Firebase('https://shiftsapp.firebaseio.com/');
  var requestRef = ref.child("requests");

  // REGISTER DOM ELEMENTS
  var requestField = $('#requestInput');
  var requesttypeField = $('#requesttypeInput')
  var requestnameField = $('#requestnameInput');
  var requestList = $('#request_output');

  // LISTEN FOR KEYPRESS EVENT
  requestField.keypress(function (e) {
    if (e.keyCode == 13) {
      //FIELD VALUES
      var username = requestnameField.val();
      var message = requestField.val();
      var type = requesttypeField.val();

      //SAVE DATA TO FIREBASE AND EMPTY FIELD
      requestRef.push({name:username, type:type, text:message});
      requestField.val('');
    }
  });

  // Add a callback that is triggered for each chat message.
  requestRef.limitToLast(100).on('child_added', function (snapshot) {
    //GET DATA
    var data = snapshot.val();
    var username = data.name || "anonymous";
    var message = data.text;
    var type = data.type;

    //CREATE ELEMENTS MESSAGE & SANITIZE TEXT
    var requestElement = $("<li>");
    var requestnameElement = $("<strong class='example-chat-username'></strong>")
    requestnameElement.text(username);
    requestElement.text(message).prepend(requestnameElement);

    //ADD MESSAGE
    requestList.append(requestElement)

    //SCROLL TO BOTTOM OF MESSAGE LIST
    requestList[0].scrollTop = requestList[0].scrollHeight;
  });
</script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>