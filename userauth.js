$(function(){
  
  // empty array - square brace for array the reason for variable "DATA" we gonna ask firebase to let us know if it is any extra information or changes
  var data=[];
  console.log("page is ready");
  
  /////////FIREBASE !!!!!!!!!!
  
  ////CREATE FIREBASE CONNECTION
  var ref = new Firebase('https://shiftsapp.firebaseio.com/activities');
  /// listen the data from our firebase "function(snapshot)" here our call back function, snapshot is incapsulation of our data
  ref.on("value",function(snapshot){
    // we get all info thanks to val from snapshot
    console.log( snapshot.val() );
    
    
    data=snapshot.val();
    
  })
  
  
  //////////////////// registration stuff/////////////////////
  $('#login').submit(function(event){ 
  
    /// disable register button
        var $form = $(this);
    
    // disable Submit button
    // prop = properties of a form and one of the properties is disable
    
    $form.find("#registerForm").prop('disabled', true);
    var email = $form.find("#loginInput").val();
    var pw = $form.find("#pwField").val();
    register(email,pw);
    return false;
  });// end of register submit
  
  
  
  $('#finallogin').submit(function(event) {
    
    var $form = $(this);
    $form.find('#finalloginForm').prop('disabled', true);
    
    ////get the values for login and pasword textboxes
    var loginEmail = $('#finalloginInput').val();
    var pw = $('#finalpwField').val();
    
    console.log(loginEmail, pw);
    
    login(loginEmail,pw);
    
    return false;
                       
  });
  
  //// logout cick handler button
  $('#logout').click(function(event){
    
    console.log("going to logout!");
    logout();
  })
  
  
  //////////log out from firebase registry////////
  function logout(){
     var reg = new Firebase ("https://shiftsapp.firebaseio.com");
    
    reg.unauth();
  }
  function login(email, password) {
    console.log("Registering with"+email+"  "+password);
    var reg = new Firebase ("https://shiftsapp.firebaseio.com");
    
    reg.authWithPassword({
      email: email,
      password: password
    }, function(error, user){
      if(error){
        console.log(error);
        if(error.code == "INVALID_USER"){
					alert("Not a valid login")
        }
        if(error.code == "INVALID_PASSWORD"){
          alert("Not a valid password");
        }
        alert(error.message);
        
      }else{
        alert("Logged in with "+user.uid);
        window.location.href = "roster2401.php";
      }
    })
    
  }
  
  
  
  
  ////// register a new user in the firebase///////////////
  
  function register(email, password){
    console.log("In da club");
  //  console.log(email,password);
    var reg = new Firebase ("https://shiftsapp.firebaseio.com");
    reg.createUser ({
      email: email,
      password: password
      
    }, function(error, userData) {
      if (error) {
        if(error.code)
        alert ("some kind error");
      } else {
      alert ("you registered"+ userData.uid);  
      }
    })
    
    
  }
  
  /////// Detect the authication state
  var reg = new Firebase("https://shiftsapp.firebaseio.com");
  reg.onAuth(function(authData){
     console.log("info on authentication");
    if(authData){
      // you are logged in
      console.log("you are logged in"); 
      $('#left').css('margin-left', '0px');
    }else {
      //you are not logged in
       console.log("you are not logged in"); 
       $('#left').css('margin-left', '-500px');
    }
  })
 
  
  
  
  })