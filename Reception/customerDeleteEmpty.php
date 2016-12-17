<?php
error_reporting(0);
session_start();
    if (!$_SESSION["LoggedIn"]) {
    header("Location:../logIn/loginExpired.html");
    exit();    
    }else{
        $username_i=$_SESSION["username_i"];
    }   
?>
<html>
<head>

  <title>Customer Details form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <link type="text/css" rel="stylesheet" href="../css/style.css">


</head>

<body>
    <div class="top-customerform z-depth-1">

      <p style="text-align:left; color:white; font-size: 40px; font-style:normal ; vertical-align: auto; padding-left: 10px; margin:0;">Customer Details </p>
      <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">form</p>  
    </div>  
    <div class="container">
        <div  class="row display-animation">
            <div id="content" class=" col m12 s12 card vdivide  white" style="background-color: white;margin:auto;height:auto; ">
                <br>
                <br>
                <!-- submit PassportID -->
                <div class="row" style="padding-left: 60px">
                    <form class="col s12 m12" action="customerDelete.php" method="post">
                        <div class="row" >
                            <div class="input-field col s6 m6">
                                <input placeholder="ID" id="passportID" type="text" class="validate" name="passportID">
                                <label for="passportID">PassportID</label>
                            </div>
                        <div class="col s6 m6 center" style="padding-top: 5px">
                            <button class="btn waves-effect waves-light " type="submit"><i class="mdi-action-account-circle"></i>     View</button>
                        </div>
                        </div>
                    </form>
                </div>
                
                <!-- Show Customer Details-->
                <div>
                    <h3>Details</h3>
                    <br>
                    <table class='striped'>
                       
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Passport/ID Number</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Room number</td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                      </table>
                    <br>
                   
                   
                   
                </div>

            </div>
        </div>
    </div>
    <!-- home button -->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red" href="homeReception.php">
            <i class="extar-large material-icons">home</i>
        </a>

    </div>
    <!-- home button -->














<!-- jQuery is required by Materialize to function -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>

<script type="text/javascript">
  //custom JS code

</script>

</body>
</html>